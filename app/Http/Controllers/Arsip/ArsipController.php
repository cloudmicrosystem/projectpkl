<?php

namespace App\Http\Controllers\Arsip;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArsipRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        // $arsip = DB::select('SELECT * from arsip');
        $arsip = DB::select('SELECT a.id, a.id_user, (
            SELECT nama_kategori FROM kategori WHERE id=a.id_kategori) AS nama_kategori,
            a.no_arsip, a.nama_arsip, a.deskripsi, a.file_arsip,
            (SELECT nama FROM users WHERE id=a.id_user) AS nama_user
            FROM arsip AS a');
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
        $kategori = DB::select('SELECT id, nama_kategori FROM kategori');
        // echo "<pre>"; print_r($kategori); die;
        // return view('formTest')->with(compact('arsip'));
        return view('content.arsip.arsipCreate')->with(compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArsipRequest $request)
    {
        // Ini function buat insert data
        $kategoriId = $request->kategoriId;
        $userId = Auth::user()->id;
        $noArsip = $request->noArsip;
        $namaArsip = $request->namaArsip;
        $deskripsi = $request->deskripsi;

        if($request->file('fileArsip')) {
            $file = $request->file('fileArsip');
            $fileArsip = time().'_'.$file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();
            // echo $fileArsip; die;

            // File upload location
            $location = 'storage/arsip';

            // Upload file
            $file->move($location,$fileArsip);
            // die;
        }else{
            $fileArsip = null;
        }

        DB::insert("CALL sp_arsip('','$kategoriId','$noArsip','$namaArsip','$deskripsi','$fileArsip','$userId','post');");

        return redirect()->route('arsip.index')->with('success', 'Arsip Berhasil Ditambah!');
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
        $arsip = DB::select('SELECT a.id, a.id_kategori, (
            SELECT nama_kategori FROM kategori WHERE id=a.id_kategori) AS nama_kategori,
            a.no_arsip, a.nama_arsip, a.deskripsi,
            (SELECT nama FROM users WHERE id=a.id_user) AS nama_user
            FROM arsip AS a WHERE id = ?', [$id]);
        // echo "<pre>"; print_r($arsip); die;
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
    public function update(ArsipRequest $request, $id)
    {
        // Ini function buat updatenya
        $data = DB::select("SELECT file_arsip FROM arsip WHERE id = ?", [$id]);
        $kategoriId = $request->kategoriId;
        $userId = Auth::user()->id;
        $noArsip = $request->noArsip;
        $namaArsip = $request->namaArsip;
        $deskripsi = $request->deskripsi;
        $fileArsip = $data['0']->file_arsip;

        if($request->file('fileArsip') != $data['0']->file_arsip){
            Storage::delete($data['0']->file_arsip);
            // unlink(storage_path('storage/arsip/'.$data['0']->file_arsip));
            if($request->file('fileArsip')) {
                $file = $request->file('fileArsip');
                $fileArsip = time().'_'.$file->getClientOriginalName();

                // File upload location
                $location = 'storage/arsip';

                // Upload file
                $file->move($location,$fileArsip);
                // die;
            }
        }

        DB::update("CALL sp_arsip($id,'$kategoriId','$noArsip','$namaArsip','$deskripsi','$fileArsip','$userId', '');");

        return redirect()->route('arsip.index')->with('success', 'Arsip Berhasil Diubah!');

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
        $deleteArsip = DB::delete('DELETE FROM arsip WHERE id = ?', [$id]);
        if ($deleteArsip) {
            return redirect()->route('arsip.index')->with('success', 'Arsip Berhasil Dihapus!');
        } else {
            return redirect()->route('arsip.index')->with('error', 'Arsip Gagal Dihapus!');
        }

    }
}
