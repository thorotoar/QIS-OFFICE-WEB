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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Data Pegawai Ditambahkan</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-two">
                                <div class="alert alert-info">
                                    <h4 class="alert-heading">Data telah tersimpan!</h4><hr>
                                    Data telah masuk kedalam database, Data tersebut telah tersimpan dengan aman :).
                                </div>
                                <div class="desc">
                                    <a href="{{route('d-pegawai')}}" class="btn btn-rounded btn-info">Kembali ke halaman data pegawai</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
@endsection