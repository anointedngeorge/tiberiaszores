<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\MEvents;
use App\Models\Partnership;
use App\Models\Volunteers;
use Carbon\Carbon;
use Date;
use Illuminate\Http\Request;





class DashboardController extends Controller
{

    public function index()
{
    // Format current date to match 'd-m-Y' format
    $currentDate = Carbon::now()->format('d-m-Y');
    $context = [];

    $context['page_title'] = "Admin";
    $context['count'] = (object) [
        'volunteers' => Volunteers::count(),
        'blogs' => Blogs::count(),
        'events' => MEvents::count(),
        'partners' => Partnership::count()
    ];
    return view("dashboards.admin1.index", $context);
}

}
