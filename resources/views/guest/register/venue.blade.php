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

        td {
            border: none !important;
        }

        .form-v10-content .form-detail .form-right {
            width: 70%;
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
                    <li><a href="{{ url('register/user') }}">User Register</a></li>
                    <li class="active"><a href="{{ url('register/venue') }}">Venue Register</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header>


    <div class="page-content pt-5">
        <div class="form-v10-content">
            <form class="form-detail" action="{{ url('register/venue/submit') }}" method="post" id="form" enctype="multipart/form-data">
                @csrf
                
                <div class="form-left">

                    <h2>General Infomation</h2>
                    
                    <div class="form-row">
                        <input type="text" name="venue_name" id="venue_name" placeholder="Venue Name" value="{{ old('venue_name') }}">

                        @error('venue_name')
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
                        <input type="number" name="phone_number_venue" id="phone_number_venue" placeholder="Venue Phone Number" value="{{ old('phone_number_venue') }}">

                        @error('phone_number_venue')
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
                        <label class="pl-3">Photo or Venue Logo :</label>
                        <input type="file" name="photo_venue" class="photo_venue" id="photo_venue" placeholder="Photo or Team Logo">

                        @error('photo_venue')
                            <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>

                    <h2>Field Data</h2>
                    
                    <div class="form-row">
                        <div class="table-responsive pl-0 pr-0">  
                            <table class="table" id="dynamic_field">  
                                <tr>  
                                    <td class="pl-0">
                                        <input type="text" name="field_name[]" placeholder="Field Name"/>
                                    </td>  
                                    <td class="pl-0">
                                        <select name="field_type[]">
                                            <option value="">Choose Field Type</option>
                                            <option value="Vinyl">Vinyl</option>
                                            <option value="Parquette">Parquette</option>
                                            <option value="Taraflex">Taraflex</option>
                                            <option value="Karpet Plastik">Karpet Plastik</option>
                                            <option value="Rumput Sintetis">Rumput Sintetis</option>
                                            <option value="Semen">Semen</option>
                                        </select>
                                    </td>  
                                    <td class="text-center" colspan="2">
                                        <button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                    </td>  
                                </tr>  
                                <tr>  
                                    <td class="pl-0">
                                        <input type="text" name="price[]" placeholder="Price per hour"/>
                                    </td>  
                                    <td class="pl-0">
                                        <input type="file" name="image_field[]" placeholder="Field Image">
                                    </td>  
                                </tr> 
                            </table>  
                        </div>  
                    </div>  

                </div>

                <div class="form-right">

                    <h2>Personal Details</h2>

                    <div class="form-row">
                        <input type="text" name="owner_name" id="owner_name" placeholder="Owner Name" value="{{ old('owner_name') }}">

                        @error('owner_name')
                            <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="number" name="nik" id="nik" placeholder="NIK" value="{{ old('nik') }}">

                        @error('nik')
                            <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
                    <div class="form-row">
                        <input type="number" name="phone_number_owner" id="phone_number_owner" placeholder="Owner Phone Number" value="{{ old('phone_number_owner') }}">

                        @error('phone_number_owner')
                            <i><small class="text-danger">{{ $message }}</small></i>
                        @enderror
                    </div>
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
<script type="text/javascript" src="{{ asset('assets/jquery/jquery.validate.js') }}"></script>

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
    $(document).ready(function()
    {
        $('#terms').change(function() {
            if (this.checked) {
                $('#register-button').prop("disabled", false);
            } else {
                $('#register-button').prop("disabled", true);
            }
        });

        $("#register-button").click(function() {
            if(form.valid()) {
                form.submit();
            }
        });

        var form = $("#form");
        form.validate({
            focusInvalid: false,
            rules: {
                venue_name: {
                    required: true
                },
                owner_name: {
                    required: true
                },
                phone_number_venue: {
                    required: true,
                    number: true,
                    minlength: 8,
                    maxlength: 13
                },
                phone_number_owner: {
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
                    equalTo : "#password"
                },
                nik: {
                    required: true
                },
                postal_code: {
                    required: true,
                    number: true
                },
                address: {
                    required: true
                },
                photo_venue: {
                    required: true
                },
                'field_name[]': {
                    required: true
                },
                'field_type[]': {
                    required: true
                },
                'price[]': {
                    required: true
                },
                'image_field[]': {
                    required: true
                },
            },
            messages: {
                venue_name: {
                    required: "Must be filled!"
                },
                owner_name: {
                    required: "Must be filled!"
                },
                phone_number_venue: {
                    required: "Must be filled!",
                    number: "Enter a valid phone number!",
                    minlength: "Enter at least 8 characters!",
                    maxlength: "Enter max 13 characters!"
                },
                phone_number_owner: {
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
                    equalTo : "Must be the same as the password!"
                },
                nik: {
                    required: "Must be filled!",
                },
                postal_code: {
                    required: "Must be filled!",
                    number: "Enter a valid postal code!",
                },
                address: {
                    required: "Must be filled!",
                },
                photo_venue: {
                    required: "Must be filled!",
                },
                'field_name[]': {
                    required: "Must be filled!",
                },
                'field_type[]': {
                    required: "Must be filled!",
                },
                'price[]': {
                    required: "Must be filled!",
                },
                'image_field[]': {
                    required: "Must be filled!",
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

        var i=1;  
        $('#add').click(function(){  
            i++;  
            $('#dynamic_field').append(
            `<tr class="row_data_`+i+`">`+  
                `<td class="pl-0">`+
                    `<input type="text" name="field_name[]" placeholder="Field Name"/>`+
                `</td>`+  
                `<td class="pl-0">`+
                    `<select name="field_type[]">`+
                        `<option value="">Choose Field Type</option>`+
                        `<option value="Vinyl">Vinyl</option>`+
                        `<option value="Parquette">Parquette</option>`+
                        `<option value="Taraflex">Taraflex</option>`+
                        `<option value="Karpet Plastik">Karpet Plastik</option>`+
                        `<option value="Rumput Sintetis">Rumput Sintetis</option>`+
                        `<option value="Semen">Semen</option>`+
                    `</select>`+
                `</td>`+  
                `<td class="text-center" colspan="2">`+
                    `<button type="button" name="remove" id="`+i+`" class="btn btn-danger btn_remove"><i class="fas fa-minus"></i></button>`+
                `</td>`+  
            `</tr>`+  
            `<tr class="row_data_`+i+`">>`+  
                `<td class="pl-0">`+
                    `<input type="text" name="price[]" placeholder="Price per hour"/>`+
                `</td>`+  
                `<td class="pl-0">`+
                    `<input type="file" name="image_field[]" placeholder="Field Image">`+
                `</td>`+  
            `</tr>` 
            );  
        });  

        $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('.row_data_'+button_id+'').remove();  
        });  
    });
</script>

</html>