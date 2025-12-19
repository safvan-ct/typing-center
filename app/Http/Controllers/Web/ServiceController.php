<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Category::select('id', 'name', 'slug')
            ->with([
                'subCategories' => fn($q) =>
                $q->select('id', 'category_id', 'name', 'slug', 'description', 'image')
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
        $service = SubCategory::select('id', 'category_id', 'name', 'slug', 'description', 'doc_notes', 'image')
            ->with([
                'category:id,name,slug',
                'documentCategories.documents',
                'documents',
            ])
            ->where('slug', $slug)
            ->first();

        if (! $service) {
            abort(404);
        }

        $relatedServices = SubCategory::select('id', 'name', 'slug')
            ->where('category_id', $service->category_id)
            ->where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('web.service-details', compact('service', 'relatedServices'));
    }
}
