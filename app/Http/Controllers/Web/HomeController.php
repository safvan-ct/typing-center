<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;

class HomeController extends Controller
{
    public function index()
    {
        $services = SubCategory::select('id', 'name', 'slug', 'description', 'image')->where('is_home', true)->get();
        return view('web.index', compact('services'));
    }

    public function about()
    {
        return view('web.about');
    }
}
