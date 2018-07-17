@extends('layouts.master') @section('style')
<style>
    *[role="form"] {
        max-width: 530px;
        padding: 15px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 0.3em;
    }

    *[role="form"] h2 {
        margin-left: 5em;
        margin-bottom: 1em;
    }

    .card-img-top {
        width: 100%;
        height: 300px;
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px);
    }

    .child-area {
        background: #FFFFFF;
        border: 1px solid;
        box-shadow: 1px 1px 20px 4px #888888;
        border-radius: 5px 5px 5px 5px;
        width: 100%;
        height: auto;


    }

    .space {
        margin: 30px;
    }

    .title-add {
        color: #2DAE60;
        font-weight: bolder;
    }

    @media (min-width:300px) and (max-width:400px) {

        .child-area {
            background: #FFFFFF;
            border: 1px solid;
            box-shadow: 1px 1px 20px 4px #888888;
            border-radius: 5px 5px 5px 5px;
            width: 90%;
            height: 500px;


        }
    }
</style>
@endsection @section('content')

<div class="container">
    @if(Auth::user()->access == 1)
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/children3.png" alt="Card image cap" height="200" width="200">
            <div class="card-body">
                <h3 class="card-title">Pay Admission Fee First!!</h3>
                <p class="card-text">You are not auhorise to add your childern. Please chose an ideal pakage for admission. Thank You!! </p>
            </div>
            <div class="card-footer">
                <small class="text-muted font-weight-bold">
                    <a href="{{url('/')}}" style="background-color:#2DAE60;" class="btn ">Go To Pricing</a>
                </small>
            </div>
        </div>
    </div>
    @else
    <div class="space">
        <h2 class="title-add">
            <i class="fa fa-plus"></i> Add Child</h2>
    </div>
    <section class="child-area">
        <form role="form" action="{{url('/children/add')}}" method="post" enctype="multipart/form-data">
            @csrf 
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <div class="form-group ml-4 mr-4">

                <div class="row">

                    <div class="col-6">
                        <label for="firstName">First Name*</label>
                        <input value="{{ old('firstName') }}" name="firstName" type="text" class="form-control" id="first" placeholder="First Name">
                    </div>

                    <div class="col-6">
                        <label for="lastName">Last Name*</label>
                        <input value="{{ old('lastName') }}" name="lastName" type="text" class="form-control" id="last" placeholder="Last Name">
                    </div>
                </div>
            </div>
            <!-- Group of material radios - option 1 -->
            <label for="">Gender*</label>
            <div class="form-check">
                    
                <input type="radio" value="male" class="form-check-input" id="radio1" name="gender">
                <label class="form-check-label" for="radio1">Male</label>
                <input type="radio" value="female" class="form-check-input" id="radio2" name="gender">
                <label class="form-check-label" for="radio2">Female</label>
                <input type="radio" value="other" class="form-check-input" id="radio3" name="gender">
                <label class="form-check-label" for="radio3">Other</label>
            </div><br>
            

            {{-- <div class="form-group ml-4 mr-4">
                <label for="gender">gender</label>
                <br>
                <input value="{{ old('gender') }}" type="text" name="gender" class="form-control" placeholder="Boy or Girl or Other">
            </div> --}}


            <div class="form-group ml-4 mr-4">
                <label for="Birthday">Birthday*</label>
                <input name="birthday" type="date" class="form-control" id="birthday">
            </div>


            <div class="form-group ml-4 mr-4">
                <label for="image">Profile Image*</label>
                <input type="file" name="image" class="form-control" id="image">
                <h6 style="color:red;">**Maximum file size 5MB</h6>
            </div>

            <button type="submit" style="background-color:#2DAE60;" class="btn">
                <i class="fa fa-plus"></i> ADD </button>
        </form>
    </section>
    @endif

</div>
<!-- ./container -->
@endsection