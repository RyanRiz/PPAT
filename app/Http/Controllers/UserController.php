<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin');
        return view('user.data', [
            'title' => 'Data Pengguna',
            'datas' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin');
        return view('user.input', [
            'title' => 'Input Pengguna'
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
        $this->authorize('isAdmin');
        $this->validate($request, [
            "username" => "required|unique:users,username",
            "nama" => "required",
            "password" => "required",
            "role" => "required"
        ]);

        $input = new User();

        $input->name = $request->nama;
        $input->username = $request->username;
        $input->password = Hash::make($request->password);
        $input->roles = $request->role;

        $input->save();
        return redirect()->route('index.user')->with('message','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('isAdmin');
        $datas = User::FindorFail($id);
        $roles = $datas->roles;

        return view('user.show', [
            'title' => 'Input Pengguna',
            'data' => $datas,
            'role' => $roles
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
        $this->authorize('isAdmin');
        $datas = User::FindorFail($id);
        return view('user.edit', [
            'title' => 'Input Pengguna',
            'data' => $datas
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
        $this->authorize('isAdmin');
        $input = User::findorFail($id);

        if ($request->has('password')) {
            $input->password = Hash::make($request->password);
        } else {
            $input->password = $input->password;
        }

        $input->name = $request->nama;
        $input->username = $request->username;
        $input->roles = $request->role;

        $input->update();
        return redirect()->route('index.user')->with('message','Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('isAdmin');
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('index.user')->with('message','Data berhasil dihapus!');
    }
}
