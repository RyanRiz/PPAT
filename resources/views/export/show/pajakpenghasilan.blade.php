@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('print.penghasilan', $data->id) }}" method="post">
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
                        <label>NOP</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly type="text" class="form-control" value="{{ $data->nop }}" placeholder="NOP" aria-label="NOP" aria-describedby="button-addon">
                    </div>
                    <div class="col-md-5">
                        <label>Cara Pembayaran</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="cara" placeholder="Cont. Tunai">
                    </div>
                    <div class="col-md-5">
                        <label>No. Rekening</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input autocomplete="off" required type="text" class="form-control" name="rekening" placeholder="No. Rekening">
                    </div>
                    <div class="col-md-5">
                        <label>Nama Bank</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="bank" placeholder="Nama Bank">
                    </div>
                    <div class="col-md-5">
                        <label>Nama Pemilik</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="pemilik" placeholder="Nama Pemilik">
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
