@extends('layouts.main')

@section('main')
    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4 ms-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Customers</h6>
                                    <h6 class="font-extrabold mb-0">{{ $customers->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4 ms-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldDocument"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Permohonan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $orders->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4 ms-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBuy"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Pengeluaran</h6>
                                    <h6 class="font-extrabold mb-0">Rp. {{ number_format($outcomes, 0, ',', '.') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4 ms-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Pengingat</h6>
                                    <h6 class="font-extrabold mb-0">{{ $orders->where('confirmed', 0)->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-auto gx-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5>Permohonan Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="dataNew">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Pembeli</th>
                                    <th>Jenis Permohonan</th>
                                    <th>Jenis Sertifikat</th>
                                    <th>Penjual</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $number => $data)
                                    <tr>
                                        <td>{{ $customers->where('ktp', $data->ktp_pembeli)->pluck('nama')->implode('[]', '"') }}</td>
                                        <td>{{ $data->jenis_permohonan }}</td>
                                        <td>{{ $data->jenis_sertifikat }}</td>
                                        <td>{{ $customers->where('ktp', $data->ktp_penjual)->pluck('nama')->implode('[]', '"') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5>Pengingat Deadline</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="dataNotice">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Pembeli</th>
                                    <th>Jenis Permohonan</th>
                                    <th>Tanggal Deadline</th>
                                    <th>Penjual</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
                                @foreach ($deadlines as $number => $deadline)
                                    <tr>
                                        <td>{{ $customers->where('ktp', $deadline->ktp_pembeli)->pluck('nama')->implode('[]', '"') }}</td>
                                        <td>{{ $deadline->jenis_permohonan }}</td>
                                        <td>{{ date('d-m-Y', strtotime($deadline->tanggal_deadline)) }}</td>
                                        <td>{{ $customers->where('ktp', $deadline->ktp_penjual)->pluck('nama')->implode('[]', '"') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataNew').DataTable( {
            "paging":   false,
            "info":     false,
            "searching": false,
            "order": false
        } );
    } );
</script>
<script>
    $(document).ready(function() {
        $('#dataNotice').DataTable( {
            "paging":   false,
            "info":     false,
            "searching": false,
            "order": false
        } );
    } );
</script>
@endpush
