<?php

namespace App\Http\Controllers\Kategori;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Untuk menampilkan index
        $kategori = DB::select('SELECT * from kategori');
        // echo "<pre>"; print_r($kategori); die;
        return view('content.kategori.kategoriView')->with(compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Untuk redirect ke halaman create

        return view('content.kategori.kategoriCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Ini function buat insert data

        // echo "<pre>"; print_r($request->namaKategori); die;
        $namaKategori = $request->namaKategori;
        $timeNow = Carbon::now();
        DB::insert('INSERT INTO kategori(nama_kategori, created_at, updated_at) VALUES(?, ?, ?)', [$namaKategori, $timeNow, $timeNow]);


        return redirect()->route('kategori.index')->with('message', 'Kategori berhasil ditambahkan! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Untuk menampilkan data secara rinci
        $kategori = DB::select('SELECT * FROM kategori WHERE id = ?', [$id]);

        return view()->with(compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Untuk menampilkan value pada saat ingin mengedit data
        $kategori = DB::select('SELECT * FROM kategori WHERE id = ?', [$id]);
        // echo "<pre>"; print_r($kategori); die;

        return view('formTest')->with(compact('kategori'));
        // return view('content.kategori.kategoriEdit')->with(compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Ini function buat updatenya
        $namaKategori = $request->namaKategori;
        DB::update('UPDATE kategori SET nama_kategori = ? WHERE ID = ?', [$namaKategori, $id]);

        return redirect()->route('kategori.index')->with('message', 'Kategori berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Untuk menghapus data ~~
        DB::delete('DELETE kategori WHERE id = ?', [$id]);
        return redirect()->route('kategori.index')->with('message', 'Kategori berhasil dihapus!');
    }
}
