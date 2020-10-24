<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ayo Sparring - Register</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="{{ asset('assets/img/icon2.ico') }}" type="image/gif">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/montserrat-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/registerstyle.css') }}">

    <style>
        .not-allowed {
            cursor: not-allowed;
        }

        button:disabled {
            cursor: not-allowed !important;
            pointer-events: all !important;
        }

        input:disabled {
            cursor: not-allowed !important;
            pointer-events: all !important;
        }

        button[disabled] {
            cursor: not-allowed !important;
            pointer-events: all !important;
        }

        input[disabled] {
            cursor: not-allowed !important;
            pointer-events: all !important;
        }

        .error {
            color: rgb(0, 0, 0) !important;
        }
    </style>

</head>

<body class="form-v10">
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <a href="{{ url('/') }}" class="logo mr-auto"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('login') }}">Login</a></li>
                    <li class="active"><a href="{{ url('register/user') }}">User Register</a></li>
                    <li><a href="{{ url('register/venue') }}">Venue Register</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header>


    <div class="page-content pt-5">
        <div class="form-v10-content">

            <form class="form-detail" action="{{ url('register/user/submit') }}" method="post" id="form" enctype="multipart/form-data">
                @csrf

                <div class="form-left">

                    <h2>General Infomation</h2>

                    <div class="form-row">
                        <input type="text" name="club_name" id="club_name" placeholder="Club Name" value="{{ old('club_name') }}">

                        @error('club_name')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>

                    <div class="form-row">
                        <select name="category">
                            <option value="">Choose Category</option>
                            <option value="profesional">Profesional</option>
                            <option value="amatir">Amatir</option>
                        </select>
                        <span class="select-btn">
                            <i class="zmdi zmdi-chevron-down"></i>
                        </span>

                        @error('category')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <label class="pl-3">Tanggal Berdiri :</label>
                        <input type="date" name="date_established" id="date_established" placeholder="Date Established" value="{{ old('date_established') }}">

                        @error('date_established')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="text" name="address" id="address" placeholder="Address" value="{{ old('address') }}">

                        @error('address')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="number" name="postal_code" id="postal_code" placeholder="Postal Code" value="{{ old('postal_code') }}">

                        @error('postal_code')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="text" name="bio" id="bio" placeholder="Bio Team" value="{{ old('bio') }}">

                        @error('bio')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <label class="pl-3">Photo or Team Logo :</label>
                        <input type="file" name="photo" class="photo" id="photo" placeholder="Photo or Team Logo">

                        @error('photo')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>

                </div>

                <div class="form-right">

                    <h2>Personal Details</h2>

                    <div class="form-row">
                        <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">

                        @error('email')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}">

                        @error('password')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">

                        @error('password_confirmation')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="text" name="manager" id="manager" placeholder="Manager Name" value="{{ old('manager') }}">

                        @error('manager')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="number" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">

                        @error('phone_number')
                        <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-checkbox">
                        <label class="container">
                            <p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
                            <input type="checkbox" id="terms">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="form-row-last">
                        <input type="button" name="register" class="register" id="register-button" value="Register" disabled="true">
                    </div>

                </div>

            </form>

        </div>
    </div>
</body>

@include('flashsession.flashsession')

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<input type="hidden" id="base_url" value="{{ url('/') }}">

{{-- ============================================== --}}
{{-- JAVASCRIPT   									--}}
{{-- ============================================== --}}

{{-- JQuery JAVASCRIPT --}}
<script type="text/javascript" src="{{ asset('assets/jquery/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/jquery/jquery.validate.min.js') }}"></script>

{{-- Bootstrap JAVASCRIPT --}}
<script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

{{-- Vendor JAVASCRIPT --}}
<script type="text/javascript" src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

{{-- JToast JAVASCRIPT --}}
<script type="text/javascript" src="{{ asset('assets/jtoast/src/toast.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/jtoast/src/custom.js') }}"></script>

{{-- Mine JAVASCRIPT --}}
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flashsession.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#terms').change(function() {
            if (this.checked) {
                $('#register-button').prop("disabled", false);
            } else {
                $('#register-button').prop("disabled", true);
            }
        });

        $("#register-button").click(function() {
            if (form.valid()) {
                form.submit();
            }
        });

        var form = $("#form");
        form.validate({
            focusInvalid: false,
            rules: {
                club_name: {
                    required: true
                },
                category: {
                    required: true
                },
                phone_number: {
                    required: true,
                    number: true,
                    minlength: 8,
                    maxlength: 13
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
                password_confirmation: {
                    required: true,
                    equalTo: "#password"
                },
                date_established: {
                    required: true
                },
                postal_code: {
                    required: true,
                    number: true
                },
                address: {
                    required: true
                },
                photo: {
                    required: true
                },
                manager: {
                    required: true
                },
                bio: {
                    required: true
                },
            },
            messages: {
                club_name: {
                    required: "Must be filled!"
                },
                category: {
                    required: "Must be filled!"
                },
                phone_number: {
                    required: "Must be filled!",
                    number: "Enter a valid phone number!",
                    minlength: "Enter at least 8 characters!",
                    maxlength: "Enter max 13 characters!"
                },
                email: {
                    required: "Must be filled!",
                    email: "Enter a valid email address!"
                },
                password: {
                    required: "Must be filled!",
                    minlength: "Enter at least 8 characters!"
                },
                password_confirmation: {
                    required: "Must be filled!",
                    equalTo: "Must be the same as the password!"
                },
                date_established: {
                    required: "Must be filled!",
                },
                postal_code: {
                    required: "Must be filled!",
                    number: "Enter a valid postal code!",
                },
                address: {
                    required: "Must be filled!",
                },
                photo: {
                    required: "Must be filled!",
                },
                manager: {
                    required: "Must be filled!",
                },
                bio: {
                    required: "Must be filled!",
                },
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.next("label"));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            },
            invalidHandler: function(form, validator) {

                if (!validator.numberOfInvalids())
                    return;

                $('html, body').animate({
                    scrollTop: $(validator.errorList[0].element).offset().top - 150
                }, 1000);

            }
        });
    });
</script>

</html>