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
                        <div class="p-2">
                            <a href="{{ route('showaddnasabah') }}" class="btn btn-success">Tambah Data</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-2 bg-success">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light text-center mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light text-center mb-0">Name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light text-center mb-0">Telepon</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light text-center mb-0">Alamat</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light text-center mb-0">Status</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light text-center mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $x => $data)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal text-center mb-0">{{ $x+1 }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-normal text-center mb-1">{{ $data->nama_nasabah }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="text-center mb-0 fw-normal">{{ $data->telepon_nasabah }}</p>
                                    </td>
                                    <td class="border-bottom-0 ">
                                        <p class="text-center mb-0 fw-normal">{{ $data->alamat_nasabah }}</p>
                                    </td>
                                    <td class="border-bottom-0 ">
                                        @if ($data->status == '0')
                                            <span class="badge bg-warning">Pending</span>
                                        @elseif($data->status == '1')
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Nonaktif</span>
                                        @endif
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex justify-content-center">
                                            <a href="/showeditnasabah/{{ $data->id }}" class="btn mx-2 btn-success">Ubah</a>
                                            <a href="/deletenasabah/{{ $data->id }}" class="btn mx-2 btn-danger">Hapus</a>
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
@endsection
