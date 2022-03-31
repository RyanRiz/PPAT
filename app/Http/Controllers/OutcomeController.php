<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcomes;
use PhpParser\Node\Expr\New_;
use Symfony\Component\Console\Output\Output;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = Outcomes::sum(Outcomes::raw('jumlah_barang * harga'));
        return view('pengeluaran.data', [
            'title' => 'Data Pengeluaran',
            "datas" => Outcomes::all(),
            'total' => $total
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
        $input = New Outcomes;

        $input->tanggal_pembelian = $request->tanggal_pembelian;
        $input->nama_barang = $request->nama_barang;
        $input->jumlah_barang = $request->jumlah_barang;
        $input->harga = $request->harga;

        $input->save();
        return redirect()->route('show.pengeluaran');
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
        //
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

        $input->tanggal_pembelian = $request->tanggal_pembelian;
        $input->nama_barang = $request->nama_barang;
        $input->jumlah_barang = $request->jumlah_barang;
        $input->harga = $request->harga;

        $input->update();
        return redirect()->route('show.pengeluaran');
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
        return redirect()->route('show.pengeluaran');
    }
}
