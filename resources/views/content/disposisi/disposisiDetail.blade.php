@extends('layouts.base')
@section('title', 'Detail Surat')
@section('konten')
    <div class="card shadow">
        <div class="card-body">
            <embed class="card-img-top" src="{{ url('/storage/arsip/', $data['0']->arsip) }}">
        </div>
        <div class="card-footer">
            <div class="    float-right">
                <a href="{{ route('disposisi.index') }}" class="btn btn-warning btn-sm">Cancel</a>
                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
    </div>
@endsection
