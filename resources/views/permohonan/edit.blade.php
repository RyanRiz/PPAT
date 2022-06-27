@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.permohonan', $data->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-5">
                        <label>No. KTP Pihak Pertama</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required name="ktp_pembeli" id="ktp_pembeli" type="text" class="form-control @error('ktp_pembeli') is-invalid @enderror" value="{{ $data->ktp_pembeli }}" placeholder="No. KTP Pihak Pertama" aria-label="Nama Pembeli" aria-describedby="button-addon">
                        @error('ktp_pembeli')
                        <div class="invalid-feedback">
                            No. KTP tidak ditemukan!
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label>No. KTP Pihak Kedua</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required name="ktp_penjual" id="ktp_penjual" type="text" class="form-control @error('ktp_penjual') is-invalid @enderror" value="{{ $data->ktp_penjual }}" placeholder="No. KTP Pihak Kedua" aria-label="Nama Penjual" aria-describedby="button-addon2">
                        @error('ktp_penjual')
                        <div class="invalid-feedback">
                            No. KTP tidak ditemukan!
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label>Jenis Permohonan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="jenis_permohonan" aria-label="Default select example">
                            <option value="Jual Beli" @if ($data->jenis_permohonan == "Jual Beli") selected @endif>Jual Beli</option>
                            <option value="Hibah" @if ($data->jenis_permohonan == "Hibah") selected @endif>Hibah</option>
                            <option value="APHB" @if ($data->jenis_permohonan == "APHB") selected @endif>APHB</option>
                            <option value="Tukar Menukar" @if ($data->jenis_permohonan == "Tukar Menukar") selected @endif>Tukar Menukar</option>
                            <option value="Pendaftaran Tanah" @if ($data->jenis_permohonan == "Pendaftaran Tanah") selected @endif>Pendaftaran Tanah</option>
                            <option value="Pemecahan/Pemisahan" @if ($data->jenis_permohonan == "Pemecahan/Pemisahan") selected @endif>Pemecahan/Pemisahan</option>
                            <option value="Penggabungan" @if ($data->jenis_permohonan == "Penggabungan") selected @endif>Penggabungan</option>
                            <option value="Roya" @if ($data->jenis_permohonan == "Roya") selected @endif>Roya</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label>Petugas</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="petugas" aria-label="Default select example">
                            @foreach ($workers as $worker)
                                <option value="{{ $worker->id }}" @if ($data->petugas == $worker->id) selected @endif>{{ $worker->nama }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Dibuat Permohonan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" class="form-control" value="{{ $data->tanggal_permohonan }}" name="tanggal_permohonan" placeholder="Tanggal Dibuat Permohonan">
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Deadline Permohonan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" class="form-control" value="{{ $data->tanggal_deadline }}" name="tanggal_deadline" placeholder="Tanggal Deadline Permohonan">
                    </div>
                    <div class="col-md-5">
                        <label>Jenis Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select class="form-select" name="jenis_sertifikat" aria-label="Default select example">
                            <option value="SHM" @if (!empty($data->jenis_sertifikat)) @if ($data->jenis_sertifikat == "SHM") selected @endif @endif>SHM</option>
                            <option value="SHGB" @if (!empty($data->jenis_sertifikat)) @if ($data->jenis_sertifikat == "SHGB") selected @endif @endif>SHGB</option>
                            <option value="SHP" @if (!empty($data->jenis_sertifikat)) @if ($data->jenis_sertifikat == "SHP") selected @endif @endif>SHP</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label>No. Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" @if (!empty($data->sertifikat)) value="{{ $data->sertifikat }}" @endif class="form-control @error('sertifikat') is-invalid @enderror" name="sertifikat" placeholder="No. Sertifikat">
                        @error('sertifikat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Terbit Sertifikat</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" class="form-control" @if (!empty($data->tanggal_sertifikat)) value="{{ $data->tanggal_sertifikat }}" @endif name="tanggal_sertifikat" placeholder="Tanggal Terbit Sertifikat">
                    </div>
                    <div class="col-md-5">
                        <label>NOP</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->nop)) value="{{ $data->nop }}" @endif name="nop" placeholder="NOP">
                    </div>
                    <div class="col-md-5">
                        <label>NIB</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->nib)) value="{{ $data->nib }}" @endif name="nib" placeholder="NIB">
                    </div>
                    <div class="col-md-5">
                        <label>No Ukur</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->no_ukur)) value="{{ $data->no_ukur }}" @endif name="no_ukur" placeholder="No Ukur">
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Ukur</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" class="form-control" @if (!empty($data->tanggal_ukur)) value="{{ $data->tanggal_ukur }}" @endif name="tanggal_ukur" placeholder="Tanggal Ukur">
                    </div>
                    <div class="col-md-5">
                        <label>Luas Bangunan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->luas_bangunan)) value="{{ $data->luas_bangunan }}" @endif name="luas_bangunan" placeholder="Luas Bangunan">
                    </div>
                    <div class="col-md-5">
                        <label>Luas Tanah</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->luas_tanah)) value="{{ $data->luas_tanah }}" @endif name="luas_tanah" placeholder="Luas Tanah">
                    </div>
                    <div class="col-md-5">
                        <label>Lokasi Objek</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <textarea class="form-control" name="lokasi_objek" placeholder="Lokasi Objek">@if (!empty($data->lokasi_objek)) {{ $data->lokasi_objek }} @endif</textarea>
                    </div>
                    <div class="col-md-5">
                        <label>Kav</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->kav)) value="{{ $data->kav }}" @endif name="kav" placeholder="Kav">
                    </div>
                    <div class="col-md-5">
                        <label>Kelurahan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->kelurahan)) value="{{ $data->kelurahan }}" @endif name="kelurahan" placeholder="Kelurahan">
                    </div>
                    <div class="col-md-5">
                        <label>Kecamatan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->kecamatan)) value="{{ $data->kecamatan }}" @endif name="kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="col-md-5">
                        <label>Kabupaten/Kota</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->kabupaten)) value="{{ $data->kabupaten }}" @endif name="kabupaten" placeholder="Kabupaten">
                    </div>
                    <div class="col-md-5">
                        <label>Provinsi</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->provinsi)) value="{{ $data->provinsi }}" @endif name="provinsi" placeholder="Provinsi">
                    </div>
                    <div class="col-md-5">
                        <label>Nilai Transaksi</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required id="nilai" type="text" class="form-control" @if (!empty($data->keterangan)) value="Rp. {{ number_format($data->nilai_transaksi, 0, ',', '.') }}" @endif name="nilai_transaksi" placeholder="Nilai Transaksi">
                    </div>
                    <div class="col-md-5">
                        <label>Terbilang</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->terbilang)) value="{{ $data->terbilang }}" @endif name="terbilang" placeholder="Terbilang">
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Bayar BPHTB</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" class="form-control" @if (!empty($data->tanggal_bayar_bphtb)) value="{{ $data->tanggal_bayar_bphtb }}" @endif name="tanggal_bayar_bphtb" placeholder="Tanggal Bayar BPHTB">
                    </div>
                    <div class="col-md-5">
                        <label>Jumlah Bayar BPHTB</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" id="jumlahbphtb" class="form-control" @if (!empty($data->jumlah_bayar_bphtb)) value="Rp. {{ number_format($data->jumlah_bayar_bphtb, 0, ',', '.') }}" @endif name="jumlah_bayar_bphtb" placeholder="Jumlah Bayar BPHTB">
                    </div>
                    <div class="col-md-5">
                        <label>Kode Bayar BPHTB</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->kode_bayar_bphtb)) value="{{ $data->kode_bayar_bphtb }}" @endif name="kode_bayar_bphtb" placeholder="Kode Bayar BPHTB">
                    </div>
                    <div class="col-md-5">
                        <label>Tanggal Bayar PPH</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="date" class="form-control" @if (!empty($data->tanggal_bayar_pph)) value="{{ $data->tanggal_bayar_pph }}" @endif name="tanggal_bayar_pph" placeholder="Tanggal Bayar PPH">
                    </div>
                    <div class="col-md-5">
                        <label>Jumlah Bayar PPH</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" id="jumlahpph" class="form-control" @if (!empty($data->jumlah_bayar_pph)) value="Rp. {{ number_format($data->jumlah_bayar_pph, 0, ',', '.') }}" @endif name="jumlah_bayar_pph" placeholder="Jumlah Bayar PPH">
                    </div>
                    <div class="col-md-5">
                        <label>NTPN</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->ntpn)) value="{{ $data->ntpn }}" @endif name="ntpn" placeholder="NTPN">
                    </div>
                    <div class="col-md-5">
                        <label>Kuasa</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" value="{{ $data->kuasa }}" name="kuasa" placeholder="Kuasa">
                    </div>
                    <div class="col-md-5">
                        <label>Keterangan</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input required type="text" class="form-control" @if (!empty($data->keterangan)) value="{{ $data->keterangan }}" @endif name="keterangan" placeholder="Cont. Cash">
                    </div>
                    <div class="col-md-5">
                        <label>Status</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select name="confirmed" class="form-select" aria-label="Default select example">
                            <option value="1" @if ($data->confirmed == 1) selected @endif>Selesai</option>
                            <option value="0" @if ($data->confirmed == 0) selected @endif>Belum Selesai</option>
                          </select>
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

