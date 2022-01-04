@extends('layouts.base')
@section('konten')
<div class="row">
@foreach($arsip as $ars)

  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      {{-- @if ($ars->file_arsip == $arsip['0']->image) --}}
      <a href="{{url('/storage/arsip/', $ars->file_arsip)}} class="card-img-top" alt="Card image cap">
      {{-- @elseif ($ars->file_arsip == $ars['0']->icon)
      
      @endif --}}
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