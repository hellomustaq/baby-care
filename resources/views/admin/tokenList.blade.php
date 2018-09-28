@extends('admin.layout.master')
@section('content')
<div class="row">
@foreach($tokens as $token)
@if($token->id %4==0)
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
    <div class="inner">
        <h3>{{$token->token}}</h3>
        <p>Token usable</p>
    </div>
    <div class="icon">
        <i class="ion ion-key"></i>
    </div>
    <a href="#" class="small-box-footer">One time use only -  <i class="fa ion-android-unlock"></i></a>
    </div>
</div>
@elseif($token->id %3==0)
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
    <div class="inner">
        <h3>{{$token->token}}</h3>
        <p>Token usable</p>
    </div>
    <div class="icon">
        <i class="ion ion-key"></i>
    </div>
    <a href="#" class="small-box-footer">One time use only -  <i class="fa ion-android-unlock"></i></a>
    </div>
</div>
@elseif($token->id %3 ==1 )
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
    <div class="inner">
        <h3>{{$token->token}}</h3>
        <p>Token usable</p>
    </div>
    <div class="icon">
        <i class="ion ion-key"></i>
    </div>
    <a href="#" class="small-box-footer">One time use only -  <i class="fa ion-android-unlock"></i></a>
    </div>
</div>
@elseif($token->id %5 ==0 )
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
    <div class="inner">
        <h3>{{$token->token}}</h3>
        <p>Token usable</p>
    </div>
    <div class="icon">
        <i class="ion ion-key"></i>
    </div>
    <a href="#" class="small-box-footer">One time use only -  <i class="fa ion-android-unlock"></i></a>
    </div>
</div>
@elseif($token->id %2==1)
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
    <div class="inner">
        <h3>{{$token->token}}</h3>
        <p>Token usable</p>
    </div>
    <div class="icon">
        <i class="ion ion-key"></i>
    </div>
    <a href="#" class="small-box-footer">One time use only -  <i class="fa ion-android-unlock"></i></a>
    </div>
</div>
@endif
@endforeach
</div>
@endsection