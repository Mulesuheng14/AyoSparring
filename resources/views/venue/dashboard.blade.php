<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ayo Sparring - Venue</title>
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
        <div class="sidebar-heading text-warning">STAR FUTSAL</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#my-venue">My Venue</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#booking-list">Booking List</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sparring-list">Sparring List</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#feedback">Feedback</a></li>
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
        <!-- My-Venue-->
        <section class="resume-section" style="width: fit-content; height: fit-content;" id="my-venue">
            <div class="resume-section-content d-flex flex-column ">
                <h1 class="mb-0">
                    <h1 class="card-title text-blue">STAR<span class="text-dark"> FUTSAL</span></h1>
                </h1>
                <div class="subheading mb-5">
                    Jalan Kaliurang KM. 9, Ngaglik, Sleman, DIY
                    <h4 class="text-dark"> 081223456789 </h4>
                </div>
                <div class="card mt-1 " style="width: 70rem; height: fit-content;">
                    <h5 class="card-header bg-primary text-light">Schedule Availability</h5>
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
                                            <h3 class>Date</h3>
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
                                            <h3 class>Time</h3>
                                        </body>
                                    </th>
                                </tr>
                                <tr>
                                    <td scope="col">-</td>
                                    <th scope="col" colspan="2">19.00-20.00</th>
                                    <th scope="col" colspan="2">20.00-21.00</th>
                                    <th scope="col" colspan="2">21.00-22.00</th>
                                    <th scope="col" colspan="2">22.00-23.00</th>
                                    <th scope="col" colspan="2">23.00-24.00</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">05/10/2020</th>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">06/10/2020</th>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">07/10/2020</th>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">08/10/2020</th>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">09/10/2020</th>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">10/10/2020</th>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">11/10/2020</th>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Not Available</td>
                                    <td colspan="2">Available</td>
                                    <td colspan="2">Available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-1" src="assets/img/StarFutsal.jpg" alt="" /></span>
                    <p class="lead mb-1"> Tersedia satu lapangan vinyl.</p>
                    <p class="lead mb-1"> Pukul 08.00-18.00 Harga 80rb/jam</p>
                    <p class="lead mb-1"> Pukul 18.00-23.00 Harga 120rb/jam</p> -->
                <div class="card mt-5 " style="width: 40rem;">
                    <h5 class="card-header bg-primary text-light">Upcoming Schedule</h5>
                    <div class="card-body">
                        <h3 class="card-title">Hexadecima Informatika UII</h3>
                    </div>
                </div>

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
        <!-- Booking-List-->
        <div style="background-color: #f2f2f2;">
            <section class="resume-section" style="width: fit-content; height: fit-content;" id="booking-list">
                <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
                    <div class="card mt-0" style="width: 30rem; height: fit-content;">
                        <div class="card-header bg-primary">
                            <h5 class="text-light">BOOKING LIST</h5>
                        </div>
                        <ul class="list-group list-group-flush flex-md-column">
                            <li class="list-group-item">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-middle " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <h4 class="text-red">Hexadecima Informatika UII</h4>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Kami adalah tim futsal yang beranggotakan mahasiswa/i dari Informatika UII Angkatan 16
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h9 class="lead text-dark1"> - Monday, 14 September 2020, 08.00 P.M</h9>
                                <!-- <h6 class="lead text-dark1">Wednesday, 08.00 P.M</h6><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button> -->

                            </li>
                            <li class="list-group-item">
                                <div class="accordion" id="accordionExample1">
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                                    <h4 class="text-red">FAKULTAS HUKUM UGM</h4>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseTwo" class="collapse hide" aria-labelledby="headingTwo" data-parent="#accordionExample1">
                                            <div class="card-body">
                                                Kami adalah tim futsal yang beranggotakan mahasiswa/i dari Fakultas Hukum Universitas Gadjah Mada Yogyakarta.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h9 class="lead text-dark1"> - Friday, 18 September 2020, 08.00 P.M</h9>
                                <!-- <h6 class="lead text-dark1">Friday, 08.00 P.M</h6><span><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button></span></li> -->
                            <li class="list-group-item">
                                <div class="accordion" id="accordionExample2">
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    <h4 class="text-red">MINARED INFORMATIKA UII</h4>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseThree" class="collapse hide" aria-labelledby="headingThree" data-parent="#accordionExample2">
                                            <div class="card-body">
                                                Kami adalah Komunitas Mahasiswa Teknik Informatika (KMTF) di jurusan Informatika Fakultas Teknologi Industri UII.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h9 class="lead text-dark1"> - Monday, 21 September 2020, 08.00 P.M</h6>
                                    <!-- <h6 class="lead text-dark1">Monday, 08.00 P.M</h6><span><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button></span></li> -->
                        </ul>
                    </div>
                    <div class="card mt-0 ml-5" style="width: 30rem; height: fit-content;">
                        <div class="card-header bg-primary">
                            <h5 class="text-light">REQUEST LIST</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4 class="text-red">Sparta FTI UII</h4>
                                <h9 class="lead text-dark1"> - Thursday, 17 September 2020, 08.00 P.M</h9>
                                <div class="d-flex flex-md-row">
                                    <button type="button" class="btn bg-primary ml-0 mt-3" data-toggle="modal" data-target="#exampleModalLong">
                                        <img class="img-fluid img-profile mx-auto mb-2" src="assets/img/iconmonstr-check-mark-17-24.png" alt="" />
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Schedule Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure to Book want to Accept book from Sparta FTI?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <h6 class="text-light">No</h6>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <h6 class="text-light">Yes</h6>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger ml-2 mt-3">
                                        <img class="img-fluid img-profile mx-auto mb-2" src="assets/img/iconmonstr-x-mark-1-16.png" alt="" />
                                    </button>

                                    <!-- Modal -->

                                    <!-- <button type="button" class="btn btn-success height: 1cm"><span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-1" src="assets/img/iconmonstr-check-mark-1-240.png" alt="" /></span></button> -->
                                    <!-- <h6 class="lead text-dark1">Wednesday, 08.00 P.M</h6><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button> -->
                                </div>
                            </li>
                    </div>
                    </ul>
                </div>
        </div>
        </section>
    </div>
    <hr class="m-0" />
    <!-- Sparring-List-->
    <section class="resume-section" style="width: fit-content; height: fit-content;" id="sparring-list">
        <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
            <div class="card mt-0" style="width: 30rem; height: fit-content;">
                <div class="card-header bg-primary">
                    <h5 class="text-light">SPARRING LIST</h5>
                </div>
                <div class="d-flex flex-md-row">
                    <ul class="list-group list-group-flush flex-md-column">
                        <li class="list-group-item">
                            <div class="d-flex flex-md-row">
                                <h4 class="text-red">Hexadecima Informatika UII vs Teknik Industri UII</h4>
                            </div>
                            <div class="d-flex flex-md-column">
                                <h9 class="lead text-dark1"> - Monday, 14 September 2020, 08.00 P.M</h9>
                                <!-- <h6 class="lead text-dark1">Wednesday, 08.00 P.M</h6><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button> -->
                            </div>
                        </li>
                </div>

                <li class="list-group-item">
                    <div class="d-flex flex-md-row">
                        <h4 class="text-red">Fakultas Hukum UGM vs Sparta FTI UII</h4>
                    </div>
                    <h9 class="lead text-dark1"> - Friday, 18 September 2020, 08.00 P.M</h9>
                    <!-- <h6 class="lead text-dark1">Friday, 08.00 P.M</h6><span><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button></span></li> -->
                <li class="list-group-item">
                    <div class="d-flex flex-md-row">
                        <h4 class="text-red">Minared Informatika vs Teknik Sipil UII</h4>
                    </div>
                    <h9 class="lead text-dark1"> - Monday, 21 September 2020, 08.00 P.M</h6>
                        <!-- <h6 class="lead text-dark1">Monday, 08.00 P.M</h6><span><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button></span></li> -->
                        </ul>
            </div>
            </ul>
        </div>
        </div>
    </section>

    <!-- Feedback-->
    <div style="background-color: #f2f2f2;">
        <section class="resume-section" style="width: fit-content; height: fit-content;" id="feedback">
            <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
                <div class="card mt-5 " style="width: 40rem; height: fit-content;">
                    <h5 class="card-header bg-primary text-light">FEEDBACK</h5>
                    <div class="card-body">
                        <h5 class="card-title">Feedback from : <span class="text-blue">Gadjah Mada University</span></h5>
                        <h5 class="lead text-dark">Monday, 11.00 PM</h5>
                        <p class="lead text-dark"> - Lapangannya luas, bolanya enak ditendang</p>
                    </div>
                </div>
            </div>
        </section>
    </div>



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