@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | DATA PEGAWAI')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Data Pegawai</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
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
                            <h4 class="card-title">Daftar Data Pegawai</h4><hr>
                            <a class="btn btn-primary btn-flat" href="{{route('d-p-tambah')}}">
                                <i class="fa fa-plus"></i>&nbsp;Tambah Data Pegawai</a>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>TTL</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pegawai as $value)
                                        <tr>
                                            <th>{{ $value->id }}</th>
                                            <th>{{ $value->foto }}</th>
                                            <th>{{ $value->nik }}</th>
                                            <th>{{ $value->nama }}</th>
                                            <th>{{ $value->kelamin }}</th>
                                            <th>{{ $value->tempat_lahir }}, {{ $value->tgl_lahir }}</th>
                                            <th>{{ $value->jabatan->nama_jabatan }}</th>
                                            <th>
                                                <div class="table-data-feature">
                                                    <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="fa fa-send"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Print">
                                                        <i class="fa fa-print"></i>
                                                    </button>
                                                </div>
                                            </th>
                                        </tr>
                                    @endforeach
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