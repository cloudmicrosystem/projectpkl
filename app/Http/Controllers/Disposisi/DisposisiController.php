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
        $disposisi = DB::select('SELECT id,no_surat,asal_surat,status,
        (SELECT nama_arsip FROM arsip WHERE id = disposisi.id_arsip)AS nama_surat ,
        (SELECT nama_jabatan FROM jabatan WHERE id=disposisi.diteruskan) AS diteruskan,
        created_at
        FROM disposisi ORDER BY created_at DESC;');
        // echo "<pre>"; print_r($disposisi); die;
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
        $disposisi=DB::select('SELECT (SELECT nama_arsip FROM arsip WHERE id=a.id_arsip)AS nama_surat,a.no_surat,a.asal_surat,a.diteruskan,a.status FROM disposisi AS a ');
        $arsip= DB::select('SELECT * from arsip ORDER BY nama_arsip ASC');
        $jabatan=DB::select('SELECT id,nama_jabatan FROM jabatan');
        // echo "<pre>";print_r($disposisi);die;
        return view('content.disposisi.disposisiCreate')->with(compact('jabatan','arsip','disposisi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dokumenDisposisi = $request->dokumenDisposisi;
        $noSurat = $request->noSurat;
        $pengaju = $request->pengaju;
        $ditujukan = $request->ditujukan;
        $status = '0';

        DB::insert("CALL sp_disposisi(' ','$dokumenDisposisi','$noSurat','$pengaju','$ditujukan','$status','post');");
        // echo "<pre>"; print_r($request); die;


        return redirect()->route('disposisi.index')->with('success', 'Disposisi Berhasil Ditambah!');
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
        $disposisi = DB::select('SELECT (SELECT nama_arsip FROM arsip WHERE id=a.id_arsip)AS nama_surat,a.id,a.no_surat,a.asal_surat,a.diteruskan,a.status FROM disposisi AS a WHERE id = ?', [$id]);
        $arsip= DB::select('SELECT * FROM arsip');
        $jabatan =DB::select('SELECT * FROM jabatan');
        //echo "<pre>"; print_r($disposisi);die;
        return view('content.disposisi.disposisiEdit')->with(compact('disposisi','arsip','jabatan'));
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
        $diteruskan = $request->jabatanId;
        $status =$request->status;


        DB::update("CALL sp_disposisi($id,'$arsipId','$noSurat','$asalSurat','$diteruskan','$status','');");
        // echo "<pre>"; print_r($request);die;
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
    public function penerima()
    {

    }
}
