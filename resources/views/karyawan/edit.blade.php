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
                        <label>No. KTP</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input value="{{ $data->ktp }}" required type="text" class="form-control" name="ktp" placeholder="No. KTP">
                    </div>
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
                        <label>Alamat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <textarea required name="alamat" name="alamat" placeholder="Alamat" class="form-control">{{ $data->alamat }}</textarea>
                    </div>
                    <div class="col-md-5">
                        <label>Pekerjaan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required value="{{ $data->pekerjaan }}" type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                    </div>
                    <div class="col-md-5">
                        <label>No. Handphone</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required value="{{ $data->handphone }}" type="text" class="form-control" name="handphone" placeholder="No. Handphone">
                    </div>
                    <div class="col-md-5">
                        <label>Email</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="email" value="{{ $data->email }}" class="form-control" name="email" placeholder="Email">
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
                        <input required id="gaji" type="text" min="0" value="Rp. {{ number_format($data->gaji, 0, ',', '.') }}" class="form-control" name="gaji" placeholder="Gaji">
                    </div>
                    <div class="col-md-5">
                        <label>Bonus</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input id="bonus" required type="text" min="0" value="Rp. {{ number_format($data->bonus, 0, ',', '.') }}" class="form-control" name="bonus" placeholder="Bonus">
                    </div>
                    <div class="col-md-5">
                        <label>Status</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select name="job" class="form-select" aria-label="Default select example">
                            <option value="1" @if ($data->job == 1) selected @endif>Aktif</option>
                            <option value="0" @if ($data->job == 0) selected @endif>Tidak Aktif</option>
                          </select>
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

@push('scripts')
<script>
    var price = document.getElementById('bonus');
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

<script>
    var harga = document.getElementById('gaji');
    harga.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatharga() untuk mengubah angka yang di ketik menjadi format angka
        harga.value = formatharga(this.value, 'Rp. ');
    });
    /* Fungsi formatharga */
    function formatharga(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            harga = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            harga += separator + ribuan.join('.');
        }
        harga = split[1] != undefined ? harga + ',' + split[1] : harga;
        return prefix == undefined ? harga : (harga ? 'Rp. ' + harga : '');
    }
</script>
@endpush
