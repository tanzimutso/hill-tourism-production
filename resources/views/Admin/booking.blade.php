@extends('layouts.master2')

@section('content')
  
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          View Booking Management Details
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li>
            <a href="#">Booking maangnent</a>
          </li>
          <li class="active">view all</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">View Booking Management Details</h3>

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
                  <th>Booking Id</th>
                  <th>Token</th>
                  <th>Vehicle Type Id</th>
                  <th>Route Id</th>
                  <th>Travelling From</th>
                  <th>Travelling To</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Booking Date</th>
                  <th>Payment Option</th>
                  <th>Payment Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">Test</td>
                  <td scope="row">RegiA2212</td>
                  <td scope="row">Ac Bus</td>
                  <td scope="row">15</td>
                  <td scope="row">Bandarban sadar</td>
                  <td scope="row">4:00 PM</td>
                  <td scope="row">Sunamondir</td>
                  <td scope="row">4:45 PM</td>
                  <td scope="row">4:45 PM</td>
                  <td scope="row">4:45 PM</td>
                  <td scope="row">4:45 PM</td>
                  <td scope="row">4:45 PM</td>
                  <td scope="row">
                    <a name="" id="" class="btn btn-primary" href="#" role="button">View</a>
                  </td>
                </tr>
                <tr>
                  <th>Booking Id</th>
                  <th>Token</th>
                  <th>Vehicle Type Id</th>
                  <th>Route Id</th>
                  <th>Travelling From</th>
                  <th>Travelling To</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Booking Date</th>
                  <th>Payment Option</th>
                  <th>Payment Status</th>
                  <th>Action</th>
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
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>

@endsection
