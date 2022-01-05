@extends('layouts.base')
@section('konten')
<div class="row">

@foreach($arsip as $ars)
  <div class="col-sm-4 mb-5">
    <div class="card" >
      @if ($ars->file_arsip == $arsip['0']->file_arsip)
      <embed class="card-img-top" src="{{url('/storage/arsip/', $ars->file_arsip)}}" width="360" height="400">
      @else
      <embed class="fas fa-file-pdf embed-responsive" src="{{url('/storage/arsip/', $ars->file_arsip)}}" width="360" height="400" >
      @endif
     
      <div class="card-body">
        <span class="badge badge-info">{{ $ars->nama_kategori}}</span>
        <h6 class="card-title"><b>{{ $ars->nama_arsip}}</b></h6>
        <p class="card-text">{{ $ars->deskripsi}}</p>
        <a href="{{url('/storage/arsip/', $ars->file_arsip)}}" class="btn btn-primary" target="_blank">View</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection