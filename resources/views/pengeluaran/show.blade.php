@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.pengeluaran', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6 form-floating mb-3">
                        <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" placeholder="abc" value="{{ $data->tanggal_pembelian }}">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                    </div>
                    <div class="col-6 form-floating mb-3">
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="abc" value="{{ $data->nama_barang }}">
                        <label for="nama_barang">Nama Barang</label>
                    </div>
                    <div class="col-6 form-floating mb-3">
                        <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="abc" value="{{ $data->jumlah_barang }}">
                        <label for="jumlah_barang">Jumlah Barang</label>
                    </div>
                    <div class="col-6 form-floating mb-3">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="abc" value="{{ $data->harga }}">
                        <label for="harga">Harga</label>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection