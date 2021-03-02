@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    @if (isset($data))
                        <form method="POST" id="modalForm" action="{{ route('formSave') }}">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ $data->IDKota }}">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="NamaKota">Nama Kota</label>
                                    <input type="text" class="form-control" id="NamaKota" placeholder="Nama Kota..." name="NamaKota" value="{{ $data->NamaKota }}" required>
                                </div>
        
                                <div class="form-group col-md-6">
                                    <label for="NamaPemimpin">Nama Pemimpin</label>
                                    <input type="text" class="form-control" id="NamaPemimpin" placeholder="Nama Pemimpin..." name="NamaPemimpin" value="{{ $data->NamaPemimpin }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="TglBerdiri">Tanggal Berdiri</label>
                                    <input type="date" class="form-control" id="TglBerdiri" placeholder="Nama Pemimpin..." name="TglBerdiri" value="{{ $data->TglBerdiri }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="JmlPenduduk">Jumlah Penduduk</label>
                                    <input type="number" min="0" step="1" class="form-control" id="JmlPenduduk" placeholder="Jumlah Penduduk..." name="JmlPenduduk" value="{{ $data->JmlPenduduk }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="LuasWilayah">Luas Wilayah</label>
                                    <input type="number" min="0" step="0.01" class="form-control" id="LuasWilayah" placeholder="Luas Wilayah..." name="LuasWilayah" value="{{ $data->LuasWilayah }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="price">Jenis Kota</label>
                                    <select name="JenisKota" id="JenisKota" class="form-control">
                                        <option {{ $data->JenisKota == 'Istimewa' ? "selected" : "" }} value="Istimewa">Istimewa</option>
                                        <option {{ $data->JenisKota == 'Otonom' ? "selected" : "" }} value="Otonom">Otonom</option>
                                        <option {{ $data->JenisKota == 'Percontohan' ? "selected" : "" }} value="Percontohan">Percontohan</option>
                                    </select>
                                </div>
        
                                <div class="form-group col-md-12">
                                    <label>Keunggulan</label>
                                    <textarea style="height: 150px;" id="Keunggulan" class="form-control" name="Keunggulan">{{ $data->Keunggulan }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>                        
                    @else
                        <form method="POST" id="modalForm" action="{{ route('formSave') }}">
                            @csrf
                            <input type="hidden" name="id" id="id" value="">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="NamaKota">Nama Kota</label>
                                    <input type="text" class="form-control" id="NamaKota" placeholder="Nama Kota..." name="NamaKota" required>
                                </div>
        
                                <div class="form-group col-md-6">
                                    <label for="NamaPemimpin">Nama Pemimpin</label>
                                    <input type="text" class="form-control" id="NamaPemimpin" placeholder="Nama Pemimpin..." name="NamaPemimpin" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="TglBerdiri">Tanggal Berdiri</label>
                                    <input type="date" class="form-control" id="TglBerdiri" placeholder="Nama Pemimpin..." name="TglBerdiri" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="JmlPenduduk">Jumlah Penduduk</label>
                                    <input type="number" min="0" step="1" class="form-control" id="JmlPenduduk" placeholder="Jumlah Penduduk..." name="JmlPenduduk" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="LuasWilayah">Luas Wilayah</label>
                                    <input type="number" min="0" step="0.01" class="form-control" id="LuasWilayah" placeholder="Luas Wilayah..." name="LuasWilayah" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="price">Jenis Kota</label>
                                    <select name="JenisKota" id="JenisKota" class="form-control">
                                        <option value="Istimewa">Istimewa</option>
                                        <option value="Otonom">Otonom</option>
                                        <option value="Percontohan">Percontohan</option>
                                    </select>
                                </div>
        
                                <div class="form-group col-md-12">
                                    <label>Keunggulan</label>
                                    <textarea style="height: 150px;" id="Keunggulan" class="form-control" name="Keunggulan"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
