@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between mb-5">
                    <div>
                        <a class="btn btn-outline-secondary" href="{{ route('index.permohonan') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
                            Kembali
                        </a>
                    </div>
                    <div>
                        <div class="d-flex">
                            <div class="pe-2">
                                <a class="btn btn-secondary" href="{{ route('edit.permohonan', $data->id) }}" role="button"><i class="mdi mdi-pencil-box"></i>
                                    Sunting
                                </a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-delete"></i>
                                    Hapus
                                  </button>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <label>Nama Penjual</label>
                </div>
                <div class="col-md-5 form-group">
                    <input readonly type="text" class="form-control" value="{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}" placeholder="Nama Penjual" aria-label="Nama Penjual" aria-describedby="button-addon2">
                </div>
                <div class="col-md-2 gx-0 form-group">
                    <a class="btn btn-outline-secondary" href="{{ route('show.customer', $customer->where('ktp', $data->ktp_penjual)->pluck('id')->implode('[]', '"')) }}" id="button-addon2" role="button">Detail Customer</a>
                </div>
                <div class="col-md-5">
                    <label>Jenis Permohonan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" name="jenis_permohonan" value="{{ $data->jenis_permohonan }}" class="form-control">
                </div>
                <div class="col-md-5">
                    <label>Jenis Sertifikat</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" name="jenis_sertifikat" value="{{ $data->jenis_sertifikat }}" class="form-control">
                </div>
                <div class="col-md-5">
                    <label>No. Sertifikat</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" value="{{ $data->sertifikat }}" class="form-control @error('sertifikat') is-invalid @enderror" name="sertifikat" placeholder="No. Sertifikat">
                    @error('sertifikat')
                    <div class="alert alert-danger mt-2 alert-dismissible fade show">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label>NOP</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control" value="{{ $data->nop }}" name="nop" placeholder="NOP">
                </div>
                <div class="col-md-5">
                    <label>Lokasi Objek</label>
                </div>
                <div class="col-md-7 form-group">
                    <textarea readonly class="form-control" name="lokasi_objek" placeholder="Lokasi Objek">{{ $data->lokasi_objek }}</textarea>
                </div>
                <div class="col-md-5">
                    <label>Luas Bangunan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control" value="{{ $data->luas_bangunan }}" name="luas_bangunan" placeholder="Luas Bangunan">
                </div>
                <div class="col-md-5">
                    <label>Luas Tanah</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control" value="{{ $data->luas_tanah }}" name="luas_tanah" placeholder="Luas Tanah">
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
                    <input readonly type="text" class="form-control" value="{{ $data->kabupaten }}" name="kabupaten" placeholder="Kabupaten">
                </div>
                <div class="col-md-5">
                    <label>Provinsi</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control" value="{{ $data->provinsi }}" name="provinsi" placeholder="Provinsi">
                </div>
                <div class="col-md-5">
                    <label>Tanggal Dibuat Permohonan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" class="form-control" value="{{ $data->tanggal_permohonan }}" name="tanggal_permohonan" placeholder="Tanggal Dibuat Permohonan">
                </div>
                <div class="col-md-5">
                    <label>Tanggal Deadline Permohonan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" class="form-control" value="{{ $data->tanggal_deadline }}" name="tanggal_deadline" placeholder="Tanggal Deadline Permohonan">
                </div>
                <div class="col-md-5">
                    <label>Status</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" class="form-control" value="{{ ($data->confirmed === 1) ? 'Selesai' : 'Belum Selesai' }}" name="provinsi" placeholder="Provinsi">
                </div>
                <div class="col-md-12 pt-3">
                    <p class="text-end fst-italic">Terakhir diperbarui {{ $data->updated_at }}</p>
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
                                <input type="text" class="form-control" name="rincian_biaya" id="formGroupExampleInput" placeholder="Keterangan Rincian Biaya">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="biaya" class="form-label">Biaya</label>
                                <input type="text" class="form-control" name="biaya" id="biaya" placeholder="Biaya">
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
                                <td>{{ $number +1 }}</td>
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
                        <h4 class="text-center mb-2 text-black">Apakah yakin ingin menghapus data?</h4 class="text-center mb-2 text-black">
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
        $('#rincian').DataTable( {
            "paging":   false,
            "info":     false,
            "searching": false,
            "order": false
        } );
    } );
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
