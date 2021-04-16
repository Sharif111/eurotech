.@extends('admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-12">
      <div class="content_area">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
          <div class="inner">
            <h3>+</h3>

            <p>ADD NEW CUSTOMER</p>
          </div>
          <div class="icon">
            <i style="padding:10px 3px;" class="fa fa-user"></i>
          </div>
          <a href="customer/create" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
          <div class="inner">
            <h3> ₹</h3>

            <p>PAYNENT</p>
          </div>
          <div class="icon">
            <i style="padding:10px 3px;" class="fa fa-money"></i>
          </div>
          <a href="payment/create" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
          <div class="inner">
            <h3> ☑</h3>

            <p>DEPOSITE</p>
          </div>
          <div class="icon">
            <i style="padding:23px 3px; font-size:80px;" class="fa fa-university"></i>
          </div>
          <a href="deposit/create" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
          <div class="inner">
            <h3>➣</h3>

            <p>REPORTS</p>
          </div>
          <div class="icon">
            <i style="padding:10px 3px;" class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
      <!-- ./col -->
  </div>
    <!-- /.row -->
    <!-- Main row -->
    

  </section>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>&nbsp;</b> 
  </div>
  <strong>Copyright &copy; {{Date('Y')}} <a href="https://www.josisoft.com">Developed By Josisoft Technologies</a></strong>
</footer>
  
<!-- Control Sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
@endsection