<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
            .modal-content {
                background: #2DAE60 !important;
            }
    
            .text-primary {
                color: #ffffff !important;
            }
    
            .modal-footer>:not(:last-child) {
                margin-right: 45%;
            }
            .margintop{
                margin-top: 100px;
            }
        </style>
</head>
<body>
    <div id="app">
        <section class="navbar-area fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-md  navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ourNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="#" class="navbar-brand">
                        <img src="{{asset('img/logo.png')}}" alt="logo" title="logo" />
                    </a>
    
                    <ul class=" navbar-nav nav order-md-3 ">
                        <li class="nav-item">
                            @guest
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ url('/caregiver/login') }}">Login</a></li>
                                    <li><a href="{{ url('/caregiver/register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
            
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/caregiver/logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
            
                                                <form id="logout-form" action="{{ url('/caregiver/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                            @else
                            <a href="/home" class="btn btn-primary">HOME</a>
                            @endguest
                        </li>
    
                    </ul>
                    <div class="collapse navbar-collapse justify-content-center" id="ourNav">
                        <ul class="navbar-nav nav-pills">
    
                            <li class="nav-item">
                                <a class="nav-link" href="#">BLOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-area">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pricing-area">PRICING</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact-area">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        <main class="py-4">
            @yield('content')

        </main>
    </div>
    <script src="js/jQuery.js"></script>
    {{--confirm password validation in form --}}
    <script>
        function checkPasswordMatch() {
            var password = $("#pass").val();
            var confirmPassword = $("#Confirmpass").val();

            if (password != confirmPassword)
                $("#divCheckPasswordMatch").html("Passwords do not match!");
            else
                $("#divCheckPasswordMatch").html("Passwords match.");
        }

        $(document).ready(function () {
            $("#pass, #Confirmpass").keyup(checkPasswordMatch);
        });
    </script>
    <!--Scroll Top-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{asset('js/totop.min.js')}}"></script>
    <script>
        $('.totop').tottTop({
            scrollTop: 100
        });
    </script>
    <!--Scroll Top-->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('js/jquery.animateNumbers.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/myScript.js')}}"></script>
</body>
</html>