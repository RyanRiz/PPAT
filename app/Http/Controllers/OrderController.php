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
        ]);

        $input = new Orders;

        $input->ktp_pembeli = $request->ktp_pembeli;
        $input->ktp_penjual = $request->ktp_penjual;
        $input->jenis_permohonan = $request->jenis_permohonan;
        $input->petugas = $request->petugas;
        $input->tanggal_permohonan = $request->tanggal_permohonan;
        $input->tanggal_deadline = $request->tanggal_deadline;
        $input->confirmed = false;

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

    public function store_certificate($id, Request $request)
    {
        $order = Orders::find($id);

        $certi = new OrderCertificates();
        $certi->sertifikat = $request->sertifikat;
        $certi->jenis_sertifikat = $request->jenis_sertifikat;
        $certi->nop = $request->nop;
        $certi->nib = $request->nib;
        $certi->no_ukur = $request->no_ukur;
        $certi->tanggal_ukur = $request->tanggal_ukur;
        $order->certificates()->save($certi);
        return redirect()->back()->with('message','Sertifikat berhasil ditambahkan!');
    }

    public function store_place($id, Request $request)
    {
        $order = Orders::find($id);

        $place = new OrderPlaces();
        $place->luas_tanah = $request->luas_tanah;
        $place->luas_bangunan = $request->luas_bangunan;
        $place->lokasi_objek = $request->lokasi_objek;
        $place->kelurahan = $request->kelurahan;
        $place->kecamatan = $request->kecamatan;
        $place->kabupaten = $request->kabupaten;
        $place->provinsi = $request->provinsi;
        $place->kav = $request->kav;

        $order->place()->save($place);
        return redirect()->back()->with('message','Lokasi berhasil ditambahkan!');
    }

    public function store_transaction($id, Request $request)
    {
        $order = Orders::find($id);

        $transaction = new OrderTransactions();
        $transaction->nilai_transaksi = $request->nilai_transaksi;
        $transaction->terbilang = $request->terbilang;
        $transaction->tanggal_bayar_bphtb = $request->tanggal_bayar_bphtb;
        $transaction->tanggal_bayar_pph = $request->tanggal_bayar_pph;
        $transaction->jumlah_bayar_bphtb = $request->jumlah_bayar_bphtb;
        $transaction->jumlah_bayar_pph = $request->jumlah_bayar_pph;
        $transaction->kode_bayar_bphtb = $request->kode_bayar_bphtb;
        $transaction->ntpn = $request->ntpn;
        $transaction->keterangan = $request->keterangan;

        $order->transactions()->save($transaction);
        return redirect()->back()->with('message','Transaksi berhasil ditambahkan!');

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
        $certificate = Orders::find($id)->certificates;
        $place = Orders::find($id)->place;
        $transaction = Orders::find($id)->transactions;
        $workers = Workers::where('job', 1)->get();
        return view('permohonan.show', [
            'title' => 'Data Permohonan',
            'data' => $data,
            'customer' => $customer,
            'workers' => $workers,
            'certificate' => $certificate,
            'place' => $place,
            'transaction' => $transaction
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
        $certificate = Orders::find($id)->certificates;
        $place = Orders::find($id)->place;
        $transaction = Orders::find($id)->transactions;
        $workers = Workers::where('job', 1)->get();
        return view('permohonan.edit', [
            'title' => 'Data Permohonan',
            'data' => $data,
            'customer' => $customer,
            'workers' => $workers,
            'certificate' => $certificate,
            'place' => $place,
            'transaction' => $transaction
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
        $datas = Orders::all();
        $input = $datas->find($id);

        $nilai_transaksi = (int)str_replace([',', '.', 'Rp', ' '], '', $request->nilai_transaksi);

        $input->ktp_pembeli = $request->ktp_pembeli;
        $input->ktp_penjual = $request->ktp_penjual;
        $input->jenis_permohonan = $request->jenis_permohonan;
        $input->petugas = $request->petugas;
        $input->tanggal_permohonan = $request->tanggal_permohonan;
        $input->tanggal_deadline = $request->tanggal_deadline;
        $input->confirmed = $request->confirmed;

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
