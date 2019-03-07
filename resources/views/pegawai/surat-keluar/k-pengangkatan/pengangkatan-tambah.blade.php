@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | TAMBAH SURAT PENGAGKATAN')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Surat Keluar</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Surat Pengangkatan</a></li>
                    <li class="breadcrumb-item active">Surat Pengangkatan</li>
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
                                <form id="form-addSuratKeluar" action="{{route('surpengang-tambah-selesai', ['id' => $jenis->id])}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tempat <span class="text-danger">*</span></label>
                                                <input class="form-control input-sm" type="Text" value="Surabaya" name="tempat" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Surat Keluar <span class="text-danger">*</span></label>
                                                <div class="input-group date datepicker">
                                                    <input type="text" class="form-control input-sm" name="tgl_keluar" placeholder="tanggal/bulan/tahun" required>
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
                                                    <input type="text" class="form-control input-sm" name="tgl_dicatat" placeholder="tanggal/bulan/tahun" required>
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
                                                <label>Hari, Tanggal Rapat <span class="text-danger">*</span></label>
                                                <div class="input-group date days">
                                                    <input type="text" class="form-control input-sm" name="tgl_rapat" placeholder="tanggal/bulan/tahun" required>
                                                    <div class="input-group-addon">
                                                        &nbsp;<button class="btn btn-flat btn-sm btn-outline-dark" disabled><span class="fa fa-calendar"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Pegawai <span class="text-danger">*</span></label>
                                                <select class="form-control custom-select  form-control-sm" name="nama_pegawai" required>
                                                    <option readonly="true" selected disabled="">Pilih Pegawai</option>
                                                    @foreach (\App\Pegawai::all() as $key => $value)
                                                        <option value="{{$value->id}}">{{$value->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Lembaga/Yayasan <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm custom-select" id="lembaga" name="lembaga"  required>
                                                    <option readonly="true" selected disabled>Pilih Jenis</option>
                                                    @foreach (\App\Lembaga::all() as $key => $lembagas)
                                                        <option value="{{$lembagas->id}}">{{$lembagas->nama_lembaga}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Jabatan <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-sm custom-select" name="jabatan_lembaga" id="jabatan" required>
                                                    <option value="" disabled readonly selected>Pilih Jabatan Lembaga</option>
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

        $('.days').datepicker({
            format: "DD, dd MM yyyy"
        });

        $('#lembaga').on('change', function(e){
            console.log(e);
            console.log('waw');
            var lembaga_id = e.target.value;
            $.get('/pegawai/surat-keluar/jabatan?lembaga_id=' + lembaga_id,function(data) {
                console.log(data);
                $('#jabatan').empty();
                $('#jabatan').append('<option readonly="true" selected>Pilih Jabatan Lembaga</option>');

                $.each(data, function(index, lembagaObj){
                    $('#jabatan').append('<option value="'+ lembagaObj.id +'">'+ lembagaObj.nama_jabatan +'</option>');
                })
            });
        });
    </script>
@endsection