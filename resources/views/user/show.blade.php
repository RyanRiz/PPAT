@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12 d-flex justify-content-between mb-5">
                <div>
                    <a class="btn btn-outline-secondary" href="{{ route('index.user') }}" role="button"><i class="mdi mdi-step-backward-2"></i>
                        Kembali
                    </a>
                </div>
                <div>
                    <div class="d-flex">
                        <div class="pe-2">
                            <a class="btn btn-secondary" href="{{ route('edit.user', $data->id) }}" role="button"><i class="mdi mdi-pencil-box"></i>
                                Sunting
                            </a>
                        </div>
                        <div>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-delete"></i>
                                Hapus
                              </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Nama Lengkap</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" value="{{ $data->name }}" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="col-md-5">
                    <label>Username</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" value="{{ $data->username }}" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="col-md-5">
                    <label>Role</label>
                </div>
                <div class="col-md-7 form-group">
                    <input readonly type="text" value="{{ $data->roles }}" class="form-control" name="role" placeholder="Roles">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Peringatan!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <h4 class="text-center mb-2 text-black">Apakah yakin ingin menghapus data?</h4 class="text-center mb-2 text-black">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="pe-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div>
                            <form action="{{ route('delete.user', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
