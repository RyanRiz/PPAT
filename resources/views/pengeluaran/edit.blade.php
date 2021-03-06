@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.pengeluaran', $data->id) }}" class="p-2" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-5">
                        <label>Tanggal Pembelian</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="date" value="{{ $data->tanggal_pembelian }}" class="form-control" name="tanggal_pembelian" placeholder="Tanggal Pembelian">
                    </div>
                    <div class="col-md-5">
                        <label>Nama Barang</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" value="{{ $data->nama_barang }}" class="form-control" name="nama_barang" placeholder="Nama Barang">
                    </div>
                    <div class="col-md-5">
                        <label>Jumlah Barang</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" value="{{ $data->jumlah_barang }}" class="form-control" name="jumlah_barang" placeholder="Jumlah Barang">
                    </div>
                    <div class="col-md-5">
                        <label>Harga</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" id="harga" value="Rp. {{ number_format($data->harga, 0, ',', '.') }}" class="form-control" name="harga" placeholder="Harga">
                    </div>
                    <div class="pt-5 col-sm-12 d-flex justify-content-between">
                        <div>
                            <a class="btn btn-outline-secondary" href="{{ route('index.pengeluaran') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
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
    var price = document.getElementById('harga');
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
