@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form" action="{{ route('inputCustomer') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="first-name-column">KTP</label>
                                <input type="text" id="first-name-column" class="form-control"
                                    placeholder="KTP" name="ktp">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Nama</label>
                                <input type="text" id="last-name-column" class="form-control"
                                    placeholder="Nama" name="nama">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="company-column">Tanggal Lahir</label>
                                <input type="date" id="company-column" class="form-control"
                                    name="tanggal_lahir" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">No. Handphone</label>
                                <input type="text" id="city-column" class="form-control" placeholder="No. Handphone"
                                    name="telepon">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Pekerjaan</label>
                                <input type="text" id="country-floating" class="form-control"
                                    name="pekerjaan" placeholder="Pekerjaan">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-column">Alamat</label>
                                <input type="text" id="email-id-column" class="form-control"
                                    name="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection