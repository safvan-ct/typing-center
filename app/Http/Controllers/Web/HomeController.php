<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function about()
    {
        return view('web.about');
    }

    public function services()
    {
        return view('web.service-list');
    }

    public function service($slug)
    {
        return view('web.service-details');
    }
}
