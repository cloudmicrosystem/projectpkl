<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckTableController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $checkdb = DB::select('SHOW TABLES');
        // json_decode(json_encode($checkdb));
        echo "<pre>"; print_r($checkdb); die;
    }

    public function checkArsip()
    {
        $checkArsip = DB::select('SELECT * FROM arsip');

        echo "<pre>"; print_r($checkArsip); die;
    }
}
