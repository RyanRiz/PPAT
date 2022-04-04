@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="dataPermohonan">
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
                        <td>{{ $data->tanggal_pembelian }}</td>
                        <td>{{ $data->nama_barang }}</td>
                        <td>{{ $data->jumlah_barang }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $total }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-primary me-2" href="{{ route('update-form.pengeluaran', $data->id) }}" role="button">Rincian</a>
                                <form action="{{ route('delete.pengeluaran', $data->id) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                    <button class="btn btn-danger me-2">Hapus</button>
                                </form>
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
        $('#dataPermohonan').DataTable( {
            "order": [[ 1, "desc" ]]
        } );
    } );
</script>
@endpush
