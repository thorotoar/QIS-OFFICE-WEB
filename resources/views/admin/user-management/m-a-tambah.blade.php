@extends('layout-master.app-admin')
@section('title', 'QIS ADMIN | MANAJEMEN USER')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Manajemen User</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah User</a></li>
                    <li class="breadcrumb-item active">Manajemen User</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="{{route('save.user')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="username">Username <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">Nama Pegawai <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="nama-pegawai" name="nama-pegawai">
                                                <option value="">Pilih Pegawai</option>
                                                <option value="admin">Nama Pegawai</option>
                                                <option value="pegawai">Nama Pegawai</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="nama-user">Nama User <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="nama-user" name="nama-user" placeholder="Masukkan Nama Lengkap.. ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Buat yang paling aman..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="confirm-password">Confirm Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="..dan konfirmasi disini!!">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="hak-akses">Hak Akses <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="hak-akses" name="hak-akses">
                                                <option value="">Pilih hak akses</option>
                                                <option value="admin">Admin</option>
                                                <option value="pegawai">Pegawai</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="avatar">Avatar <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="avatar" name="avatar">
                                            {{--<input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">--}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
@endsection