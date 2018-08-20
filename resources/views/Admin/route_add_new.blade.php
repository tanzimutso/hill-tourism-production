
@extends('layouts.master2')

@section('content')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Add Route Details
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li>
            <a href="#">Route Detail</a>
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
                <h3 class="box-title">Add Route Details</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="{{ route('route_store') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Travelling From</label>
                      <input type="text" class="form-control required" tabindex="1" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"
                        data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="travelling_from" placeholder="Travelling From">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Travelling To</label>
                      <input type="text" class="form-control required" tabindex="1" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"
                        data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="travelling_to" placeholder="Travelling To">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>


                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Travelling Time</label>
                      <input tabindex="5" type="text" class="form-control required" name="travelling_time" data-parsley-trigger="change" data-parsley-minlength="2"
                        data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required="" placeholder="Travelling Time">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    
                    <div class="box-footer">
                      <button tabindex="10" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Fare</label>
                      <input tabindex="2" type="text" class="form-control required" name="fare" data-parsley-trigger="change" data-parsley-minlength="2"
                        data-parsley-maxlength="15" required="" placeholder="Fare..">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Service Charge</label>
                      <input tabindex="4" type="text" class="form-control required" name="service_charge" data-parsley-trigger="change" required=""
                        placeholder="Service Charge">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Parking Fare</label>
                      <input tabindex="4" type="text" class="form-control required" name="parking_fare" data-parsley-trigger="change" required=""
                        placeholder="Parking Fare..">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>

                  </div>
                </div>
              </form>
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