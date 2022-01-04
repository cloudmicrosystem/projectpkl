@extends('layouts.base')
@section('konten')
<div class="row">

@foreach($arsip as $ars)
  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      @if ($ars->file_arsip == $arsip['0']->file_arsip)
      <embed class="card-img-top" src="{{url('/storage/arsip/', $ars->file_arsip)}}" width="700" height="300" >
      @else
      <embed class="fas fa-file-pdf" src="{{url('/storage/arsip/', $ars->file_arsip)}}" width="300" height="300" >
      @endif
     
      <div class="card-body">
        <h5 class="card-title">{{ $ars->nama_arsip}}</h5>
        <p class="card-text">{{ $ars->file_arsip}}</p>
        <a href="{{url('/storage/arsip/', $ars->file_arsip)}}" class="btn btn-primary" target="_blank">View</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection