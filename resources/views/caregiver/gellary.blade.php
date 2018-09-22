@extends('caregiver.layout.master') @section('link')
<link href="{{asset('css/gellary.css')}}" rel="stylesheet"> @endsection @section('style')
<style>
    body {
        background: #F1F3FA;
    }

    /*custom css*/

    .col-md-10 {
        padding-left: 0;
        padding-right: 0;
    }

    .rounded-circle {
       /* margin-left: 40px;*/
    }
    .profile-img {
        margin-left: 40px;
    }

    /* Profile container */

    .profile {
        margin: 20px 0;
    }

    /* Profile sidebar */

    .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #none;
        min-height: 460px;
    }

    .profile-userpic img {
        float: none;
        margin: 0 auto;
        width: 50%;
        height: 50%;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
    }

    .profile-usertitle {
        text-align: center;
        margin-top: 20px;
    }

    .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
    }

    .profile-usertitle-job {
        text-transform: uppercase;
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
    }

    .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 6px 15px;
        margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
        margin-right: 0px;
    }

    .profile-usermenu {
        margin-top: 30px;
    }

    .profile-usermenu ul li {
        border-bottom: 1px solid #f0f4f7;
        margin-right: 60px;
    }

    .profile-usermenu ul li:last-child {
        border-bottom: none;
    }

    .profile-usermenu ul li a {
        color: #93a3b5;
        font-size: 14px;
        font-weight: 400;
    }

    .profile-usermenu ul li a i {
        margin-right: 8px;
        font-size: 14px;
    }

    .profile-usermenu ul li a:hover {
        background-color: #fafcfd;
        color: #5b9bd1;
    }

    .profile-usermenu ul li.active {
        border-bottom: none;
    }

    .profile-usermenu ul li.active a {
        color: #5b9bd1;
        background-color: #f6f9fb;
        border-left: 2px solid #5b9bd1;
        margin-left: -2px;
    }

    /* Profile Content */

    .profile-content {
        padding: 20px;
        background: #c4efff;
        min-height: 460px;
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1300px !important;
        }
    }

    @media (min-width: 1200px) {
        .fixed-sn main {
            margin-left: 0% !important;
            margin-right: 0% !important;
        }
    }
</style>
@endsection @section('content')

<div class="container">
    <div class="row profile">
        <div class="col-md-2">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="row">
                    <div class="col-xs-7 ">
                        <img src="{{asset('img/'.$selected->image)}}" class="profile-img rounded-circle img-responsive" height="150" width="150" />
                    </div>
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{$selected->first_name}}
                    </div>
                    <div class="profile-usertitle-job">
                        O +ve
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <a href="{{route('childrenProfileEdit',['id' =>$selected->id])}}"><button type="button" class="btn btn-success btn-sm">Edit</button></a>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="{{route('c.childrenGellary',['cid' =>$selected->id])}}">
                                <i class="glyphicon glyphicon-home"></i>
                                Gellary </a>
                        </li>
                        <li>
                            <a href="{{route('c.childrenProfile',['cid' =>$selected->id])}}">
                                <i class="glyphicon glyphicon-user"></i>
                                Post </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-10">
            <div class="profile-content">
                <div class="gallery">
                    <!-- <figure>
                        <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Daytona Beach
                            <small>United States</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1443890923422-7819ed4101c0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Териберка, gorod Severomorsk
                            <small>Russia</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>
                            Bad Pyrmont
                            <small>Deutschland</small>
                        </figcaption>
                    </figure> -->
                    @foreach($posts as $post)
                    <figure>
                        <img src="{{asset('img/postImage/'.$post->image)}}"
                            alt="" />
                        <figcaption>Yellowstone National Park
                            <small>United States</small>
                        </figcaption>
                    </figure>
                    @endforeach
                    
                    <!-- <figure>
                        <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Quiraing, Portree
                            <small>United Kingdom</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1441906363162-903afd0d3d52?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Highlands
                            <small>United States</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Daytona Beach
                            <small>United States</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1443890923422-7819ed4101c0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Териберка, gorod Severomorsk
                            <small>Russia</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>
                            Bad Pyrmont
                            <small>Deutschland</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1439798060585-62ab242d7724?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Yellowstone National Park
                            <small>United States</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Quiraing, Portree
                            <small>United Kingdom</small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1441906363162-903afd0d3d52?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                            alt="" />
                        <figcaption>Highlands
                            <small>United States</small>
                        </figcaption>
                    </figure> -->
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
                    <symbol id="close" viewBox="0 0 18 18">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
                              S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
                              l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
                              c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
                              s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z" />
                    </symbol>
                </svg>
                <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
                <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script>
                    popup = {
                        init: function () {
                            $('figure').click(function () {
                                popup.open($(this));
                            });

                            $(document).on('click', '.popup img', function () {
                                return false;
                            }).on('click', '.popup', function () {
                                popup.close();
                            })
                        },
                        open: function ($figure) {
                            $('.gallery').addClass('pop');
                            $popup = $('<div class="popup" />').appendTo($('body'));
                            $fig = $figure.clone().appendTo($('.popup'));
                            $bg = $('<div class="bg" />').appendTo($('.popup'));
                            $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo(
                                $fig);
                            $shadow = $('<div class="shadow" />').appendTo($fig);
                            src = $('img', $fig).attr('src');
                            $shadow.css({
                                backgroundImage: 'url(' + src + ')'
                            });
                            $bg.css({
                                backgroundImage: 'url(' + src + ')'
                            });
                            setTimeout(function () {
                                $('.popup').addClass('pop');
                            }, 10);
                        },
                        close: function () {
                            $('.gallery, .popup').removeClass('pop');
                            setTimeout(function () {
                                $('.popup').remove()
                            }, 100);
                        }
                    }

                    popup.init()

                    //# sourceURL=pen.js
                </script>
            </div>
        </div>
    </div>
</div>
<br> @endsection