<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-v1.png')}}">
    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/lib/dropzone/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/calendar2/pignose.calendar.min.cphpss')}}" rel="stylesheet">
    <link href="{{asset('css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <!-- header header  -->
    <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('home-pegawai')}}">
                    <!-- Logo icon -->
                    <b><img src="{{asset('images/logo1.png')}}" alt="homepage" class="dark-logo" /></b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span><img src="{{asset('images/logo-text1.png')}}" alt="homepage" class="dark-logo" /></span>
                </a>
            </div>
            <!-- End Logo -->
            <div class="navbar-collapse">
                <!-- toggle and nav items -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- Hidden Button -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!--Search-->
                    <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                    </li>
                </ul>
                <!-- User profile and search -->
                <ul class="navbar-nav my-lg-0">

                    <!--Hidden Button-->
                    <!--<li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>-->
                    <!-- Search -->
                    <!--<li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>-->
                    <!--<form class="app-search">-->
                    <!--<input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>-->
                    <!--</li>-->
                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/users/5.jpg')}}" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">
                                <li><a href="#"><i class="ti-key"></i> Change Password</a></li>
                                <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End header header -->
    <!-- Left Sidebar  -->
    <div class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-label">Home</li>
                    <li> <a href="{{route('home-pegawai')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        <ul aria-expanded="false" class="collapse">
                        </ul>
                    </li>
                    <li class="nav-label">Work</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-file-text"></i><span class="hide-menu">Kelola Surat</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('surat-masuk-pegawai')}}">Surat Masuk</a></li>
                            <li><a href="{{route('surat-keluar-pegawai')}}">Surat Keluar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow  " href={{url('/homepd')}}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Kelola Peserta Didik</span></a>
                    </li>
                    <li>
                        <a class="has-arrow  " href="{{route('d-pegawai')}}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Kelola Pegawai</span></a>
                    </li>
                    <li>
                        <a class="has-arrow  " href="{{url('/homek')}}" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Kelola Kurikulum</span></a>
                    </li>
                    <li>
                        <a class="has-arrow  " href="{{url('/homed')}}" aria-expanded="false"><i class="fa fa-archive"></i><span class="hide-menu">Kelola Dokumen</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </div>
    <!-- End Left Sidebar  -->
    @yield('content')
    <!-- footer -->
    <footer class="footer"> © 2018 Quali International Surabaya | OFFICE</footer>
    <!-- End footer -->
</div>
<!-- End Wrapper -->
<!-- All Jquery -->
<script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('js/lib/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<!--Custom JavaScript -->


<!-- Amchart -->
<script src="{{asset('js/lib/morris-chart/raphael-min.js')}}"></script>
<script src="{{asset('js/lib/morris-chart/morris.js')}}"></script>
<script src="{{asset('js/lib/morris-chart/dashboard1-init.js')}}"></script>


<script src="{{asset('js/lib/calendar-2/moment.latest.min.js')}}"></script>
<!-- scripit init-->
<script src="{{asset('js/lib/calendar-2/semantic.ui.min.js')}}"></script>
<!-- scripit init-->
<script src="{{asset('js/lib/calendar-2/prism.min.js')}}"></script>
<!-- scripit init-->
<script src="{{asset('js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
<!-- scripit init-->
<script src="{{asset('js/lib/calendar-2/pignose.init.js')}}"></script>

<script src="{{asset('js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/lib/owl-carousel/owl.carousel-init.js')}}"></script>

<!-- scripit init-->

<script src="{{asset('js/scripts.js')}}"></script>

{{--dropzone--}}
<script src="{{asset('js/lib/dropzone/dropzone.js')}}"></script>

{{--textarea--}}
<script src="{{asset('tinymce/tinymce.min.js')}}"></script>
<script>
    tinymce.init({
        selector: '#textarea',
        plugins: [
            "autolink link image charmap print preview hr anchor pagebreak",
            "wordcount visualblocks code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignmentleft alignmentceter alignmentright " +
        "alignmentjustify | bullist numlist outdent indent | link image media"
    });
</script>

</body>

</html>