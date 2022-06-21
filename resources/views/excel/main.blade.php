@extends('layouts.main')

@section('main')
<div class="col-md-12 d-flex mb-4 justify-content-end">
    <div>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-file-upload"></i>
            Import
        </button>
    </div>
</div>

<div class="card">
    <div class="card-body d-block overflow-auto">
        <table class="table table-stripped pe-4" id="database">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pihak I</th>
                <th>Tanggal Lahir Pihak I</th>
                <th>Umur Pihak I</th>
                <th>Pekerjaan Pihak I</th>
                <th>Alamat Pihak I</th>
                <th>No. KTP Pihak I</th>
                <th>NPWP Pihak I</th>
                <th>Telpon Pihak I</th>
                <th>Pihak II</th>
                <th>Tanggal Lahir Pihak II</th>
                <th>Umur Pihak II</th>
                <th>Pekerjaan Pihak II</th>
                <th>Alamat Pihak II</th>
                <th>No. KTP Pihak II</th>
                <th>NPWP Pihak II</th>
                <th>Telpon Pihak II</th>
                <th>Alamat Objek</th>
                <th>Desa/Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten/Kota</th>
                <th>Provinsi</th>
                <th>NOP</th>
                <th>No/Kav</th>
                <th>Luas Tanah</th>
                <th>Nilai Transaksi</th>
                <th>Terbilang</th>
                <th>Jenis Akta</th>
                <th>Sertifikat</th>
                <th>NIB</th>
                <th>No. Ukur</th>
                <th>Tanggal Ukur</th>
                <th>Kuasa</th>
                <th>Tanggal Bayar BPHTB</th>
                <th>Jumlah Bayar BPHTB</th>
                <th>Kode Bayar BPHTB</th>
                <th>Tanggal Bayar PPH</th>
                <th>Jumlah Bayar PPH</th>
                <th>NTPN</th>
                <th>Estimasi Selesai</th>
                <th>Keterangan</th>
            </thead>
            <tbody>
                @foreach ($orders as $number => $order)
                <tr>
                    <td>{{ $number +1 }}</td>
                    <td>{{ date('d-m-Y', strtotime($order->tanggal_permohonan)) }}</td>
                    @foreach($pembeli as $ktp)
                    @foreach ($customers->where('ktp', $ktp) as $beli)
                    <td>{{ $beli->nama }}</td>
                    <td>{{ date('d-m-Y', strtotime($beli->tanggal_lahir)) }}</td>
                    <td>{{ $beli->umur }}</td>
                    <td>{{ $beli->pekerjaan }}</td>
                    <td>{{ $beli->alamat }}</td>
                    <td>{{ $beli->ktp }}</td>
                    <td>{{ $beli->npwp }}</td>
                    <td>{{ $beli->telepon }}</td>
                    @endforeach
                    @endforeach
                    @foreach($penjual as $ktp)
                    @foreach ($customers->where('ktp', $ktp) as $jual)
                    <td>{{ $jual->nama }}</td>
                    <td>{{ date('d-m-Y', strtotime($jual->tanggal_lahir)) }}</td>
                    <td>{{ $jual->umur }}</td>
                    <td>{{ $jual->pekerjaan }}</td>
                    <td>{{ $jual->alamat }}</td>
                    <td>{{ $jual->ktp }}</td>
                    <td>{{ $jual->npwp }}</td>
                    <td>{{ $jual->telepon }}</td>
                    @endforeach
                    @endforeach

                    <td>{{ $order->lokasi_objek }}</td>
                    <td>{{ $order->kelurahan }}</td>
                    <td>{{ $order->kecamatan }}</td>
                    <td>{{ $order->kabupaten }}</td>
                    <td>{{ $order->provinsi }}</td>
                    <td>{{ $order->nop }}</td>
                    <td>{{ $order->kav }}</td>
                    <td>{{ $order->luas_tanah }}</td>
                    <td>Rp. {{ number_format($order->nilai_transaksi, 0, ',', '.') }}</td>
                    <td>{{ $order->terbilang }}</td>
                    <td>{{ $order->jenis_permohonan }}</td>
                    <td>{{ $order->jenis_sertifikat }} {{ $order->sertifikat }}</td>
                    <td>{{ $order->nib }}</td>
                    <td>{{ $order->no_ukur }}</td>
                    <td>{{ date('d-m-Y', strtotime($order->tanggal_ukur)) }}</td>
                    <td>{{ $order->kuasa }}</td>
                    <td>{{ date('d-m-Y', strtotime($order->tanggal_bayar_bphtb)) }}</td>
                    <td>Rp. {{ number_format($order->jumlah_bayar_bphtb, 0, ',', '.') }}</td>
                    <td>{{ $order->kode_bayar_bphtb }}</td>
                    <td>{{ date('d-m-Y', strtotime($order->tanggal_bayar_pph)) }}</td>
                    <td>Rp. {{ number_format($order->jumlah_bayar_pph, 0, ',', '.') }}</td>
                    <td>{{ $order->ntpn }}</td>
                    <td>{{ date('d-m-Y', strtotime($order->tanggal_deadline)) }}</td>
                    <td>{{ $order->keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pihak I</th>
                <th>Tanggal Lahir Pihak I</th>
                <th>Umur Pihak I</th>
                <th>Pekerjaan Pihak I</th>
                <th>Alamat Pihak I</th>
                <th>No. KTP Pihak I</th>
                <th>NPWP Pihak I</th>
                <th>Telpon Pihak I</th>
                <th>Pihak II</th>
                <th>Tanggal Lahir Pihak II</th>
                <th>Umur Pihak II</th>
                <th>Pekerjaan Pihak II</th>
                <th>Alamat Pihak II</th>
                <th>No. KTP Pihak II</th>
                <th>NPWP Pihak II</th>
                <th>Telpon Pihak II</th>
                <th>Alamat Objek</th>
                <th>Desa/Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten/Kota</th>
                <th>Provinsi</th>
                <th>NOP</th>
                <th>No/Kav</th>
                <th>Luas Tanah</th>
                <th>Nilai Transaksi</th>
                <th>Terbilang</th>
                <th>Jenis Akta</th>
                <th>Sertifikat</th>
                <th>NIB</th>
                <th>No. Ukur</th>
                <th>Tanggal Ukur</th>
                <th>Kuasa</th>
                <th>Tanggal Bayar BPHTB</th>
                <th>Jumlah Bayar BPHTB</th>
                <th>Kode Bayar BPHTB</th>
                <th>Tanggal Bayar PPH</th>
                <th>Jumlah Bayar PPH</th>
                <th>NTPN</th>
                <th>Estimasi Selesai</th>
                <th>Keterangan</th>
            </tfoot>
        </table>
    </div>
</div>

<!-- Modal Upload -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Import File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('import') }}" method="post">
                    @csrf
                    <div>
                        <input type="file" class="form-control mb-3" name="import">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="pe-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#database').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
@endpush