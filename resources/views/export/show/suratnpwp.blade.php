@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('print.npwp', $data->id) }}" method="post">
                @csrf
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
                        <label>Alamat Pembeli</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly type="text" class="form-control" value="{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('alamat')->implode('[]', '"') }}" placeholder="Nama Pembeli" aria-label="Nama Pembeli" aria-describedby="button-addon">
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Lahir Pembeli</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly type="text" name="ultah_pembeli" class="form-control" value="{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('tanggal_lahir')->implode('[]', '"') }}" placeholder="Tanggal Lahir">
                    </div>
                    <div class="col-md-5">
                        <label>KTP. Pembeli</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly type="text" class="form-control" value="{{ $data->ktp_pembeli }}" placeholder="Nama Pembeli" aria-label="Nama Pembeli" aria-describedby="button-addon">
                    </div>
                    <div class="pt-3 col-sm-12 d-flex justify-content-between">
                        <div>
                            <a class="btn btn-outline-secondary" href="{{ route('show.permohonan', $data->id) }}" role="button"><i class="mdi mdi-step-backward-2"></i>
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
