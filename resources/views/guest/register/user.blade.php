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
        .not-allowed {cursor: not-allowed;}
        button:disabled {
            cursor: not-allowed;
        }  
        input:disabled {
            cursor: not-allowed;
        }  
    </style>
    
</head>

<body class="form-v10">
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="{{ url('/') }}landing/index">Home</a></li>
                    <li><a href="{{ url('login') }}">Login</a></li>
                    <li class="active"><a href="{{ url('register/user') }}">User Register</a></li>
                    <li><a href="{{ url('register/venue') }}">Venue Register</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header>


    <div class="page-content pt-5">
        <div class="form-v10-content">
            <form class="form-detail" action="{{ url('register/user/submit') }}" method="post" id="userregister">
                @csrf

                <div class="form-left">
                    <h2>General Infomation</h2>
                    <div class="form-row">
                        <input type="text" name="namaklub" class="namaklub" id="namaklub" placeholder="Nama Klub">
                    </div>

                    <div class="form-row">
                        <select name="kategori">
                            <option value="kategori">Kategori</option>
                            <option value="profesional">Profesional</option>
                            <option value="amatir">Amatir</option>
                        </select>
                        <span class="select-btn">
                            <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                        <label>Tanggal Berdiri :</label>
                        <input type="date" name="tglberdiri" class="tglberdiri" id="tglberdiri" placeholder="Tangal Berdiri">
                    </div>
                    <div class="form-row">
                        <input type="text" name="alamat" class="alamat" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-row">
                        <input type="text" name="zip" class="zip" id="zip" placeholder="Zip">
                    </div>
                </div>

                <div class="form-right">
                    <h2>Personal Details</h2>

                    <div class="form-row">
                        <input type="text" name="email" id="email" class="email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                    </div>
                    <div class="form-row">
                        <input type="password" name="password1" id="password1" class="password1" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <input type="password" name="password2" id="password2" class="password2" placeholder="Ulangi Password">
                    </div>
                    <div class="form-row">
                        <input type="text" name="manager" class="manager" id="manager" placeholder="Nama Manager">
                    </div>
                    <div class="form-row">
                        <input type="text" name="telp" class="telp" id="telp" placeholder="Telepon">
                    </div>
                    <div class="form-checkbox">
                        <label class="container">
                            <p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
                            <input type="checkbox" name="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="Register">
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

</html>