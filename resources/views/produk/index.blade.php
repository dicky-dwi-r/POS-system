@extends('layouts.app')

@section('title')
    Daftar Produk
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Daftar Produk</li>
@endsection

@section('content')
<!-- Start Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">Responsive DataTable</h3> -->
                <!-- <input type='button' class="btn btn-success mt-2" value='success alert' id='click'> -->
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#input-modal"><i class="fe fe-plus-circle"></i> Tambah Produk</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-bordered text-nowrap border-bottom">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">No</th>
                                <th class="border-bottom-0">ID Gudang</th>
                                <th class="border-bottom-0">Nama Produk</th>
                                <th class="border-bottom-0">Harga Beli</th>
                                <th class="border-bottom-0">Diskon</th>
                                <th class="border-bottom-0">Harga Cash</th>
                                <th class="border-bottom-0">Harga Kredit</th>
                                <th class="border-bottom-0">Stok</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($produk as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->id_gudang }}</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar bradius" style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                            {{ $row->nama_produk }}
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $row->harga_beli }}</td>
                                <td>{{ $row->diskon }}</td>
                                <td>{{ $row->harga_jual }}</td>
                                <td>{{ $row->harga_jual_kredit }}</td>
                                <td>{{ $row->stok }}</td>
                                <td>
                                    <div class="g-2">
                                        <a data-bs-target="#edit-modal{{ $row->id_produk }}" class="btn text-primary btn-sm" data-bs-toggle="modal">
                                            <span class="fe fe-edit fs-14"></span>
                                        </a>
                                        <a data-bs-target="#hapus-modal{{ $row->id_produk }}" class="btn text-danger btn-sm" data-bs-toggle="modal">
                                            <span class="fe fe-trash-2 fs-14"></span>
                                        </a>
                                    </div>
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
<!-- End Row -->

<!-- Input modal -->
<!-- <div class="modal fade" id="input-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Tambah Produk</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{ Route('produk.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                    <label for="nama_produk" class="col-form-label">Nama produk:</label>
                    <input type="text" class="form-control" name="nama_produk" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="submit"><i class="fe fe-save"></i> Simpan</button>
                    <button class="btn ripple btn-default" data-bs-dismiss="modal" type="button"><i class="fe fe-x-circle"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- End Input modal -->

<!-- Edit modal -->
<!-- @foreach ($produk as $d)
<div class="modal fade" id="edit-modal{{ $d->id_produk }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit Produk</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="/produk/update/{{$d->id_produk}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                    <label for="nama_produk" class="col-form-label">Nama Gudang:</label>
                    <input type="text" class="form-control" name="nama_produk" value="{{ $d->nama_produk }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="submit"><i class="fe fe-save"></i> Simpan</button>
                    <button class="btn ripple btn-default" data-bs-dismiss="modal" type="button"><i class="fe fe-x-circle"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach -->
<!-- End Edit modal -->

<!-- Hapus modal -->
<!-- @foreach ($produk as $d)
<div class="modal fade" id="hapus-modal{{ $d->id_produk }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Hapus Produk</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="GET" action="/produk/destroy/{{$d->id_produk}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <h6>Apakah Anda Ingin Menghapus Data Ini?</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-danger" type="submit"><i class="fe fe-trash"></i> Hapus</button>
                    <button class="btn ripple btn-default" data-bs-dismiss="modal" type="button"><i class="fe fe-x-circle"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach -->
<!-- End Hapus modal -->
@endsection

