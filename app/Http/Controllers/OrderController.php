<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Workers;
use App\Models\Customers;
use App\Models\OrderPlaces;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Models\OrderCertificates;
use App\Models\OrderTransactions;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Orders::all();
        $customer = Customers::all();
        return view('permohonan.data', [
            'title' => 'Data Permohonan',
            'datas' => $datas,
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workers = Workers::where('job', 1)->get();
        return view('permohonan.input', [
            'title' => 'Input Permohonan',
            'workers' => $workers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "ktp_pembeli" => "required|exists:customers,ktp",
            "ktp_penjual" => "required|exists:customers,ktp",
            "jenis_permohonan" => "required",
            "tanggal_permohonan" => "required",
            "tanggal_deadline" => "required",
            "petugas" => "required",
            "sertifikat" => "required",
            "jenis_sertifikat" => "required",
            "tanggal_sertifikat" => "required",
            "nop" => "required",
            "nib" => "required",
            "no_ukur" => "required",
            "tanggal_ukur" => "required",
            "luas_tanah" => "required",
            "luas_bangunan" => "required",
            "lokasi_objek" => "required",
            "kelurahan" => "required",
            "kecamatan" => "required",
            "kabupaten" => "required",
            "provinsi" => "required",
            "kav" => "required",
            "nilai_transaksi" => "required",
            "terbilang" => "required",
            "tanggal_bayar_bphtb" => "required",
            "tanggal_bayar_pph" => "required",
            "jumlah_bayar_bphtb" => "required",
            "jumlah_bayar_pph" => "required",
            "kode_bayar_bphtb" => "required",
            "ntpn" => "required",
            "kuasa" => "required",
            "keterangan" => "required",
        ]);

        $input = new Orders;
        $biayabphtb = (int)str_replace([',', '.', 'Rp', ' '], '', $request->jumlah_bayar_bphtb);
        $biayapph = (int)str_replace([',', '.', 'Rp', ' '], '', $request->jumlah_bayar_pph);
        $biayatransaksi = (int)str_replace([',', '.', 'Rp', ' '], '', $request->nilai_transaksi);

        $input->ktp_pembeli = $request->ktp_pembeli;
        $input->ktp_penjual = $request->ktp_penjual;
        $input->jenis_permohonan = $request->jenis_permohonan;
        $input->petugas = $request->petugas;
        $input->tanggal_permohonan = $request->tanggal_permohonan;
        $input->tanggal_deadline = $request->tanggal_deadline;
        $input->confirmed = false;
        $input->sertifikat = $request->sertifikat;
        $input->jenis_sertifikat = $request->jenis_sertifikat;
        $input->tanggal_sertifikat = $request->tanggal_sertifikat;
        $input->nop = $request->nop;
        $input->nib = $request->nib;
        $input->no_ukur = $request->no_ukur;
        $input->tanggal_ukur = $request->tanggal_ukur;
        $input->luas_tanah = $request->luas_tanah;
        $input->luas_bangunan = $request->luas_bangunan;
        $input->lokasi_objek = $request->lokasi_objek;
        $input->kelurahan = $request->kelurahan;
        $input->kecamatan = $request->kecamatan;
        $input->kabupaten = $request->kabupaten;
        $input->provinsi = $request->provinsi;
        $input->kav = $request->kav;
        $input->nilai_transaksi = $biayatransaksi;
        $input->terbilang = $request->terbilang;
        $input->tanggal_bayar_bphtb = $request->tanggal_bayar_bphtb;
        $input->tanggal_bayar_pph = $request->tanggal_bayar_pph;
        $input->jumlah_bayar_bphtb = $biayabphtb;
        $input->jumlah_bayar_pph = $biayapph;
        $input->kode_bayar_bphtb = $request->kode_bayar_bphtb;
        $input->ntpn = $request->ntpn;
        $input->kuasa = $request->kuasa;
        $input->keterangan = $request->keterangan;

        $input->save();
        return redirect()->route('index.permohonan')->with('message','Data berhasil ditambahkan!');
    }

    public function store_detail($id, Request $request){
        $order = Orders::find($id);

        $biaya = (int)str_replace([',', '.', 'Rp', ' '], '', $request->biaya);

        $detail = New OrderDetails();
        $detail->rincian_biaya = $request->rincian_biaya;
        $detail->biaya = $biaya;

        $order = $order->details()->save($detail);
        return redirect()->back()->with('message','Rincian berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $workers = Workers::where('job', 1)->get();
        return view('permohonan.show', [
            'title' => 'Data Permohonan',
            'data' => $data,
            'customer' => $customer,
            'workers' => $workers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Orders::find($id);
        $customer = Customers::all();
        $workers = Workers::where('job', 1)->get();
        return view('permohonan.edit', [
            'title' => 'Data Permohonan',
            'data' => $data,
            'customer' => $customer,
            'workers' => $workers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "ktp_pembeli" => "required|exists:customers,ktp",
            "ktp_penjual" => "required|exists:customers,ktp",
        ]);

        $datas = Orders::all();
        $input = $datas->find($id);

        $biayabphtb = (int)str_replace([',', '.', 'Rp', ' '], '', $request->jumlah_bayar_bphtb);
        $biayapph = (int)str_replace([',', '.', 'Rp', ' '], '', $request->jumlah_bayar_pph);
        $biayatransaksi = (int)str_replace([',', '.', 'Rp', ' '], '', $request->nilai_transaksi);

        $input->ktp_pembeli = $request->ktp_pembeli;
        $input->ktp_penjual = $request->ktp_penjual;
        $input->jenis_permohonan = $request->jenis_permohonan;
        $input->petugas = $request->petugas;
        $input->tanggal_permohonan = $request->tanggal_permohonan;
        $input->tanggal_deadline = $request->tanggal_deadline;
        $input->confirmed = $request->confirmed;
        $input->sertifikat = $request->sertifikat;
        $input->jenis_sertifikat = $request->jenis_sertifikat;
        $input->tanggal_sertifikat = $request->tanggal_sertifikat;
        $input->nop = $request->nop;
        $input->nib = $request->nib;
        $input->no_ukur = $request->no_ukur;
        $input->tanggal_ukur = $request->tanggal_ukur;
        $input->luas_tanah = $request->luas_tanah;
        $input->luas_bangunan = $request->luas_bangunan;
        $input->lokasi_objek = $request->lokasi_objek;
        $input->kelurahan = $request->kelurahan;
        $input->kecamatan = $request->kecamatan;
        $input->kabupaten = $request->kabupaten;
        $input->provinsi = $request->provinsi;
        $input->kav = $request->kav;
        $input->nilai_transaksi = $biayatransaksi;
        $input->terbilang = $request->terbilang;
        $input->tanggal_bayar_bphtb = $request->tanggal_bayar_bphtb;
        $input->tanggal_bayar_pph = $request->tanggal_bayar_pph;
        $input->jumlah_bayar_bphtb = $biayabphtb;
        $input->jumlah_bayar_pph = $biayapph;
        $input->kode_bayar_bphtb = $request->kode_bayar_bphtb;
        $input->ntpn = $request->ntpn;
        $input->kuasa = $request->kuasa;
        $input->keterangan = $request->keterangan;

        $input->save();
        return redirect()->back()->with('message','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Orders::find($id);
        $datas->delete();
        return redirect()->route('index.permohonan')->with('message','Data berhasil dihapus!');
    }

    public function destroy_detail($id)
    {
        $data = OrderDetails::find($id);
        $data->delete();
        return redirect()->back()->with('message','Rincian berhasil dihapus!');
    }
}
