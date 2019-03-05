@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | EDIT SURAT KETERANGAN PENGALAMAN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Surat Keterangan Pengalaman</a></li>
                    <li class="breadcrumb-item active">Surat Keterangan Pengalaman</li>
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
                                <form id="form-addSuratKeluar" action="{{route('seupengal-update', $sKeluar->id)}}" enctype="multipart/form-data" method="post">
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
                                                            <input class="form-control input-sm" type="Text" value="{{$sKeluar->kode_surat}}" name="kode_surat" required>
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
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Pegawai <span class="text-danger">*</span></label>
                                                <select class="form-control custom-select form-control-sm" id="lembaga" name="nama_pegawai"  required>
                                                    <option readonly="true" selected>Pilih Pegawai</option>
                                                    @foreach(\App\RiwayatPendidikan::all() as $pegawais)
                                                        <option value="{{$pegawais->pegawai->id}}"
                                                                @if($iKeluar->nama_pegawai == $pegawais->pegawai->nama)
                                                                selected
                                                                @endif
                                                        >{{$pegawais->pegawai->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Lembaga <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm custom-select" id="lembaga" name="lembaga"  required>
                                                    <option readonly="true" selected>Pilih Jenis</option>
                                                    @foreach (\App\Lembaga::where('id', '!=', [1])->get() as $key => $lembagas)
                                                        <option value="{{$lembagas->id}}"
                                                                @if($iKeluar->lembaga == $lembagas->nama_lembaga)
                                                                selected
                                                                @endif
                                                        >{{$lembagas->nama_lembaga}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nilai Pegawai <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm custom-select" name="nilai_pegawai" id="jabatan" required>
                                                    <option value="" disabled readonly>Pilih Nilai Pegawai</option>
                                                    @if($iKeluar->hasil_evaluasi == 'Kurang')
                                                        <option value="Kurang" selected>Kurang</option>
                                                        <option value="Cukup" >Cukup</option>
                                                        <option value="Baik" >Baik</option>
                                                        <option value="Sangat Baik" >Sangat Baik</option>
                                                    @elseif($iKeluar->hasil_evaluasi == 'Cukup')
                                                        <option value="Kurang" >Kurang</option>
                                                        <option value="Cukup" selected>Cukup</option>
                                                        <option value="Baik" >Baik</option>
                                                        <option value="Sangat Baik" >Sangat Baik</option>
                                                    @elseif($iKeluar->hasil_evaluasi == 'Baik')
                                                        <option value="Kurang" >Kurang</option>
                                                        <option value="Cukup" >Cukup</option>
                                                        <option value="Baik" selected>Baik</option>
                                                        <option value="Sangat Baik" >Sangat Baik</option>
                                                    @elseif($iKeluar->hasil_evaluasi == 'Sangat Baik')
                                                        <option value="Kurang" >Kurang</option>
                                                        <option value="Cukup" >Cukup</option>
                                                        <option value="Baik" >Baik</option>
                                                        <option value="Sangat Baik" selected>Sangat Baik</option>
                                                    @endif
                                                </select>
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
    </script>
@endsection