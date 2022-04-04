@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="dataUser">
                <thead class="bg-primary text-white">
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Opsi</th>
                </thead>
                <tbody>
                    @foreach ($datas as $number => $data)
                        <tr>
                            <td>{{ $number +1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->username }}</td>
                            <td>{{ $data->roles }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Opsi</th>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataUser').DataTable(  );
    } );
</script>
@endpush
