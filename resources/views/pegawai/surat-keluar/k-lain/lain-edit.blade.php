@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | EDIT SURAT LAIN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Surat Lain</a></li>
                    <li class="breadcrumb-item active">Surat Lain</li>
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
                                <form id="form-addSuratKeluar" action="{{route('surp-update', $sKeluar->id)}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nomor Surat <span class="text-danger">*</span></label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="Text" value="{{$sKeluar->no_surat}}" name="no_surat" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="Text" value="{{$sKeluar->kode_surat}}" name="kode_surat" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Lampiran </label>
                                                <input class="form-control input-sm" type="Text" value="{{$sKeluar->lampiran}}" name="lampiran" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Perihal <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="{{$sKeluar->perihal}}" name="perihal" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Tempat</label>
                                                <input class="form-control input-sm" type="Text" value="{{$sKeluar->tempat}}" name="tempat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Keluar <span class="text-danger">*</span></label>
                                                <div class="input-group date">
                                                    <input type="text" id="datepicker" class="form-control input-sm datepicker" value="{{$sKeluar->tgl_keluar}}" name="tgl_keluar" placeholder="tanggal/bulan/tahun" required>
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
                                                    <input type="text" id="datepicker"  class="form-control input-sm datepicker" value="{{$sKeluar->tgl_dicatat}}" name="tgl_dicatat" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tujuan <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" name="tujuan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Bagian Tujuan <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" name="bagian_tujuan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alamat Tujuan <span class="text-danger">*</span></label>
                                                <textarea class="form-control input-sm" type="Text" name="alamat_tujuan" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tempat Tujuan <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" name="tempat_tujuan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Isi <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="isi" id="isi" cols="30" rows="10">{{$iKeluar->isi_surat}}</textarea>
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
    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#isi',
            height: "680",
            plugins: [
                "autolink link image charmap print preview hr anchor pagebreak",
                "wordcount visualblocks code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignmentleft alignmentceter alignmentright " +
                "alignmentjustify | bullist numlist outdent indent | link image media"
        });

        $('.datepicker').datepicker({
            format: "dd MM yyyy"
        });
    </script>
@endsection