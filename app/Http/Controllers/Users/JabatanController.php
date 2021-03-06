<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\JabatanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Untuk menampilkan index
        $jabatan = DB::select('SELECT * from jabatan ORDER BY created_at DESC');
        // echo "<pre>"; print_r($jabatan); die;

        return view('content.jabatan.jabatanView')->with(compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Untuk redirect ke halaman create

        return view('content.jabatan.jabatanCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JabatanRequest $request)
    {
        // Ini function buat insert data
        $namaJabatan = $request->namaJabatan;
        DB::insert('INSERT INTO jabatan(nama_jabatan) VALUES(?)', [$namaJabatan]);
        DB::insert("CALL sp_jabatan('','$namaJabatan','post');");

        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil Ditambah!');
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
        $jabatan = DB::select('SELECT * FROM jabatan WHERE id = ?', [$id]);

        return view()->with(compact('jabatan'));
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
        $jabatan = DB::select('SELECT * FROM jabatan WHERE id = ?', [$id]);
        // echo "<pre>"; print_r($jabatan); die;

        //return view('formTest')->with(compact('jabatan'));
        return view('content.jabatan.jabatanEdit')->with(compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JabatanRequest $request, $id)
    {
        // Ini function buat updatenya
        $namaJabatan = $request->namaJabatan;
        // DB::update('UPDATE jabatan SET nama_jabatan = ? WHERE id = ?', [$namaJabatan, $id]);
        DB::update("CALL sp_jabatan('$id','$namaJabatan','');");

        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil Diubah!');
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
        DB::delete('DELETE FROM jabatan WHERE id = ?', [$id]);
        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil Dihapus!');
    }
}
