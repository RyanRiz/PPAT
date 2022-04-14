<?php

namespace App\Http\Controllers;

use App\Models\Workers;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Workers::all();
        return view('karyawan.data', [
            'title' => 'Data Karyawan',
            "datas" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.input', [
            'title' => 'Input Karyawan'
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
            "ktp" => "required|unique:workers,ktp",
            "nama" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required",
            "alamat" => "required",
            "pekerjaan" => "required",
            "handphone" => "required",
            "email" => "required",
            "status" => "required",
            "awal_kerja" => "required",
            "gaji" => "required",
            "bonus" => "required",
            "job" => "required",
        ]);

        $input = new Workers;
        $gaji = (int)str_replace([',', '.', 'Rp', ' '], '', $request->gaji);
        $bonus = (int)str_replace([',', '.', 'Rp', ' '], '', $request->bonus);

        $input->ktp = $request->ktp;
        $input->nama = $request->nama;
        $input->tempat_lahir = $request->tempat_lahir;
        $input->tanggal_lahir = $request->tanggal_lahir;
        $input->alamat = $request->alamat;
        $input->pekerjaan = $request->pekerjaan;
        $input->handphone = $request->handphone;
        $input->email = $request->email;
        $input->status = $request->status;
        $input->tanggungan = $request->tanggungan;
        $input->awal_kerja = $request->awal_kerja;
        $input->gaji = $gaji;
        $input->bonus = $bonus;
        $input->job = $request->job;

        $input->save();
        return redirect()->route('index.karyawan')->with('message','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Workers::find($id);

        return view('karyawan.show', [
            "title" => "Data Karyawan",
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
        $data = Workers::find($id);

        return view('karyawan.edit', [
            "title" => "Data Karyawan",
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
        $input = Workers::find($id);

        $gaji = (int)str_replace([',', '.', 'Rp', ' '], '', $request->gaji);
        $bonus = (int)str_replace([',', '.', 'Rp', ' '], '', $request->bonus);

        $input->ktp = $request->ktp;
        $input->nama = $request->nama;
        $input->tempat_lahir = $request->tempat_lahir;
        $input->tanggal_lahir = $request->tanggal_lahir;
        $input->alamat = $request->alamat;
        $input->pekerjaan = $request->pekerjaan;
        $input->handphone = $request->handphone;
        $input->email = $request->email;
        $input->status = $request->status;
        $input->tanggungan = $request->tanggungan;
        $input->awal_kerja = $request->awal_kerja;
        $input->gaji = $gaji;
        $input->bonus = $bonus;
        $input->job = $request->job;

        $input->update();
        return redirect()->back()->with('message','Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Workers::findOrFail($id);
        $data->delete();
        return redirect()->route('index.karyawan')->with('message','Data berhasil dihapus!');
    }
}
