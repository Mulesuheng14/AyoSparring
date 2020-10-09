<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <a href="{{ url('/') }}" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">

            <ul>
                <li class="active"><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                @if (Auth::user())
                    @if (Auth::user()->role == 1)
                        <li><a href="{{ url('admin/dashboard') }}">Hi, {{Auth::user()->name}}</a></li>
                    @elseif (Auth::user()->role == 2)
                        <li><a href="{{ url('venue/dashboard') }}">Hi, {{Auth::user()->name}}</a></li>
                    @elseif (Auth::user()->role == 3)
                        <li><a href="{{ url('user/dashboard') }}">Hi, {{Auth::user()->name}}</a></li>
                    @endif
                @else
                    <li><a href="{{ url('login') }}">Login</a></li>
                    <li><a href="{{ url('register/user') }}">User Register</a></li>
                    <li><a href="{{ url('register/venue') }}">Venue Register</a></li>
                @endif
            </ul>

        </nav>

    </div>
</header>