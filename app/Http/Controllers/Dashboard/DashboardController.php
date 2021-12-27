<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $totalDataArsip = DB::select('SELECT COUNT(id) AS total FROM arsip');
        // $totalDataArsip = (array) $totalDataArsip;
        // echo "<pre>"; print_r($totalDataArsip); die;

        return view('content.dashboard.index')->with(compact('totalDataArsip'));
    }
}
