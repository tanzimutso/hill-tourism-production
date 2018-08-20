
@extends('layouts.master2')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          View Vehicle Management Details
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li>
            <a href="#">Vehicle maangnent</a>
          </li>
          <li class="active">Add New</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          </div>
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Add Vehicle Details</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              {{ Form::open(['url' => route('route_update', ['id' => $id]), 'method' => 'post','files' => 'false']) }}

                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Travelling From</label>
                      <input type="text" class="form-control required" tabindex="1" 
                     value="{{ $route->travelling_from }}" required="" name="travelling_from" placeholder="Vehicle Serial No">
                    </div>

                    <div class="form-group has-feedback">
                        <label for="exampleInputEmail1">Travelling To</label>
                        <input type="text" class="form-control required" value="{{ $route->travelling_to }}"  name="travelling_to"  placeholder="Vehicle Type Id..">
                      </div>

                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Travelling Time</label>
                      <input type="text" class="form-control required" value="{{ $route->travelling_time }}"  name="travelling_time"  placeholder="Vehicle Type Id..">
                    </div>


                    <div class="box-footer">
                      
                    </div>
                  </div>

                  <div class="col-md-6">

                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Fare</label>
                      <input type="text" class="form-control required" value="{{ $route->fare }}"  name="fare" required="" placeholder="Vehicle RegiNumber">
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Service Charge</label>
                      <input type="number" class="form-control required" value="{{ $route->service_charge }}" name="service_charge" required=""
                        placeholder="Maximum Seats">
                    </div>
                  </div>

                  <div class="form-group has-feedback">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Parking Fare</label>
                        <input type="number" class="form-control required" value="{{ $route->parking_fare }}" name="parking_fare" required=""
                          placeholder="Maximum Seats">
                  </div>
                  </div>
                  <input style="margin-top: 30px;" type="submit" class="btn btn-warning" value="update">
                  {{ Form::close() }}
              </div>
              <!-- /.box -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