@push('scripts')
<script>
    var price = document.getElementById('nilai');
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
    var bayarbphtb = document.getElementById('jumlahbphtb');
    bayarbphtb.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatbayarbphtb() untuk mengubah angka yang di ketik menjadi format angka
        bayarbphtb.value = formatbayarbphtb(this.value, 'Rp. ');
    });
    /* Fungsi formatbayarbphtb */
    function formatbayarbphtb(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            bayarbphtb = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            bayarbphtb += separator + ribuan.join('.');
        }
        bayarbphtb = split[1] != undefined ? bayarbphtb + ',' + split[1] : bayarbphtb;
        return prefix == undefined ? bayarbphtb : (bayarbphtb ? 'Rp. ' + bayarbphtb : '');
    }
</script>

<script>
    var bayarpph = document.getElementById('jumlahpph');
    bayarpph.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatbayarpph() untuk mengubah angka yang di ketik menjadi format angka
        bayarpph.value = formatbayarpph(this.value, 'Rp. ');
    });
    /* Fungsi formatbayarpph */
    function formatbayarpph(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            bayarpph = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            bayarpph += separator + ribuan.join('.');
        }
        bayarpph = split[1] != undefined ? bayarpph + ',' + split[1] : bayarpph;
        return prefix == undefined ? bayarpph : (bayarpph ? 'Rp. ' + bayarpph : '');
    }
</script>
@endpush
