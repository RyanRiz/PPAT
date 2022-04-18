@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('print.pernyataan', $data->id) }}" method="post">
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
                        <label>KTP. Pembeli</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly type="text" class="form-control" value="{{ $data->ktp_pembeli }}" placeholder="Nama Pembeli" aria-label="Nama Pembeli" aria-describedby="button-addon">
                    </div>
                    <div class="col-md-5">
                        <label>Lokasi Objek</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <textarea readonly class="form-control" name="lokasi_objek" placeholder="Lokasi Objek">{{ $data->lokasi_objek }}</textarea>
                    </div>
                    <div class="col-md-5">
                        <label>Kelurahan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly type="text" class="form-control" value="{{ $data->kelurahan }}" name="kelurahan" placeholder="Kelurahan">
                    </div>
                    <div class="col-md-5">
                        <label>Kecamatan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly type="text" class="form-control" value="{{ $data->kecamatan }}" name="kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="col-md-5">
                        <label>Kabupaten/Kota</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" value="{{ $data->kabupaten }}" name="kabupaten" placeholder="Kabupaten">
                    </div>
                    <div class="col-md-5">
                        <label>Nilai Transaksi</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly id="nilai" type="text" class="form-control" value="Rp. {{ number_format($data->nilai_transaksi, 0, ',', '.') }}" name="nilai_transaksi" placeholder="Nilai Transaksi">
                    </div>
                    <div class="col-md-5">
                        <label>Huruf dari Nilai Transaksi</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required id="nilai" type="text" class="form-control" name="huruf" placeholder="Cont. lima ribu rupiah">
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
