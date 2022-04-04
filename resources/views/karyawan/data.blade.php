@extends('layouts.main')

@section('main')

<div class="card">
    <div class="card-content">
        <div class="card-body">
            <table class="table table-striped" id="dataKaryawan">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
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
