@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | EDIT SURAT KEPUTUSAN PENYUSUN SYLABUS')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Surat Keputusan Penyusun Sylabus</a></li>
                    <li class="breadcrumb-item active">Surat Keputusan Penyusun Sylabus</li>
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
                                <form id="form-addSuratKeluar" action="{{route('sursy-update', $sKeluar->id)}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6">
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
                                                            <input class="form-control input-sm" type="Text" value="{{$sKeluar->no_surat}}" name="kode_surat" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
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
                                                <label>Hari, Tanggal Rapat <span class="text-danger">*</span></label>
                                                <div class="input-group date days">
                                                    <input type="text" class="form-control input-sm" value="{{$iKeluar->hari_tanggal_1}}" name="tgl_rapat" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Pegawai <span class="text-danger">*</span></label>
                                                <select class="form-control custom-select form-control-sm" id="lembaga" name="nama_pegawai"  required>
                                                    <option readonly="true" selected>Pilih Pegawai</option>
                                                    @foreach(\App\Pegawai::all() as $pegawais)
                                                        <option value="{{$pegawais->pegawai->id}}"
                                                                @if($iKeluar->nama_pegawai == $pegawais->nama)
                                                                selected
                                                                @endif
                                                        >{{$pegawais->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Mulai Bekerja <span class="text-danger">*</span></label>
                                                <div class="input-group date datepicker">
                                                    <input type="text" class="form-control input-sm" value="{{$iKeluar->tanggal_1}}" name="mulai_bekerja" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Selesai Bekerja <span class="text-danger">*</span></label>
                                                <div class="input-group date datepicker">
                                                    <input type="text" class="form-control input-sm" value="{{$iKeluar->tanggal_2}}" name="selesai_bekerja" placeholder="tanggal/bulan/tahun" required>
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