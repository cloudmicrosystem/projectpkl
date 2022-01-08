<?php

namespace App\Http\Controllers\Disposisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Untuk menampilkan index
        $disposisi = DB::select('SELECT * from disposisi ORDER BY created_at DESC');
        // echo "<pre>"; print_r($kategori); die;
        return view('content.disposisi.disposisiView')->with(compact('disposisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Untuk redirect ke halaman create
        $arsip= DB::select('SELECT * from arsip ORDER BY nama_arsip ASC');
        return view('content.disposisi.disposisiCreate')->with(compact('arsip'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arsipId = $request->arsipId;
        $noSurat = $request->noSurat;
        $asalSurat = $request->asalSurat;
        $ditujukan = $request->ditujukan;

        DB::insert("CALL sp_disposisi('','$arsipId','$noSurat','$asalSurat','$ditujukan','post');");

        //echo "<pre>"; print_r($request); die;


        return redirect()->route('disposisi.index')->with('success', 'User Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disposisi = DB::select('SELECT * FROM arsip WHERE id = ?',[$id]);

        return view('content.disposisi.disposisiEdit')->with(compact('disposisi'));
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
        $arsipId = $request->arsipId;
        $noSurat = $request->noSurat;
        $asalSurat = $request->asalSurat;
        $ditujukan = $request->ditujukan;

        DB::update("CALL sp_disposisi($id,'$arsipId','$noSurat','$asalSurat','$ditujukan','');");

        return redirect()->route('disposisi.index')->with('success','Disposisi Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteDisposisi = DB::delete('DELETE FROM disposisi WHERE id = ?', [$id]);
        if ($deleteDisposisi) {
            return redirect()->route('disposisi.index')->with('success', 'Disposisi Berhasil Dihapus!');
        } else {
            return redirect()->route('disposisi.index')->with('error', 'Disposisi Gagal Dihapus!');
        }

    }

    public function search(Request $req)
    {
        # code...
    }
}
