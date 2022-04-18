<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.data', [
            "title" => "Data Customer",
            "datas" => Customers::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.input', [
            "title" => "Input Customer"
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
            "ktp" => "required|unique:customers,ktp",
            "nama" => "required",
            "tanggal_lahir" => "required",
            "tempat_lahir" => "required",
            "telepon" => "required",
            "pekerjaan" => "required",
            "npwp" => "required",
            "alamat" => "required"
        ]);

        $input = new Customers;

        $input->ktp = $request->ktp;
        $input->nama = $request->nama;
        $input->tempat_lahir = $request->tempat_lahir;
        $input->tanggal_lahir = $request->tanggal_lahir;
        $input->telepon = $request->telepon;
        $input->pekerjaan = $request->pekerjaan;
        $input->npwp = $request->npwp;
        $input->alamat = $request->alamat;

        $input->save();
        return redirect()->route('index.customer')->with('message','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Customers::find($id);

        return view('customer.show', [
            "title" => "Data Customer",
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
        $data = Customers::find($id);

        return view('customer.edit', [
            "title" => "Data Customer",
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
        $data = Customers::find($id);

        $data->ktp = $request->ktp;
        $data->nama = $request->nama;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->telepon = $request->telepon;
        $data->pekerjaan = $request->pekerjaan;
        $data->npwp = $request->npwp;
        $data->alamat = $request->alamat;
        $data->update();

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
        $data = Customers::findOrFail($id);
        $data->delete();
        return redirect()->route('index.customer')->with('message','Data berhasil dihapus!');
    }
}
