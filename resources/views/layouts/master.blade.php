<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @yield('link')
    @yield('style')
    <style>
        @media (min-width: 600px)
        .navbar .scrolling-navbar {
            padding-top: 0!important;
            padding-bottom: 0!important;
        }
        @media (max-height: 992px) {
            .side-nav .logo-wrapper,
            .side-nav .logo-wrapper {
                height: 80px;
            }
        }

        .middle {
            display: inline-block;
            margin-left: 50%;
            transform: translateX(-50%);
        }

        .coustom-padding {
            padding: 5px;
            margin: 5px;
            background-color: #18793a;
            box-shadow: -2px 4px 7px 0px darkslategrey;
            border-radius: 6px;
        }
        #hover-effect a { 
            display: block;
        }
        #hover-effect a:hover {
            color: white;
            font-weight: bolder;
        }
         #hover-effect:hover{
            color: white;
            background-color: #00BA65;
        }
        #child-list li{
            padding: 5px 0px 5px 0px;
        }
        .card-deck{
            margin: 80px 0px;
        }
    </style>
    <link href="{{asset('metarial/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('metarial/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body class="fixed-sn white-skin">

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div style="background-color:#2DAE60!important;" id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="#">
                            <img src="{{asset('img/logo.png')}}" class="img-fluid flex-center">
                        </a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class="social">
                        <li>
                            <a href="#" class="icons-sm fb-ic">
                                <i class="fa fa-facebook"> </i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icons-sm pin-ic">
                                <i class="fa fa-pinterest"> </i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icons-sm gplus-ic">
                                <i class="fa fa-google-plus"> </i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icons-sm tw-ic">
                                <i class="fa fa-twitter"> </i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group md-form mt-0 pt-1 waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li >
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fa fa-chevron-right"></i> {{ Auth::user()->name }}
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled " id="child-list">
                                    @forelse ($childrens as $children)
                                    <li id="hover-effect">
                                    <a href="{{route('childrenProfile',['id' =>$children->id])}}" class="waves-effect"><img class="rounded-circle" src="{{asset('img/'.$children->image)}}" height="40" width="40"> {{$children->first_name}} {{$children->last_name}}</a>
                                    </li>
                                    @empty
                                    @endforelse
                                    <li id="hover-effect">
                                    <a href="{{route('addChildren')}}" class="waves-effect"><i class="fa fa-plus"></i> Add Child</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fa fa-hand-pointer-o"></i> Video
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li id="hover-effect">
                                        <a href="{{route('liveRoom')}}" class="waves-effect">Live Room</a>
                                    </li>
                                    <li id="hover-effect">
                                        <a href="#" class="waves-effect">Saved Video</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fa fa-eye"></i> About
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li id="hover-effect">
                                        <a href="#" class="waves-effect">Introduction</a>
                                    </li>
                                    <li id="hover-effect">
                                        <a href="#" class="waves-effect">Monthly meetings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li id="hover-effect-title">
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fa fa-envelope-o"></i> Contact me
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li id="hover-effect">
                                        <a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li id="hover-effect">
                                        <a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li id="hover-effect">
                                        <a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li id="hover-effect">
                                        <a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li id="hover-effect">
                                        <a href="#" class="waves-effect">FAQ</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <div class="nav-color">
            <nav style="background-color:#2DAE60;" class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse black-text">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Breadcrumb-->
                <div class="breadcrumb-dn mr-auto middle">
                    <a class="{{-- navbar-brand --}}" href="#">
                        <img src="img/logo.png" width="60" height="60" alt="">
                    </a>
                </div>
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item ">
                        <a style="color:white" class="coustom-padding  nav-link">
                            <span style="color:white" class="font-weight-bold clearfix d-none d-sm-inline-block"> <i class="fa fa-info"><span class="badge badge-danger lead">1</span></i></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="color:white" class="coustom-padding nav-link">
                            <i class="fa fa-comments-o"></i>
                            <span style="color:white" class="font-weight-bold clearfix d-none d-sm-inline-block">Support</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="color:white" class="coustom-padding nav-link">
                            <i class="fa fa-user"></i>
                            <span style="color:white" class="font-weight-bold clearfix d-none d-sm-inline-block">Account</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color:white" style=" color:white" class="coustom-padding font-weight-bold nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                            @auth
                            <a class="dropdown-item" href="{{ url('logout') }}">logout</a>
                            @endauth
                        </div>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->

    <!--Main layout-->
    <main>

        <div class="container-fluid text-center">
            @yield('content')
</div>

        </div>

    </main>
    <!--/Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left pt-4">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3">
                    <h5 class="text-uppercase font-weight-bold mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Second column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->

        <!--/.Call to action-->

        <hr>

        <!--Social buttons-->
        <div class="social-section text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb">
                        <i class="fa fa-facebook"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw">
                        <i class="fa fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus">
                        <i class="fa fa-google-plus"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li">
                        <i class="fa fa-linkedin"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-git">
                        <i class="fa fa-github"> </i>
                    </a>
                </li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2018 Copyright:
                <a href="http://www.MDBootstrap.com"> Mustaque & Himel </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    @yield('script')


    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('metarial/js/jquery-3.2.1.min.js')}}"></script>
    

    <!-- Tooltips -->
    <script type="text/javascript" src="{{asset('metarial/js/popper.min.js')}}"></script>

    <!-- Bootstrap core JavaScript -->
    {{--
    <script type="text/javascript" src="metarial/js/bootstrap.min.js"></script> --}}

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('metarial/js/mdb.min.js')}}"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        new WOW().init();
    </script>

</body>

</html>