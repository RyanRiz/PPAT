@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body d-block overflow-auto">
            <table class="table table-striped" id="dataPengeluaran">
                <thead class="bg-primary text-white">
                    <th>No</th>
                    <th>Bulan Pembelian</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    @foreach ($datas as $number => $data)
                        <tr>
                            <td>{{ $number + 1 }}</td>
                            <td>{{ $data->months }}</td>
                            <td>Rp. {{ number_format($data->total, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <th>No</th>
                    <th>Bulan Pembelian</th>
                    <th>Total</th>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataPengeluaran').DataTable({
                "order": [
                    [0, "asc"]
                ]
            });
        });
    </script>
@endpush
