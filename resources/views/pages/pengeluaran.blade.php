@extends('layouts.main')

@section('content')
<div class="col-xl-9 col-lg-8 col-md-12">
    <div class="tak-instruct-group">
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space">
                            <h3>Data Pengeluaran</h3>
                            <p>Order Dashboard is a quick overview of all current orders.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Pengeluaran Hari Ini</h6>
                                    <h4 class="instructor-text-success">{{ number_format($hari_ini) }}</h4>
                                    <p>Earning this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Pengeluaran Minggu Ini</h6>
                                    <h4 class="instructor-text-success">{{ number_format($minggu_ini) }}</h4>
                                    <p>Earning this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Pengeluaran Bulan Ini</h6>
                                    <h4 class="instructor-text-success">{{ number_format($bulan_ini) }}</h4>
                                    <p>Earning this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($total_pengeluaran)
                        <div class="col-md-4 col-sm-12 d-flex">
                            <div class="card instructor-card w-100">
                                <div class="card-body">
                                    <div class="instructor-inner">
                                        <h6>Total Pendapatan Terpilih </h6>
                                        <h4 class="instructor-text-success">{{ number_format($total_pengeluaran) }}</h4>
                                        <p>Earning this month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- <div class="col-md-3 col-sm-12 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Pengeluaran Tahun Ini</h6>
                                    <h4 class="instructor-text-success">{{ number_format($tahun_ini) }}</h4>
                                    <p>Earning this month</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="comman-space pb-0">
                            <div class="sell-course-head withdraw-history-head border-bottom-0">
                                <h3>List Data</h3>
                            </div>
                            <div class="instruct-search-blk mb-0">
                                <div class="show-filter all-select-blk">
                                    <form action="{{ url('pengeluaran') }}" method="GET">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-md-6 col-lg-3 col-item">
                                                <div class="form-group select-form mb-0">
                                                    <input type="date" class="form-control" name="tanggal_mulai">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-item">
                                                <div class="form-group select-form mb-0">
                                                    <input type="date" class="form-control" name="tanggal_selesai">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-item">
                                                <div class="form-group select-form mb-0">
                                                    <button class="form-control btn btn-info" type="submit"> Cari </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-item d-flex">
                                                <button type="button" class="btn btn-outline-primary justify-content-end float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Pengeluaran</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="comman-space pb-0">
                            <div
                                class="settings-referral-blk course-instruct-blk  table-responsive">

                                <table class="table table-nowrap mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Nomor</th>
                                            <th>Nama Pengeluaran</th>
                                            <th>Nominal Pengeluaran</th>
                                            <th>Bukti Pengeluaran</th>
                                            <th>Tanggal Pengeluaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item=>$key)
                                            <tr class="text-center">
                                                <td>{{ $item+1 }}</td>
                                                <td>{{ $key->nama_pengeluaran }}</td>
                                                <td>{{ number_format($key->nominal_pengeluaran) }}</td>
                                                <td><a href="{{ asset('images/pengeluaran/'.$key->bukti_pengeluaran) }}" target="_blank">Lihat</a></td>
                                                <td>{{ \Carbon\Carbon::parse($key->created_at)->format('d M Y') }}</td>
                                                <td>
                                                    <a href="{{ url('pengeluaran/hapus/'.$key->id) }}" class="text-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('pengeluaran') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="modal-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="" class="control-label">Nama Pengeluaran</label>
                      <input type="text" class="form-control" name="nama_pengeluaran" required>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="" class="control-label">Nominal Pengeluaran</label>
                      <input type="number" class="form-control" name="nominal_pengeluaran" required>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="" class="control-label">Bukti Pengeluaran</label>
                      <input type="file" class="form-control" name="bukti_pengeluaran" required>
                  </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection