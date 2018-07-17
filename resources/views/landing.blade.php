<!DOCTYPE html>

<html>

<head>
    <title>BABY CARE</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logo.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

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
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <section class="navbar-area fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-md  navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ourNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <img src="img/logo.png" alt="logo" title="logo" />
                </a>

                <ul class=" navbar-nav nav order-md-3 ">
                    <li class="nav-item">
                        @guest
                            <button type="button" class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#myModal" id="myBtn">SIGN IN {{--
                                <i class="fa-sign-in" aria-hidden="true"></i> --}}
                            </button>
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

    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content text-primary font-weight-bold">

                <div class="modal-header">
                    <h4 style="margin-left:40%" class="modal-title">
                        <img src="img/logo.png" height="80" width="80" class="center-block img-circle logo-margin-negative">
                    </h4>
                    <button type="button" class="close text-white btn-danger" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">
                                <span class="fa fa-user"></span> EMAIL</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                required autofocus> @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pass">
                                <span class="fa fa-lock"></span> Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required> @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" checked>Remember me</label>
                        </div>
                        <button type="submit" style="background-color: #275d34;" class="btn btn-default btn-success btn-block">
                            <span class="fa fa-send"> </span> ENTER</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <p> Don't Have an account?
                        <br>
                        <button type="button" class="btn" id="myBtn1" data-dismiss="modal" data-toggle="modal" data-target="#myModal1">SIGN UP</button> now ! </p>


                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>


    <!-- sign up -->

    <div class="modal" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content text-primary">

                <div class="modal-header">
                    <h4 style="margin-left:40%" class="modal-title">
                        <img src="img/logo.png" height="80" width="80" class="center-block img-circle logo-margin-negative">
                    </h4>
                    <button type="button" class="close text-white btn-danger" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ route('register') }}">

                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                            required autofocus> @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">phone</label>

                    <div class="col-md-7">
                        <input id="phone" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="phone" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                            required> @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-7">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required> @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-7">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="checkbox" class="col-md-4 col-form-label text-md-right"></label>
                    <div class="checkbox col-md-7">

                        <input id="checkbox" name="checkbox" type="checkbox" value="" checked>Agree with
                        <a href="">Terms & Condition</a>

                    </div>
                </div>

            


            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button style="background-color: #275d34;" type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        
            </form>
        </div>






        <div class="modal-footer">
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>

    </div>
    </div>
    </div>
    <!-- sign up -->
    <!-- slider area start -->

    <section class="slider-area text-center">
        <div class="slider-area-overly">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="carousel slide" data-ride="carousel" id="ourSlider">

                            <ul class="carousel-indicators">
                                <li data-target="#ourSlider" data-slide-to="0" class="active"></li>
                                <li data-target="#ourSlider" data-slide-to="1"></li>
                                <li data-target="#ourSlider" data-slide-to="2"></li>
                            </ul>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h3>CARING & MONITORING YOUR CHILD </h3>
                                    <h2>WE ARE
                                        <span class="">BABYCARE</span>
                                    </h2>
                                    <h4>
                                        <span class="text-success ">DAY CARE</span>/ NIGHT CARE/ RESIDENCIAL </h4>
                                </div>
                                <div class="carousel-item">
                                    <h3>CARING & MONITORING YOUR CHILD </h3>
                                    <h2>WE ARE
                                        <span>BABYCARE</span>
                                    </h2>
                                    <h4>DAY CARE/
                                        <span class="text-success "> NIGHT CARE</span>/ RESIDENCE </h4>
                                </div>
                                <div class="carousel-item">
                                    <h3>CARING & MONITORING YOUR CHILD </h3>
                                    <h2>WE ARE
                                        <span>BABYCARE</span>
                                    </h2>
                                    <h4>DAY CARE/ NIGHT CARE/
                                        <span class="text-success ">RESIDENCIAL</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--slider area end -->


    <!-- abaout area -->
    <div class="container">
        <section class="about-area text-center" id="about-area">

            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales.
                        Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam. </p>
                </div>
            </div>


            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 about-bottom">
                    <h3>life-long learning</h3>
                    <img src="img/a.png" alt="a">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales.
                        Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam. </p>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 about-bottom">
                    <h3>Engage families</h3>
                    <img src="img/b.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales.
                        Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam. </p>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 about-bottom">
                    <h3>Empowering parents</h3>
                    <img src="img/c.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales.
                        Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam. </p>
                </div>


            </div>


        </section>
    </div>
    <!-- about area end-->

    <!-- video section start-->
    <section class="container video-area text-center">
        <div class="row">
            <div class="col-12">
                <h2> Watch Videos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales. Morbi
                    leo nulla, pharetra vel felis nec, ullamcorper condimentum quam. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">
                <h3 class="text-center">Our child</h3>

                <iframe width="100%" height="360" src="https://www.youtube.com/embed/Ojtj9bkAMls" frameborder="0" allow="autoplay; encrypted-media"
                    allowfullscreen></iframe>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">
                <h3 class="text-center">Our teacher</h3>
                <iframe width="100%" height="360" src="https://www.youtube.com/embed/Vu7bqIvluxo" frameborder="0" allow="autoplay; encrypted-media"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- video section end-->
    <!-- price -->
    <section class="pricing-area text-center" id="pricing-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>OUR PRICING</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales.
                        Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam. </p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="pricing-content">
                        <div class="pricing-list-top">
                            <sup>TK</sup>
                            20
                            <sub>K</sub>
                        </div>
                        <div class="pricing-list-bottom">
                            <ul>
                                <li>DAY/NIGHTCARE</li>
                                <li>ABOVE 5 YEARS</li>
                                <li>EDUCATION</li>
                                <li>CULTURAL ACTIVITIES</li>
                            </ul>
                        </div>
                        <button class="btn btn-success">ENROLL NOW</button>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="pricing-content">
                        <div class="pricing-list-top">
                            <sup>TK</sup>
                            30
                            <sub>K</sub>
                        </div>
                        <div class="pricing-list-bottom">
                            <ul>
                                <li>RESIDENCIAL</li>
                                <li>ABOVE 5 YEARS</li>
                                <li>EDUCATION</li>
                                <li>CULTURAL ACTIVITIES</li>
                            </ul>
                        </div>
                        <button class="btn btn-success">ENROLL NOW</button>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="pricing-content">
                        <div class="pricing-list-top">
                            <sup>TK</sup>
                            40
                            <sub>K</sub>
                        </div>
                        <div class="pricing-list-bottom">
                            <ul>
                                <li>DAY/NIGHTCARE</li>
                                <li>BELOW 5 YEARS</li>
                                <li>EDUCATION</li>
                                <li>CULTURAL ACTIVITIES</li>
                            </ul>
                        </div>
                        <button class="btn btn-success">ENROLL NOW</button>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="pricing-content">
                        <div class="pricing-list-top">
                            <sup>TK</sup>
                            50
                            <sub>K</sub>
                        </div>
                        <div class="pricing-list-bottom">
                            <ul>
                                <li>RESIDENCIAL</li>
                                <li>BELOW 5 YEARS</li>
                                <li>EDUCATION</li>
                                <li>CULTURAL ACTIVITIES</li>
                            </ul>
                        </div>
                        <button class="btn btn-success">ENROLL NOW</button>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- price -->
    <!-- contact area start-->
    <section class="contact-area text-center" id="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-top">
                        <h2>Contact US</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales.
                            Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="contact-bottom">
                        <div class="contact-content-hover">
                            <i class="fa fa-phone fa-4x"></i>
                            <h3>Call US</h3>
                        </div>
                        <p>016131731** || 017624554**</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="contact-bottom">
                        <div class="contact-content-hover">
                            <i class="fa fa-map-marker fa-4x"></i>
                            <h3>OFFICE LOCATION</h3>
                        </div>
                        <p>Level 5, Daffodil tower,Dhanmondi </p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="contact-bottom">
                        <div class="contact-content-hover">
                            <i class="fa fa-envelope fa-4x"></i>
                            <h3>MAIL US</h3>
                        </div>
                        <p>hellomstq@gmail.com,shipuhimel@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end-->
    <!-- login -->
    <!-- Modal -->
    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="email">
                                <span class="fa fa-contact"></span> EMAIL</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="psw">
                                <span class="fa fa-lock"></span> Password</label>
                            <input type="text" class="form-control" id="psw" placeholder="Enter password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" checked>Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default btn-success btn-block">
                            <span class="fa fa-send"></span> Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn" data-dismiss="modal">Cancel</button>

                </div>
            </div>
        </div>
    </div>
    <!-- login -->
    <!-- map-area start-->
    <section class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7894846359923!2d90.3742164143586!3d23.754885294523273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ace928ae15%3A0xaa8023ec98f14cf5!2sDaffodil+International+University!5e0!3m2!1sen!2sbd!4v1526620245911"
            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <!-- map-area end-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h6 class="d-none d-sm-block">&copy;BABYCARE 2018</h6>
                    <p class="d-block d-sm-none">&copy; BABYCARE</p>
                </div>
                <div class="col-6  ">
                    <i class="fa fa-facebook mr-auto ml-auto"></i>
                    <i class="fa fa-twitter mr-auto ml-auto"></i>
                    <i class="fa fa-linkedin mr-auto ml-auto"></i>
                </div>
            </div>
        </div>
    </footer>


    <div class="totop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <div class="chat">
        <i class="fa fa-comment" aria-hidden="true"></i>
        Leave us a message
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
    <script src="js/totop.min.js"></script>
    <script>
        $('.totop').tottTop({
            scrollTop: 100
        });
    </script>
    <!--Scroll Top-->
    <script src="js/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.animateNumbers.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myScript.js"></script>
</body>

</html>