@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12 d-flex justify-content-between mb-5">
                <div>
                    <a class="btn btn-outline-secondary" href="{{ route('index.pengeluaran') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
                        Kembali
                    </a>
                </div>
                <div>
                    <div class="d-flex">
                        <div class="pe-2">
                            <a class="btn btn-secondary" href="{{ route('edit.pengeluaran', $data->id) }}" role="button"><i class="mdi mdi-pencil-box"></i>
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
                    <label>Tanggal Pembelian</label>
                </div>
                <div class="col-md-7 form-group">
                    <input type="date" readonly value="{{ $data->tanggal_pembelian }}" class="form-control" name="tanggal_pembelian" placeholder="Tanggal Pembelian">
                </div>
                <div class="col-md-5">
                    <label>Nama Barang</label>
                </div>
                <div class="col-md-7 form-group">
                    <input type="text" readonly value="{{ $data->nama_barang }}" class="form-control" name="nama_barang" placeholder="Nama Barang">
                </div>
                <div class="col-md-5">
                    <label>Jumlah Barang</label>
                </div>
                <div class="col-md-7 form-group">
                    <input type="text" readonly value="{{ $data->jumlah_barang }}" class="form-control" name="jumlah_barang" placeholder="Jumlah Barang">
                </div>
                <div class="col-md-5">
                    <label>Harga</label>
                </div>
                <div class="col-md-7 form-group">
                    <input type="text" readonly value="{{ $data->harga }}" class="form-control" name="harga" placeholder="Harga">
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
                        <form action="{{ route('delete.pengeluaran', $data->id) }}" method="POST">
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
