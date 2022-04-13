@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="p-2" action="{{ route('store.customer') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <label>No. KTP</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input type="text" class="form-control @error('ktp') is-invalid @enderror" name="ktp" placeholder="No. KTP">
                            @error('ktp')
                            <div class="alert alert-danger mt-2 alert-dismissible fade show">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <label>Nama Lengkap</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input type="text" value="{{ old('nama') }}" class="form-control" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-md-5">
                            <label>Tanggal Lahir</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input type="date" data-date-format="mm/dd/yyyy" value="{{ old('date') }}" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                        </div>
                        <div class="col-md-5">
                            <label>No. Handphone</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input type="text" class="form-control" value="{{ old('telepon') }}" placeholder="No. Handphone" name="telepon">
                        </div>
                        <div class="col-md-5">
                            <label>Pekerjaan</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input type="text" class="form-control" value="{{ old('pekerjaan') }}" placeholder="Pekerjaan" name="pekerjaan">
                        </div>
                        <div class="col-md-5">
                            <label>NPWP</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input type="text" class="form-control" value="{{ old('npwp') }}" placeholder="NPWP" name="npwp">
                        </div>
                        <div class="col-md-5">
                            <label>Alamat</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <textarea type="text" class="form-control" placeholder="Alamat" name="alamat">{{ old('alamat') }}</textarea>
                        </div>
                        <div class="pt-5 col-sm-12 d-flex justify-content-between">
                            <div>
                                <a class="btn btn-outline-secondary" href="{{ route('index.customer') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
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
