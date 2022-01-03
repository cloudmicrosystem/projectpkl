<?php

namespace App\Http\Controllers\Arsip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $arsip = DB::select('SELECT a.id, (
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
        $arsip = DB::select('SELECT * FROM arsip');
        $kategori = DB::select('SELECT id, nama_kategori FROM kategori');
        // echo "<pre>"; print_r($kategori); die;
        // return view('formTest')->with(compact('arsip'));
        return view('content.arsip.arsipCreate')->with(compact('arsip', 'kategori'));
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
        $userId = 0; //! Nanti Diupdate
        $noArsip = $request->noArsip;
        $namaArsip = $request->namaArsip;
        $deskripsi = $request->deskripsi;

        // Validation
        $request->validate([
            'fileArsip' => 'required|mimes:png,jpg,jpeg,txt,pdf|max:6144    '
        ]);

        if($request->file('fileArsip')) {
            $file = $request->file('fileArsip');
            $fileArsip = time().'_'.$file->getClientOriginalName();

            $path = 'arsip';

            // File upload location
            $location = 'storage/arsip';

            // Upload file
            $file->move($location,$fileArsip);
            // die;
        }else{
            $fileArsip = null;
        }

        DB::insert("CALL sp_arsip('','$kategoriId','$noArsip','$namaArsip','$deskripsi','$fileArsip','$userId','post');");

        return redirect()->route('arsip.index')->with('message', 'Arsip berhasil ditambahkan! ');
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
    public function update(Request $request, $id)
    {
        // Ini function buat updatenya
        $kategoriId = $request->kategoriId;
        $userId = 0; //! Diupdate. Masih Sementara iki
        $noArsip = $request->noArsip;
        $namaArsip = $request->namaArsip;
        $deskripsi = $request->deskripsi;
        $fileArsip = null;

        // Validation
        $request->validate([
            'fileArsip' => 'required|mimes:png,jpg,jpeg,txt,pdf|max:6144    '
        ]);

        if($request->file('fileArsip')) {
            $file = $request->file('fileArsip');
            $fileArsip = time().'_'.$file->getClientOriginalName();

            $path = 'arsip';

            // File upload location
            $location = 'storage/arsip';

            // Upload file
            $file->move($location,$fileArsip);
            // die;
        }else{
            $fileArsip = null;
        }

        DB::update("CALL sp_arsip($id,'$kategoriId','$noArsip','$namaArsip','$deskripsi','$fileArsip','$userId', '');");

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
        // echo "Ini id".$id;
        $deleteArsip = DB::delete('DELETE FROM arsip WHERE id = ?', [$id]);
        return redirect()->route('arsip.index')->with('message', 'Arsip berhasil dihapus!');
    }

    public function view($id)
    {
        $data = DB::select('SELECT * FROM arsip WHERE id = ?', $id);

        return view('content.arsip.viewFile')->with(compact($data));
    }

    public function download(Request $request, $file)
    {
        return response()->file('storage/arsip');
    }

    public function __invoke()
    {
        # code...
    }
}
