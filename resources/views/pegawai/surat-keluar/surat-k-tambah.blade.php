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
                                                <label>Jenis Surat</label>
                                                <input type="text" class="form-control" value="Surat Contoh" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Perihal</label>
                                                <input class="form-control" type="Text" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Lampiran</label>
                                                <input class="form-control" type="Text" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tujuan</label>
                                                <input class="form-control" type="Text" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nomor Surat</label>
                                                <input class="form-control" type="number" value="123" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Surat Keluar</label>
                                                <input type="date" class="form-control" placeholder="tanggal/bulan/tahun">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Dicatat</label>
                                                <input type="date" class="form-control" placeholder="tanggal/bulan/tahun">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Pembuka</label>
                                                <textarea class="form-control" id="mytextarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Isi</label>
                                                <textarea class="form-control" id="textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Penutup</label>
                                                <textarea class="form-control" id="textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit" class="btn btn-primary">Clear</button>
                                                <button type="submit" class="btn btn-dark">Cancel</button>
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
@endsection