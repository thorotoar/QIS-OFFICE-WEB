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
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-elements">
                                <form action="{{route('t-d-pegawai')}}" enctype="multipart/form-data" method="post">
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
                                                        <option value="">Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control" id="agama" name="agama" required>
                                                        <option value="">Pilih Agama</option>
                                                        @foreach($agama as $agamav)
                                                            <option value="{{$agamav->id}}">{{$agamav->nama_agama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
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
                                                        <option value="">Pilih Kewarganegaraan</option>
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
                                                        <option value="">Status</option>
                                                        <option value="Sudah-Menikah">Sudah Menikah</option>
                                                        <option value="Belum-Menikah">Belum Menikah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Upload File Foto</label>
                                                <input name="foto" type="file" />
                                                {{--<div action="#" class="dropzone">--}}
                                                    {{--<div class="fallback">--}}
                                                        {{--<input name="foto" type="file" />--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
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
                                                        <option value="">Pilih Bank</option>
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
                                    <div class="row">
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
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>No. SK</label>
                                                <input type="text" class="form-control" name="no_sk" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-p">Jenis Kepegawaian <span class="text-danger">*</span></label>
                                                <div>
                                                    <select class="form-control" id="jenis-p" name="jenis_p"  required>
                                                        <option value="">Pilih Jenis</option>
                                                        @foreach ($jabatan as $value)
                                                            <option value="{{$value->id}}">{{$value->nama_jabatan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--Button--}}
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection