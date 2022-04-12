@extends('layouts.main')

@section('main')

<div class="pb-4">
    <a class="btn btn-primary" href="{{ route('form.karyawan') }}" role="button"><i class="mdi mdi-file-plus"></i>
        Tambah Karyawan
    </a>
</div>
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <table class="table table-striped" id="dataKaryawan">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $number => $data)
                        <tr>
                            <td>{{ $number +1 }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->tanggal_lahir }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-secondary me-2" href="{{ route('show.karyawan', $data->id) }}" role="button">Rincian</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataKaryawan').DataTable(  );
    } );
</script>
@endpush
