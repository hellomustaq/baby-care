@extends('layouts.master')
 @section('link')
 @endsection 
 
 @section('style')
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
        /*margin-left: 40px;*/
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
    @media (min-width: 576px){
        .card-deck {
            -webkit-box-orient: horizontal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px;
            margin-top: 0 !important;
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
                        Student
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <a href="{{-- {{route('childrenProfileEdit',['id' =>$selected->id])}} --}}"><button type="button" class="btn btn-success btn-sm">Edit</button></a>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li>
                            <a href="{{route('childrenProfile',['id' =>$selected->id])}}">
                                <i class="glyphicon glyphicon-home"></i>
                                Gellary </a>
                        </li>
                        <li class="active">
                            <a href="{{route('childrenProfilePost',['id' =>$selected->id])}}">
                                <i class="glyphicon glyphicon-user"></i>
                                Post </a>
                        </li>
                        <li>
                            <a href="#" target="">
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

                <div class="row my-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <h2 style="background-color:lightgray;">{{$post->title}}</h2>
                            <div style="background-color:lightgray;"><img height="280" width="500" src="{{asset('img/postImage/'.$post->image)}}" alt=""></div>
                            <div>
                                <br>
                                <p style="background-color:lightgray;"><br>{{$post->body}}<br><br></p>
                            </div>


                            </div>
                            <div class="col-md-2"></div>
                            
                        </div>
                    </div>
                </div>
        `   </div>
        </div>
</div>
<br> @endsection