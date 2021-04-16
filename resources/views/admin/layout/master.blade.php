  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('title')
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('/admin_theme/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/admin_theme/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('/admin_theme/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/admin_theme/dist/css/AdminLTE.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/admin_theme/dist/css/skins/_all-skins.css')}}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"  type="text/css" /> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"  type="text/css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="{{asset('/admin_theme/dist/css/style.css')}}"  type="text/css" />
  <!-- Morris chart -->
  <!-- jvectormap -->
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
    <link rel="stylesheet" href="{{asset('/assets/datepicker_custom.css')}}"  type="text/css" />
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color: black;">
  <div style="background-color:black;" class="wrapper">
    <header style="background-color:black;" class="main-header">
    <!-- Logo -->
    <a style="background-background-color: black;" href="{{URL::to('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span style="background-color:black;" class="logo-mini"><b>A</b>JS</span>
      <!-- logo for regular state and mobile devices -->
      <span style="background-color:black;" class="logo-lg"><b>My Website</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: black;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu" style="background-color: black;">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
         
        
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('/assets/img/admin.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Profile & Setting</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('/assets/img/admin.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()['name']}}
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <form action="{{URL::to('logout')}}" method="POST">
                    @csrf()
                    <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"style="background-color: black;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('/assets/img/admin.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hi Admin !</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="">
          <a href="{{URL::to('/admin')}}"><i style="color:white;" class="fa fa-dashboard"></i><span style="color:white;"> Dashboard</span></a>
        </li>
        
        <li class="">
          <a href="{{URL::to('/admin/profile')}}"><i style="color:white;" class="fa fa-user-o"></i><span style="color:white;"> Website Profile</span></a>
        </li>
        <li class="">
          <a href="{{URL::to('/admin/query-list')}}"><i style="color:white;" class="fa fa-bookmark"></i><span style="color:white;">Customer List</span></a>
        </li>
        <li class="">
          <a href="{{URL::to('/admin/slider-list')}}"><i style="color:white;" class="fa fa-bookmark"></i><span style="color:white;">Slider List</span></a>
        </li>
        <li class="">
          <a href="{{URL::to('/admin/about-us')}}"><i style="color:white;" class="fa fa-bookmark"></i><span style="color:white;">About Us</span></a>
        </li>
        <li class="">
          <a href="{{URL::to('/admin/brand-list')}}"><i style="color:white;" class="fa fa-bookmark"></i><span style="color:white;">Product List</span></a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 @yield('content')
@include('admin.layout.footer')