
@extends('layouts.master2')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua">
                <i class="ion ion-ios-gear-outline"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Total Vehicle</span>
                <span class="info-box-number">90
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red">
                <i class="fa fa-google-plus"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Visitors</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green">
                <i class="ion ion-ios-cart-outline"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Spot</span>
                <span class="info-box-number">7</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow">
                <i class="ion ion-ios-people-outline"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Agent</span>
                <span class="info-box-number">20</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2016
        <a href="#">Bandarban Travels</a>.</strong> All rights reserved.
    </footer>


    <!-- Scroll to top button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <!-- ./wrapper -->

  @endsection