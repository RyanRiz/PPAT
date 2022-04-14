<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\OrderDetails;
use App\Models\Orders;
use Illuminate\Http\Request;

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
        return view('permohonan.input', [
            'title' => 'Input Permohonan'
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
            "jenis_sertifikat" => "required",
            "sertifikat" => "required|unique:orders,sertifikat",
            "nop" => "required",
            "lokasi_objek" => "required",
            "luas_bangunan" => "required",
            "luas_tanah" => "required",
            "kelurahan" => "required",
            "kecamatan" => "required",
            "kabupaten" => "required",
            "provinsi" => "required",
            "nilai_transaksi" => "required",
            "tanggal_permohonan" => "required",
            "tanggal_deadline" => "required"
        ]);

        $input = new Orders;

        $ktp_pembeli = $request->ktp_pembeli;
        $ktp_penjual = $request->ktp_penjual;
        $nilai_transaksi = (int)str_replace([',', '.', 'Rp', ' '], '', $request->nilai_transaksi);

        $input->ktp_pembeli = $ktp_pembeli;
        $input->ktp_penjual = $ktp_penjual;
        $input->jenis_permohonan = $request->jenis_permohonan;
        $input->jenis_sertifikat = $request->jenis_sertifikat;
        $input->sertifikat = $request->sertifikat;
        $input->nop = $request->nop;
        $input->lokasi_objek = $request->lokasi_objek;
        $input->luas_bangunan = $request->luas_bangunan;
        $input->luas_tanah = $request->luas_tanah;
        $input->kelurahan = $request->kelurahan;
        $input->kecamatan = $request->kecamatan;
        $input->kabupaten = $request->kabupaten;
        $input->provinsi = $request->provinsi;
        $input->nilai_transaksi = $nilai_transaksi;
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
        return view('permohonan.show', [
            'title' => 'Data Permohonan',
            'data' => $data,
            'customer' => $customer
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
        $datas = Orders::all();
        $data = $datas->find($id);
        $customer = Customers::all();
        return view('permohonan.edit', [
            'title' => 'Data Permohonan',
            'data' => $data,
            'customer' => $customer
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

        $input->jenis_permohonan = $request->jenis_permohonan;
        $input->jenis_sertifikat = $request->jenis_sertifikat;
        $input->sertifikat = $request->sertifikat;
        $input->nop = $request->nop;
        $input->lokasi_objek = $request->lokasi_objek;
        $input->luas_bangunan = $request->luas_bangunan;
        $input->luas_tanah = $request->luas_tanah;
        $input->kelurahan = $request->kelurahan;
        $input->kecamatan = $request->kecamatan;
        $input->kabupaten = $request->kabupaten;
        $input->provinsi = $request->provinsi;
        $input->nilai_transaksi = $nilai_transaksi;
        $input->tanggal_permohonan = $request->tanggal_permohonan;
        $input->tanggal_deadline = $request->tanggal_deadline;
        $input->confirmed = $request->boolean('status');

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
