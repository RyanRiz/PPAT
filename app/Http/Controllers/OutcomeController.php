<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcomes;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengeluaran.data', [
            'title' => 'Data Pengeluaran',
            "datas" => Outcomes::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengeluaran.input', [
            'title' => 'Input Pengeluaran'
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
            "tanggal_pembelian" => "required",
            "nama_barang" => "required",
            "jumlah_barang" => "required",
            "harga" => "required"
        ]);

        $input = New Outcomes;

        $jumlah = $request->jumlah_barang;
        $harga = $request->harga;

        $input->tanggal_pembelian = $request->tanggal_pembelian;
        $input->nama_barang = $request->nama_barang;
        $input->jumlah_barang = $jumlah;
        $input->harga = $harga;

        $total = $jumlah * $harga;
        $input->total_harga = $total;

        $input->save();
        return redirect()->route('index.pengeluaran')->with('message','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Outcomes::find($id);

        return view('pengeluaran.show', [
            "title" => "Data Pengeluaran",
            "data" => $data
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
        $data = Outcomes::find($id);

        return view('pengeluaran.edit', [
            "title" => "Data Pengeluaran",
            "data" => $data
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
        $input = Outcomes::find($id);

        $jumlah = $request->jumlah_barang;
        $harga = $request->harga;

        $input->tanggal_pembelian = $request->tanggal_pembelian;
        $input->nama_barang = $request->nama_barang;
        $input->jumlah_barang = $jumlah;
        $input->harga = $harga;

        $total = $jumlah * $harga;
        $input->total_harga = $total;

        $input->update();
        return redirect()->route('index.pengeluaran')->with('message','Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Outcomes::findOrFail($id);
        $data->delete();
        return redirect()->route('index.pengeluaran')->with('message','Data berhasil dihapus!');
    }
}
