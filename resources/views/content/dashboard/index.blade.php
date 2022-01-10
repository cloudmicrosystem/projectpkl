@extends('layouts.base')
@section('konten')
<?php
    $dataPoints = array(

    );
    for ($i=0; $i < 12; $i++) {
        if (isset($dpValue[$i])) {
            if ($i != 0) {
                $time->addMonths(1);
            }
            if ($dpValue[$i]->bulan == $time->format('n')) {
                $dataPoints[$i] = array(
                    "y" => $dpValue[$i]->jumlah,
                    "label" => $time->format('M')
                );
            } else {
                $dataPoints[$i] = array(
                    "y" => 0,
                    "label" => $time->format('M'),
                );
            }
        } else {
            $dataPoints[$i] = array(
                "y" => 0,
                "label" => $time->addMonths(1)->format('M'),
            );
        }

    }
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Data Arsip</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalDataArsip['0']->total }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-archive fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font=weight-bold text-primary">Arsip Masuk</h6>
                {{-- <div class="dropdown no-arrow">
                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i></a>
                </div> --}}
            </div>
            <div class="card-body">
                <div class="chart-area" id="arsipMasukChart">
                    {{-- <canvas id="arsipChart"></canvas> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
