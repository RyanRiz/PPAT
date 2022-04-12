@extends('layouts.main')

@section('main')

<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="col-md-12 d-flex justify-content-between mb-5">
                <div>
                    <a class="btn btn-outline-secondary" href="{{ route('index.karyawan') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
                        Kembali
                    </a>
                </div>
                <div>
                    <div class="d-flex">
                        <div class="pe-2">
                            <a class="btn btn-secondary" href="{{ route('edit.karyawan', $data->id) }}" role="button"><i class="mdi mdi-pencil-box"></i>
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
            <div class="row">
                <div class="col-md-5">
                    <label>Nama Lengkap</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" value="{{ $data->nama }}" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="col-md-5">
                    <label>Tempat Lahir</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" value="{{ $data->tempat_lahir }}" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
                <div class="col-md-5">
                    <label>Tanggal Lahir</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" value="{{ $data->tanggal_lahir }}" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>
                <div class="col-md-5">
                    <label>Status Hubungan</label>
                </div>
                <div class="col-md-7 form-group">
                    <input type="text" name="status" class="form-control" value="{{ $data->status }}" placeholder="Status" readonly>
                </div>
                <div class="col-md-5">
                    <label>Tanggungan (Kalau Kawin)</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="number" class="form-control" value="{{ $data->tanggungan }}" value="0" min="0" name="tanggungan" placeholder="Tanggungan (Kalau Kawin)">
                </div>
                <div class="col-md-5">
                    <label>Awal Masa Kerja</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" value="{{ $data->awal_kerja }}" class="form-control" name="awal_kerja" placeholder="Awal Masa Kerja">
                </div>
                <div class="col-md-5">
                    <label>Akhir Masa Kerja</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="date" class="form-control" value="{{ $data->akhir_kerja }}" name="akhir_kerja" placeholder="Akhir Masa Kerja(Bisa Dikosongkan)">
                </div>
                <div class="col-md-5">
                    <label>Gaji</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="number" value="{{ $data->gaji }}" min="0" class="form-control" name="gaji" placeholder="Gaji">
                </div>
                <div class="col-md-5">
                    <label>Bonus</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="number" value="{{ $data->bonus }}" min="0" class="form-control" name="bonus" placeholder="Bonus">
                </div>
                <div class="col-md-12 pt-3">
                    <p class="text-end fst-italic">Terakhir diperbarui {{ $data->updated_at }}</p>
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
                    <h4 class="text-center mb-2 text-black">Apakah yakin ingin menghapus data?</h4 class="text-center mb-2 text-black">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="pe-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div>
                        <form action="{{ route('delete.karyawan', $data->id) }}" method="POST">
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
