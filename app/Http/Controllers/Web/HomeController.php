<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\SubCategory;

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
}
