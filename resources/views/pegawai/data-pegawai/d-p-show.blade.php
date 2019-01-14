<div class="modal" id="test{{$value->id}}" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Data Pegawai</strong></h5>
                <button type="button" class="btn btn-info btn-flat btn-rounded btn-sm" data-dismiss="modal">
                    <i class="fa fa-close"></i> Close</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <!--Carousel Wrapper-->
                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset($value->pegawai->foto)}}" alt="First slide">
                                </div>
                            </div>
                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                    <div class="col-lg-7">
                        <h2 class="h2-responsive product-name">
                            <strong>{{$value->pegawai->nama}}</strong>
                        </h2>
                        <h4 class="h4-responsive">
                            <span class="green-text">
                                @if($value->pegawai->status_user == null)
                                    <span></span>
                                @elseif($value->pegawai->status_user == 'pegawai')
                                    <button class="btn btn-sm btn-secondary btn-flat btn-rounded disabled" disabled>{{ ucwords($value->pegawai->user->type) }}</button>
                                @elseif($value->pegawai->status_user == 'admin')
                                    <button class="btn btn-sm btn-danger btn-flat btn-rounded disabled" disabled>{{ ucwords($value->pegawai->user->type) }}</button>
                                @endif
                            </span>
                        </h4>

                        <!--Accordion wrapper-->
                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                            {{--info personal--}}
                            <div class="card">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6 class="h2-responsive product-name">
                                            <strong>Info Personal</strong>
                                        </h6><hr>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="h6-responsive">
                                                <small class="green-text">NIK :</small><br>
                                                <strong><span>{{$value->pegawai->nik}}</span></strong>
                                            </h6>
                                            <h6 class="h6-responsive">
                                                <small class="green-text">TTL :</small><br>
                                                <strong><span>{{ $value->pegawai->tempat_lahir }}, {{ $value->pegawai->tgl_lahir }}</span></strong>
                                            </h6>
                                            <h6 class="h6-responsive">
                                                <small class="green-text">Jenis Kelamin :</small><br>
                                                <strong><span>{{ $value->pegawai->kelamin }}</span></strong>
                                            </h6>
                                            <h6 class="h6-responsive">
                                                <small class="green-text">Agama :</small><br>
                                                <strong><span>{{ $value->pegawai->agama->nama_agama }}</span></strong>
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="h6-responsive">
                                                <small class="green-text">No. Telp :</small><br>
                                                <strong><span>{{$value->pegawai->telpon}}</span></strong>
                                            </h6>
                                            <h6 class="h6-responsive">
                                                <small class="green-text">Email :</small><br>
                                                <strong><span>{{ $value->pegawai->email }}</span></strong>
                                            </h6>
                                            <h6 class="h6-responsive">
                                                <small class="green-text">Kewarganegaraan :</small><br>
                                                <strong><span>{{ $value->pegawai->kewarganegaraan->nama_negara }}</span></strong>
                                            </h6>
                                            <h6 class="h6-responsive">
                                                <small class="green-text">Status Hubungan :</small><br>
                                                <strong><span>{{ $value->pegawai->agama->status_pernikahan }}</span></strong>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h6 class="h6-responsive">
                                                <small class="green-text">Alamat :</small><br>
                                                <strong><span>{{$value->pegawai->alamat}}</span></strong>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion wrapper -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    {{--info bank--}}
                                    <div class="col-md-3">
                                        <h6 class="h2-responsive product-name">
                                            <strong>Info Bank</strong>
                                        </h6><hr>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Nomor Rekening :</small><br>
                                            <strong>@if($value->pegawai->no_rek == null)
                                                    <span>-</span>
                                                @endif{{$value->pegawai->no_rek}}</strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Bank :</small><br>
                                            <strong>
                                                @if($value->pegawai->bank_id == null)
                                                    <span>-</span>
                                                    @else
                                                    {{$value->pegawai->bank->nama_bank}}
                                                @endif</strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">KCP Bank :</small><br>
                                            <strong>@if($value->pegawai->kcp_bank == null)
                                                    <span>-</span>
                                                @endif{{$value->pegawai->kcp_bank}}</strong>
                                        </h6><hr>
                                    </div>

                                    {{--info keluarga--}}
                                    <div class="col-md-3">
                                        <h6 class="h2-responsive product-name">
                                            <strong>Info Keluarga</strong>
                                        </h6><hr>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">NIK Ayah :</small><br>
                                            <strong><span>{{$value->pegawai->nik_ayah}}</span></strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Nama Ayah :</small><br>
                                            <strong><span>{{$value->pegawai->ayah}}</span></strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">NIK Ibu :</small><br>
                                            <strong><span>{{$value->pegawai->nik_ibu}}</span></strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Nama Ibu :</small><br>
                                            <strong><span>{{$value->pegawai->ibu}}</span></strong>
                                        </h6><hr>
                                    </div>

                                    {{--info pasangan--}}
                                    <div class="col-md-3">
                                        <h6 class="h2-responsive product-name">
                                            <strong>Info Pasangan</strong>
                                        </h6><hr>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Nama Pasangan :</small><br>
                                            <strong>@if($value->pegawai->pasangan == null)
                                                    <span>-</span>
                                                @endif{{$value->pegawai->pasangan}}</strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Pekerjaan Pasangan :</small><br>
                                            <strong>
                                                @if($value->pegawai->pekerjaan_pasangan == null)
                                                    <span>-</span>
                                                @endif{{$value->pegawai->pekerjaan_pasangan}}</strong>
                                        </h6><hr>
                                    </div>

                                    {{--info kepegawaian--}}
                                    <div class="col-md-3">
                                        <h6 class="h2-responsive product-name">
                                            <strong>Info Kepegawaian</strong>
                                        </h6><hr>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">NUPTK :</small><br>
                                            <strong>@if($value->pegawai->nuptk == null)
                                                    <span>-</span>
                                                @endif
                                                {{$value->pegawai->nuptk}}</strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">No. SK :</small><br>
                                            <strong>@if($value->pegawai->no_sk == null)
                                                    <span>-</span>
                                                @endif
                                                {{$value->pegawai->no_sk}}</strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Tanggal Masuk :</small><br>
                                            <strong><span>{{$value->pegawai->tgl_masuk}}</span></strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Jabatan Yayasan :</small><br>
                                            <strong><span>{{isset($value->pegawai->jabatanYayasan)?$value->pegawai->jabatanYayasan->nama_jabatan_yayasan:'-'}}</span></strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Jabatan :</small><br>
                                            <strong><span>{{isset($value->pegawai->jabatan)?$value->pegawai->jabatan->nama_jabatan:'-'}}</span></strong>
                                        </h6>
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Lembaga :</small><br>
                                            <strong><span>{{$value->pegawai->lembaga->nama_lembaga}}</span></strong>
                                        </h6><hr>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--info pendidikan--}}
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6 class="h2-responsive product-name">
                                        <strong>Info Pendidikan</strong>
                                    </h6><hr>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Jenjang Terkhir :</small><br>
                                            <strong><span>{{$value->jenjang->nama_jenjang}}</span></strong>
                                        </h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Tahun Lulus :</small><br>
                                            <strong><span>{{$value->thn_lulus}}</span></strong>
                                        </h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Instansi :</small><br>
                                            <strong><span>{{$value->instansi}}</span></strong>
                                        </h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Jurusan :</small><br>
                                            <strong>@if($value->jurusan->nama_jurusan_pendidikan == null)
                                                    <span>-</span>
                                                @endif
                                                {{$value->jurusan->nama_jurusan_pendidikan}}</strong>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Dimasukkan oleh :</small><br>
                                            <strong>@if($value->pegawai->created_by == null)
                                                    <span>-</span>
                                                @endif
                                                {{$value->pegawai->created_by}}</strong>
                                        </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="h6-responsive">
                                            <small class="green-text">Diubah oleh :</small><br>
                                            <strong>@if($value->pegawai->updated_by == null)
                                                    <span>-</span>
                                                @endif
                                                {{$value->pegawai->updated_by}}</strong>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>