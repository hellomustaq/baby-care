@extends('admin.layout.master')
@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Caregiver's List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 20px">#</th>
                  <th>Name</th>
                  <th></th>
                  <th style="width: 300px">Action</th>
                </tr>
                @foreach($caregivers as $caregiver)
                <tr>
                  <td>{{$caregiver->id}}</td>
                  <td>{{$caregiver->name}}</td>
                  <td>
                    
                  </td>
                  <td>
                    <div class="btn btn-sm btn-success">
                      <i class="ion ion-edit"></i>
                    </div>
                    <div class="btn btn-sm btn-danger">
                      <i class="ion ion-android-delete"></i>
                    </div>
                    <div class="btn btn-sm btn-info">
                      <i class="ion ion-ios-pause"></i>
                    </div>
                  </td>
                </tr>  
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
        </div>
@endsection