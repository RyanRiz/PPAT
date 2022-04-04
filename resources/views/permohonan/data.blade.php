@extends('layouts.main')

@section('main')
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
