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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen User</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daftar User</h4>
                            <a class="btn btn-primary btn-flat" href="{{route('um-tambah')}}">
                                <i class="fa fa-plus"></i>&nbsp;Tambah User</a>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Password</th>
                                        <th>Hak Akses</th>
                                        <th>Avatar</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>thorotoar</th>
                                        <th>Thoriqul Falahi</th>
                                        <th>*****</th>
                                        <th>Admin</th>
                                        <th>123.jpg</th>
                                        <th>
                                            <div class="table-data-feature">
                                                <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
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