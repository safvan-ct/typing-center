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
        $service = SubCategory::select('id', 'category_id', 'name', 'slug', 'description', 'image')
            ->with(['category:id,name,slug'])
            ->where('slug', $slug)
            ->first();

        return view('web.service-details', compact('service'));
    }
}
