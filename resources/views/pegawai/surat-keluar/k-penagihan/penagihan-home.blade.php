@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | SURAT PENAGIHAN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Penagihan</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Surat Penagihan</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            @if(session()->has('sukses'))
                <div class="alert alert-info alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{session()->get('sukses')}}
                </div>
            @elseif(session()->has('edit'))
                <div class="alert alert-info alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{session()->get('edit')}}
                </div>
            @elseif(session()->has('hapus'))
                <div class="alert alert-info alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{session()->get('hapus')}}
                </div>
        @endif
        <!-- Start Page Content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Surat Penagihan</h4><hr>
                            <a href="" class="button"></a>
                            <div class="button-list">
                                <a class="btn btn-primary btn-flat" href="{{route('surpena-tambah')}}">
                                    <i class="fa fa-plus"></i>&nbsp;Tambah Surat</a>
                                <a class="btn btn-primary btn-flat" href="{{route('surpena-print-all')}}">
                                    <i class="fa fa-print"></i>&nbsp;Print All</a>
                            </div>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th width="80px">No</th>
                                        <th>Nomor Surat</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Perihal</th>
                                        <th>Nama Peserta Didik</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($smasukView as $index => $value)
                                        <tr>
                                            <th>{{ $index +1 }}</th>
                                            <th>{{ $value->no_surat }}{{$value->kode_surat}} </th>
                                            <th>{{ $value->tgl_dicaat }}</th>
                                            <th>{{ $value->prihal }}</th>
                                            <th>{{ $value->nama_peserta }}</th>
                                            <th>
                                                <div class="table-data-feature">
                                                    <form id="form-deleteSuratP-{{$value->id}}" class="form-group pull-left" action="" method="post" hidden>
                                                        {{csrf_field()}} {{method_field('DELETE')}}
                                                        {{--onclick="return confirm('Hapus data terpilih?')"--}}
                                                    </form>
                                                    <button data-target="#test{{$value->id}}" type="submit" class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="modal" data-placement="top" title="Lihat" data-id="pegawaiId">
                                                        <i class="fa fa-eye"></i> Lihat
                                                    </button>
                                                    <button type="button" data-id="{{$value->id}}" class="btn btn-sm btn-rounded btn-primary btn-flat sweet-suratMasuk-edit" data-toggle="tooltip"
                                                            data-placement="top" title="Edit">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Print">
                                                        <i class="fa fa-send"></i> Kirim
                                                    </button>
                                                    <button type="button" data-id="{{$value->id}}" class="btn btn-sm btn-rounded btn-primary btn-flat print" data-toggle="tooltip" data-placement="top" title="Print">
                                                        <i class="fa fa-print"></i> Print
                                                    </button>
                                                    <button onclick="deleteDataPegawai('{{$value->id}}')" type="submit" class="btn btn-sm btn-rounded btn-danger btn-flat" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                </div>
                                            </th>
                                            {{--@include('pegawai.surat-masuk.m-show')--}}
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
    <script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>

    <script>
        var id;
        var body = $('body');
        body.on('click','.sweet-suratMasuk-edit',function () {
            id=$(this).data('id');
            swal({
                title: "Edit data terpilih?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak",
                closeOnConfirm: false,
                closeOnCancel: true
            },function (isConfirm){

                if (isConfirm){
                    window.location='{{route('surpena-edit')}}'+'?id='+id;
                }
            })
        });

        body.on('click','.print',function () {
            id=$(this).data('id');
            window.location='{{route('surpena-print')}}'+'?id='+id;
        });

        function deleteDataPegawai(id) {
            swal({
                title: "Hapus data terpilih?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(){
                $("#form-deleteSuratP-" + id).attr("action", "{{route('surpena-hapus', ["id" => ""])}}/" + id).submit()
            })
        }

    </script>
@endsection