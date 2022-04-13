@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('store.permohonan') }}" class="p-2" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <label>No. KTP Pembeli</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" value="{{ old('ktp_pembeli') }}" class="form-control" name="ktp_pembeli" placeholder="No. KTP Pembeli">
                    </div>
                    <div class="col-md-5">
                        <label>No. KTP Penjual</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" value="{{ old('ktp_penjual') }}" class="form-control" name="ktp_penjual" placeholder="No. KTP Penjual">
                    </div>
                    <div class="col-md-5">
                        <label>Jenis Permohonan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="jenis_permohonan" aria-label="Default select example">
                            <option value="Jual Beli">Jual Beli</option>
                            <option value="Hibah">Hibah</option>
                            <option value="APHB">APHB</option>
                            <option value="Tukar Menukar">Tukar Menukar</option>
                            <option value="Pendaftaran Tanah">Pendaftaran Tanah</option>
                            <option value="Pemecahan/Pemisahan">Pemecahan/Pemisahan</option>
                            <option value="Penggabungan">Penggabungan</option>
                            <option value="Roya">Roya</option>
                          </select>
                    </div>
                    <div class="col-md-5">
                        <label>Jenis Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="jenis_sertifikat" aria-label="Default select example">
                            <option value="SHM">SHM</option>
                            <option value="SHGB">SHGB</option>
                            <option value="SHP">SHP</option>
                          </select>
                    </div>
                    <div class="col-md-5">
                        <label>No. Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control @error('ktp') is-invalid @enderror" name="sertifikat" placeholder="No. Sertifikat">
                        @error('ktp')
                        <div class="alert alert-danger mt-2 alert-dismissible fade show">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label>NOP</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ old('nop') }}" name="nop" placeholder="NOP">
                    </div>
                    <div class="col-md-5">
                        <label>Lokasi Objek</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <textarea class="form-control" name="lokasi_objek" placeholder="Lokasi Objek"></textarea>
                    </div>
                    <div class="col-md-5">
                        <label>Luas Bangunan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ old('luas_bangunan') }}" name="luas_bangunan" placeholder="Luas Bangunan">
                    </div>
                    <div class="col-md-5">
                        <label>Luas Tanah</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ old('luas_tanah') }}" name="luas_tanah" placeholder="Luas Tanah">
                    </div>
                    <div class="col-md-5">
                        <label>Kelurahan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ old('kelurahan') }}" name="kelurahan" placeholder="Kelurahan">
                    </div>
                    <div class="col-md-5">
                        <label>Kecamatan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ old('kecamatan') }}" name="kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="col-md-5">
                        <label>Kabupaten/Kota</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ old('kabupaten') }}" name="kabupaten" placeholder="Kabupaten/Kota">
                    </div>
                    <div class="col-md-5">
                        <label>Provinsi</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" value="{{ old('provinsi') }}" name="provinsi" placeholder="Provinsi">
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
