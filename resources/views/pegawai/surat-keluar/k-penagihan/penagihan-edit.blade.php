@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | EDIT SURAT PENAGIHAN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Surat Penagihan</a></li>
                    <li class="breadcrumb-item active">Surat Penagihan</li>
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
                                <form id="form-addSuratKeluar" action="{{route('surpena-update', $sKeluar->id)}}" enctype="multipart/form-data" method="post">
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
                                                            <input class="form-control input-sm" type="Text" value="{{$sKeluar->kodee_surat}}" name="kode_surat" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Lampiran </label>
                                                <input class="form-control input-sm" type="Text" value="{{$sKeluar->lampiran}}" name="lampiran">
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
                                                <label>Tempat <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="{{$sKeluar->tempat}}" name="tempat" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Surat Keluar <span class="text-danger">*</span></label>
                                                <div class="input-group date datepicker">
                                                    <input type="text" class="form-control input-sm" value="{{$sKeluar->tgl_keluar}}" name="tgl_keluar" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Dicatat <span class="text-danger">*</span></label>
                                                <div class="input-group date datepicker">
                                                    <input type="text" class="form-control input-sm" value="{{$sKeluar->tgl_dicatat}}" name="tgl_dicatat" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tujuan <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="{{$sKeluar->tujuan}}" name="tujuan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Bagian Tujuan <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="{{$sKeluar->bagian_tujuan}}" name="bagian_tujuan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alamat Tujuan <span class="text-danger">*</span></label>
                                                <textarea class="form-control input-sm" type="Text" name="alamat_tujuan" cols="30" rows="10" placeholder="Contoh: Jl.Raya Plalangan Plosowahyu Km 3" required>Jl.Raya Plalangan Plosowahyu Km 3</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tempat Tujuan <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" name="tempat_tujuan" placeholder="Contoh: Lamongan" value="Lamongan" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Besar Biyaya <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="{{$iKeluar->besar_biyaya}}" name="besar_biyaya" onkeypress="return numberOnly(event, false)" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jumlah Peserta <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="{{$iKeluar->jumlah_peserta}}" name="jumlah_peserta" onkeypress="return numberOnly(event, false)" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Deskripsi Peserta <span class="text-danger">*</span></label>
                                                <textarea class="form-control input-sm" type="Text"  name="deskripsi_peserta" cols="30" rows="10" placeholder="Contoh: 22 orang Dosen&#10;60 orang mahasiswa" required>{{$iKeluar->deskripsi_peserta}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hari, Tanggal Pembayaran <span class="text-danger">*</span></label>
                                                <div class="input-group date days">
                                                    <input type="text" class="form-control input-sm" value="{{$iKeluar->tgl_pembayaran}}" name="tgl_pembayaran" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
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

        $('.days').datepicker({
            format: "DD, dd MM yyyy"
        });
    </script>
@endsection