@extends('layouts.main')

@section('main')
    <div class="pb-4">
        <a class="btn btn-primary" href="{{ route('form.permohonan') }}" role="button"><i class="mdi mdi-file-plus"></i>
            Tambah Permohonan
        </a>
    </div>
    <div class="card">
        <div class="card-body d-block overflow-auto">
            <table class="table table-striped" id="dataPermohonan">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Pihak Pertama</th>
                        <th>Jenis Permohonan</th>
                        <th>Pihak Kedua</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Deadline</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $number => $data)
                        <tr>
                            <td>{{ $number + 1 }}</td>
                            <td>{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('nama')->implode('[]', '"') }}</td>
                            <td>{{ $data->jenis_permohonan }}</td>
                            <td>{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}</td>
                            <td>{{ date('d-m-Y', strtotime($data->tanggal_permohonan)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($data->tanggal_deadline)) }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-secondary me-2" href="{{ route('show.permohonan', $data->id) }}"
                                        role="button">Rincian</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Pihak Pertama</th>
                        <th>Jenis Permohonan</th>
                        <th>Pihak Kedua</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Deadline</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataPermohonan').DataTable();
        });
    </script>
@endpush
