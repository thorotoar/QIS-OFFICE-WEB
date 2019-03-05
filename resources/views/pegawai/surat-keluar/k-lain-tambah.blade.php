@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | TAMBAH SURAT LAIN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Surat Lain</a></li>
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
                                <form id="form-addSuratKeluar" action="{{route('surp-tambah-selesai')}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nomor Surat <span class="text-danger">*</span></label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="Text" value="{{$value}}" name="no_surat" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="Text" value="{{$kodeSurat}}" name="kode_surat" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Perihal <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="Pemberitahuan" name="perihal" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tempat <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="Surabaya" name="tempat" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Surat Keluar <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control input-sm" placeholder="tanggal/bulan/tahun" name="tgl_keluar">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Dicatat <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control input-sm" placeholder="tanggal/bulan/tahun" name="tgl_dicatat">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="peserta_didik">Nama Peserta Didik <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm custom-select" id="peserta_didik" name="peserta_didik">
                                                    <option value="" disabled readonly>Pilih Peserta Didik</option>
                                                    @foreach($peserta as $item)
                                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Lama Program <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" name="lama_program" placeholder="Contoh: 2 bulan 24 kali" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jumlah Program <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="text" name="jumlah_program" placeholder="Contoh: 1" onkeypress="return numberOnly(event, false)">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Jenis Program <span class="text-danger">*</span></label>
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <select class="form-control form-control-sm custom-select" name="jenis_program">
                                                                <option value="" disabled readonly>Pilih Program</option>
                                                                @foreach($peserta as $item)
                                                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <button class="btn btn-primary btn-flat btn-sm">
                                                                <i class="fa fa-plus"></i>&nbsp;Tambah program</button>
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
                                                <a href="{{route('surp-home')}}" class="btn btn-dark">Cancel</a>
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
    {{--<script src="https:https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}
    {{--<script src="{{asset('js/vendor/tinymce/tinymce.min.js')}}"></script>--}}
    {{--<script>--}}
        {{--tinymce.init({--}}
            {{--selector: 'textarea',--}}
            {{--plugins: [--}}
                {{--"adylist autolink list link image charmap print preview hr anchor pagebreak",--}}
                {{--"searchplace wordcount visualblocks code fullscreen",--}}
                {{--"insertdatetime media nonbreaking save table contextmenu directionality",--}}
                {{--"emotions template paste textcolor colorpicker textpattern"--}}
            {{--],--}}
            {{--toolbar: "insertfile undo redo | styleselect | bold italic | alignmentleft alignmentceter alignmentright " +--}}
            {{--"alignmentjustify | bullist numlist outdent indent | link image media"--}}
        {{--});--}}
    {{--</script>--}}

    {{--textarea--}}
    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#textarea',
            plugins: [
                "autolink link image charmap print preview hr anchor pagebreak",
                "wordcount visualblocks code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignmentleft alignmentceter alignmentright " +
            "alignmentjustify | bullist numlist outdent indent | link image media"
        });

        function numberOnly(e, decimal) {
            var key;
            var keychar;
            if (window.event) {
                key = window.event.keyCode;
            } else if (e) {
                key = e.which;
            } else return true;
            keychar = String.fromCharCode(key);
            if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27) || (key == 188)) {
                return true;
            } else if ((("0123456789").indexOf(keychar) > -1)) {
                return true;
            } else if (decimal && (keychar == ".")) {
                return true;
            } else return false;
        };
    </script>
@endsection