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
        .not-allowed {
            cursor: not-allowed;
        }

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
        <div class="sidebar-heading text-warning">{{ Auth::user()->teams->first()->team_name }}</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#inbox">Inbox</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#find-match">Find Match</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#find-venue">Find Venue</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#history">History</a></li>
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
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- Home-->
        <section class="resume-section" style="width: fit-content; height: fit-content;" id="home">
            <div class="resume-section-content d-flex flex-column">
                <h1 class="mb-0">
                    <h1 class="card-title text-red">{{ Auth::user()->teams->first()->team_name }}</h1>
                </h1>
                <div class="subheading mb-5">
                    {{ Auth::user()->teams->first()->address }}
                    <h4 class="text-dark">{{ Auth::user()->phone_number }}</h4>
                </div>
                <p class="lead mb-3">{{ Auth::user()->teams->first()->bio }}</p>
                <p class="lead mb-3 text-dark text-secondary">FIND US AT</p>
                <div class="social-icons">
                    <a class="social-icon" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                </div>

                <div class="card mt-5 " style="width: 40rem;">
                    <h5 class="card-header bg-primary text-light">Next Match</h5>
                    <div class="d-flex flex-md-row">
                        <ul class="list-group list-group-flush flex-md-column">
                            @if ($bookingLists->count() > 0)
                            <li class="list-group-item">
                                @if ($bookingLists[0]->sparring_user != null)
                                <h2 class="card-title"><span class="text-red">{{ $bookingLists[0]->team_name }}</span> VS. <span class="text-red">{{ $bookingLists[0]->sparring_name }}</span></h2>
                                @else
                                <h2 class="card-title">{{ $bookingLists[0]->team_name }}</h2>
                                @endif
                                <p class="lead text-dark">At {{ $bookingLists[0]->venue_name.' - '.$bookingLists[0]->field_name }}</p>
                                <p class="lead text-dark">{{ date('l, d F Y, H:i A ', strtotime($bookingLists[0]->date)) }}</p>
                            </li>
                            @else
                            <li class="list-group-item text-center">
                                <h5>Data not found</h5>
                            </li>
                            @endif
                        </ul>
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
                            @if ($requestLists->count() > 0)
                            @foreach ($requestLists as $index => $list)
                            <li class="list-group-item">
                                <h4 class="text-red">{{ $list->team_name }}</h4>
                                <p class="lead text-dark">{{ $list->venue_name.' '.$list->field_name }}</p>
                                <p class="lead text-dark">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</p>
                                <div class="d-flex flex-md-row">
                                    <button type="button" class="btn bg-secondary ml-0 mt-3" data-toggle="modal" data-target="#{{'exampleModalLong'.$index}}">
                                        Accept
                                    </button>
                                    <button type="button" class="btn btn-danger ml-2 mt-3">
                                        Decline
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="{{'exampleModalLong'.$index}}" tabindex="-1" role="dialog" aria-labelledby="{{'exampleModalLong'.$index}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="{{'exampleModalLong'.$index}}">Sparring Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure to Book want to Accept request from {{ $list->team_name }}?
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
                            @endforeach
                            @else
                            <li class="list-group-item text-center">
                                <h5>Data not found</h5>
                            </li>
                            @endif
                        </ul>
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
                    <ul class="list-group list-group-flush flex-md-column">
                        @if ($sparringLists->count() > 0)
                        @foreach ($sparringLists as $index => $list)
                        <li class="list-group-item">
                            <div class="accordion" id="{{'accordionExample'.$index}}">
                                <div class="card">
                                    <div class="card-header" id="{{'heading'.$index}}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#{{'collapse'.$index}}" aria-expanded="true" aria-controls="collapseOne">
                                                <h4 class="text-red">{{ $list->team_name }}</h4>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="{{'collapse'.$index}}" class="collapse hide" aria-labelledby="{{'heading'.$index}}" data-parent="#{{'accordionExample'.$index}}">
                                        <div class="card-body">
                                            {{ $list->bio }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="d-flex flex-md-column"> -->
                            <h6 class="lead text-dark1">At {{ $list->venue_name.' - '.$list->field_name }}</h6>
                            <h6 class="lead text-dark1">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</h6>
                            <button type="button" class="btn bg-secondary" style="width: 2cm; height: 1cm;" data-toggle="modal" data-target="#{{'requestModal'.$index}}">
                                <h6 class="text-light">Request</h6>
                            </button>
                            <div class="modal fade" id="{{'requestModal'.$index}}" tabindex="-1" role="dialog" aria-labelledby="{{'requestModal'.$index}}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="{{'requestModal'.$index}}">Request Information</h5>
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
                        @endforeach
                        @else
                        <li class="list-group-item text-center">
                            <h5>Data not found</h5>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="card mt-0 ml-5" style="width: 30rem; height: fit-content;">
                    <div class="card-header bg-primary">
                        <h5 class="text-light">TEAM SCHEDULE</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @if ($bookingLists->count() > 0)
                        @foreach ($bookingLists as $index => $list)
                        <li class="list-group-item">
                            @if ($list->sparring_user != null)
                            <h4 class="text-dark"><span class="text-red">{{ $list->team_name }}</span> VS. <span class="text-red">{{ $list->sparring_name }}</span></h4>
                            @else
                            <h4 class="text-dark">{{ $list->team_name }}</h4>
                            @endif
                            <h6 class="lead text-dark">At {{ $list->venue_name.' - '.$list->field_name }}</h6>
                            <h6 class="lead text-dark">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</h6>
                        </li>
                        @endforeach
                        @else
                        <li class="list-group-item text-center">
                            <h5>Data not found</h5>
                        </li>
                        @endif
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
                        @if ($historyLists->count() > 0)
                        @foreach ($historyLists as $index => $list)
                        <li class="list-group-item">
                            <div class="d-flex flex-md-row">
                                @if ($list->sparring_user == null)
                                <h4 class="text-red">{{$list->team_name}}</h4>
                                @else
                                <h4 class="text-red">{{$list->team_name}} vs {{$list->sparring_name}}</h4>
                                @endif
                                <button type="button" class="btn bg-secondary ml-5 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#{{'reviewUser'.$index}}">
                                    <h6 class="text-light">Review</h6>
                                </button>
                                <div class="modal fade" id="{{'reviewUser'.$index}}" tabindex="-1" role="dialog" aria-labelledby="{{'reviewUser'.$index}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="{{'reviewUser'.$index}}">Review</h5>
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
                                <button type="button" class="btn btn-secondary ml-3 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#{{'reportUser'.$index}}">
                                    <h6 class="text-light">Report</h6>
                                </button>
                                <div class="modal fade" id="{{'reportUser'.$index}}" tabindex="-1" role="dialog" aria-labelledby="{{'reportUser'.$index}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="{{'reportUser'.$index}}">Report</h5>
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
                            <h5>{{ date('l, d F Y', strtotime($list->date)) }},</h5>
                            <h5 class="text-dark mt-1">At {{ $list->venue_name.' '.$list->field_name }}</h5>
                            <button type="button" class="btn bg-secondary ml-0 mt-0" style="width: fit-content; height: fit-content;" data-toggle="modal" data-target="#{{'reviewVenue'.$index}}">
                                <h6 class="text-light">Review</h6>
                            </button>
                            <div class="modal fade" id="{{'reviewVenue'.$index}}" tabindex="-1" role="dialog" aria-labelledby="{{'reviewVenue'.$index}}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="{{'reviewVenue'.$index}}">Review</h5>
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
                        @endforeach
                        @else
                        <li class="list-group-item text-center">
                            <h5>Data not found</h5>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </section>
        <!-- Feedback -->
        <div style="background-color: #f2f2f2;">
            <section class="resume-section height: fit-content" id="feedback">
                <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5" style="width: fit-content;">
                    <div class="card mt-0" style="width: 30rem; height: fit-content;">
                        <div class="card-header bg-primary">
                            <h5 class="text-light">FEEDBACK</h5>
                        </div>
                        <div class="d-flex flex-md-row">
                            <ul class="list-group list-group-flush flex-md-column">
                                @if ($reviewLists->count() > 0)
                                @foreach ($reviewLists as $index => $list)
                                <li class="list-group-item">
                                    <h5 class="card-title">Feedback from : <span class="text-blue">{{ $list->team_name }}</span></h5>
                                    <h5 class="lead text-dark">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</h5>
                                    <p class="lead text-dark">{{ $list->comment }}</p>
                                </li>
                                @endforeach
                                @else
                                <li class="list-group-item text-center">
                                    <h5>Data not found</h5>
                                </li>
                                @endif
                            </ul>
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