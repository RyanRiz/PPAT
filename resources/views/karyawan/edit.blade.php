@extends('layouts.main')

@section('main')

<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form action="{{ route('update.karyawan', $data->id) }}" class="p-2" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-5">
                        <label>Nama Lengkap</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required value="{{ $data->nama }}" type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-md-5">
                        <label>Tempat Lahir</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required value="{{ $data->tempat_lahir }}" type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Lahir</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required value="{{ $data->tanggal_lahir }}" type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    </div>
                    <div class="col-md-5">
                        <label>Status Hubungan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option value="tidak kawin" @if ($data->status== "tidak kawin") selected @endif>Tidak Kawin</option>
                            <option value="kawin" @if ($data->status== "kawin") selected @endif>Kawin</option>
                          </select>
                    </div>
                    <div class="col-md-5">
                        <label>Tanggungan (Kalau Kawin)</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="number" value="{{ $data->tanggungan }}" class="form-control" value="0" min="0" name="tanggungan" placeholder="Tanggungan (Kalau Kawin)">
                    </div>
                    <div class="col-md-5">
                        <label>Awal Masa Kerja</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" value="{{ $data->awal_kerja }}" class="form-control" name="awal_kerja" placeholder="Awal Masa Kerja">
                    </div>
                    <div class="col-md-5">
                        <label>Akhir Masa Kerja</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="date" class="form-control" value="{{ $data->akhir_kerja }}" name="akhir_kerja" placeholder="Akhir Masa Kerja(Bisa Dikosongkan)">
                    </div>
                    <div class="col-md-5">
                        <label>Gaji</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="number" min="0" value="{{ $data->gaji }}" class="form-control" name="gaji" placeholder="Gaji">
                    </div>
                    <div class="col-md-5">
                        <label>Bonus</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="number" min="0" value="{{ $data->bonus }}" class="form-control" name="bonus" placeholder="Bonus">
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
