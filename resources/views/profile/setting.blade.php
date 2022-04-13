@extends('layouts.main')

@section('main')

<div class="card">
    <div class="card-body">
        <form action="{{ route('store.setting') }}" method="post" class="p-2">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <label>Password Saat ini</label>
                </div>
                <div class="col-md-7 form-group">
                    <input type="password" class="form-control" name="current_password"
                        placeholder="Password Saat ini">
                </div>
                <div class="col-md-5">
                    <label>Password Baru</label>
                </div>
                <div class="col-md-7 form-group">
                    <input type="password" class="form-control" name="password"
                        placeholder="Password Baru">
                </div>
                <div class="col-md-5">
                    <label>Konfirmasi Password Baru</label>
                </div>
                <div class="col-md-7 form-group">
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="Konfirmasi Password Baru">
                </div>
                <div class="pt-3 col-sm-12 d-flex justify-content-between">
                    <div>
                        <a class="btn btn-outline-secondary" href="{{ route('dashboard') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
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
