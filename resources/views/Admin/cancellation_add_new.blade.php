@extends('layouts.master2')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Add Cencel Details
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li>
            <a href="#">Cencel Detail</a>
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
                <h3 class="box-title">Add Cencel Details</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="" method="post" class="validate" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Cencel Id</label>
                      <input type="text" class="form-control required" tabindex="1" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"
                        data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="bus_name" placeholder="Driver NID">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Booking Id</label>
                      <input type="text" class="form-control required" tabindex="1" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"
                        data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="bus_name" placeholder="Booking Id..">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>


                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Token No.</label>
                      <input tabindex="5" type="text" class="form-control required" name="board_point" data-parsley-trigger="change" data-parsley-minlength="2"
                        data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required="" placeholder="Mobile no...">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>

                    <div class="box-footer">
                      <button tabindex="10" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Vehicle Type Id</label>
                      <input tabindex="2" type="text" class="form-control required" name="bus_reg_no" data-parsley-trigger="change" data-parsley-minlength="2"
                        data-parsley-maxlength="15" required="" placeholder="Bus RegiNumber">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Cencel Time</label>
                      <input tabindex="4" type="text" class="form-control required" name="max_seats" data-parsley-trigger="change" required=""
                        placeholder="Maximum Seats">
                      <span class="glyphicon  form-control-feedback"></span>
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

@endsection
    