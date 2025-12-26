<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CenterService;

class ServiceController extends Controller
{
    public function index()
    {
        $services = CenterService::select('id', 'name', 'slug')
            ->with([
                'subCategories' => fn($q) =>
                $q->select('id', 'category_id', 'name', 'slug', 'short_desc', 'image')
                    ->where('is_active', true)
                    ->orderBy('sort_order'),
            ])
            ->where('is_menu', true)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('web.service-list', compact('services'));
    }

    public function show($slug)
    {
        $service = CenterService::select('id', 'menu_id', 'government_center_id', 'name', 'slug', 'tagline', 'notes', 'ad_image')
            ->with([
                'menu'                     => fn($q)                     => $q->select('id', 'name', 'slug')->where('is_active', true),
                'documentGroups.documents' => fn($q) => $q->where('is_active', true),
                'documents'                => fn($q)                => $q->where('is_active', true),
            ])
            ->where('slug', $slug)
            ->first();

        if (! $service) {
            abort(404);
        }

        $relatedServices = CenterService::select('id', 'name', 'slug')
            ->where('menu_id', $service->menu_id)
            ->where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('web.service-details', compact('service', 'relatedServices'));
    }
}
