@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('input.pengeluaran') }}" class="p-2" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                        <label>Tanggal Pembelian</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="date" class="form-control" name="tanggal_pembelian" placeholder="Tanggal Pembelian">
                    </div>
                    <div class="col-md-5">
                        <label>Nama Barang</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                    </div>
                    <div class="col-md-5">
                        <label>Jumlah Barang</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="jumlah_barang" placeholder="Jumlah Barang">
                    </div>
                    <div class="col-md-5">
                        <label>Harga</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="harga" placeholder="Harga">
                    </div>
                    <div class="pt-3 col-sm-12 d-flex justify-content-between">
                        <div>
                            <a class="btn btn-outline-secondary" href="{{ route('show.pengeluaran') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
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
