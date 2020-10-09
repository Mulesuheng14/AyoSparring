<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ayo Sparring - Admin</title>
    <link rel="icon" href="{{ asset('assets/img/icon2.ico') }}" type="image/gif">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- Vendor Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/icofont/icofont.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/venobox/venobox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

    <!-- JToast CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jtoast/src/toastStyle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jtoast/src/custom.css') }}">

    <!-- Mine CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
    
    <style>
        .not-allowed {cursor: not-allowed;}
        button:disabled {
            cursor: not-allowed;
        }  
        input:disabled {
            cursor: not-allowed;
        }  
    </style>

</head>

<body id="page-top">
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none"> </span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/iconmonstr-user-20-240.png" alt="" /></span>
        </a>
        <div class="sidebar-heading text-warning">ADMIN</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#list-users">User</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#list-owner">Owner</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#report">Report</a></li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigge" href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                        Logout

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- User-->
        <section class="resume-section height: fit-content" id="list-users">
            <div class="resume-section-content d-flex flex-column ">
                <h1 class="mb-0">
                    <h1 class="card-title text-green">ADMIN</h1>
                </h1>
                <div class="card mt-1 " style="width: 70rem;">
                    <h5 class="card-header bg-primary text-light">LIST USERS</h5>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <style>
                                            h3 {
                                                text-align: center;
                                            }
                                        </style>

                                        <body>
                                            <h3 class>No.</h3>
                                        </body>
                                    </th>
                                    </th>
                                    <th scope="col" colspan="10">
                                        <style>
                                            h3 {
                                                text-align: center;
                                            }
                                        </style>

                                        <body>
                                            <h3 class>Users</h3>
                                        </body>
                                    </th>
                                </tr>
                                <tr>
                                    <td scope="col">-</td>
                                    <th scope="col" colspan="2">Nama Team</th>
                                    <th scope="col" colspan="2">Alamat</th>
                                    <th scope="col" colspan="2">Email</th>
                                    <th scope="col" colspan="2">No. Handphone</th>
                                    <th scope="col" colspan="2">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Sparta FTI UII</td>
                                    <td colspan="2">Jl. Kaliurang KM 14,5</td>
                                    <td colspan="2">sparta.fti@uii.ac.id</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Sparta FTI UII</td>
                                    <td colspan="2">Jl. Kaliurang KM 14,5</td>
                                    <td colspan="2">sparta.fti@uii.ac.id</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Sparta FTI UII</td>
                                    <td colspan="2">Jl. Kaliurang KM 14,5</td>
                                    <td colspan="2">sparta.fti@uii.ac.id</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Sparta FTI UII</td>
                                    <td colspan="2">Jl. Kaliurang KM 14,5</td>
                                    <td colspan="2">sparta.fti@uii.ac.id</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Sparta FTI UII</td>
                                    <td colspan="2">Jl. Kaliurang KM 14,5</td>
                                    <td colspan="2">sparta.fti@uii.ac.id</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Sparta FTI UII</td>
                                    <td colspan="2">Jl. Kaliurang KM 14,5</td>
                                    <td colspan="2">sparta.fti@uii.ac.id</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Sparta FTI UII</td>
                                    <td colspan="2">Jl. Kaliurang KM 14,5</td>
                                    <td colspan="2">sparta.fti@uii.ac.id</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-1" src="assets/img/StarFutsal.jpg" alt="" /></span>
                    <p class="lead mb-1"> Tersedia satu lapangan vinyl.</p>
                    <p class="lead mb-1"> Pukul 08.00-18.00 Harga 80rb/jam</p>
                    <p class="lead mb-1"> Pukul 18.00-23.00 Harga 120rb/jam</p> -->
                <!-- <div class="card mt-5 " style="width: 40rem;">
                        <h5 class="card-header bg-primary text-light">Next Match</h5>
                        <div class="card-body">
                            <h3 class="card-title">VS. <span class="text-red">Gadjah Mada University</span></h3>
                            <p class="lead text-dark">At Jakal 7 Futsal</p>
                            <p class="lead text-dark">Monday, 09.00 PM</p>
                        </div>
                    </div> -->
            </div>
        </section>
        <hr class="m-0" />
        <!-- Owner-->
        <section class="resume-section height: fit-content" id="list-owner">
            <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
                <div class="card mt-1 " style="width: 70rem;">
                    <h5 class="card-header bg-primary text-light">LIST OWNERS</h5>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <style>
                                            h3 {
                                                text-align: center;
                                            }
                                        </style>

                                        <body>
                                            <h3 class>No.</h3>
                                        </body>
                                    </th>
                                    </th>
                                    <th scope="col" colspan="10">
                                        <style>
                                            h3 {
                                                text-align: center;
                                            }
                                        </style>

                                        <body>
                                            <h3 class>Owners</h3>
                                        </body>
                                    </th>
                                </tr>
                                <tr>
                                    <td scope="col">-</td>
                                    <th scope="col" colspan="2">Nama Lapangan</th>
                                    <th scope="col" colspan="2">Alamat</th>
                                    <th scope="col" colspan="2">Jenis Lapangan</th>
                                    <th scope="col" colspan="2">No. Handphone</th>
                                    <th scope="col" colspan="2">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Star Futsal</td>
                                    <td colspan="2">Jalan Kaliurang KM. 9, Ngaglik, Sleman, DIY</td>
                                    <td colspan="2">Vinyl</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Star Futsal</td>
                                    <td colspan="2">Jalan Kaliurang KM. 9, Ngaglik, Sleman, DIY</td>
                                    <td colspan="2">Vinyl</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Star Futsal</td>
                                    <td colspan="2">Jalan Kaliurang KM. 9, Ngaglik, Sleman, DIY</td>
                                    <td colspan="2">Vinyl</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Star Futsal</td>
                                    <td colspan="2">Jalan Kaliurang KM. 9, Ngaglik, Sleman, DIY</td>
                                    <td colspan="2">Vinyl</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Star Futsal</td>
                                    <td colspan="2">Jalan Kaliurang KM. 9, Ngaglik, Sleman, DIY</td>
                                    <td colspan="2">Vinyl</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Star Futsal</td>
                                    <td colspan="2">Jalan Kaliurang KM. 9, Ngaglik, Sleman, DIY</td>
                                    <td colspan="2">Vinyl</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td colspan="2">Star Futsal</td>
                                    <td colspan="2">Jalan Kaliurang KM. 9, Ngaglik, Sleman, DIY</td>
                                    <td colspan="2">Vinyl</td>
                                    <td colspan="2">0812334212312</td>
                                    <td colspan="2">Aktif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Report-->
        <section class="resume-section height: fit-content" id="report">
            <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
                <div class="card mt-0" style="width: 30rem; height: 35rem;">
                    <div class="card-header bg-primary">
                        <h5 class="text-light">REPORT</h5>
                    </div>
                    <div class="d-flex flex-md-row">
                        <ul class="list-group list-group-flush flex-md-column">
                            <li class="list-group-item">

                                <h4 class="card-title">Hexadecima Informatika UII<span class="text-red"> reported</span> Industri UII</span></h4>
                                <h9 class="lead text-dark1 mt-0 mb-5">Monday, 14 September 2020, 08.00 P.M</h9>
                                <h4> -Bermain kasar</h4>
                            </li>
                    </div>
                    <!-- <h6 class="lead text-dark1">Monday, 08.00 P.M</h6><span><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button></span></li> -->
                    </ul>
                </div>
                </ul>
            </div>
    </div>
    </section>
    <section class="resume-section height: fit-content" id="feedback">
        <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
            <div class="card mt-5 " style="width: 40rem;">
                <h5 class="card-header bg-primary text-light">FEEDBACK</h5>
                <div class="card-body">
                    <h5 class="card-title">Feedback from : <span class="text-blue">Gadjah Mada University</span></h5>
                    <h5 class="lead text-dark">Monday, 11.00 PM</h5>
                    <p class="lead text-dark"> - Lapangannya luas, bolanya enak ditendang</p>
                </div>
            </div>
        </div>
    </section>

    @include('flashsession.flashsession')

    <input type="hidden" id="base_url" value="{{ url('/') }}">

    {{-- ============================================== --}}
    {{-- JAVASCRIPT   									--}}
    {{-- ============================================== --}}

    {{-- JQuery JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/jquery/jquery-3.4.1.min.js') }}"></script>

    {{-- Bootstrap JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    {{-- Vendor JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>

    {{-- JToast JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/jtoast/src/toast.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/jtoast/src/custom.js') }}"></script>

    {{-- Mine JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flashsession.js') }}"></script>

</body>

</html>