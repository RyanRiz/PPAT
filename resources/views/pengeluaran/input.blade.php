@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('input.pengeluaran') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6 form-floating mb-3">
                        <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" placeholder="abc">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                    </div>
                    <div class="col-6 form-floating mb-3">
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="abc">
                        <label for="nama_barang">Nama Barang</label>
                    </div>
                    <div class="col-6 form-floating mb-3">
                        <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="abc">
                        <label for="jumlah_barang">Jumlah Barang</label>
                    </div>
                    <div class="col-6 form-floating mb-3">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="abc">
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