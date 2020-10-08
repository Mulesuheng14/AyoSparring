<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Ayo Sparring</title>
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
        
        <style>
            .not-allowed {cursor: not-allowed;}
            button:disabled {
                cursor: not-allowed;
            }  
            input:disabled {
                cursor: not-allowed;
            }  
        </style>
        
        @yield('css')

    </head>
    <body>

        {{-- ============================================== --}}
        {{-- NAVIGASI BAR 									--}}
        {{-- ============================================== --}}
        @include('guest.layout.navbar')
        {{-- ============================================== --}}
        {{-- END OF NAVIGARSI BAR                           --}}
        {{-- ============================================== --}}

        {{-- ============================================== --}}
        {{-- CONTENT 					    				--}}
        {{-- ============================================== --}}
        @yield('content')
        {{-- ============================================== --}}
        {{-- END OF CONTENT                                  --}}
        {{-- ============================================== --}}

        {{-- ============================================== --}}
        {{-- FOOTER 					    				--}}
        {{-- ============================================== --}}
        @include('guest.layout.footer')
        {{-- ============================================== --}}
        {{-- END OF FOOTER                                  --}}
        {{-- ============================================== --}}

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


        @yield('javascript')

    </body>
</html>
