<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Untuk menampilkan index
        $user = DB::select('SELECT * from users ORDER BY created_at DESC');
        // echo "<pre>"; print_r($user); die;
        return view('content.users.userView')->with(compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Untuk redirect ke halaman create
        $jabatan = DB::select('SELECT * from jabatan ORDER BY nama_jabatan ASC');
        return view('content.users.userCreate')->with(compact('jabatan'));
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

        $namaUser = $request->nama;
        $username = $request->username;
        $password = md5($request->password);
        $email = $request->email;

        DB::insert("CALL sp_users ('','$namaUser','$username','$email','in_email_verified_at','in_password','in_two_factor_secret','in_two_factor_recovery_codes','in_remember_token','in_current_team_id','$photoPath','$alamat','$jabatanId','post');");

        echo "<pre>"; print_r($request); die;


        return redirect()->route('user.index')->with('message', 'User berhasil ditambahkan! ');
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
        $user = DB::select('SELECT * FROM users WHERE id = ?', [$id]);

        return view()->with(compact('user'));
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
        $user = DB::select('SELECT * FROM users WHERE id = ?', [$id]);
        echo "<pre>"; print_r($user); die;

        return view('content.users.userEdit')->with(compact('user'));
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

        return redirect()->route('user.index')->with('message', 'User berhasil diubah!');
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
        DB::delete('DELETE FROM user WHERE id = ?', [$id]);
        return redirect()->route('user.index')->with('message', 'User berhasil dihapus!');
    }
}
