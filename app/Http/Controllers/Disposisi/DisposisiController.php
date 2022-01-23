<?php

namespace App\Http\Controllers\Disposisi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $disposisi = DB::select('SELECT id, no_surat, asal_surat, diteruskan,(SELECT nama FROM users WHERE id = disposisi.asal_surat) AS pengaju,status,
        (SELECT nama_arsip FROM arsip WHERE id = disposisi.id_arsip)AS nama_surat ,
        (SELECT nama_jabatan FROM jabatan WHERE id=disposisi.diteruskan) AS ditujukan,
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
        if (Auth::user()->level != 'admin') {
            $arsip = DB::select("SELECT Count(id) AS jumlah FROM arsip WHERE id_user = ?", [Auth::user()->id]);
            // dd($arsip);
            if ($arsip['0']->jumlah != 0) {
                // Untuk redirect ke halaman create
                $arsip = DB::select('SELECT * from arsip ORDER BY nama_arsip ASC');
                $jabatan = DB::select('SELECT id,nama_jabatan FROM jabatan');
                // echo "<pre>";print_r($disposisi);die;
                return view('content.disposisi.disposisiCreate')->with(compact('jabatan', 'arsip'));
            }
            return redirect()->route('disposisi.index')->with('error', 'Mohon Isi Arsip Terlebih Dahulu!');
        }
        return redirect()->route('disposisi.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->level != 'admin') {
            $dokumenDisposisi = $request->dokumenDisposisi;
            $noSurat = $request->noSurat;
            $pengaju = Auth::user()->id;
            $ditujukan = $request->ditujukan;
            $status = '0';
            /*  Status 0 = Diajukan
            Status 1 = Diterima
            Status 2 = Ditolak
        */
            // echo "<pre>"; print_r($pengaju); die;
            DB::insert("CALL sp_disposisi(' ','$dokumenDisposisi','$noSurat','$pengaju','$ditujukan','$status','post');");
            // echo "<pre>"; print_r($request); die;

            return redirect()->route('disposisi.index')->with('success', 'Disposisi Berhasil Ditambah!');
        }
        return redirect()->route('disposisi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::select("SELECT (SELECT file_arsip FROM arsip WHERE id = a.id_arsip) AS arsip FROM disposisi AS a WHERE id = ?", [$id]);
        // $path = 'storage/arsip/'.$data[0]->arsip;
        // dd($data); die;
        // echo "<pre>"; print_r($path); die;
        // return response()->file($path);
        return view('content.disposisi.penerimaView')->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->level != 'admin') {
            $disposisi = DB::select('SELECT (SELECT nama_arsip FROM arsip WHERE id=a.id_arsip)AS nama_surat,a.id,a.no_surat,a.asal_surat,a.diteruskan,a.status FROM disposisi AS a WHERE id = ?', [$id]);
            $arsip = DB::select('SELECT * FROM arsip');
            $jabatan = DB::select('SELECT * FROM jabatan');
            //echo "<pre>"; print_r($disposisi);die;
            return view('content.disposisi.disposisiEdit')->with(compact('disposisi', 'arsip', 'jabatan'));
        }
        return redirect()->route('disposisi.index');
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
        if (Auth::user()->level != 'admin') {
            // Ini function buat updatenya
            $data = DB::select("SELECT * FROM disposisi WHERE id = ?", [$id]);
            $arsipId = $data['0']->id_arsip;
            $noSurat = $data['0']->no_surat;
            $asalSurat = $data['0']->asal_surat;
            $diteruskan = $data['0']->diteruskan;
            $status = 0;

            DB::update("CALL sp_disposisi($id,'$arsipId','$noSurat','$asalSurat','$diteruskan','$status','');");
            // echo "<pre>"; print_r($request);die;
            return redirect()->route('disposisi.index')->with('success', 'Disposisi Berhasil Diubah!');
        }
        return redirect()->route('disposisi.index');
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
        // Untuk menampilkan index
        $disposisi = DB::select('SELECT id, no_surat, asal_surat, diteruskan,(SELECT nama FROM users WHERE id = disposisi.asal_surat) AS pengaju,status,
        (SELECT nama_arsip FROM arsip WHERE id = disposisi.id_arsip)AS nama_surat ,
        (SELECT nama_jabatan FROM jabatan WHERE id=disposisi.diteruskan) AS ditujukan,
        created_at
        FROM disposisi ORDER BY created_at DESC;');
        // echo "<pre>"; print_r($disposisi); die;
        // dd($disposisi); die;
        return view('content.disposisi.penerimaView')->with(compact('disposisi'));
    }

    public function updateStatus($id, $status)
    {
        if (Auth::user()->level != 'admin') {
            $data = DB::select("SELECT * FROM disposisi WHERE id = ?", [$id]);
            $arsipId = $data['0']->id_arsip;
            $noSurat = $data['0']->no_surat;
            $asalSurat = $data['0']->asal_surat;
            $diteruskan = $data['0']->diteruskan;
            DB::update("CALL sp_disposisi($id,'$arsipId','$noSurat','$asalSurat','$diteruskan','$status','');");
            return redirect()->route('disposisi.index');
        }
        return redirect()->route('disposisi.index');
    }
}
