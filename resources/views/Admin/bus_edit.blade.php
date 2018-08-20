
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
              {{ Form::open(['url' => route('vehicle_update', ['id' => $id]), 'method' => 'post','files' => 'false']) }}

                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Vehicle Serial No</label>
                      <input type="text" class="form-control required" tabindex="1" 
                     value="{{ $vehicle->vehicle_serial_no }}" required="" name="vehicle_serial_no" placeholder="Vehicle Serial No">
                    </div>

                    <div class="form-group">
                      <label>Vehicle Type</label>
                      <select tabindex="3" class="form-control select2 required" style="width: 100%;" name="vehicle_type">
                        <option value="{{ $vehicle->vehicle_type }}"> - {{ $vehicle->vehicle_type }}</option>
                        <option value="54"> - AC Bus</option>
                        <option value="77"> - RES</option>
                        <option value="89"> - afdasfa</option>
                        <option value="90"> - dfsf</option>
                        <option value="91"> - Landseer</option>
                        <option value="92"> - AM</option>
                        <option value="93"> - posti</option>
                        <option value="94"> - sanjay rsererer</option>
                        <option value="95"> - akm</option>
                        <option value="97"> - Point to point</option>
                        <option value="98"> - GSRTC</option>
                        <option value="99"> - GSRTC Ac Volvo Bus</option>
                        <option value="100"> - Volvo Ac Sleeper</option>
                        <option value="101"> - Fast</option>
                        <option value="102"> - Smart executive</option>
                        <option value="103"> - tyu</option>
                        <option value="104"> - BUS</option>
                      </select>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Vehicle Type Id</label>
                      <input type="text" class="form-control required" value="{{ $vehicle->vehicle_type_id }}"  name="vehicle_type_id"  placeholder="Vehicle Type Id..">
                    </div>


                    <div class="box-footer">
                      
                    </div>
                  </div>

                  <div class="col-md-6">

                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Vehicle Register Number</label>
                      <input type="text" class="form-control required" value="{{ $vehicle->vehicle_reg_no }}"  name="vehicle_reg_no" required="" placeholder="Vehicle RegiNumber">
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Seat Capacity</label>
                      <input type="number" class="form-control required" value="{{ $vehicle->seat_capacity }}" name="seat_capacity" required=""
                        placeholder="Maximum Seats">
                    </div>
                  </div>

                  <div class="form-group has-feedback">
                    <div class="col-md-6">
                    <label>Status</label>
                    <select class="form-control select2 required" style="width: 35%;" name="status">
                      <option value="{{ $vehicle->status }}">{{ $vehicle->status }}</option>
                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                    </select>
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
