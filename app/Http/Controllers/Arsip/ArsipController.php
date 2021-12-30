<?php

namespace App\Http\Controllers\Arsip;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Untuk menampilkan index
        $arsip = DB::select('SELECT * from arsip ORDER BY created_at DESC');
        // echo "<pre>"; print_r($arsip); die;

        return view('content.arsip.arsipView')->with(compact('arsip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Untuk redirect ke halaman create
        $arsip = DB::select('SELECT id, nama_kategori FROM kategori');
        // echo "<pre>"; print_r($kategori); die;
        return view('formTest')->with(compact('arsip'));
        // return view('content.arsip.arsipCreate')->with(compact('arsip', 'kategori'));
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
        $kategoriId = $request->kategoriId;
        $userId = 0;
        $noArsip = $request->noArsip;
        $namaArsip = $request->namaArsip;
        $deskripsi = $request->deskripsi;
        $fileArsip = null;

        $insertArsip = DB::insert("CALL sp_arsip('','$kategoriId','$noArsip','$namaArsip','$deskripsi','$fileArsip','$userId','post');");

        if ($insertArsip) {
            return redirect()->route('arsip.index')->with('message', 'Arsip berhasil ditambahkan! ');
        } else {
            echo "Arsip gagal"; die;
            return redirect()->route('arsip.index')->with('message', 'Arsip gagal ditambahkan! ');
        }
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
        $arsip = DB::select('SELECT * FROM arsip WHERE id = ?', [$id]);
        die;
        return view()->with(compact('arsip'));
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
        // $arsip = DB::select('SELECT * FROM arsip WHERE id = ?', [$id]);
        $arsip = DB::select('SELECT a.id, (
            SELECT nama_kategori FROM kategori WHERE id=a.id_kategori) AS nama_kategori,
            a.no_arsip, a.nama_arsip, a.deskripsi,
            (SELECT nama FROM users WHERE id=a.id_user) AS nama_user
            FROM arsip_backup AS a WHERE id = ?', [$id]);
        echo "<pre>"; print_r($arsip); die;
        $kategori = DB::select('SELECT id, nama_kategori FROM kategori');

        return view('content.arsip.arsipEdit')->with(compact('arsip', 'kategori'));
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
        return redirect()->route('arsip.index')->with('message', 'Arsip berhasil diubah!');
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
        $deleteArsip = DB::delete('DELETE arsip WHERE id = ?', [$id]);
        if ($deleteArsip) {
            return redirect()->route('arsip.index')->with('message', 'Arsip berhasil dihapus!');
        } else {
            return redirect()->route('arsip.index')->with('message', 'Data gagal dihapus!');
        }

    }
}
