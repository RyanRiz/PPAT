<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use PDF;
use App\Models\Customers;
use App\Models\Workers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ExportController extends Controller
{
    public function pernyataan($id)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();

    	return view('export.show.pernyataan', [
            'title' => 'Data Surat Pernyataan',
            'data' => $data,
            'customer' => $customer
        ]);
    }

    public function cetak_pernyataan($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $kabupaten = $request->kabupaten;
        $huruf = $request->huruf;

    	$pdf = PDF::loadview('export.beli',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'kota' => $kabupaten,
            'huruf' => $huruf
            ]);
    	return $pdf->stream('pernyataan-beli-tanah.pdf');
    }

    public function kuasa($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $worker = Workers::all();

    	return view('export.show.suratkuasa', [
            'title' => 'Data Surat Kuasa',
            'data' => $data,
            'customer' => $customer,
            'workers' => $worker
        ]);
    }

    public function cetak_kuasa($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $worker = Workers::all();
        $keterangan = $request->keterangan;
        $ultah_pembeli = Carbon::parse($request->ultah_pembeli)->isoFormat('D MMMM Y');
        $ultah_penjual = Carbon::parse($request->ultah_penjual)->isoFormat('D MMMM Y');

    	$pdf = PDF::loadview('export.kuasa',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'keterangan' => $keterangan,
            'worker' => $worker,
            'pembeli' => $ultah_pembeli,
            'penjual' => $ultah_penjual,
            ]);
    	return $pdf->stream('surat-kuasa.pdf');
    }

    public function npwp($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

        return view('export.show.suratnpwp', [
            'title' => 'Data Surat Pernyataan NPWP',
            'data' => $data,
            'customer' => $customer,
            'date' => $date
        ]);
    }

    public function cetak_npwp($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $ultah_pembeli = Carbon::parse($request->ultah_pembeli)->isoFormat('D MMMM Y');

    	$pdf = PDF::loadview('export.npwp',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'pembeli' => $ultah_pembeli
            ]);
    	return $pdf->stream('pernyataan-npwp.pdf');
    }

    public function cetak_pajak($id)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

    	$pdf = PDF::loadview('export.pajak',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date
            ]);
    	return $pdf->stream('pernyataan-npwp.pdf');
    }

    public function penghasilan($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

        return view('export.show.pajakpenghasilan', [
            'title' => 'Data Pajak Penghasilan',
            'data' => $data,
            'customer' => $customer,
            'date' => $date
        ]);
    }

    public function cetak_penghasilan($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $cara = $request->cara;
        $rekening = $request->rekening;
        $bank = $request->bank;
        $pemilik = $request->pemilik;

    	$pdf = PDF::loadview('export.penghasilan',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'cara' => $cara,
            'rekening' => $rekening,
            'bank' => $bank,
            'pemilik' => $pemilik,
            ]);
    	return $pdf->stream('pajak-penghasilan.pdf');
    }

    public function tidak($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

        return view('export.show.tidak-npwp', [
            'title' => 'Data Tidak Menggunakan NPWP',
            'data' => $data,
            'customer' => $customer,
            'date' => $date
        ]);
    }

    public function cetak_tidak($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $status = $request->status;
        $tanggungan = $request->tanggungan;
        $tahun = $request->tahun;
        $penghasilan = $request->penghasilan;

    	$pdf = PDF::loadview('export.tidak-npwp',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'status' => $status,
            'tanggungan' => $tanggungan,
            'tahun' => $tahun,
            'penghasilan' => $penghasilan,
            ]);
    	return $pdf->stream('tidak-memiliki-npwp.pdf');
    }

    public function pengajuan($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

        return view('export.show.pengajuan', [
            'title' => 'Data Pengajuan',
            'data' => $data,
            'customer' => $customer,
            'date' => $date
        ]);
    }

    public function cetak_pengajuan($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $tanggal = $request->tanggal_lahir;
        $umur = Carbon::parse($tanggal)->age;
        $letak = $request->letak;
        $tambahan1 = $request->tambahan1;
        $tambahan2 = $request->tambahan2;

    	$pdf = PDF::loadview('export.pengajuan',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'letak' => $letak,
            'tambahan1' => $tambahan1,
            'tambahan2' => $tambahan2,
            'umur' => $umur
            ]);
    	return $pdf->stream('surat-pengajuan.pdf');
    }

    public function pengecekan($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

        return view('export.show.pengecekan', [
            'title' => 'Data Pengecekan',
            'data' => $data,
            'customer' => $customer,
            'date' => $date
        ]);
    }

    public function cetak_pengecekan($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $surat = $request->surat;
        $jenis = $request->jenis;
        $letak = $request->letak;
        $tambahan1 = $request->tambahan1;
        $tambahan2 = $request->tambahan2;

    	$pdf = PDF::loadview('export.pengecekan',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'nomor' => $surat,
            'letak' => $letak,
            'jenis' => $jenis,
            'tambahan1' => $tambahan1,
            'tambahan2' => $tambahan2,
            ]);
    	return $pdf->stream('surat-pengajuan.pdf');
    }

    public function nama($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $worker = Workers::all();

        return view('export.show.nama', [
            'title' => 'Data Balik Nama',
            'data' => $data,
            'customer' => $customer,
            'date' => $date,
            'workers' => $worker
        ]);
    }

    public function cetak_nama($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $worker = Workers::all();
        $jenis = $request->jenis;
        $ultah_pembeli = Carbon::parse($request->ultah_pembeli)->isoFormat('D MMMM Y');
        $ultah_penjual = Carbon::parse($request->ultah_penjual)->isoFormat('D MMMM Y');

    	$pdf = PDF::loadview('export.nama',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'jenis' => $jenis,
            'worker' => $worker,
            'pembeli' => $ultah_pembeli,
            'penjual' => $ultah_penjual,
            ]);
    	return $pdf->stream('balik-nama.pdf');
    }

    public function menerima($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

        return view('export.show.menerima', [
            'title' => 'Data Penerima',
            'data' => $data,
            'customer' => $customer,
            'date' => $date,
        ]);
    }

    public function cetak_menerima($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $jenis = $request->jenis;
        $ultah_pembeli = Carbon::parse($request->ultah_pembeli)->isoFormat('D MMMM Y');

    	$pdf = PDF::loadview('export.menerima',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'jenis' => $jenis,
            'pembeli' => $ultah_pembeli,
            ]);
    	return $pdf->stream('pernyataan-sudah-menerima.pdf');
    }

    public function order($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

        return view('export.show.order', [
            'title' => 'Data Permohonan ke Kantor Pertanahan',
            'data' => $data,
            'customer' => $customer,
            'date' => $date,
        ]);
    }

    public function cetak_order($id, Request $request)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $jenis = $request->jenis;
        $surat = $request->surat;
        $nomor = $request->nomor;
        $hal = $request->hal;

    	$pdf = PDF::loadview('export.order',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date,
            'hal' => $hal,
            'nomor' => $nomor,
            'surat' => $surat,
            'jenis' => $jenis,
            ]);
    	return $pdf->stream('permohonan-kantor-pertanahan.pdf');
    }
}
