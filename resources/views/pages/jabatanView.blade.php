@extends('layouts.base')
@section('content')
<div class="row">
    <table table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($jabatan as $jbt)
            <tr>
                <td>{{ $jbt->id }}</td>
                <td>{{ $jbt->nama_jabatan }}</td>
                <td>
                <button class="btn btn-primary " ><i class="fas fa-edit"></button>
                <button class="btn btn-primary " ><i class="fas fa-trash"></button>
                </td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection