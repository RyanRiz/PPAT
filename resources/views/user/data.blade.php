@extends('layouts.main')

@section('main')
    <div class="pb-4">
        <a class="btn btn-primary" href="{{ route('form.user') }}" role="button"><i class="mdi mdi-file-plus"></i>
            Tambah User
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="data_User">
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
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-secondary me-2" href="{{ route('show.user', $data->id) }}" role="button">Rincian</a>
                                </div>
                            </td>
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
    $(document).ready( function () {
        $('#data_User').DataTable( {
            "paging":   true,
            "info":     true,
            "searching": true,
            "order": true
        });
    } );
</script>

@endpush
