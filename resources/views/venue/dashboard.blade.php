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

    {{-- DataTables CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/css/dataTables.css') }}">

    <!-- JToast CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jtoast/src/toastStyle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jtoast/src/custom.css') }}">

    <!-- Mine CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">

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
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/iconmonstr-user-20-240.png" alt="" /></span>
        </a>
        <div class="sidebar-heading text-warning">{{ Auth::user()->venues->first()->venue_name }}</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#my-venue">My Venue</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#booking-list">Booking List</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sparring-list">Sparring List</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#feedback">Feedback</a></li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigge" href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-feather="power" class="svg-icon"></i>
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
        <section class="resume-section" style="width: fit-content;height: fit-content;" id="my-venue">
            <div class="resume-section-content d-flex flex-column ">

                <h1 class="mb-0">
                    <h1 class="card-title text-blue">{{ Auth::user()->venues->first()->venue_name }}</h1>
                </h1>

                <div class="subheading mb-5">
                    {{ Auth::user()->venues->first()->address }}
                    <h4 class="text-dark">{{ Auth::user()->venues->first()->phone_number }}</h4>
                </div>

                <div class="card mt-1 " style="width: 70rem; height: fit-content;">
                    @foreach ($schedules as $venue)
                    <h5 class="card-header bg-primary text-light">Schedule Availability - {{$venue['venue_field']['field_name'].' '.$venue['venue_field']['field_type']}}</h5>
                    <div class="car-body">
                        <table class="table table-striped table-bordered display nowrap">
                            <thead>
                                <tr>
                                <tr>
                                    <th rowspan="2" class="text-center align-middle">Date</th>
                                    <th colspan="99999" class="text-center align-middle">Time</th>
                                </tr>
                                </tr>
                                <tr>
                                    @foreach ($venue['schedule'][0]['time'] as $time)
                                    <th class="text-center align-middle">{{$time}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($venue['schedule'] as $schedule)
                                <tr>
                                    <th class="text-center align-middle">{{ $schedule['date'] }}</th>
                                    @foreach ($schedule['time'] as $index => $time)
                                    <td class="text-center align-middle">
                                        @if ($schedule['availibility'][$index])
                                        <i class="fas fa-times-circle text-danger"></i>
                                        @else
                                        <i class="fas fa-check-circle text-success"></i>
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach

                <div class="card mt-5 " style="width: 40rem;">
                    <h5 class="card-header bg-primary text-light">Upcoming Schedule</h5>
                    <div class="d-flex flex-md-row">
                        <ul class="list-group list-group-flush flex-md-column">
                            @if ($upcomingLists->count() > 0)
                            @foreach ($upcomingLists as $index => $list)
                            <li class="list-group-item">
                                <div class="d-flex flex-md-row">
                                    @if ($list->sparring_user == null)
                                    <h4 class="text-red">{{$list->team_name}}</h4>
                                    @else
                                    <h4 class="text-red">{{$list->team_name}} vs {{$list->sparring_name}}</h4>
                                    @endif
                                </div>
                                <div class="d-flex flex-md-column">
                                    <h9 class="lead text-dark1">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</h9>
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
                            @if ($bookingLists->count() > 0)
                            @foreach ($bookingLists as $index => $list)
                            <li class="list-group-item">
                                <div class="accordion" id="{{'accordionExample'.$index}}">
                                    <div class="card">
                                        <div class="card-header" id="{{'heading'.$index}}">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-middle " type="button" data-toggle="collapse" data-target="#{{'collapse'.$index}}" aria-expanded="true" aria-controls="{{'collapse'.$index}}">
                                                    @if ($list->sparring_user == null)
                                                    <h4 class="text-red">{{$list->team_name}}</h4>
                                                    @else
                                                    <h4 class="text-red">{{$list->team_name}} vs {{$list->sparring_name}}</h4>
                                                    @endif
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="{{'collapse'.$index}}" class="collapse hide" aria-labelledby="{{'heading'.$index}}" data-parent="#{{'accordionExample'.$index}}">
                                            <div class="card-body">
                                                {{$list->bio}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h9 class="lead text-dark1">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</h9>
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
                            <h5 class="text-light">REQUEST LIST</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            @if ($requestLists->count() > 0)
                            @foreach ($requestLists as $index => $list)
                            <li class="list-group-item">
                                <h4 class="text-red">{{$list->team_name}}</h4>
                                <h9 class="lead text-dark1">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</h9>
                                <div class="d-flex flex-md-row">
                                    <button type="button" class="btn bg-primary ml-0 mt-3" data-toggle="modal" data-target="#{{'exampleModal'.$index}}">
                                        Accept
                                    </button>
                                    <form action="{{ url('venue/dashboard/response/booking/declined') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger ml-2 mt-3">
                                            Decline
                                        </button>
                                        <input name="id_booking_list" type="hidden" value="{{ $list->id }}">
                                    </form>

                                    <!-- Modal -->
                                    <div class="modal fade" id="{{'exampleModal'.$index}}" tabindex="-1" role="dialog" aria-labelledby="{{'exampleModalTitle'.$index}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="{{'exampleModalTitle'.$index}}">Schedule Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure to Book want to Accept book from {{ $list->team_name }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <h6 class="text-light">No</h6>
                                                    </button>
                                                    <form action="{{ url('venue/dashboard/response/booking/accepted') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">
                                                            <h6 class="text-light">Yes</h6>
                                                        </button>
                                                        <input name="id_booking_list" type="hidden" value="{{ $list->id }}">
                                                    </form>
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
                        @if ($sparringLists->count() > 0)
                        @foreach ($sparringLists as $index => $list)
                        <li class="list-group-item">
                            <div class="d-flex flex-md-row">
                                <h4 class="text-red">{{$list->team_name}} vs {{$list->sparring_name}}</h4>
                            </div>
                            <div class="d-flex flex-md-column">
                                <h9 class="lead text-dark1">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</h9>
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
        </div>
    </section>

    <!-- Feedback-->
    <div style="background-color: #f2f2f2;">
        <section class="resume-section" style="width: fit-content; height: fit-content;" id="feedback">
            <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
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

    {{-- DataTables JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/datatables/js/dataTables.js') }}"></script>

    {{-- Mine JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flashsession.js') }}"></script>

</body>

</html>