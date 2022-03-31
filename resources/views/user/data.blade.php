@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="dataUser">
                <thead>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </thead>
                <tfoot>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataUser').DataTable( {
            "order": [[ 1, "desc" ]]
        } );
    } );
</script>
@endpush