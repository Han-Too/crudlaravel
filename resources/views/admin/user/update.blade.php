@extends('index')
@section('title', 'Admin | Tambah User Page');

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card shadow-lg w-100">
            <div class="card-body p-4">
                <h2 class="fw-bolder fs-6 mb-lg-4">
                    Update Data User
                </h2>
                <form action="{{ route('updateuser') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $data->name }}"
                            aria-describedby="emailHelp">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $data->email }}"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Telepon</label>
                        <input type="text" name="telepon" class="form-control" id="nama" value="{{ $data->telepon }}"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success ">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection