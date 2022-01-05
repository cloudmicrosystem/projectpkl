<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Arsip;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __invoke()
    {

    }

    public function index()
    {
        $totalDataArsip = DB::select('SELECT COUNT(id) AS total FROM arsip');
        // $totalDataArsip = (array) $totalDataArsip;
        // echo "<pre>"; print_r($totalDataArsip); die;
        // echo Auth::user();

        return view('content.dashboard.index')->with(compact('totalDataArsip'));
    }

    public function arsipChart()
    {
        $i = 1;
        while ($i <= 12) {
            $date[] = Carbon::create(Carbon::now()->year, $i, null)->toDateTimeString();
            $time = $i.'-'.Carbon::now()->year;
            echo $time;
            // $date[] = Carbon::createFromFormat('M-Y', $time, null)->toDayDateTimeString();
            // echo "<pre>"; print_r($date);
            echo $date[$i-1]."<br>";
            $i++;
        }

        die;
        echo $current_month_arsip = Arsip::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        return view('content.dashboard.index')->with(compact(with('')));
    }
}
