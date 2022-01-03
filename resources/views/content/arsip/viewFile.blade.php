@extends('layouts.base')
@section('konten')
    <iframe src="{{ Storage::get('arsip'); }}" frameborder="0"></iframe>
    <p>Tes</p>
@endsection
