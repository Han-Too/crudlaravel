@extends('index')
@section('title', 'Admin | Tambah Pinjaman Page');

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card shadow-lg w-100">
            <div class="card-body p-4">
                <h2 class="fw-bolder fs-6 mb-lg-4">
                    Tambah Data Pinjaman
                </h2>
                <form action="{{ route('storepinjaman') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Nasabah</label>
                        <select name="namanasabah" class="form-select" id="">
                            @foreach ($data as $nasabah)
                                <option value="{{ $nasabah->id }}">{{ $nasabah->nama_nasabah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nominal Pinjaman</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="nominal">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Tanggal Pinjam</label>
                        <input type="date" name="tanggal" class="form-control" id="nama">
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