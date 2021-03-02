@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h4>
                        <a href="{{ route('create') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-user"></i> Tambah</a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID Kota</th>
                                    <th>Nama Kota</th>
                                    <th>Nama Pemimpin</th>
                                    <th>Tanggal Berdiri</th>
                                    <th>Jumlah Penduduk</th>
                                    <th>Luas Wilayah</th>
                                    <th>Jenis Kota</th>
                                    <th>Keunggulan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datakota as $item)
                                    <tr>
                                        <td>{{ $item->IDKota }}</td>
                                        <td>{{ $item->NamaKota }}</td>
                                        <td>{{ $item->NamaPemimpin }}</td>
                                        <td>{{ $item->TglBerdiri }}</td>
                                        <td>{{ $item->JmlPenduduk }}</td>
                                        <td>{{ $item->LuasWilayah }}</td>
                                        <td>{{ $item->JenisKota }}</td>
                                        <td>{{ $item->Keunggulan }}</td>
                                        <td>
                                            <a href="{{ route('edit', $item->IDKota) }}" class="btn btn-sm btn-success editbutton">Edit</a>
                                            <a href="{{ route('delete', $item->IDKota) }}" class="btn btn-sm btn-danger deletebutton">Delete</a>
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
@endsection
