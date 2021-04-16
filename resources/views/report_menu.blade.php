@extends('admin.layout.master')
@section('content')
<style>
  .box-a{
    color: #FFF;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>View Reports</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-12">
      <div class="content_area">
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="report/customer_statement">
            <!-- small box -->
            <div class="small-box" style="background:#ae0d39">
            <div class="inner text-center">
                <br>
             <i class="fa fa-user" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>CUSTOMER STATEMENT</p>
            </div>
            </div>
          </a>
        </div>
         <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('report/daily-collection')}}">
            <!-- small box -->
            <div class="small-box" style="background:#165807">
            <div class="inner text-center">
                <br>
             <i class="fa fa-users" style="font-size:30px;color:white"></i>
             <br>
             <br>
              <p>DAILY COLLECTION</p>
            </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('report/market-wise-report')}}">
            <!-- small box -->
            <div class="small-box" style="background:#17372c">
            <div class="inner text-center">
                <br>
              <i class="fa fa-money" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>MARKET WISE</p>
            </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('report/deposit-transection-report')}}">
            <!-- small box -->
            <div class="small-box" style="background:#957c06">
            <div class="inner text-center">
                <br>
             <i class="fa fa-pencil-square-o" style="font-size:30px;color:white"></i>
             <br>
             <br>
              <p>DEPOSIT TRANSACTION</p>
            </div>
            </div>
          </a>
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
<footer class="main-footer"style="background-color:black;">
  <div class="pull-right hidden-xs">
    <b>&nbsp;</b> 
  </div>
  <strong>Copyright &copy; {{Date('Y')}} <a style="color:white;" href="#">All Rights Reserved</a></strong>
</footer>
  
<!-- Control Sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
@endsection