@extends('layout-master.app-admin')
@section('title', 'QIS ADMIN | MANAJEMEN JABATAN EDIT')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Manajemen Jabatan Edit</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Jabatan</a></li>
                    <li class="breadcrumb-item active">Manajemen Jabatan Edit</li>
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
                                <form class="form-valide" action="{{route('jm-update',['id'=>$jabatan->id])}}" method="post">
                                    {{csrf_field()}}
                                    {{--{{method_field('PUT')}}--}}
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="jabatan">Nama Jabatan </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan.." value="{{$jabatan->nama_jabatan}}">
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