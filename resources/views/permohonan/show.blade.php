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
                    <input readonly type="text" class="form-control" value="{{ $data->lokasi_objek }}" name="lokasi_objek" placeholder="Lokasi Objek">
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
                <div class="col-md-12 pt-3">
                    <p class="text-end fst-italic">Terakhir diperbarui {{ $data->updated_at }}</p>
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
