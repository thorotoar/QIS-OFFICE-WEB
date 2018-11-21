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
            @if(session()->has('pegawai'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session()->get('pegawai')}}
                        </div>
                    </div>
                </div>
            @elseif(session()->has('destroy'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session()->get('destroy')}}
                        </div>
                    </div>
                </div>
            @elseif(session()->has('pendidikan'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session()->get('pendidikan')}}
                        </div>
                    </div>
                </div>
            @endif
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
                                    @foreach($pegawai_view as $value)
                                        <tr>
                                            <th>{{ $value->pegawai->id }}</th>
                                            <th>{{ $value->pegawai->foto }}</th>
                                            <th>{{ $value->pegawai->nik }}</th>
                                            <th>{{ $value->pegawai->nama }}</th>
                                            <th>{{ $value->pegawai->kelamin }}</th>
                                            <th>{{ $value->pegawai->tempat_lahir }}, {{ $value->pegawai->tgl_lahir }}</th>
                                            <th>{{ $value->pegawai->jabatan->nama_jabatan }}</th>
                                            <th>
                                                <div class="table-data-feature">
                                                    <form class="form-group pull-left" action="{{route('h-d-p-pegawai',['id'=>$value->id])}}" method="post">
                                                        {{csrf_field()}}
                                                        <button type="submit" class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>&nbsp;
                                                    <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="fa fa-send"></i>
                                                    </button>
                                                    <a href="{{route('d-p-edit', $value->pegawai->id)}}" class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
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