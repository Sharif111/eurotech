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
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-12">
      <div class="content_area">
           
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('/admin/profile')}}">
            <!-- small box -->
            <div class="small-box" style="background:#ae0d39">
            <div class="inner text-center">
                <br>
             <i class="fa fa-user" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>WEBSITE PROFILE</p>
            </div>
            </div>
          </a>
        </div>
         <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('/admin/query-list')}}">
            <!-- small box -->
            <div class="small-box" style="background:#165807">
            <div class="inner text-center">
                <br>
             <i class="fa fa-users" style="font-size:30px;color:white"></i>
             <br>
             <br>
              <p>CUSTOMER INQUERY</p>
            </div>
            </div>
          </a>
        </div>
           <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('/admin/slider-list')}}">
            <!-- small box -->
            <div class="small-box" style="background:#663399">
            <div class="inner text-center">
                <br>
              <i class="fa fa-cc-diners-club" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>SLIDER LIST</p>
            </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('/admin/brand-list')}}">
            <!-- small box -->
            <div class="small-box" style="background:#AD4A0A">
            <div class="inner text-center">
                <br>
              <i class="fa fa-cc-diners-club" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>PRODUCT LIST</p>
            </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('/admin/portfolio-list')}}">
            <!-- small box -->
            <div class="small-box" style="background:#63100f">
            <div class="inner text-center">
                <br>
              <i class="fa fa-cc-diners-club" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>PORTFOLIO</p>
            </div>
            </div>
          </a>
        </div>  
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('/admin/service-list')}}">
            <!-- small box -->
            <div class="small-box" style="background:#821840">
            <div class="inner text-center">
                <br>
              <i class="fa fa-cc-diners-club" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>SERVICE LIST</p>
            </div>
            </div>
          </a>
        </div> 
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('/admin/about-us')}}">
            <!-- small box -->
            <div class="small-box" style="background:#17372c">
            <div class="inner text-center">
                <br>
              <i class="fa fa-money" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>ABOUT US</p>
            </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{URL::to('/admin/team-list')}}">
            <!-- small box -->
            <div class="small-box" style="background:#080C8A">
            <div class="inner text-center">
                <br>
              <i class="fa fa-cc-diners-club" style="font-size:30px;color:white"></i>
              <br>
              <br>
              <p>TEAM MEMBERS</p>
            </div>
            </div>
          </a>
        </div> 
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{  URL::to('admin/testimonial-list') }}" >
            <!-- small box -->
            <div class="small-box" style="background:#957c06">
            <div class="inner text-center">
                <br>
             <i class="fa fa-pencil-square-o" style="font-size:30px;color:white"></i>
             <br>
             <br>
              <p>HAPPY CLIENTS</p>
            </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-xs-6">
          <a class="box-a" href="{{ URL::to('admin/menu-list') }}">
            <!-- small box -->
            <div class="small-box" style="background:#957c06">
            <div class="inner text-center">
                <br>
             <i class="fa fa-pencil-square-o" style="font-size:30px;color:white"></i>
             <br>
             <br>
              <p>MENUS</p>
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
<footer class="main-footer"style="background-color:black">
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