@extends('layout-master.app-pegawai')
@section('title', 'QIS OFFICE | DATA PEGAWAI')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Data Pegawai</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            @if(session()->has('pegawai'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session()->get('pegawai')}}
                        </div>
                    </div>
                </div>
            @elseif(session()->has('destroy'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session()->get('destroy')}}
                        </div>
                    </div>
                </div>
            @elseif(session()->has('pendidikan'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session()->get('pendidikan')}}
                        </div>
                    </div>
                </div>
            @elseif(session()->has('update_r'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session()->get('update_r')}}
                        </div>
                    </div>
                </div>
            @endif
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Data Pegawai</h4><hr>
                            <a class="btn btn-primary btn-flat" href="{{route('d-p-tambah')}}">
                                <i class="fa fa-plus"></i>&nbsp;Tambah Data Pegawai</a>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>TTL</th>
                                        <th>Lembaga</th>
                                        <th>Jabatan</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pegawai_view as $index => $value)
                                        @php
                                            $pegawai = App\Pegawai::find($value->pegawai_id); //$pegawai->foto
                                        @endphp
                                        <tr>
                                            <th>{{ $index +1 }}</th>
                                            <th><img src="{{asset($value->pegawai->foto)}}" width="84" height="112"></th>
                                            <th>{{ $value->pegawai->nik }} </th>
                                            <th>{{ $value->pegawai->nama }}</th>
                                            <th>{{ $value->pegawai->kelamin }}</th>
                                            <th>{{ $value->pegawai->tempat_lahir }}, {{ $value->pegawai->tgl_lahir }}</th>
                                            <th>{{ $value->pegawai->lembaga->nama_lembaga }}</th>
                                            <th>{{ isset($value->pegawai->jabatan)?$value->pegawai->jabatan->nama_jabatan:'-' }}</th>
                                            <th>
                                                <div class="table-data-feature">
                                                    <form id="form-deletePegawai-{{$value->id}}" class="form-group pull-left" action="" method="post" hidden>
                                                        {{csrf_field()}} {{method_field('DELETE')}}
                                                        {{--onclick="return confirm('Hapus data terpilih?')"--}}
                                                    </form>
                                                    <button data-target="#test{{$value->id}}" type="submit" class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="modal" data-placement="top" title="Lihat" data-id="pegawaiId">
                                                        <i class="fa fa-eye"></i> Lihat
                                                    </button>
                                                    <button type="button" data-id="{{$value->id}}" class="btn btn-sm btn-rounded btn-primary btn-flat sweet-pegawai-edit" data-toggle="tooltip"
                                                            data-placement="top" title="Edit">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-rounded btn-primary btn-flat" data-toggle="tooltip" data-placement="top" title="Print">
                                                        <i class="fa fa-print"></i> Print
                                                    </button>
                                                    <button onclick="deleteDataPegawai('{{$value->id}}')" type="submit" class="btn btn-sm btn-rounded btn-danger btn-flat" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                </div>
                                            </th>
                                            @include('pegawai.data-pegawai.d-p-show')
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
    <script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>

    <script>
        $('#myTable').on('change', function(e){
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

        var id;
        var body = $('body');
        body.on('click','.sweet-pegawai-edit',function () {
            id=$(this).data('id');
            swal({
                title: "Edit data terpilih?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak",
                closeOnConfirm: false,
                closeOnCancel: true
            },function (isConfirm){

                if (isConfirm){
                    window.location='{{route('d-p-edit')}}'+'?id='+id;
                }
            })
        });

        function deleteDataPegawai(id) {
            swal({
                title: "Hapus data terpilih?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Iya",
                cancelButtonText: "Tidak",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(){
                $("#form-deletePegawai-" + id).attr("action", "{{route('h-d-p-pegawai', ["id" => ""])}}/" + id).submit()
            })
        }

    </script>
@endsection