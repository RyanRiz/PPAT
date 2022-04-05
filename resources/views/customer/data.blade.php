@extends('layouts.main')

@section('main')

    <div class="pb-4">
        <a class="btn btn-primary" href="{{ route('form.customer') }}" role="button"><i class="mdi mdi-file-plus"></i>
            Tambah Customer
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="dataNasabah">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>KTP</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>No. Handphone</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $number => $data)
                        <tr>
                           <td>{{ $number +1 }}</td>
                           <td>{{ $data->ktp }}</td>
                           <td>{{ $data->nama }}</td>
                           <td>{{ $data->tanggal_lahir }}</td>
                           <td>{{ $data->telepon }}</td>
                           <td>{{ $data->pekerjaan }}</td>
                           <td>{{ $data->alamat }}</td>
                           <td>
                               <div class="d-flex">
                                   <a class="btn btn-secondary me-2" href="{{ route('show.customer', $data->id) }}" role="button">Rincian</a>
                               </div>
                           </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-primary text-white">
                    <th>No</th>
                    <th>KTP</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Lahir</th>
                    <th>No. Handphone</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataNasabah').DataTable( {
            "order": [[ 1, "desc" ]]
        } );
    } );
</script>
@endpush
