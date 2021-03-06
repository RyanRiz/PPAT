@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.user', $data->id) }}" class="p-2" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-5">
                        <label>Nama Lengkap</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" value="{{ $data->name }}" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-md-5">
                        <label>Username</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" value="{{ $data->username }}" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="col-md-5">
                        <label>Password</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="col-md-5">
                        <label>Role</label>
                    </div>
                    <div class="col-md-7 form-group">
                        <select name="role" class="form-select" aria-label="Default select example">
                            <option value="admin" @if ($data->roles == "admin") selected @endif>Admin</option>
                            <option value="pengelola" @if ($data->roles == "pengelola") selected @endif>Pengelola</option>
                          </select>
                    </div>
                    <div class="pt-5 col-sm-12 d-flex justify-content-between">
                        <div>
                            <a class="btn btn-outline-secondary" href="{{ route('index.user') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
                                Kembali
                            </a>
                        </div>
                        <div>
                            <button type="reset" class="btn btn-outline-danger"><i class="mdi mdi-cached"></i>
                                Reset
                            </button>
                            <button type="submit" class="btn btn-outline-primary"><i class="mdi mdi-content-save"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
