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

    {{-- DataTables CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/css/dataTables.css') }}">

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
        <div class="sidebar-heading text-warning">{{ Auth::user()->name }}</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#list-users">User</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#list-owner">Owner</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#report">Report</a></li>
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

        <!-- User-->
        <section class="resume-section height: fit-content" id="list-users">
            <div class="resume-section-content d-flex flex-column ">

                <h1 class="mb-0">
                    <h1 class="card-title text-green">{{ Auth::user()->name }}</h1>
                </h1>

                <div class="card mt-1 w-100">
                    <h5 class="card-header bg-primary text-light">LIST USERS</h5>
                    <div class="card-body table-responsive">
                        <table id="tabelUser" class="table table-striped table-bordered display nowrap" style="width:100% !important">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Account Type</th>
                                    <th class="text-center align-middle">Name</th>
                                    <th class="text-center align-middle">Email</th>
                                    <th class="text-center align-middle">Phone Number</th>
                                    <th class="text-center align-middle">Status Account</th>
                                    <th class="text-center align-middle">Verification</th>
                                    <th class="text-center align-middle">Blockir Account</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $index => $user)
                                    <tr>
                                        <td class="text-center align-middle">{{ $index+1 }}</td>
                                        <td class="text-left align-middle">{{ $user->account_type == 'owner' ? 'Owner' : 'User' }}</td>
                                        <td class="text-left align-middle">{{ $user->name }}</td>
                                        <td class="text-left align-middle">{{ $user->email }}</td>
                                        <td class="text-left align-middle">{{ $user->phone_number }}</td>
                                        <td class="text-center align-middle">{{ $user->verified == 1 ? 'Verified' : 'Not Verified' }}</td>
                                        <td class="text-center align-middle">
                                            @if ($user->verified == 0)
                                                <form action="{{ url('admin/dashboard/user/verifikasi/active') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="form-control btn btn-success">
                                                        <i class="fas fa-double-check mr-2"></i>Verification
                                                    </button>
                                                    <input name="id_user" type="hidden" value="{{ $user->id }}">
                                                </form>
                                            @else
                                                <form action="{{ url('admin/dashboard/user/verifikasi/deactive') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="form-control btn btn-danger">
                                                        <i class="fas fa-minus mr-2"></i>Cancel Verification
                                                    </button>
                                                    <input name="id_user" type="hidden" value="{{ $user->id }}">
                                                </form>
                                            @endif
                                        </td>
                                        <td class="text-center align-middle">
                                            <form action="{{ url('admin/dashboard/user/block') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="form-control btn btn-danger">
                                                    <i class="fas fa-user-times mr-2"></i>Block
                                                </button>
                                                <input name="id_user" type="hidden" value="{{ $user->id }}">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </section>

        <hr class="m-0" />

        <!-- Owner-->
        <section class="resume-section height: fit-content" id="list-owner">
            <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
                <div class="card mt-1 " style="width: 70rem;">

                    <h5 class="card-header bg-primary text-light">LIST VENUES</h5>

                    <div class="card-body table-responsive">
                        <table id="tabelVenue" class="table table-striped table-bordered display nowrap" style="width:100% !important">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Venue Name</th>
                                    <th class="text-center align-middle">Field Name</th>
                                    <th class="text-center align-middle">Address</th>
                                    <th class="text-center align-middle">Type of Field</th>
                                    <th class="text-center align-middle">Price</th>
                                    <th class="text-center align-middle">Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($venues as $index => $venues)
                                    <tr>
                                        <td class="text-center align-middle">{{ $index+1 }}</td>
                                        <td class="text-left align-middle">{{ $venues->venue_name }}</td>
                                        <td class="text-left align-middle">{{ $venues->field_name }}</td>
                                        <td class="text-left align-middle">{{ $venues->address }}</td>
                                        <td class="text-left align-middle">{{ $venues->field_type }}</td>
                                        <td class="text-right align-middle">{{ $venues->price }}</td>
                                        <td class="text-center align-middle">
                                            <a target="_blank" href="{{ asset('storage/field/'.$venues->photo) }}">
                                                <button class="btn btn-info">
                                                    <i class="fas fa-eye mr-2"></i>See
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

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
                <div class="card mt-0" style="width: 100%; min-height: 50px;">

                    <div class="card-header bg-primary">
                        <h5 class="text-light mb-0">REPORT</h5>
                    </div>

                    <div class="d-flex flex-md-row">
                        <ul class="list-group list-group-flush flex-md-column w-100">
                            
                            @if ($review_reports->count() > 0)
                                @foreach ($review_reports as $indexReview => $review)
                                    <li class="list-group-item">

                                        @if ($indexReview != 0)
                                            <hr>
                                        @endif

                                        @if ($review->object_type == "team")
                                            <h4 class="card-title">{{ $review->reported->name }} <span class="text-danger">reported</span> {{ $review->reporter->name }}</h4>
                                            <h5>{{ $review->comment }}</h5>
                                            <h5 class="lead text-dark1 mt-0">{{ $review->created_at }}</h5>
                                        @else
                                            <h4 class="card-title">{{ $review->reported->venues->first()->venue_name }} <span class="text-danger">reported</span> {{ $review->reporter->name }}</h4>
                                            <h5>{{ $review->comment }}</h5>
                                            <h5 class="lead text-dark1 mt-0">{{ $review->created_at }}</h5>
                                        @endif
                                        
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

        <section class="resume-section height: fit-content" id="feedback">
            <div class="resume-section-content d-flex flex-md-row justify-content-between mb-5">
                <div class="card mt-5 " style="width: 100%;min-height:50px">
                    <h5 class="card-header bg-primary text-light">FEEDBACK</h5>
                    <div class="card-body">

                        @if ($review_ulasans->count() > 0)
                            @foreach ($review_ulasans as $indexUlasan => $ulasan)

                                @if ($indexUlasan != 0)
                                    <hr>
                                @endif

                                @if ($ulasan->object_type == "team")
                                    <h5 class="card-title">Feedback from : <span class="text-blue">{{ $ulasan->reporter->name }}</span></h5>
                                    <p class="lead text-dark">{{ $ulasan->comment }}</p>
                                    <h5 class="lead text-dark">{{ $ulasan->created_at }}</h5>
                                @else
                                    <h5 class="card-title">Feedback from : <span class="text-blue">{{ $ulasan->reporter->name }}</span></h5>
                                    <p class="lead text-dark">{{ $ulasan->comment }}</p>
                                    <h5 class="lead text-dark">{{ $ulasan->created_at }}</h5>
                                @endif
                                
                            @endforeach 
                        @else
                            <h5 class="text-center">Data not found</h5>
                        @endif
                        
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

    {{-- DataTables JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/datatables/js/dataTables.js') }}"></script>

    {{-- Mine JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flashsession.js') }}"></script>

    <script>
        $(document).ready(function()
        {
            $('#tabelUser').DataTable(
            {
                "sScrollX": "100%",
                "language":
                {
                    "search": "Search",
                    "paginate":
                    {
                        "previous": "<<",
                        "next": ">>"
                    }
                }
            });

            $('#tabelVenue').DataTable(
            {
                "sScrollX": "100%",
                "language":
                {
                    "search": "Search",
                    "paginate":
                    {
                        "previous": "<<",
                        "next": ">>"
                    }
                }
            });
        });
    </script>
</body>

</html>