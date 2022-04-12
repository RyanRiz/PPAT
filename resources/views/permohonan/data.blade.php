@extends('layouts.main')

@section('main')
    <div class="pb-4">
        <a class="btn btn-primary" href="{{ route('form.permohonan') }}" role="button"><i class="mdi mdi-file-plus"></i>
            Tambah Permohonan
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="dataPermohonan">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Pembeli</th>
                        <th>Jenis Permohonan</th>
                        <th>Jenis Sertifikat</th>
                        <th>No Sertifikat</th>
                        <th>Penjual</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $number => $data)
                        <tr>
                            <td>{{ $number +1 }}</td>
                            <td>{{ $customer->where('ktp', $data->ktp_pembeli)->pluck('nama')->implode('[]', '"') }}</td>
                            <td>{{ $data->jenis_permohonan }}</td>
                            <td>{{ $data->jenis_sertifikat }}</td>
                            <td>{{ $data->sertifikat }}</td>
                            <td>{{ $customer->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-secondary me-2" href="{{ route('show.permohonan', $data->id) }}" role="button">Rincian</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Pembeli</th>
                        <th>Jenis Permohonan</th>
                        <th>Jenis Sertifikat</th>
                        <th>No Sertifikat</th>
                        <th>Penjual</th>
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
        $('#dataPermohonan').DataTable(  );
    } );
</script>
@endpush
