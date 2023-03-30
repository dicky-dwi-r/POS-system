@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection

@section('content')
<!-- ROW-1 -->
<div class="row">
    <div class="col-lg-3 col-md-12 col-sm-12 col-xl-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-0">
                                <h6 class="">Total Member</h6>
                                <h2 class="mb-0 number-font">44</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-0">
                                <h6 class="">Total Penjualan</h6>
                                <h2 class="mb-0 number-font">Rp.500.000</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-0">
                                <h6 class="">Total Pesanan</h6>
                                <h2 class="mb-0 number-font">34</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-0">
                                <h6 class="">Biaya Produksi</h6>
                                <h2 class="mb-0 number-font">Rp.250.000</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Analisa Penjualan</h3>
            </div>
            <div class="card-body">
                <div class="d-flex mx-auto text-center justify-content-center mt-3 mb-5">
                    <div class="d-flex text-center justify-content-center me-3"><span
                            class="dot-label bg-primary my-auto"></span>Total Penjualan</div>
                    <div class="d-flex text-center justify-content-center"><span
                            class="dot-label bg-secondary my-auto"></span>Total Pemesanan</div>
                </div>
                <div class="chartjs-wrapper-demo">
                    <canvas id="transactions" class="chart-dropshadow"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
</div>
<!-- ROW-1 END -->
@endsection
