
@extends('layouts.master2')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          View Bus Management Details
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li>
            <a href="#">Bus maangnent</a>
          </li>
          <li class="active">view all</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          @if(Session::has('message'))
          <div class="alert alert-{{ session('status') }}">
              {{ session('message') }}
          </div>
      @endif

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">View Bus Management Details</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <p>Show
                  <select style="padding: 5px 10px; border-color: lightseagreen" name="" id="">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                  </select> entrices
                </p>
              </div>
              <div class="col-md-6">
                <p class="pull-right">
                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Search...">
                </p>
              </div>
            </div>
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Vehicle Type</th>
                  <th>Vehicle Registration Number</th>
                  <th>Vehicle Type ID</th>
                  <th>Vehicle Serial No</th>
                  <th>Meximum seats</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  <?php $count = 1; ?>
                  @foreach($vehicles as $vehicle)
                <tr>
                  <td scope="row">{{ $count++ }}</td>
                  <td scope="row">{{ $vehicle->vehicle_type }}</td>
                  <td scope="row">{{ $vehicle->vehicle_reg_no }}</td>
                  <td scope="row">{{ $vehicle->vehicle_type_id }}</td>
                  <td scope="row">{{ $vehicle->vehicle_serial_no }}</td>
                  <td scope="row">{{ $vehicle->seat_capacity }}</td>
                  <td scope="row">
                      @if($vehicle->status == 'active')
                          <span class="badge" style="background-color: #00a157">Active</span>
                      @endif
                      @if($vehicle->status == 'inactive')
                             <span class="badge" style="background-color: red">Inactive</span>
                      @endif
                    <td>
                    <button type="button" class="btn btn-primary">
                        <a style="color:aliceblue" href="{{ route('vehicle_show', ['id' => $vehicle->id]) }}">
                            View</a></button>
                    <button type="button" class="btn btn-warning">
                        <a style="color:aliceblue" href="{{ route('vehicle_edit', ['id' => $vehicle->id]) }}">
                          Edit
                        </a>
                    </button>
                    <a class="btn btn-danger delete" style="color: #fff;">
                        Delete</a>
                    <input class="delete_url" type="hidden" value="{{ route('vehicle_delete', ['id' => $vehicle->id]) }}">

                  </td>
                </tr>
                @endforeach
                <tr>
                    <th>#</th>
                    <th>Vehicle Type</th>
                    <th>Vehicle Registration Number</th>
                    <th>Vehicle Type ID</th>
                    <th>Vehicle Serial No</th>
                    <th>Meximum seats</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
              </tbody>
            </table>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-md-6">
                <p style="margin-top: 20px">Showing 1 to 1 of 1 entries</p>
              </div>
              <div class="col-md-6 pull-right">
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">Previous</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>

            </div>

          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
      <!-- Scroll to top button -->

    </div>
    <!-- /.content-wrapper -->
@endsection

@section('script')
<script>
    $('.delete').click(function () {

        var url = $(this).next('.delete_url').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function () {
            window.location.href = url;
        })

    });
</script>
@endsection