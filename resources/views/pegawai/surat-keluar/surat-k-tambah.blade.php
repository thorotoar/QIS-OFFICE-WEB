@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | SURAT KELUAR')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Surat Keluar</a></li>
                    <li class="breadcrumb-item active">Surat Keluar</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-elements">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nomor Data</label>
                                                <input type="number" class="form-control" value="1" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Ditujukan Kepada</label>
                                                <input class="form-control" type="Text" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea class="form-control" rows="7" placeholder=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit" class="btn btn-primary">Clear</button>
                                                <button type="submit" class="btn btn-dark">Cancel</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nomor Surat</label>
                                                <input class="form-control" type="number" value="123" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Surat</label>
                                                <input type="date" class="form-control" placeholder="tanggal/bulan/tahun">
                                            </div>
                                            <div class="form-group">
                                                <label>Prihal</label>
                                                <textarea class="form-control" rows="7" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# row -->

            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
@endsection