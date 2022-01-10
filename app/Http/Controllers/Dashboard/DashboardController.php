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

    public function index()
    {
        $totalDataArsip = DB::select('SELECT COUNT(id) AS total FROM arsip');
        // $totalDataArsip = (array) $totalDataArsip;
        // echo "<pre>"; print_r($totalDataArsip); die;
        // echo Auth::user();

        $dpValue = $this->arsipChart();
        $time = Carbon::now();
        // echo $time->format('n'); die;

        return view('content.dashboard.index')->with(compact('totalDataArsip', 'dpValue', 'time'));
    }

    public function arsipChart()
    {
        $yearNow = Carbon::now()->year;
        $dpValue = DB::select(
            "SELECT
                IF(a.bulan LIKE '12', '12',
                IF(a.bulan LIKE '2', '2',
                IF(a.bulan LIKE '3', '3',
                IF(a.bulan LIKE '4', '4',
                IF(a.bulan LIKE '5', '5',
                IF(a.bulan LIKE '6', '6',
                IF(a.bulan LIKE '7', '7',
                IF(a.bulan LIKE '8', '8',
                IF(a.bulan LIKE '9', '9',
                IF(a.bulan LIKE '10', '10',
                IF(a.bulan LIKE '11', '11','1'
                ))))))))))) AS bulan,
            (SELECT COUNT(created_at) AS jumlah FROM arsip WHERE MONTH(created_at) = MONTH(a.created_at)) AS jumlah
            FROM (
                SELECT
                created_at,
                GROUP_CONCAT(MONTH(created_at)) AS bulan
                FROM arsip
                GROUP BY MONTH(created_at)
            ) AS a
            WHERE YEAR(created_at) = '$yearNow'");

        // echo "<pre>"; print_r($dpValue);
        // die;
        return $dpValue;
    }
}
