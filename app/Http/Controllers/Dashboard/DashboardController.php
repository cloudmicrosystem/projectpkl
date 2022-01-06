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

        return view('content.dashboard.index')->with(compact('totalDataArsip', 'dpValue'));
    }

    public function arsipChart()
    {
        $yearNow = Carbon::now()->year;
        $dpValue = DB::select(
            "SELECT
                IF(a.bulan RLIKE '12', 'DESEMBER',
                IF(a.bulan RLIKE '2', 'FEBRUARY',
                IF(a.bulan RLIKE '3', 'MARET',
                IF(a.bulan RLIKE '4', 'APRIL',
                IF(a.bulan RLIKE '5', 'MEI',
                IF(a.bulan RLIKE '6', 'JUNI',
                IF(a.bulan RLIKE '7', 'JULI',
                IF(a.bulan RLIKE '8', 'AGUSTUS',
                IF(a.bulan RLIKE '9', 'SEPTEMBER',
                IF(a.bulan RLIKE '10', 'OKTOBER',
                IF(a.bulan RLIKE '11', 'NOVEMBER','JANUARI'
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
