<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Jobs\SendBookingAdminMail;
use App\Models\ConsultantRequest;
use App\Models\Partner;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = SubCategory::select('id', 'name', 'slug', 'short_desc', 'image')->where('key_service', true)->get();
        $partners = Partner::select('id', 'name', 'image')->where('is_active', true)->get()->chunk(6);

        return view('web.index', compact('services', 'partners'));
    }

    public function about()
    {
        $partners = Partner::select('id', 'name', 'image')->where('is_active', true)->get()->chunk(6);

        return view('web.about', compact('partners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string',
            'message'     => 'required|string',
            'opened_from' => 'nullable|string',
        ]);

        $booking = ConsultantRequest::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'phone'       => preg_replace('/\D+/', '', $request->phone),
            'message'     => $request->message,
            'opened_from' => $request->opened_from,
            'ip_address'  => $request->ip(),
            'user_agent'  => $request->userAgent(),
        ]);

        SendBookingAdminMail::dispatch($booking->toArray())->delay(now()->addSeconds(5));

        return back()->with('success', 'Thank you! Our consultant will contact you shortly.');
    }
}
