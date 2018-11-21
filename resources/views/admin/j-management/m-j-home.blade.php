@extends('layout-master.app-admin')
@section('title', 'QIS ADMIN | MANAJEMEN JABATAN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Manajemen Jabatan</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen Jabatan</li>
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
                            @if(session()->has('sukses'))
                                <div class="alert alert-info alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{session()->get('sukses')}}.
                                </div>
                            @endif
                            <h4 class="card-title">Daftar Jabatan</h4>
                            <a class="btn btn-primary btn-flat" href="{{route('jm-tambah')}}">
                                <i class="fa fa-plus"></i>&nbsp;Tambah Jabatan</a>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jabatan as $value)
                                        <tr>
                                            <th>{{ $value->id }}</th>
                                            <th>{{ ucfirst($value->nama_jabatan) }}</th>
                                            <th>
                                                <div class="table-data-feature">
                                                    <form class="form-group pull-left" action="{{route('jm-hapus',['id'=>$value->id])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input hidden>
                                                        <button type="submit" class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>&nbsp;
                                                    {{--<a href="{{route('jm-lihat',['id'=>$value->id])}}" class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Read">--}}
                                                        {{--<i class="fa fa-eye"></i>--}}
                                                    {{--</a>--}}
                                                    <a href="{{route('jm-edit',['id'=>$value->id])}}" class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    {{--<a href="{{route('jm-hapus',['id'=>$value->id])}}" class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Delete">--}}
                                                        {{--<i class="fa fa-trash"></i>--}}
                                                    {{--</a>--}}
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