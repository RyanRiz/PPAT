@extends('layouts.main')

@section('main')

    <div class="pb-4">
        <a class="btn btn-primary" href="{{ route('form.pengeluaran') }}" role="button"><i class="mdi mdi-file-plus"></i>
            Tambah Pengeluaran
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="dataPengeluaran">
                <thead class="bg-primary text-white">
                    <th>No</th>
                    <th>Tanggal Pembelian</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($datas as $number => $data)
                    <tr>
                        <td>{{ $number +1 }}</td>
                        <td>{{ date('d-m-Y', strtotime($data->tanggal_pembelian)) }}</td>
                        <td>{{ $data->nama_barang }}</td>
                        <td>{{ $data->jumlah_barang }}</td>
                        <td>Rp. {{ number_format($data->harga, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($data->total_harga, 0, ',', '.') }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-secondary me-2" href="{{ route('show.pengeluaran', $data->id) }}" role="button">Rincian</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <th>No</th>
                    <th>Tanggal Pembelian</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataPengeluaran').DataTable( {
            "order": [[ 0, "asc" ]]
        } );
    } );
</script>
@endpush
