<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ayo Sparring - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('assets/img/icon2.ico') }}" type="image/gif">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

    <!-- JToast CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jtoast/src/toastStyle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/jtoast/src/custom.css') }}">

    <!-- Vendor Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">

    <!-- Mine CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/utillogin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mainlogin.css') }}">
    
    <style>
        .not-allowed {cursor: not-allowed;}
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

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <!-- <h1>Welcome to</h1>
				<img src="images/Logo2.png"> -->

            <div class="wrap-login100">
                <form class="login100-form validate-form" id="form" action="{{ url('login') }}" method="POST">
                    @csrf
                    
                    <span class="login100-form-title p-b-43">
                        Sign In
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="email" value="{{ old('email') }}" autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>

                    @error('email')
                        <i><small class="text-danger">{{ $message }}</small></i>
                    @enderror

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" value="{{ old('password') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    @error('password')
                        <i><small class="text-danger">{{ $message }}</small></i>
                    @enderror
                    
                    <div class="container-login100-form-btn mt-5">
                        <button type="button" id="login-button" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="container-login100-form-btn">
                        <a href="{{ url('register/user') }}" class="register100-form-btn">
                            or sign up here
                        </a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url({{ url('assets/img/hero-bg.jpg') }});">
                </div>
            </div>
        </div>
    </div>

    @include('flashsession.flashsession')

    <input type="hidden" id="base_url" value="{{ url('/') }}">

    {{-- ============================================== --}}
    {{-- JAVASCRIPT   									--}}
    {{-- ============================================== --}}

    {{-- JQuery JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/jquery/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/jquery/jquery.validate.min.js') }}"></script>

    {{-- Bootstrap JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/popper.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    {{-- Vendor JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>

    {{-- JToast JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/jtoast/src/toast.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/jtoast/src/custom.js') }}"></script>

    {{-- Mine JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('assets/js/mainlogin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flashsession.js') }}"></script>

    <script>
        $(document).ready(function()
        {
            $("#login-button").click(function() {
                if(form.valid()) {
                    form.submit();
                }
            });
    
            var form = $("#form");
            form.validate({
                focusInvalid: false,
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                },
                messages: {
                    email: {
                        required: "Must be filled!",
                        email: "Enter a valid email address!"
                    },
                    password: {
                        required: "Must be filled!",
                        minlength: "Enter at least 8 characters!"
                    },
                },
                errorElement: "em",
                errorPlacement: function (error, element) {
                    error.addClass("invalid-feedback");
    
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    }
                    else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function (element, errorClass, validClass) {
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
    
</body>

</html>