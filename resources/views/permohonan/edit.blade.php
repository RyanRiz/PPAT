@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.permohonan', $data->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-5">
                        <label>Nama Pembeli</label>
                    </div>
                    <div class="col-md-5 form-group">
                        <input readonly type="text" class="form-control" value="{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('nama')->implode('[]', '"') }}" placeholder="Nama Pembeli" aria-label="Nama Pembeli" aria-describedby="button-addon">
                    </div>
                    <div class="col-md-2 gx-0 form-group">
                        <a class="btn btn-outline-secondary" href="{{ route('show.customer', $customer->where('ktp', $data->ktp_pembeli)->pluck('id')->implode('[]', '"')) }}" id="button-addon" role="button">Detail Customer</a>
                    </div>
                    <div class="col-md-5">
                        <label>Nama Penjual</label>
                    </div>
                    <div class="col-md-5 form-group">
                        <input readonly type="text" class="form-control" value="{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}" placeholder="Nama Penjual" aria-label="Nama Penjual" aria-describedby="button-addon2">
                    </div>
                    <div class="col-md-2 gx-0 form-group">
                        <a class="btn btn-outline-secondary" href="{{ route('show.customer', $customer->where('ktp', $data->ktp_penjual)->pluck('id')->implode('[]', '"')) }}" id="button-addon2" role="button">Detail Customer</a>
                    </div>
                    <div class="col-md-5">
                        <label>Jenis Permohonan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="jenis_permohonan" aria-label="Default select example">
                            <option value="Jual Beli" @if ($data->jenis_permohonan == "Jual Beli") selected @endif>Jual Beli</option>
                            <option value="Hibah" @if ($data->jenis_permohonan == "Hibah") selected @endif>Hibah</option>
                            <option value="APHB" @if ($data->jenis_permohonan == "APHB") selected @endif>APHB</option>
                            <option value="Tukar Menukar" @if ($data->jenis_permohonan == "Tukar Menukar") selected @endif>Tukar Menukar</option>
                            <option value="Pendaftaran Tanah" @if ($data->jenis_permohonan == "Pendaftaran Tanah") selected @endif>Pendaftaran Tanah</option>
                            <option value="Pemecahan/Pemisahan" @if ($data->jenis_permohonan == "Pemecahan/Pemisahan") selected @endif>Pemecahan/Pemisahan</option>
                            <option value="Penggabungan" @if ($data->jenis_permohonan == "Penggabungan") selected @endif>Penggabungan</option>
                            <option value="Roya" @if ($data->jenis_permohonan == "Roya") selected @endif>Roya</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label>Jenis Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="jenis_sertifikat" aria-label="Default select example">
                            <option value="SHM" @if ($data->jenis_sertifikat == "SHM") selected @endif>SHM</option>
                            <option value="SHGB" @if ($data->jenis_sertifikat == "SHGB") selected @endif>SHGB</option>
                            <option value="SHP" @if ($data->jenis_sertifikat == "SHP") selected @endif>SHP</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label>No. Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" value="{{ $data->sertifikat }}" class="form-control @error('sertifikat') is-invalid @enderror" name="sertifikat" placeholder="No. Sertifikat">
                        @error('sertifikat')
                        <div class="alert alert-danger mt-2 alert-dismissible fade show">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label>NOP</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ $data->nop }}" name="nop" placeholder="NOP">
                    </div>
                    <div class="col-md-5">
                        <label>Lokasi Objek</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <textarea class="form-control" name="lokasi_objek" placeholder="Lokasi Objek">{{ $data->lokasi_objek }}</textarea>
                    </div>
                    <div class="col-md-5">
                        <label>Luas Bangunan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ $data->luas_bangunan }}" name="luas_bangunan" placeholder="Luas Bangunan">
                    </div>
                    <div class="col-md-5">
                        <label>Luas Tanah</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ $data->luas_tanah }}" name="luas_tanah" placeholder="Luas Tanah">
                    </div>
                    <div class="col-md-5">
                        <label>Kelurahan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ $data->kelurahan }}" name="kelurahan" placeholder="Kelurahan">
                    </div>
                    <div class="col-md-5">
                        <label>Kecamatan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ $data->kecamatan }}" name="kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="col-md-5">
                        <label>Kabupaten/Kota</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ $data->kabupaten }}" name="kabupaten" placeholder="Kabupaten">
                    </div>
                    <div class="col-md-5">
                        <label>Provinsi</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ $data->provinsi }}" name="provinsi" placeholder="Provinsi">
                    </div>
                    <div class="pt-3 col-sm-12 d-flex justify-content-between">
                        <div>
                            <a class="btn btn-outline-secondary" href="{{ route('index.permohonan') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
                                Kembali
                            </a>
                        </div>
                        <div>
                            <button type="reset" class="btn btn-outline-danger"><i class="mdi mdi-cached"></i>
                                Reset
                            </button>
                            <button type="submit" class="btn btn-outline-primary"><i class="mdi mdi-content-save"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
