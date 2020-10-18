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
                                <div class="accordion" id="{{'accordionSparringRequest'.$index}}">
                                    <div class="card">
                                        <div class="card-header" id="{{'headingSparringRequest'.$index}}">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-middle " type="button" data-toggle="collapse" data-target="#{{'collapseSparringRequest'.$index}}" aria-expanded="true" aria-controls="{{'collapseSparringRequest'.$index}}">
                                                    <h4 class="text-red">{{$list->team_name}}</h4>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="{{'collapseSparringRequest'.$index}}" class="collapse hide" aria-labelledby="{{'headingSparringRequest'.$index}}" data-parent="#{{'accordionSparringRequest'.$index}}">
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <h9 class="lead text-dark1">Category: {{$list->category}}</h9>
                                                    </li>
                                                    <li>
                                                        <h9 class="lead text-dark1">Phone Number: {{$list->phone_number}}</h9>
                                                    </li>
                                                    <li>
                                                        <h9 class="lead text-dark1">Bio: {{$list->bio}}</h9>
                                                    </li>
                                                    <li>
                                                        <h9 class="lead text-dark1">Review: {{$list->latest_review}}</h9>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="lead text-dark">{{ $list->venue_name.' '.$list->field_name }}</p>
                                <p class="lead text-dark">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</p>
                                <div class="d-flex flex-md-row">
                                    <button type="button" class="btn bg-secondary ml-0 mt-3" data-toggle="modal" data-target="#{{'requestSparring'.$index}}">
                                        Accept
                                    </button>
                                    <form action="{{ url('user/dashboard/response/sparring/declined') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger ml-2 mt-3">
                                            Decline
                                        </button>
                                        <input name="id_user" type="hidden" value="{{ $list->user_id }}">
                                        <input name="id_booking_list" type="hidden" value="{{ $list->booking_list_id }}">
                                        <input name="id_sparring_request" type="hidden" value="{{ $list->sparring_request_id }}">
                                    </form>
                                    <!-- Modal -->
                                    <div class="modal fade" id="{{'requestSparring'.$index}}" tabindex="-1" role="dialog" aria-labelledby="{{'requestSparring'.$index}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="{{'requestSparring'.$index}}">Sparring Confirmation</h5>
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
                                                    <form action="{{ url('user/dashboard/response/sparring/accepted') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn bg-secondary">
                                                            <h6 class="text-light">Yes</h6>
                                                        </button>
                                                        <input name="id_user" type="hidden" value="{{ $list->user_id }}">
                                                        <input name="id_booking_list" type="hidden" value="{{ $list->booking_list_id }}">
                                                        <input name="id_sparring_request" type="hidden" value="{{ $list->sparring_request_id }}">
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
                            <div class="accordion" id="{{'accordionSparring'.$index}}">
                                <div class="card">
                                    <div class="card-header" id="{{'heading'.$index}}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#{{'collapseSparring'.$index}}" aria-expanded="true" aria-controls="collapseOne">
                                                <h4 class="text-red">{{ $list->team_name }}</h4>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="{{'collapseSparring'.$index}}" class="collapse hide" aria-labelledby="{{'heading'.$index}}" data-parent="#{{'accordionSparring'.$index}}">
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <h9 class="lead text-dark1">Category: {{$list->category}}</h9>
                                                </li>
                                                <li>
                                                    <h9 class="lead text-dark1">Phone Number: {{$list->phone_number}}</h9>
                                                </li>
                                                <li>
                                                    <h9 class="lead text-dark1">Bio: {{$list->bio}}</h9>
                                                </li>
                                                <li>
                                                    <h9 class="lead text-dark1">Review: {{$list->latest_review}}</h9>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="lead text-dark1">At {{ $list->venue_name.' - '.$list->field_name }}</h6>
                            <h6 class="lead text-dark1">{{ date('l, d F Y, H:i A ', strtotime($list->date)) }}</h6>
                            <form action="{{ url('user/dashboard/request/sparring') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn bg-secondary" style="width: 2cm; height: 1cm;" data-toggle="modal" data-target="#{{'requestModal'.$index}}">
                                    <h6 class="text-light">Request</h6>
                                </button>
                                <input name="id_booking_list" type="hidden" value="{{ $list->id }}">
                            </form>
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
            <section class="resume-section" style="min-width: fit-content; height: fit-content" id="find-venue">
                <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5" style="width: fit-content;">
                    <div class="card mt-0" style="min-width: 700px; height: fit-content;">
                        <div class="card-header bg-primary">
                            <h5 class="text-light">VENUE AVAILABLE</h5>
                        </div>
                        <div class="d-flex flex-md-row">
                            <ul class="list-group list-group-flush flex-md-column">
                                @if (count($schedules) > 0)
                                @foreach ($schedules as $indexOne => $schedule_venue)
                                <li class="list-group-item">
                                    <div class="d-flex flex-md-row width:fit-content height:fit-content">
                                        <h4 class="text-red">{{$schedule_venue['venue']->venue_name}}</h4>
                                    </div>
                                    <h6 class="lead text-dark1">{{$schedule_venue['venue']->phone_number}}</h6>
                                    <h6 class="lead text-dark1">{{$schedule_venue['venue']->address}}</h6>
                                    @foreach ($schedule_venue['field'] as $indexTwo => $field)
                                    <div class="d-flex flex-md-row">
                                        <form class="form-booking{{$indexOne.'-'.$indexTwo}}" action="{{ url('user/dashboard/request/booking') }}" method="POST">
                                            @csrf
                                            <label for="date">Date</label>
                                            <input type="date" id="date" name="date" value="{{date('Y-m-d')}}">
                                            <label for="start">Start</label>
                                            <input type="time" id="start" name="start" value="{{date('H:i')}}">
                                            <label for="duration">Duration</label>
                                            <input style="max-width: 4rem;" type="number" id="duration" name="duration" min=1 value=1>
                                            <input name="id_venue_field" type="hidden" value="{{ $field['venue_field']->id }}">
                                            <input name="price" type="hidden" value="{{ $field['venue_field']->price }}">
                                            <button type="button" class="btn bg-secondary ml-5" data-toggle="modal" data-target="#modalLong{{$indexOne.'-'.$indexTwo}}">
                                                <h6 class="text-light">Book</h6>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modalLong{{$indexOne.'-'.$indexTwo}}" tabindex="-1" role="dialog" aria-labelledby="modalLong{{$indexOne.'-'.$indexTwo}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLong{{$indexOne.'-'.$indexTwo}}">Schedule Confirmation</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Your book request has been sent. After the owner accept it, Do you want to post your schedule on Sparring List?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input class="booking_type" name="booking_type" type="hidden" value="regular">
                                                            <button type="button" class="btn btn-secondary" onclick="return decline('{{$indexOne.'-'.$indexTwo}}')">
                                                                <h6 class="text-light">No</h6>
                                                            </button>
                                                            <button type="button" class="btn bg-secondary" onclick="return accept('{{$indexOne.'-'.$indexTwo}}')">
                                                                <h6 class="text-light">Yes</h6>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="accordion" id="accordion{{ $indexOne.'-'.$indexTwo }}">
                                        <div class="card mb-5">
                                            <div class="card-header" id="heading{{$indexOne.'-'.$indexTwo}}">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-middle" type="button" data-toggle="collapse" data-target="#collapse{{ $indexOne.'-'.$indexTwo }}" aria-expanded="true" aria-controls="collapse{{ $indexOne.'-'.$indexTwo }}">
                                                        <h4 class="text-red">{{$field['venue_field']->field_name.' - '.$field['venue_field']->field_type .' ('.$field['venue_field']->price.'/hour)'}}</h4>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapse{{ $indexOne.'-'.$indexTwo }}" class="collapse hide" aria-labelledby="heading{{$indexOne.'-'.$indexTwo}}" data-parent="#accordion{{ $indexOne.'-'.$indexTwo }}">
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
                                                                @foreach ($field['schedule'][0]['time'] as $time)
                                                                <th class="text-center align-middle">{{$time}}</th>
                                                                @endforeach
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach ($field['schedule'] as $schedule)
                                                            <tr>
                                                                <th class="text-center align-middle">{{ $schedule['date'] }}</th>
                                                                @foreach ($schedule['time'] as $indexThree => $time)
                                                                <td class="text-center align-middle">
                                                                    @if ($schedule['availibility'][$indexThree])
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
                                        </div>
                                    </div>
                                    @endforeach
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
                                @if ($list->sparring_user != null)
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
                                            <form action="{{ url('user/dashboard/review/review') }}" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    <label for="Review">Review Team :</label>
                                                    <textarea id="review" name="review" rows="4" cols="50"></textarea>
                                                    <input name="id_booking_list" type="hidden" value="{{ $list->id }}">
                                                    <input name="object_type" type="hidden" value="team">
                                                    <input name="id_user_reported" type="hidden" value="{{ $list->user_team_id }}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn-secondary" type="submit">Submit</button>
                                                </div>
                                            </form>
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
                                            <form action="{{ url('user/dashboard/review/report') }}" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    <input type="radio" id="fake-request" name="review" value="Fake request">
                                                    <label for="fake-request">Fake Request</label><br>
                                                    <input type="radio" id="bermain-kasar" name="review" value="Bermain kasar">
                                                    <label for="bermain-kasar">Bermain kasar</label><br>
                                                    <input type="radio" id="deskripsi" name="review" value="Deskripsi tidak sesuai">
                                                    <label for="deskripsi">Deskripsi tidak sesuai</label>
                                                    <input name="id_booking_list" type="hidden" value="{{ $list->id }}">
                                                    <input name="object_type" type="hidden" value="team">
                                                    <input name="id_user_reported" type="hidden" value="{{ $list->user_team_id }}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn-secondary" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif
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
                                            <h5 class="modal-title" id="{{'reviewVenue'.$index}}">Review Venue</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ url('user/dashboard/review/good') }}" method="POST">
                                            <div class="modal-body">
                                                @csrf
                                                <label for="Review">Review Venue :</label>
                                                <textarea id="review" name="review" rows="4" cols="50"></textarea>
                                                <input name="id_booking_list" type="hidden" value="{{ $list->id }}">
                                                <input name="object_type" type="hidden" value="venue">
                                                <input name="id_user_reported" type="hidden" value="{{ $list->user_owner_id }}">
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn-secondary" type="submit">Submit</button>
                                            </div>
                                        </form>
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

    <script>
        function decline(index) {
            $(".booking_type").val('regular');
            $('.form-booking' + index).submit();
        }

        function accept(index) {
            $(".booking_type").val('sparring');
            $('.form-booking' + index).submit();
        }
    </script>
</body>

</html>