@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between mb-5">
                    <div>
                        <a class="btn btn-outline-secondary" href="{{ route('index.permohonan') }}" role="button"><i
                                class="mdi mdi-step-backward-2"></i>
                            Kembali
                        </a>
                    </div>
                    <div>
                        <div class="d-flex">
                            <div class="pe-2">
                                <a class="btn btn-secondary" href="{{ route('edit.permohonan', $data->id) }}"
                                    role="button"><i class="mdi mdi-pencil-box"></i>
                                    Sunting
                                </a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="mdi mdi-delete"></i>
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <label>Nama Pihak Pertama</label>
                </div>
                <div class="col-md-5 form-group">
                    <input readonly type="text" class="form-control"
                        value="{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('nama')->implode('[]', '"') }}"
                        placeholder="Nama Pembeli" aria-label="Nama Pembeli" aria-describedby="button-addon">
                </div>
                <div class="col-md-2 gx-0 form-group">
                    <a class="btn btn-outline-secondary"
                        href="{{ route('show.customer',$customer->where('ktp', $data->ktp_pembeli)->pluck('id')->implode('[]', '"')) }}"
                        id="button-addon" role="button">Detail Customer</a>
                </div>
                <div class="col-md-5">
                    <label>Nama Pihak Kedua</label>
                </div>
                <div class="col-md-5 form-group">
                    <input readonly type="text" class="form-control"
                        value="{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}"
                        placeholder="Nama Penjual" aria-label="Nama Penjual" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2 gx-0 form-group">
                    <a class="btn btn-outline-secondary"
                        href="{{ route('show.customer',$customer->where('ktp', $data->ktp_penjual)->pluck('id')->implode('[]', '"')) }}"
                        id="button-addon2" role="button">Detail Customer</a>
                </div>
                <div class="col-md-5">
                    <label>Jenis Permohonan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" name="jenis_permohonan" value="{{ $data->jenis_permohonan }}"
                        class="form-control">
                </div>
                {{-- <div class="col-md-5">
                    <label>Petugas</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control" value="{{ $workers->where('id', $data->petugas)->pluck('nama')->implode('[]', '"') }}" name="petugas" placeholder="Petugas">
                </div> --}}
                <div class="col-md-5">
                    <label>Tanggal Dibuat Permohonan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" class="form-control" value="{{ $data->tanggal_permohonan }}"
                        name="tanggal_permohonan" placeholder="Tanggal Dibuat Permohonan">
                </div>
                <div class="col-md-5">
                    <label>Tanggal Deadline Permohonan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" class="form-control" value="{{ $data->tanggal_deadline }}"
                        name="tanggal_deadline" placeholder="Tanggal Deadline Permohonan">
                </div>
                <div class="col-md-5">
                    <label>Status</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        value="{{ $data->confirmed === 1 ? 'Selesai' : 'Belum Selesai' }}" name="confirmed"
                        placeholder="confirmed">
                </div>
                <div class="col-md-5">
                    <label>Jenis Sertifikat</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" name="jenis_sertifikat"
                        @if (!empty($data->jenis_sertifikat)) value="{{ $data->jenis_sertifikat }}" @endif
                        class="form-control">
                </div>
                <div class="col-md-5">
                    <label>No. Sertifikat</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" @if (!empty($data->ertifikat)) value="{{ $data->sertifikat }}" @endif
                        class="form-control name="sertifikat" placeholder="No. Sertifikat">
                </div>
                <div class="col-md-5">
                    <label>Tanggal Terbit Sertifikat</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" class="form-control"
                        @if (!empty($data->tanggal_sertifikat)) value="{{ $data->tanggal_sertifikat }}" @endif
                        name="tanggal_sertifikat" placeholder="Tanggal Terbit Sertifikat">
                </div>
                <div class="col-md-5">
                    <label>NOP</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->nop)) value="{{ $data->nop }}" @endif name="nop"
                        placeholder="NOP">
                </div>
                <div class="col-md-5">
                    <label>NIB</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->nib)) value="{{ $data->nib }}" @endif name="nib"
                        placeholder="NIB">
                </div>
                <div class="col-md-5">
                    <label>No Ukur</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->no_ukur)) value="{{ $data->no_ukur }}" @endif name="no_ukur"
                        placeholder="No Ukur">
                </div>
                <div class="col-md-5">
                    <label>Tanggal Ukur</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" class="form-control"
                        @if (!empty($data->tanggal_ukur)) value="{{ $data->tanggal_ukur }}" @endif name="tanggal_ukur"
                        placeholder="Tanggal Ukur">
                </div>
                <div class="col-md-5">
                    <label>Luas Bangunan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->luas_bangunan)) value="{{ $data->luas_bangunan }}" @endif name="luas_bangunan"
                        placeholder="Luas Bangunan">
                </div>
                <div class="col-md-5">
                    <label>Luas Tanah</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->luas_tanah)) value="{{ $data->luas_tanah }}" @endif name="luas_tanah"
                        placeholder="Luas Tanah">
                </div>
                <div class="col-md-5">
                    <label>Lokasi Objek</label>
                </div>
                <div class="col-md-7 form-group">
                    <textarea readonly class="form-control" name="lokasi_objek" placeholder="Lokasi Objek">
