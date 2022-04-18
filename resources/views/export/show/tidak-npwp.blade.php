@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('print.tidak', $data->id) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <label>Nama Penjual</label>
                    </div>
                    <div class="col-md-5 form-group">
                        <input readonly type="text" class="form-control" value="{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}" placeholder="Nama Pembeli" aria-label="Nama Pembeli" aria-describedby="button-addon">
                    </div>
                    <div class="col-md-2 gx-0 form-group">
                        <a class="btn btn-outline-secondary" href="{{ route('show.customer', $customer->where('ktp', $data->ktp_penjual)->pluck('id')->implode('[]', '"')) }}" id="button-addon" role="button">Detail Customer</a>
                    </div>
                    <div class="col-md-5">
                        <label>KTP Penjual</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input readonly type="text" class="form-control" value="{{ $data->ktp_penjual }}" placeholder="KTP Penjual" aria-label="KTP Penjual" aria-describedby="button-addon">
                    </div>
                    <div class="col-md-5">
                        <label>Status Perkawinan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option value="Kawin">Kawin</option>
                            <option value="Tidak Kawin">Tidak Kawin</option>
                          </select>
                    </div>
                    <div class="col-md-5">
                        <label>Tanggungan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="tanggungan" placeholder="Cont. 2 Orang Anak">
                    </div>
                    <div class="col-md-5">
                        <label>Tahun Penghasilan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" name="tahun" placeholder="Cont. 2020">
                    </div>
                    <div class="col-md-5">
                        <label>Jumlah Penghasilan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" id="penghasilan" class="form-control" name="penghasilan" placeholder="Jumlah Penghasilan">
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

@push('scripts')
<script>
    var price = document.getElementById('penghasilan');
    price.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatprice() untuk mengubah angka yang di ketik menjadi format angka
        price.value = formatprice(this.value, 'Rp. ');
    });
    /* Fungsi formatprice */
    function formatprice(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            price = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            price += separator + ribuan.join('.');
        }
        price = split[1] != undefined ? price + ',' + split[1] : price;
        return prefix == undefined ? price : (price ? 'Rp. ' + price : '');
    }
</script>
@endpush
