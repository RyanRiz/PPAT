@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="" class="p-2" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <label>No. KTP Pembeli</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="ktp_pembeli" placeholder="No. KTP Pembeli">
                    </div>
                    <div class="col-md-5">
                        <label>No. KTP Penjual</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="ktp_penjual" placeholder="No. KTP Penjual">
                    </div>
                    <div class="col-md-5">
                        <label>Jenis Permohonan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="jenis_permohonan" aria-label="Default select example">
                            <option>Jual Beli</option>
                            <option>Hibah</option>
                            <option>APHB</option>
                            <option>Tukar Menukar</option>
                            <option>Pendaftaran Tanah</option>
                            <option>Pemecahan/Pemisahan</option>
                            <option>Penggabungan</option>
                            <option>Roya</option>
                          </select>
                    </div>
                    <div class="col-md-5">
                        <label>Jenis Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="jenis_sertifikat" aria-label="Default select example">
                            <option>SHM</option>
                            <option>SHGB</option>
                            <option>SHP</option>
                          </select>
                    </div>
                    <div class="col-md-5">
                        <label>No. Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="sertifikat" placeholder="No. Sertifikat">
                    </div>
                    <div class="col-md-5">
                        <label>NOP</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="nop" placeholder="NOP">
                    </div>
                    <div class="col-md-5">
                        <label>Lokasi Objek</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="lokasi_objek" placeholder="Lokasi Objek">
                    </div>
                    <div class="col-md-5">
                        <label>Luas Bangunan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan">
                    </div>
                    <div class="col-md-5">
                        <label>Luas Tanah</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="luas_tanah" placeholder="Luas Tanah">
                    </div>
                    <div class="col-md-5">
                        <label>Kelurahan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
                    </div>
                    <div class="col-md-5">
                        <label>Kecamatan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="Kecamatan" placeholder="Kecamatan">
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
