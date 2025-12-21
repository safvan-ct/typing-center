<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultantRequest;
use App\Models\SubCategory;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooking  = ConsultantRequest::count();
        $newBooking    = ConsultantRequest::where('status', 1)->count();
        $servicesCount = SubCategory::where('is_govt_sector', 0)->count();
        $govtServices  = SubCategory::where('is_govt_sector', 1)->count();

        return view('admin.dashboard', [
            'totalBooking'  => $totalBooking,
            'newBooking'    => $newBooking,
            'servicesCount' => $servicesCount,
            'govtServices'  => $govtServices,
        ]);
    }
}
