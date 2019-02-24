@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | TAMBAH SURAT PEMBERITAHUAN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Surat Pemberitahuan</a></li>
                    <li class="breadcrumb-item active">Surat Pemberitahuan</li>
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
                                <form id="form-addSuratKeluar" action="{{route('surp-tambah-selesai', ['id' => $jenis->id])}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nomor Surat <span class="text-danger">*</span></label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="Text" value="{{$value}}" name="no_surat">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="Text" value="{{$kodeSurat}}" name="kode_surat">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Perihal <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="Pemberitahuan" name="perihal">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tempat <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="Surabaya" name="tempat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Keluar <span class="text-danger">*</span></label>
                                                <div class="input-group date">
                                                    <input type="text" id="datepicker" class="form-control input-sm datepicker" name="tgl_keluar" placeholder="tanggal/bulan/tahun">
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
                                                    <input type="text" id="datepicker"  class="form-control input-sm datepicker" name="tgl_dicatat" placeholder="tanggal/bulan/tahun">
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="peserta_didik">Nama Peserta Didik <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm custom-select" id="peserta_didik" name="peserta_didik">
                                                    <option value="" disabled readonly selected>Pilih Peserta Didik</option>
                                                    @foreach(\App\PesertaDidik::all() as $item)
                                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="peserta_didik">Hasil Evaluasi <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm custom-select" id="peserta_didik" name="hasil_evaluasi">
                                                    <option value="" disabled readonly>Pilih Hasil Evaluasi</option>
                                                    <option value="Kurang" selected>Kurang</option>
                                                    <option value="Cukup" >Cukup</option>
                                                    <option value="Baik" >Baik</option>
                                                    <option value="Sangat Baik" >Sangat Baik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="peserta_didik">Instruktur Kelas <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm custom-select" id="peserta_didik" name="instruktur_kelas">
                                                    <option value="" disabled readonly selected>Pilih Instruktur</option>
                                                    @foreach(\App\RiwayatPendidikan::all() as $pegawais)
                                                        <option value="{{$pegawais->pegawai->id}}">{{$pegawais->pegawai->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jumlah Program <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="text" name="jumlah_program" placeholder="Contoh: 1" value="1" onkeypress="return numberOnly(event, false)">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <a id="addrow" href="javascript:;" class="btn btn-primary btn-flat btn-sm buttonAdd">
                                                    <i class="fa fa-plus"></i> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 added-som">
                                            <div class="form-group item-tambah">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <label>Lama Program <span class="text-danger">*</span></label>
                                                            <input class="form-control input-sm" type="Text" name="lama_program[]" placeholder="Contoh: 2 bulan 24 kali" value="2 bulan 24 kali" multiple>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Jenis Program <span class="text-danger">*</span></label>
                                                            <select class="form-control form-control-sm custom-select" name="jenis_program[]">
                                                                <option value="" disabled readonly>Pilih Program</option>
                                                                <option value="Program 1" selected>Program 1</option>
                                                                <option value="Program 2">Program 2</option>
                                                            </select>
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
    <script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/lib/datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript">
        $('.datepicker').datepicker({
            format: "dd MM yyyy"
        });

        $('#addrow').click(function(){
            $('.item-tambah:last').after('<div class="form-group item-tambah">\n' +
                '                                                <div class="row">\n' +
                '                                                    <div class="col-sm-5">\n' +
                '                                                        <div class="form-group">\n' +
                '                                                            <input class="form-control input-sm" type="Text" name="lama_program[]" placeholder="Contoh: 2 bulan 24 kali" >\n' +
                '                                                        </div>\n' +
                '                                                    </div>\n' +
                '                                                    <div class="col-sm-6">\n' +
                '                                                        <div class="form-group">\n' +
                '                                                            <select class="form-control form-control-sm custom-select" name="jenis_program[]">\n' +
                '                                                                <option value="" disabled readonly selected>Pilih Program</option>\n' +
                '                                                                <option value="Program 1">Program 1</option>\n' +
                '                                                                <option value="Program 2">Program 2</option>\n' +
                '                                                            </select>\n' +
                '                                                        </div>\n' +
                '                                                    </div>\n' +
                '                                                    <div class="col-sm-1">\n' +
                '                                                        <div class="form-group">\n' +
                '                                                                <a class="btn btn-primary btn-flat btn-sm delText" href="javascript:;" title="Hapus"><i class="fa fa-remove"></i></a>\n' +
                '                                                        </div>\n' +
                '                                                    </div>\n' +
                '                                                </div>\n' +
                '                                            </div>');
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