@extends('index')
@section('title', 'Admin | Nasabah Page');

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card shadow-lg w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <h5 class="card-title fw-semibold mb-4">Data Nasabah</h5>
                        </div>
                    </div>
                    <form action="{{ route('updatenasabah') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama Nasabah</label>
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <input type="text" name="namanasabah"
                                value="{{ $data->nama_nasabah }}" class="form-control @error('namanasabah') is-invalid @enderror" id="nama" placeholder="">
                            @error('namanasabah')
                                <div class="invalid-feedback">
                                    Masukan Nama Nasabah
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Telepon Nasabah</label>
                            <input type="text" name="teleponnasabah"
                                value="{{ $data->telepon_nasabah }}" class="form-control @error('teleponnasabah') is-invalid @enderror" id="nama" placeholder="">
                            @error('teleponnasabah')
                                <div class="invalid-feedback">
                                    Masukan Telepon Nasabah
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Alamat Nasabah</label>
                            <input type="text" name="alamatnasabah"
                                value="{{ $data->alamat_nasabah }}" class="form-control @error('alamatnasabah') is-invalid @enderror" id="nama" placeholder="">
                            @error('alamatnasabah')
                                <div class="invalid-feedback">
                                    Masukan Alamat Nasabah
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status" class="form-label">Status Nasabah</label>
                            <select class="form-select mb-lg-5" name="status" id="status">
                                <option {{ $data->status == '0' ? 'selected' : '' }} value="0">Pending</option>
                                <option {{ $data->status == '1' ? 'selected' : '' }} value="1">Aktif</option>
                                <option {{ $data->status == '2' ? 'selected' : '' }} value="2">Nonaktif</option>
                            </select>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success ">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
