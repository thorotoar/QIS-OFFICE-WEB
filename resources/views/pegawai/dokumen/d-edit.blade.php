@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | EDIT DOKUMEN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Input Dokumen</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dokumen</a></li>
                    <li class="breadcrumb-item active">Input Dokumen</li>
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
                                <form id="form-editDokumen" action="{{route('d-update', $dokumen->id)}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama File</label>
                                                <input class="form-control" name="nama_dokumen" type="Text" value="{{$dokumen->nama_dokumen}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Tanggal File</label>
                                                <input type="date" class="form-control" name="tgl_file" placeholder="tanggal/bulan/tahun" value="{{$dokumen->tgl_file}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Tanggal Dicatat</label>
                                                <input type="date" class="form-control" name="tgl_dicatat" placeholder="tanggal/bulan/tahun" value="{{$dokumen->tgl_dicatat}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea class="form-control" rows="10" name="keterangan" placeholder="">{{$dokumen->keterangan}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @foreach($fileDok as $value)
                                                <img src="{{asset($value->upload_file)}}" width="84" height="112">
                                            @endforeach
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Upload File *</label><b><i>{{$fileDok->upload_file}}</i>)
                                                </b><input type="hidden" value="{{$fileDok->upload_file}}" name="upload_file[]">
                                                <div>
                                                    <input name="upload_file_new[]" type="file" class="form-control" multiple />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button id="editDokumen" type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
                                                <a href="{{route('d-home')}}" class="btn btn-dark">Cancel</a>
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

    <script>
        var fForm = $('#form-editDokumen');
        var fConfirm = $('button#editDokumen');

        fConfirm.on('click', function(e){
            e.preventDefault();
            swal({
                    title: "Simpan perubahan?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Iya",
                    cancelButtonText: "Tidak",
                    closeOnConfirm: false,
                    closeOnCancel: true
                },
                function(){
                    fForm.submit();
                });
        })
    </script>
@endsection