@extends('layouts.main')

@section('main')

<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form action="{{ route('store.karyawan') }}" class="p-2" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <label>No. KTP</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="ktp" placeholder="No. KTP">
                    </div>
                    <div class="col-md-5">
                        <label>Nama Lengkap</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-md-5">
                        <label>Tempat Lahir</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Lahir</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    </div>
                    <div class="col-md-5">
                        <label>Alamat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <textarea required name="alamat" name="alamat" placeholder="Alamat" class="form-control"></textarea>
                    </div>
                    <div class="col-md-5">
                        <label>Pekerjaan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                    </div>
                    <div class="col-md-5">
                        <label>No. Handphone</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="handphone" placeholder="No. Handphone">
                    </div>
                    <div class="col-md-5">
                        <label>Email</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="col-md-5">
                        <label>Status Hubungan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option value="tidak kawin">Tidak Kawin</option>
                            <option value="kawin">Kawin</option>
                          </select>
                    </div>
                    <div class="col-md-5">
                        <label>Tanggungan (Kalau Kawin)</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="number" class="form-control" value="0" min="0" name="tanggungan" placeholder="Tanggungan (Kalau Kawin)">
                    </div>
                    <div class="col-md-5">
                        <label>Awal Masa Kerja</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" class="form-control" name="awal_kerja" placeholder="Awal Masa Kerja">
                    </div>
                    <div class="col-md-5">
                        <label>Akhir Masa Kerja</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="date" class="form-control" name="akhir_kerja" placeholder="Akhir Masa Kerja(Bisa Dikosongkan)">
                    </div>
                    <div class="col-md-5">
                        <label>Gaji</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="number" min="0" class="form-control" name="gaji" placeholder="Gaji">
                    </div>
                    <div class="col-md-5">
                        <label>Bonus</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="number" min="0" class="form-control" name="bonus" placeholder="Bonus">
                    </div>
                    <div class="pt-3 col-sm-12 d-flex justify-content-between">
                        <div>
                            <a class="btn btn-outline-secondary" href="{{ route('index.karyawan') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
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
</div>

@endsection