@if (!empty($data->lokasi_objek))
{{ $data->lokasi_objek }}
@endif
</textarea>
                </div>
                <div class="col-md-5">
                    <label>Kav</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->kav)) value="{{ $data->kav }}" @endif name="kav"
                        placeholder="Kav">
                </div>
                <div class="col-md-5">
                    <label>Kelurahan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->kelurahan)) value="{{ $data->kelurahan }}" @endif name="kelurahan"
                        placeholder="Kelurahan">
                </div>
                <div class="col-md-5">
                    <label>Kecamatan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->kecamatan)) value="{{ $data->kecamatan }}" @endif name="kecamatan"
                        placeholder="Kecamatan">
                </div>
                <div class="col-md-5">
                    <label>Kabupaten/Kota</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->kabupaten)) value="{{ $data->kabupaten }}" @endif name="kabupaten"
                        placeholder="Kabupaten">
                </div>
                <div class="col-md-5">
                    <label>Provinsi</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->provinsi)) value="{{ $data->provinsi }}" @endif name="provinsi"
                        placeholder="Provinsi">
                </div>
                <div class="col-md-5">
                    <label>Nilai Transaksi</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly id="nilai" type="text" class="form-control"
                        @if (!empty($data->keterangan)) value="Rp. {{ number_format($data->nilai_transaksi, 0, ',', '.') }}" @endif
                        name="nilai_transaksi" placeholder="Nilai Transaksi">
                </div>
                <div class="col-md-5">
                    <label>Terbilang</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->terbilang)) value="{{ $data->terbilang }}" @endif name="terbilang"
                        placeholder="Terbilang">
                </div>
                <div class="col-md-5">
                    <label>Tanggal Bayar BPHTB</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->tanggal_bayar_bphtb)) value="{{ $data->tanggal_bayar_bphtb }}" @endif
                        name="tanggal_bayar_bphtb" placeholder="Tanggal Bayar BPHTB">
                </div>
                <div class="col-md-5">
                    <label>Jumlah Bayar BPHTB</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->jumlah_bayar_bphtb)) value="Rp. {{ number_format($data->jumlah_bayar_bphtb, 0, ',', '.') }}" @endif
                        name="jumlah_bayar_bphtb" placeholder="Jumlah Bayar BPHTB">
                </div>
                <div class="col-md-5">
                    <label>Kode Bayar BPHTB</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->kode_bayar_bphtb)) value="{{ $data->kode_bayar_bphtb }}" @endif
                        name="kode_bayar_bphtb" placeholder="Kode Bayar BPHTB">
                </div>
                <div class="col-md-5">
                    <label>Tanggal Bayar PPH</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->tanggal_bayar_pph)) value="{{ $data->tanggal_bayar_pph }}" @endif
                        name="tanggal_bayar_pph" placeholder="Tanggal Bayar PPH">
                </div>
                <div class="col-md-5">
                    <label>Jumlah Bayar PPH</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->jumlah_bayar_pph)) value="Rp. {{ number_format($data->jumlah_bayar_pph, 0, ',', '.') }}" @endif
                        name="jumlah_bayar_pph" placeholder="Jumlah Bayar PPH">
                </div>
                <div class="col-md-5">
                    <label>NTPN</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->ntpn)) value="{{ $data->ntpn }}" @endif name="ntpn"
                        placeholder="NTPN">
                </div>
                <div class="col-md-5">
                    <label>Kuasa</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->kuasa)) value="{{ $data->kuasa }}" @endif name="kuasa"
                        placeholder="Kuasa">
                </div>
                <div class="col-md-5">
                    <label>Keterangan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control"
                        @if (!empty($data->keterangan)) value="{{ $data->keterangan }}" @endif name="keterangan"
                        placeholder="Cont. Cash">
                </div>
                <div class="col-md-12 pt-3">
                    <p class="text-end fst-italic">Terakhir diperbarui @if (!empty($data->updated_at))
                            {{ $data->updated_at }}
                        @else
                            Null
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-heading">
        <h3>Rincian Biaya Permohonan</h3>
    </div>

    <div class="card">
        <div class="card-body">
            <div>
                <form action="{{ route('store.detail', $data->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Keterangan Rincian Biaya</label>
                                <input type="text" class="form-control" name="rincian_biaya"
                                    id="formGroupExampleInput" placeholder="Keterangan Rincian Biaya">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="biaya" class="form-label">Biaya</label>
                                <input type="text" class="form-control" name="biaya" id="biaya"
                                    placeholder="Biaya">
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <button class="btn btn-primary" type="submit">Tambahkan Rincian</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="pt-4">
                <table id="rincian" class="table table-striped">
                    <thead class="bg-primary text-white">
                        <th>No.</th>
                        <th>Rincian Biaya</th>
                        <th>Biaya</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($data->details as $number => $detail)
                            <tr>
                                <td>{{ $number + 1 }}</td>
                                <td>{{ $detail->rincian_biaya }}</td>
                                <td>Rp. {{ number_format($detail->biaya, 0, ',', '.') }}</td>
                                <td>
                                    <div class="d-flex">
                                        <form action="{{ route('delete.detail', $detail->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">
                                                <i class="mdi mdi-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-4 d-flex justify-content-between">
                    <div>
                        <h3 class="text-black">Total Rincian Biaya Permohonan :</h3>
                    </div>
                    <div>
                        <h3 class="text-black">Rp.
                            {{ number_format($data->details()->where('orders_id', $data->id)->sum('biaya'),0,',','.') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Peringatan!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <h4 class="text-center mb-2 text-black">Apakah yakin ingin menghapus data?</h4
                            class="text-center mb-2 text-black">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="pe-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div>
                            <form action="{{ route('delete.permohonan', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#rincian').DataTable({
                "paging": false,
                "info": false,
                "searching": false,
                "order": false
            });
        });
    </script>

    <script>
        var price = document.getElementById('biaya');
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
