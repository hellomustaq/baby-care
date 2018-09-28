@extends('caregiver.layout.master')

@section('content')
                    <div class="card-deck">
                        <div class="card"><br><br><br><br><br>
                        <div class="card-img-top"><i class="fa fa-plus-circle fa-5x"></i></div><br><br>
                          <div class="card-body">
                            <h5 class="card-title">CREATE POST</h5>
                            <p class="card-text"></p>
                          </div>
                          
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="{{asset('img/children3.png')}}" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Nice Tour</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="{{asset('img/children3.png')}}" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Off Time! Chillll!!!</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                </div>
@endsection
