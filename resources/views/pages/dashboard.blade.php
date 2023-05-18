@extends('layouts.main')

@section('content')
<div class="col-xl-9 col-lg-8 col-md-12">
    <div class="row">
        {{-- <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Pemasukan Hari Ini</h6>
                        <h4 class="instructor-text-success">{{ number_format($pemasukan_hari_ini) }}</h4>
                        <p>Earning this month</p>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Pemasukan Minggu Ini</h6>
                        <h4 class="instructor-text-success">{{ number_format($pemasukan_minggu_ini) }}</h4>
                        <p>New this Week</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Pemasukan Bulan Ini</h6>
                        <h4 class="instructor-text-success">{{ number_format($pemasukan_bulan_ini) }}</h4>
                        <p>Rating this month</p>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Pengeluaran Minggu Ini</h6>
                        <h4 class="instructor-text-warning" style="color:red">{{ number_format($pengeluaran_minggu_ini) }}</h4>
                        <p>New this month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Pengeluaran Bulan Ini</h6>
                        <h4 class="instructor-text-warning" style="color:red">{{ number_format($pengeluaran_bulan_ini) }}</h4>
                        <p>Rating this month</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Pemasukan Keseluruhan</h6>
                        <h4 class="instructor-text-primary">{{ number_format($pemasukan) }}</h4>
                        <p>Rating this month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Pengeluaran Keseluruhan</h6>
                        <h4 class="instructor-text-primary">{{ number_format($pengeluaran) }}</h4>
                        <p>Rating this month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Laba bersih</h6>
                        <h4 class="instructor-text-info">{{ number_format($pemasukan-$pengeluaran) }}</h4>
                        <p>Rating this month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card instructor-card">
                <div class="card-header">
                    <h4>Earnings</h4>
                </div>
                <div class="card-body">
                    <div id="instructor_chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection