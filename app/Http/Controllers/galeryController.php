<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class galeryController extends Controller
{
    public function index()
    {
        // Untuk menampilkan index
        // $arsip = DB::select('SELECT * from arsip');
        $arsip = DB::select('SELECT a.id, (
            SELECT nama_kategori FROM kategori WHERE id=a.id_kategori) AS nama_kategori,
            a.no_arsip, a.nama_arsip, a.deskripsi, a.file_arsip,
            (SELECT nama FROM users WHERE id=a.id_user) AS nama_user
            FROM arsip AS a');
    //    echo "<pre>"; print_r($arsip); die;

        return view('content.galeri.viewGaleri')->with(compact('arsip'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request  $request)
    {
        // echo "<pre>"; print_r($arsip); die;
        $search = $request->search;
        $arsip = DB::select('SELECT * FROM arsip WHERE nama_arsip LIKE '%$request->search%' OR no_arsip LIKE '%$request->search%' LIMIT 0,10');
        return view('content.galeri.viewGaleri', compact('arsip'));
    }
}

