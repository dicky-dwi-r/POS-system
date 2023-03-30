@extends('layouts.app')

@section('title')
    Daftar Member
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Daftar Member</li>
@endsection

@section('content')
<!-- Start Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#input-modal"><i class="fe fe-plus-circle"></i> Tambah Member</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-bordered text-nowrap border-bottom">
                        <thead>
                            <tr>
                                <th class="border-bottom-0" style="width: 10%;">No</th>
                                <th class="border-bottom-0">Nama</th>
                                <th class="border-bottom-0">Alamat</th>
                                <th class="border-bottom-0">Telepon</th>
                                <th class="border-bottom-0" style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($member as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->telepon }}</td>
                                <td>
                                    <div class="g-2">
                                        <a data-bs-target="#edit-modal{{ $row->id_member }}" class="btn text-primary btn-sm" data-bs-toggle="modal">
                                            <span class="fe fe-edit fs-14"></span>
                                        </a>
                                        <a data-bs-target="#hapus-modal{{ $row->id_member }}" class="btn text-danger btn-sm" data-bs-toggle="modal">
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
<div class="modal fade" id="input-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Tambah Member</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{ Route('member.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama" class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat" class="col-form-label">Alamat:</label>
                        <textarea class="form-control" name="alamat" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="telepon" class="col-form-label">Telepon:</label>
                        <input type="text" class="form-control" name="telepon" required>
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
<!-- End Input modal -->

<!-- Edit modal -->
@foreach ($member as $d)
<div class="modal fade" id="edit-modal{{ $d->id_member }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit Member</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="/member/update/{{$d->id_member}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                    <label for="nama" class="col-form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama" value="{{ $d->nama }}" required>
                    </div>
                    <div class="form-group mb-3">
                    <label for="alamat" class="col-form-label">Alamat:</label>
                    <textarea class="form-control" name="alamat" required>{{ $d->alamat }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                    <label for="telepon" class="col-form-label">Telepon:</label>
                    <input type="text" class="form-control" name="telepon" value="{{ $d->telepon }}" required>
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
@endforeach
<!-- End Edit modal -->

<!-- Hapus modal -->
@foreach ($member as $d)
<div class="modal fade" id="hapus-modal{{ $d->id_member }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Hapus Member</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="GET" action="/member/destroy/{{$d->id_member}}">
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
@endforeach
<!-- End Hapus modal -->
@endsection

