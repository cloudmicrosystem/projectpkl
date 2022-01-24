@extends('layouts.base')
@section('title', 'Cari Arsip')
@section('konten')
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand"></a>
        <form class="form-inline" method="GET" action="{{ route('galeri.store') }}">
            @csrf
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </a>
        </form>
    </nav>

    <div class="row">
        @foreach ($arsip as $ars)
            <div class="col-sm-4 mb-5">
                <div class="card shadow">
                    <div class="card-body">
                        @if ($ars->file_arsip == $arsip['0']->file_arsip)
                            <embed class="card-img-top" src="{{ url('/storage/arsip/', $ars->file_arsip) }}" width="360"
                                height="400">
                        @else
                            <embed class="fas fa-file-pdf embed-responsive"
                                src="{{ url('/storage/arsip/', $ars->file_arsip) }}" width="360" height="400">
                        @endif
                    </div>

                    <div class="card-footer">
                        <span class="badge badge-info">{{ $ars->nama_kategori }}</span>
                        <h6 class="card-title"><b>{{ $ars->nama_arsip }}</b></h6>
                        <p class="card-text">{{ $ars->deskripsi }}</p>
                        <a href="{{ url('/storage/arsip/', $ars->file_arsip) }}" class="btn btn-primary"
                            target="_blank">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
