@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | EDIT SURAT PENGAJUAN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Surat Pengajuan</a></li>
                    <li class="breadcrumb-item active">Surat Pengajuan</li>
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
                                <form id="form-addSuratKeluar" action="{{route('surpenga-tambah-selesai', ['id' => $jenis->id])}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nomor Surat <span class="text-danger">*</span></label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="Text" value="{{$value}}" name="no_surat" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="Text" value="{{$kodeSurat}}" name="kode_surat" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Lampiran </label>
                                                <input class="form-control input-sm" type="Text" name="lampiran">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Perihal <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="Pemberitahuan" name="perihal" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Tempat <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="Surabaya" name="tempat" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Keluar <span class="text-danger">*</span></label>
                                                <div class="input-group date">
                                                    <input type="text" id="datepicker" class="form-control input-sm datepicker" name="tgl_keluar" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Dicatat <span class="text-danger">*</span></label>
                                                <div class="input-group date">
                                                    <input type="text" id="datepicker"  class="form-control input-sm datepicker" name="tgl_dicatat" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <a id="addrow" href="javascript:;" class="btn btn-primary btn-flat btn-sm buttonAdd">
                                                    <i class="fa fa-plus"></i> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 added-som">
                                            <div class="form-group item-tambah">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nama Barang <span class="text-danger">*</span></label>
                                                            <input class="form-control input-sm" type="text" name="nama_barang[]" >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>Jumlah Barang <span class="text-danger">*</span></label>
                                                            <input class="form-control input-sm" type="Text" name="jumlah_barang[]" onkeypress="return numberOnly(event, false)">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Harga Barang <span class="text-danger">*</span></label>
                                                            <input class="form-control input-sm" type="Text" name="harga_barang[]" onkeypress="return numberOnly(event, false)">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr><div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
                                                <a href="{{route('surk-home')}}" class="btn btn-dark">Cancel</a>
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
    <script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/lib/datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $('.datepicker').datepicker({
            format: "dd MM yyyy"
        });

        $('#addrow').click(function(){
            $('.item-tambah:last').after('<div class="form-group item-tambah">\n' +
                '                                            <div class="row">\n' +
                '                                                <div class="col-sm-6">\n' +
                '                                                    <div class="form-group">\n' +
                '                                                        <input class="form-control input-sm" type="text" name="nama_barang[]" >\n' +
                '                                                    </div>\n' +
                '                                                </div>\n' +
                '                                                <div class="col-sm-2">\n' +
                '                                                    <div class="form-group">\n' +
                '                                                        <input class="form-control input-sm" type="Text" name="jumlah_barang[]" onkeypress="return numberOnly(event, false)">\n' +
                '                                                    </div>\n' +
                '                                                </div>\n' +
                '                                                <div class="col-sm-3">\n' +
                '                                                    <div class="form-group">\n' +
                '                                                        <input class="form-control input-sm" type="Text" name="harga_barang[]" onkeypress="return numberOnly(event, false)">\n' +
                '                                                    </div>\n' +
                '                                                </div>\n' +
                '                                                <div class="col-sm-1">\n' +
                '                                                    <div class="form-group">\n' +
                '                                                        <a id="addrow" href="javascript:;" class="btn btn-primary btn-flat btn-sm delText">\n' +
                '                                                            <i class="fa fa-remove"></i></a>\n' +
                '                                                    </div>\n' +
                '                                                </div>\n' +
                '                                            </div>\n' +
                '                                        </div>');
            if ($(".delete").length > 0) $(".delete").show();
        });

        $('.added-som').on('click','.delText',function(e){

            console.log('aaa');
            $(this).parents('.item-tambah').remove();
            // let delEl = $(this).closest('.added-som').find('.delText');
            // if (delEl.length < 2) $('.delText').hide();
            if ($(".delText").length < 1) $(".delText").hide();
        });
    </script>
@endsection