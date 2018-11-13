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
                                <form action="{{route('d-p-tambah-r')}}">
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
                                                <label>NIK</label>
                                                <input type="number" class="form-control" name="nik" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat-lahir" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal-lahir" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-kelamin">Jenis Kelamin</label>
                                                <div>
                                                    <select class="form-control" id="jenis-kelamin" name="jenis-kelamin">
                                                        <option value="">Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <div>
                                                    <select class="form-control" id="agama" name="agama">
                                                        <option value="">Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Katholik">Katholik</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" rows="7" name="alamat" placeholder=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>No. Telp</label>
                                                <input class="form-control" type="number" name="no-telp" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="email" name="email" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="negara">Kewarganegaraan</label>
                                                <div>
                                                    <select class="form-control" id="negara" name="negara">
                                                        <option value="">Pilih Agama</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status Pernikahan</label>
                                                <div>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="">Status</option>
                                                        <option value="Sudah-Menikah">Sudah Menikah</option>
                                                        <option value="Belum-Menikah">Belum Menikah</option>
                                                    </select>
                                                </div>
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
                                                <input type="number" class="form-control" name="no-rek" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="bank">Bank</label>
                                                <div>
                                                    <select class="form-control" id="bank" name="bank">
                                                        <option value="">Pilih Bank</option>
                                                        <option value="bri">BRI</option>
                                                        <option value="bni">BNI</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>KCP Bank</label>
                                                <input type="text" class="form-control" name="kcp-bank" value="">
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
                                                <label>NIK Ibu</label>
                                                <input type="number" class="form-control" name="nik-ibu" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Ibu</label>
                                                <input type="text" class="form-control" name="nama-ibu" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>NIK Ayah</label>
                                                <input type="number" class="form-control" name="nik-ayah" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Ayah</label>
                                                <input type="text" class="form-control" name="nik-ayah" value="">
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
                                                <label>Nama Pasangan</label>
                                                <input type="text" class="form-control" name="nama-p" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Pasangan</label>
                                                <input type="text" class="form-control" name="pekerjaan-p" value="">
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
                                                <label>Tanggal Masuk</label>
                                                <input type="date" class="form-control" name="tanggal-masuk" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>No. SK</label>
                                                <input type="text" class="form-control" name="no-sk" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis-p">Jenis Kepegawaian</label>
                                                <div>
                                                    <select class="form-control" id="jenis-p" name="jenis-p">
                                                        <option value="">Pilih Jenis</option>
                                                        <option value="bri">Instruktur</option>
                                                        <option value="bni">Pemimpin</option>
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
@endsection