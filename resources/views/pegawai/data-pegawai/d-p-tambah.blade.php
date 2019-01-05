@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | TAMBAH DATA PEGAWAI')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Data Pegawai</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Data Pegawai</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ $error }}
                            </div>
                        </div>
                    </div>
            @endforeach
            @endif
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-elements">
                                <form id="form-addPegawai" action="{{route('t-d-pegawai')}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                    {{--Personal Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Personal</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>NIK <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="nik" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nama" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="tempat_lahir" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="tanggal_lahir" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control" id="jenis-kelamin" name="kelamin" required>
                                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control" id="agama" name="agama" required>
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        @foreach($agama as $agamav)
                                                            <option value="{{$agamav->id}}">{{$agamav->nama_agama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Upload File Foto</label>
                                                <div>
                                                    <input type="file" name="foto" class="form-control">
                                                </div>
                                                {{--<div class="input-group">--}}
                                                    {{--<div class="input-group-prepend">--}}
                                                        {{--<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="custom-file">--}}
                                                        {{--<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="foto">--}}
                                                        {{--<label class="custom-file-label" for="inputGroupFile01">Choose file</label>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Alamat <span class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="15" name="alamat" placeholder="" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>No. Telp <span class="text-danger">*</span></label>
                                                <input class="form-control" type="number" name="no_telp" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input class="form-control" type="email" name="email" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="negara">Kewarganegaraan <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control" id="negara" name="negara" required>
                                                        <option value="" disabled selected>Pilih Kewarganegaraan</option>
                                                        @foreach($kewarganegaraan as $negara)
                                                            <option value="{{$negara->id}}">{{$negara->nama_negara}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status Pernikahan <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control" id="status" name="status" required>
                                                        <option value="" disabled selected>Status</option>
                                                        <option value="Sudah Menikah">Sudah Menikah</option>
                                                        <option value="Belum Menikah">Belum Menikah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="col-lg-12">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="status">Uploaf File Foto </label>--}}
                                                {{--<div action="#" class="dropzone">--}}
                                                    {{--<div class="fallback">--}}
                                                        {{--<input name="file" type="file" multiple />--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>

                                    {{--Bank Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Bank</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nomor Rekening</label>
                                                <input type="number" class="form-control" name="no_rek" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="bank">Bank</label>
                                                <div>
                                                    <select class="form-control" id="bank" name="bank">
                                                        <option value="" disabled selected>Pilih Bank</option>
                                                        @foreach($bank as $bankv)
                                                            <option value="{{$bankv->id}}">{{$bankv->nama_bank}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>KCP Bank</label>
                                                <input type="text" class="form-control" name="kcp_bank" value="">
                                            </div>
                                        </div>
                                    </div>

                                    {{--Family Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Keluarga</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>NIK Ibu <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="nik_ibu" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK Ayah <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="nik_ayah" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Ibu <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nama_ibu" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Ayah <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nama_ayah" value="" required>
                                            </div>
                                        </div>
                                    </div>

                                    {{--Family Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Pasangan</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row" id="pasangan">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Pasangan</label>
                                                <input type="text" class="form-control" name="nama_p" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Pasangan</label>
                                                <input type="text" class="form-control" name="pekerjaan_p" value="">
                                            </div>
                                        </div>
                                    </div>

                                    {{--Job Info--}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="card-title m-t-15">Info Kepegawaian</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>NUPTK</label>
                                                <input type="text" class="form-control" name="nuptk" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Masuk <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="tanggal_masuk" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lembaga">Lembaga <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control" id="lembaga" name="lembaga"  required>
                                                        <option readonly="true" selected>Pilih Jenis</option>
                                                        @foreach ($lembaga as $key => $lembagas)
                                                            <option value="{{$lembagas->id}}">{{$lembagas->nama_lembaga}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>No. SK</label>
                                                <input type="text" class="form-control" name="no_sk" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-p">Jenis Kepegawaian <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control" id="jabatan" name="jabatan"  required>
                                                        <option value="0" disabled selected>Pilih Jenis</option>
                                                        {{--@foreach ($jabatan as $value)--}}
                                                            {{--<option value="{{$value->id}}">{{$value->nama_jabatan}}</option>--}}
                                                        {{--@endforeach--}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--Button--}}
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <button id="addPegawai" type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
                                                <a href="{{route('d-pegawai')}}" class="btn btn-dark">Cancel</a>
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
        $('#lembaga').on('change', function(e){
            // console.log(e);
            // console.log('waw');
            var lembaga_id = e.target.value;
            $.get('/pegawai/data-pegawai/jabatan?lembaga_id=' + lembaga_id,function(data) {
                console.log(data);
                $('#jabatan').empty();
                $('#jabatan').append('<option readonly="true" selected>Pilih Jenis</option>');

                $.each(data, function(index, lembagaObj){
                    $('#jabatan').append('<option value="'+ lembagaObj.id +'">'+ lembagaObj.nama_jabatan +'</option>');
                })
            });
        });

        var fForm = $('#form-addPegawai');
        var fConfirm = $('button#addPegawai');

        fConfirm.on('click', function(e){
            e.preventDefault();
            swal({
                    title: "Tambahkan pegawai?",
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
        });

        $('[name="status"]').change(function () {
            let objChange=$('#pasangan').find('input');
            if ($(this).val()==='Sudah Menikah'){
                objChange.prop('readonly',false);
                }else{
                objChange.prop('readonly',true);
            }
        });
    </script>
@endsection