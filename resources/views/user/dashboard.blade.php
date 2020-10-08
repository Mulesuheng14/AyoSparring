<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ayo Sparring - User</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles_user.css') }}">
    
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
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/SPARTA-FTI.jpg" alt="" /></span>
        </a>
        <div class="sidebar-heading text-warning">Sparta FTI</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#inbox">Inbox</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#find-match">Find Match</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#find-venue">Find Venue</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#history">History</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#feedback">Feedback</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- Home-->
        <section class="resume-section" style="width: fit-content; height: fit-content;" id="home">
            <div class="resume-section-content d-flex flex-column">
                <h1 class="mb-0">
                    <h1 class="card-title text-red">SPARTA<span class="text-dark"> FTI</span></h1>
                </h1>
                <div class="subheading mb-5">
                    Gedung KH Mas Mansyur, Jl. Kaliurang KM 14,5
                    <h4 class="text-dark"> 082299119922 </h4>
                </div>
                <p class="lead mb-3"> We are the proffesional futsal team of Faculty of Industrial Technology, Islamic University of Indonesia.</p>
                <p class="lead mb-3 text-dark text-secondary">FIND US AT</p>
                <div class="social-icons">
                    <a class="social-icon" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                </div>

                <div class="card mt-5 " style="width: 40rem;">
                    <h5 class="card-header bg-primary text-light">Next Match</h5>
                    <div class="card-body">
                        <h2 class="card-title">VS. <span class="text-red">Gadjah Mada University</span></h2>
                        <p class="lead text-dark">At Jakal 7 Futsal</p>
                        <p class="lead text-dark">Monday, 09.00 PM</p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Inbox-->
        <div style="background-color: #f2f2f2;">
            <section class="resume-section" style="width: fit-content; height: fit-content;" id="inbox">
                <div class="resume-section-content d-flex flex-column">
                    <div class="card mt-0 ml-5" style="width: 30rem; height: fit-content;">
                        <div class="card-header bg-primary">
                            <h5 class="text-light">REQUEST LIST</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4 class="text-red">Industri UII</h4>
                                <h9 class="lead text-dark1"> - Thursday, 17 September 2020, 08.00 P.M</h9>
                                <div class="d-flex flex-md-row">
                                    <button type="button" class="btn bg-secondary ml-0 mt-3" data-toggle="modal" data-target="#exampleModalLong15">
                                        <img class="img-fluid img-profile mx-auto mb-2" src="assets/img/iconmonstr-check-mark-17-24.png" alt="" />
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle15" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle15">Sparring Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure to Book want to Accept request from Industri UII?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <h6 class="text-light">No</h6>
                                                    </button>
                                                    <button type="button" class="btn bg-secondary">
                                                        <h6 class="text-light">Yes</h6>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger ml-2 mt-3">
                                        <img class="img-fluid img-profile mx-auto mb-2" src="assets/img/iconmonstr-x-mark-1-16.png" alt="" />
                                    </button>
                                    <!-- <button type="button" class="btn btn-success height: 1cm"><span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-1" src="assets/img/iconmonstr-check-mark-1-240.png" alt="" /></span></button> -->
                                    <!-- <h6 class="lead text-dark1">Wednesday, 08.00 P.M</h6><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button> -->
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h4 class="text-red">Sipil UII</h4>
                                <h9 class="lead text-dark1"> - Thursday, 24 September 2020, 08.00 P.M</h9>
                                <div class="d-flex flex-md-row">
                                    <button type="button" class="btn bg-secondary ml-0 mt-3" data-toggle="modal" data-target="#exampleModalLong16">
                                        <img class="img-fluid img-profile mx-auto mb-2" src="assets/img/iconmonstr-check-mark-17-24.png" alt="" />
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle16" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle16">Schedule Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure to Book want to Accept book from Sipil FTI?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <h6 class="text-light">No</h6>
                                                    </button>
                                                    <button type="button" class="btn bg-secondary">
                                                        <h6 class="text-light">Yes</h6>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger ml-2 mt-3">
                                        <img class="img-fluid img-profile mx-auto mb-2" src="assets/img/iconmonstr-x-mark-1-16.png" alt="" />
                                    </button>
                                    <!-- <button type="button" class="btn btn-success height: 1cm"><span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-1" src="assets/img/iconmonstr-check-mark-1-240.png" alt="" /></span></button> -->
                                    <!-- <h6 class="lead text-dark1">Wednesday, 08.00 P.M</h6><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button> -->
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h4 class="text-red">Hukum UII</h4>
                                <h9 class="lead text-dark1"> - Thursday, 01 Oktober 2020, 08.00 P.M</h9>
                                <div class="d-flex flex-md-row">
                                    <button type="button" class="btn bg-secondary ml-0 mt-3" data-toggle="modal" data-target="#exampleModalLong18">
                                        <img class="img-fluid img-profile mx-auto mb-2" src="assets/img/iconmonstr-check-mark-17-24.png" alt="" />
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle18" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle18">Schedule Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure to Book want to Accept book from Hukum UII?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <h6 class="text-light">No</h6>
                                                    </button>
                                                    <button type="button" class="btn bg-secondary">
                                                        <h6 class="text-light">Yes</h6>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger ml-2 mt-3">
                                        <img class="img-fluid img-profile mx-auto mb-2" src="assets/img/iconmonstr-x-mark-1-16.png" alt="" />
                                    </button>
                                    <!-- <button type="button" class="btn btn-success height: 1cm"><span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-1" src="assets/img/iconmonstr-check-mark-1-240.png" alt="" /></span></button> -->
                                    <!-- <h6 class="lead text-dark1">Wednesday, 08.00 P.M</h6><button type="button" class="btn btn-danger btn-hover" style="width: 2cm; height: 1cm;"><h6 class="text-light">Request</h6></button> -->
                                </div>
                            </li>
                    </div>
                </div>
            </section>
        </div>
        <hr class="m-0" />
        <!-- Find-match-->
        <section class="resume-section" style="width:fit-content; height: fit-content" id="find-match">
            <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
                <div class="card mt-0" style="width: 30rem; height: fit-content">
                    <div class="card-header bg-primary">
                        <h5 class="text-light">SPARRING AVAILABLE</h5>
                    </div>
                    <!-- <div class="card-body">
                    <div class="list-item flex-md-row">
                        <div class="flex-md-row">
                            FAKULTAS PERTANIAN INSTIPER
                        </div>
                        <div class="flex-md-row">
                            <p>At Telaga Futsal 2</p>
                            <p>Wednesday, 08.00 P.M</p>
                        </div>
                        <div class="flex-md-column">
                            <button>Request</button>
                            <button>Dropdown</button>
                        </div>
                    </div>
                    </div> -->
                    <!-- <div class="d-flex flex-md-row"> -->
                    <ul class="list-group list-group-flush flex-md-column">
                        <li class="list-group-item">
                            <!-- <div class="d-flex flex-md-row">
                                <h4 class="text-red">Fakultas Pertanian Instiper</h4> 
                                  <div class="dropdown ml-0 mb-2">
                                    <button class="btn btn-danger dropdown-toggle d-flex flex-md-row ml-2 mt-1" href="#teaminfo" style="width: fit-content;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#teaminfo">Action</a>
                                      </div>
                                  </div>          
                              </div> -->
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <h4 class="text-red">FAKULTAS PERTANIAN INSTIPER</h4>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Kami adalah tim futsal yang beranggotakan mahasiswa/i dari Fakultas Pertanian Instiper Yogyakarta
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="d-flex flex-md-column"> -->
                            <h6 class="lead text-dark1">At Telaga 2 Futsal</h6>
                            <h6 class="lead text-dark1">Wednesday, 08.00 P.M</h6>
                            <button type="button" class="btn bg-secondary" style="width: 2cm; height: 1cm;" data-toggle="modal" data-target="#exampleModalLong">
                                <h6 class="text-light">Request</h6>
                            </button>
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLong">Request Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your sparring request has been sent.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-secondary">
                                                <h6 class="text-light">Oke</h6>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </li>
                        <!-- </div> -->
                        <li class="list-group-item">
                            <!-- <div class="d-flex flex-md-row">
                                  <h4 class="text-red">Fakultas Hukum UGM</h4> 
                                    <div class="dropdown ml-0 mb-2">
                                      <button class="btn btn-danger dropdown-toggle d-flex flex-md-row ml-2 mt-1" href="#teaminfo" style="width: fit-content;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#teaminfo">Action</a>
                                        </div>
                                    </div>          
                                </div> -->
                            <div class="accordion" id="accordionExample1">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
                            <h6 class="lead text-dark1">At Jakal 7 Futsal</h6>
                            <h6 class="lead text-dark1">Friday, 08.00 P.M</h6><span>
                                <button type="button" class="btn bg-secondary btn-hover" style="width: 2cm; height: 1cm;" data-toggle="modal" data-target="#exampleModalLong1">
                                    <h6 class="text-light">Request</h6>
                                </button>
                                <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong1">Request Information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Your sparring request has been sent.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-secondary">
                                                    <h6 class="text-light">Oke</h6>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="list-group-item">
                            <!-- <div class="d-flex flex-md-row">
                          <h4 class="text-red">Minared Informatika UII</h4> 
                            <div class="dropdown ml-0 mb-2">
                              <button class="btn btn-danger dropdown-toggle d-flex flex-md-row ml-2 mt-1" href="#teaminfo" style="width: fit-content;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#teaminfo">Action</a>
                                </div>
                            </div>          
                        </div> -->
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
                            <h6 class="lead text-dark1">At Star Futsal</h6>
                            <h6 class="lead text-dark1">Monday, 08.00 P.M</h6>
                            <button type="button" class="btn bg-secondary btn-hover" style="width: 2cm; height: 1cm;" data-toggle="modal" data-target="#exampleModalLong2">
                                <h6 class="text-light">Request</h6>
                            </button>
                            <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong2" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLong2">Request Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Your sparring request has been sent.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-secondary">
                                                <h6 class="text-light">Oke</h6>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="accordion" id="accordionExample14">
                                <div class="card">
                                    <div class="card-header" id="heading14">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                                <h4 class="text-red">Sparta FTI UII</h4>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse14" class="collapse hide" aria-labelledby="heading14" data-parent="#accordionExample14">
                                        <div class="card-body">
                                            We are the proffesional futsal team of Faculty of Industrial Technology, Islamic University of Indonesia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="lead text-dark1">At Star Futsal</h6>
                            <h6 class="lead text-dark1">Thursday, 08.00 P.M</h6>
                        </li>
                    </ul>
                </div>
                <div class="card mt-0 ml-5" style="width: 30rem; height: fit-content;">
                    <div class="card-header bg-primary">
                        <h5 class="text-light">TEAM SCHEDULE</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h4 class="text-dark">VS. <span class="text-red">Gadjah Mada University</span></h4>
                            <h6 class="lead text-dark1">At Jakal 7 Futsal</h6>
                            <h6 class="lead text-dark1">Monday, 09.00 P.M</h6>
                        </li>
                        <li class="list-group-item">
                            <h4 class="text-dark">VS. <span class="text-red">Perminyakan UPN</span></h4>
                            <h6 class="lead text-dark1">At Jakal 7 Futsal</h6>
                            <h6 class="lead text-dark1">Friday, 08.00 P.M</h6>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Find Venue-->
        <div style="background-color: #f2f2f2;">
            <section class="resume-section" style="width: fit-content; height: fit-content" id="find-venue">
                <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5" style="width: fit-content;">
                    <div class="card mt-0" style="width: fit-content; height: fit-content;">
                        <div class="card-header bg-primary">
                            <h5 class="text-light">VENUE AVAILABLE</h5>
                        </div>
                        <div class="d-flex flex-md-row">
                            <ul class="list-group list-group-flush flex-md-column">
                                <li class="list-group-item">
                                    <div class="d-flex flex-md-row width:fit-content height:fit-content">
                                        <h4 class="text-red">Jakal 7 Futsal</h4>
                                        <!-- <span class="fa fa-star checked ml-2 mt-1"></span>
                                <span class="fa fa-star checked mt-1"></span>
                                <span class="fa fa-star checked mt-1"></span>
                                <span class="fa fa-star checked mt-1"></span>
                                <span class="fa fa-star mt-1"></span>  -->
                                        <!-- <div class="dropdown ml-0 mb-2">
                                    <button class="btn btn-danger dropdown-toggle d-flex flex-md-row ml-2 mt-1" href="#teaminfo" style="width: fit-content;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#teaminfo">Action</a>
                                      </div>
                                  </div>           -->
                                    </div>

                                    <!-- <h6 class="lead text-dark1">Jl. Kaliurang No.7,7, Ngabean Kulon, Sinduharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</h6> -->
                                    <button onclick="myFunction('https://maps.google.com/maps?q=Jakal7%20&t=&z=13&ie=UTF8&iwloc=&output=embed')">Jl. Kaliurang No.7,7, Ngabean Kulon, Sinduharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</button> <br /> <br />
                                    <div class="accordion" id="accordionExample3">
                                        <div class="card mb-5">
                                            <div class="card-header" id="headingFour">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                        <h4 class="text-red">Schedule Available</h4>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse hide" aria-labelledby="headingFour" data-parent="#accordionExample3">
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
                                        </div>
                                    </div>
                                    <div class="d-flex flex-md-row">
                                        <form action="/action_page.php">
                                            <label for="Jadwal-hari">Date</label>
                                            <input type="date" id="Jadwal-hari" name="Jadwal">
                                        </form>
                                        <form action="/action_page.php">
                                            <label for="appt">Start</label>
                                            <input type="time" id="appt" name="appt">
                                        </form>
                                        <form action="/action_page.php">
                                            <label for="appt">End</label>
                                            <input type="time" id="appt" name="appt">
                                        </form>
                                        <button type="button" class="btn bg-secondary ml-5" data-toggle="modal" data-target="#exampleModalLong3">
                                            <h6 class="text-light">Book</h6>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong3" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLong3">Schedule Confirmation</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Your book request has been sent. After the owner accept it, Do you want to post your schedule on Sparring List?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                            <h6 class="text-light">No</h6>
                                                        </button>
                                                        <button type="button" class="btn bg-secondary">
                                                            <h6 class="text-light">Yes</h6>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        </div>
                        <li class="list-group-item">
                            <div class="d-flex flex-md-row">
                                <h4 class="text-red">Meteor Futsal</h4>
                                <!-- <span class="fa fa-star checked ml-2 mt-1"></span>
                        <span class="fa fa-star checked mt-1"></span>
                        <span class="fa fa-star checked mt-1"></span>
                        <span class="fa fa-star checked mt-1"></span>
                        <span class="fa fa-star mt-1"></span>  -->
                                <!-- <div class="dropdown ml-0 mb-2">
                            <button class="btn bg-secondary dropdown-toggle d-flex flex-md-row ml-2 mt-1" href="#teaminfo" style="width: fit-content;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#teaminfo">Action</a>
                              </div>
                          </div>-->
                            </div>
                            <!-- <h6 class="lead text-dark1">Jalan Karang Ploso, RT.01/RW.11, Gempol, Condongcatur, Sleman Regency, Special Region of Yogyakarta</h6> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.8414885627003!2d110.41241231472522!3d-7.70015399444927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ea54c0e5dd9%3A0x3a44464434e056a8!2sMeteor%20Futsal%20Court%20and%20Bilyard!5e0!3m2!1sen!2sid!4v1601870594892!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                            <button onclick="myFunction('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.8414885627003!2d110.41241231472522!3d-7.70015399444927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ea54c0e5dd9%3A0x3a44464434e056a8!2sMeteor%20Futsal%20Court%20and%20Bilyard!5e0!3m2!1sen!2sid!4v1601870594892!5m2!1sen!2sid')">Sardonoharjo Jalan Kaliurang No.Km. 13, Candi Karang, Sinduharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</button> <br /> <br />
                            <div class="accordion" id="accordionExample4">
                                <div class="card mb-5">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                <h4 class="text-red">Schedule Available</h4>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse hide" aria-labelledby="headingFive" data-parent="#accordionExample4">
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
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-md-row">
                                <form action="/action_page.php">
                                    <label for="Jadwal-hari">Date</label>
                                    <input type="date" id="Jadwal-hari" name="Jadwal">
                                </form>
                                <form action="/action_page.php">
                                    <label for="appt">Start</label>
                                    <input type="time" id="appt" name="appt">
                                </form>
                                <form action="/action_page.php">
                                    <label for="appt">End</label>
                                    <input type="time" id="appt" name="appt">
                                </form>
                                <button type="button" class="btn bg-secondary ml-5" data-toggle="modal" data-target="#exampleModalLong4">
                                    <h6 class="text-light">Book</h6>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong4" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong4">Schedule Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Your book request has been sent. After the owner accept it, Do you want to post your schedule on Sparring List?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    <h6 class="text-light">No</h6>
                                                </button>
                                                <button type="button" class="btn bg-secondary">
                                                    <h6 class="text-light">Yes</h6>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <!-- <form action="http://maps.google.com/maps" method="get" target="_blank">
                        <label for="saddr">Enter your location</label>
                        <input type="text" name="saddr" />
                        <input type="hidden" name="daddr" value="350 5th Ave New York, NY 10018 (Empire State Building)" />
                        <input type="submit" value="Get directions" />
                     </form> -->
                            <div class="d-flex flex-md-row">
                                <h4 class="text-red">Star Futsal</h4>
                                <!-- <span class="fa fa-star checked ml-2 mt-1"></span>
                        <span class="fa fa-star checked mt-1"></span>
                        <span class="fa fa-star checked mt-1"></span>
                        <span class="fa fa-star checked mt-1"></span>
                        <span class="fa fa-star mt-1"></span>  -->
                                <!-- <div class="dropdown ml-0 mb-2">
                            <button class="btn bg-secondary dropdown-toggle d-flex flex-md-row ml-2 mt-1" href="#teaminfo" style="width: fit-content;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#teaminfo">Action</a>
                              </div>
                          </div>           -->
                            </div>
                            <!-- <button onclick="myFunction('https://maps.google.com/maps?q=meteor%20futsal&t=&z=13&ie=UTF8&iwloc=&output=embed")>Jl. Kaliurang No.9,6, Gondangan, Sardonoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</button> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.6124673662425!2d110.39903331472546!3d-7.72466099443204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5938616504cd%3A0xa1625d4f77e3cacf!2sStar%20Futsal%20Center!5e0!3m2!1sen!2sid!4v1601870720336!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                            <button onclick="myFunction('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.6124673662425!2d110.39903331472546!3d-7.72466099443204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5938616504cd%3A0xa1625d4f77e3cacf!2sStar%20Futsal%20Center!5e0!3m2!1sen!2sid!4v1601870720336!5m2!1sen!2sid')">Jl. Kaliurang No.9,6, Gondangan, Sardonoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</button> <br /> <br />
                            <div class="accordion" id="accordionExample5">
                                <div class="card mb-5">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                <h4 class="text-red">Schedule Available</h4>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse hide" aria-labelledby="headingSix" data-parent="#accordionExample5">
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
                                                                <h4 class>Time</h3>
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
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-md-row">
                                <form action="/action_page.php">
                                    <label for="Jadwal-hari">Date</label>
                                    <input type="date" id="Jadwal-hari" name="Jadwal">
                                </form>
                                <form action="/action_page.php">
                                    <label for="appt">Start</label>
                                    <input type="time" id="appt" name="appt">
                                </form>
                                <form action="/action_page.php">
                                    <label for="appt">End</label>
                                    <input type="time" id="appt" name="appt">
                                </form>
                                <button type="button" class="btn bg-secondary ml-5" data-toggle="modal" data-target="#exampleModalLong5">
                                    <h6 class="text-light">Book</h6>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong5" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong5">Schedule Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Your book request has been sent. Do you want to post your schedule on Sparring List?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    <h6 class="text-light">No</h6>
                                                </button>
                                                <button type="button" class="btn bg-secondary">
                                                    <h6 class="text-light">Yes</h6>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </ul>
                    </div>
                    <script>
                        function myFunction(habib) {
                            document.getElementById("demo").src = habib;
                        }
                    </script>
                    <div class="card mt-0 ml-5" style="width: fit-content; height: fit-content;">
                        <div class="card-header bg-primary" style="width: 37.5rem;">
                            <h5 class="text-light">Location</h5>
                        </div>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe id="demo" width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uii&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginwidth="0"></iframe>

                            </div>
                        </div>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.6124673662425!2d110.39903331472546!3d-7.72466099443204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5938616504cd%3A0xa1625d4f77e3cacf!2sStar%20Futsal%20Center!5e0!3m2!1sen!2sid!4v1599014523621!5m2!1sen!2sid" width="475" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                        <!-- <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h4 class="text-dark">VS. <span class="text-red">Gadjah Mada University</span></h4> <h6 class="lead text-dark1">At Jakal 7 Futsal</h6><h6 class="lead text-dark1">Monday, 09.00 P.M</h6></li>
                    <li class="list-group-item"><h4 class="text-dark">VS. <span class="text-red">Perminyakan UPN</span></h4> <h6 class="lead text-dark1">At Jakal 7 Futsal</h6><h6 class="lead text-dark1">Friday, 08.00 P.M</h6></li>
                  </ul> -->
                    </div>
                </div>
            </section>
        </div>
        <hr class="m-0" />
        <!-- History-->
        <section class="resume-section height: fit-content" id="history">
            <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
                <div class="card mt-0" style="width: fit-content; height: fit-content;">
                    <div class="card-header bg-primary" id="history1">
                        <h5 class="text-light">HISTORY</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex flex-md-row">
                                <h4 class="text-dark">VS. <span class="text-red">Gadjah Mada University</span></h4>
                                <button type="button" class="btn bg-secondary ml-5 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong6">
                                    <h6 class="text-light">Review</h6>
                                </button>
                                <div class="modal fade" id="exampleModalLong6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong6" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong6">Review</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span> -->
                                                <form action="/action_page.php">
                                                    <label for="Review">Review :</label>
                                                    <textarea id="Review" name="Review" rows="4" cols="50"></textarea>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input class="btn-secondary" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary ml-3 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong7">
                                    <h6 class="text-light">Report</h6>
                                </button>
                                <div class="modal fade" id="exampleModalLong7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong7" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong7">Report</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <input type="radio" id="Fake-request" name="report" value="Fake-request">
                                                    <label for="Fake-request">Fake Request</label><br>
                                                    <input type="radio" id="Bermain-kasar" name="report" value="Bermain-kasar">
                                                    <label for="Bermain-kasar">Bermain kasar</label><br>
                                                    <input type="radio" id="Deskripsi-tidakSesuai" name="report" value="Deskripsi-tidakSesuai">
                                                    <label for="other">Deskripsi tidak sesuai</label>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input class="btn-secondary" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5>05 Oktober 2020,</h5>
                            <h5 class="text-dark mt-1">At Jakal7 futsal</h5>
                            <button type="button" class="btn bg-secondary ml-0 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong8">
                                <h6 class="text-light">Review</h6>
                            </button>
                            <div class="modal fade" id="exampleModalLong8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong8" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLong8">Review</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span> -->
                                            <form action="/action_page.php">
                                                <label for="Review">Review :</label>
                                                <textarea id="Review" name="Review" rows="4" cols="50"></textarea>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn-secondary" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex flex-md-row">
                                <h4 class="text-dark">VS. <span class="text-red">Industri UII</span></h4>
                                <button type="button" class="btn bg-secondary ml-5 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong9">
                                    <h6 class="text-light">Review</h6>
                                </button>
                                <div class="modal fade" id="exampleModalLong9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong9" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong9">Review</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span> -->
                                                <form action="/action_page.php">
                                                    <label for="Review">Review :</label>
                                                    <textarea id="Review" name="Review" rows="4" cols="50"></textarea>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input class="btn-secondary" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary ml-3 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong10">
                                    <h6 class="text-light">Report</h6>
                                </button>
                                <div class="modal fade" id="exampleModalLong10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong10" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong10">Report</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <input type="radio" id="Fake-request" name="report" value="Fake-request">
                                                    <label for="Fake-request">Fake Request</label><br>
                                                    <input type="radio" id="Bermain-kasar" name="report" value="Bermain-kasar">
                                                    <label for="Bermain-kasar">Bermain kasar</label><br>
                                                    <input type="radio" id="Deskripsi-tidakSesuai" name="report" value="Deskripsi-tidakSesuai">
                                                    <label for="other">Deskripsi tidak sesuai</label>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input class="btn-secondary" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5>08 September 2020,</h5>
                            <h5 class="text-dark mt-1">At Meteor futsal</h5>
                            <button type="button" class="btn bg-secondary ml-0 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong11">
                                <h6 class="text-light">Review</h6>
                            </button>
                            <div class="modal fade" id="exampleModalLong11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong11" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLong11">Review</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span> -->
                                            <form action="/action_page.php">
                                                <label for="Review">Review :</label>
                                                <textarea id="Review" name="Review" rows="4" cols="50"></textarea>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn-secondary" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex flex-md-row">
                                <h4 class="text-dark">VS. <span class="text-red">Sipil UII</span></h4>
                                <button type="button" class="btn bg-secondary ml-5 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong12">
                                    <h6 class="text-light">Review</h6>
                                </button>
                                <div class="modal fade" id="exampleModalLong12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong12" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong12">Review</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span> -->
                                                <form action="/action_page.php">
                                                    <label for="Review">Review :</label>
                                                    <textarea id="Review" name="Review" rows="4" cols="50"></textarea>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input class="btn-secondary" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary ml-3 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong14">
                                    <h6 class="text-light">Report</h6>
                                </button>
                                <div class="modal fade" id="exampleModalLong14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong14" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLong14">Report</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <input type="radio" id="Fake-request" name="report" value="Fake-request">
                                                    <label for="Fake-request">Fake Request</label><br>
                                                    <input type="radio" id="Bermain-kasar" name="report" value="Bermain-kasar">
                                                    <label for="Bermain-kasar">Bermain kasar</label><br>
                                                    <input type="radio" id="Deskripsi-tidakSesuai" name="report" value="Deskripsi-tidakSesuai">
                                                    <label for="other">Deskripsi tidak sesuai</label>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <input class="btn-secondary" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5>02 September 2020,</h5>
                            <h5 class="text-dark mt-1">At Star futsal</h5>
                            <button type="button" class="btn bg-secondary ml-0 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#exampleModalLong13">
                                <h6 class="text-light">Review</h6>
                            </button>
                            <div class="modal fade" id="exampleModalLong13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong13" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLong13">Review</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/action_page.php">
                                                <label for="Review">Review :</label>
                                                <textarea id="Review" name="Review" rows="4" cols="50"></textarea>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn-secondary" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Feedback -->
        <div style="background-color: #f2f2f2;">
            <section class="resume-section height: fit-content" id="feedback">
                <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5" style="width: fit-content;">
                    <div class="card mt-5 " style="width: 40rem;">
                        <h5 class="card-header bg-primary text-light">FEEDBACK</h5>
                        <div class="card-body">
                            <h5 class="card-title">Feedback from : <span class="text-red">Gadjah Mada University</span></h5>
                            <h5 class="lead text-dark">Monday, 11.00 PM</h5>
                            <p class="lead text-dark"> - Sparta FTI UII bermain sangat baik dan kompetitif</p>
                        </div>
                    </div>
            </section>
        </div>
        <hr class="m-0" />
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
    <script type="text/javascript" src="{{ asset('assets/js/scripts_user.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flashsession.js') }}"></script>

</body>

</html>