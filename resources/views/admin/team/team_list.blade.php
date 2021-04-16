@extends('admin.layout.master')
@section('content')
<style>
a:hover{
    text-decoration: none;
}
.label_area{
  text-align:right;
}
.add_customer_btn {
    position: absolute;
    top: 130px;
    right: 45px;
    z-index: 99;
    height: 35px;
    width: 130px;
    background: #999;
    line-height: 35px;
    text-align: center;
    border-radius: 50px;
    color: #FFF;
    cursor: pointer;
}
.add_customer_btn:hover {
    background: #159dff;
    color: #fff;
    box-shadow: 0px 17px 10px -10px rgba(0,0,0,0.4);
    cursor: pointer;
    transition: all ease-in-out 200ms;
    
    &:hover
        box-shadow: 0px 37px 20px -20px rgba(0,0,0,0.2)
        transform: translate(0px, -10px) scale(1.2)
    }
    table thead {
        background: #263240;
        color: #fff;
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        background-color: #263240 !important;
        border-color: #263240 !important;
    }
</style>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-12">
      <div class="main_content_area">
        <div class="main_content_header">
          <h4><i class="fa fa-money"></i>Team Member List</h4>
        </div>
        <div class="content_filds">
            <div class="col-md-12">
                <div class="col-md-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert ">{{$error}}</div>
                    @endforeach
                @endif
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                </div>
                @endif
                </div>
                
                <a href="{{URL::to('/admin/team')}}" class="btn btn-info"><i style="color:white;" class="fa fa-layer-plus"></i>Add New Team Member</a>

                <h2 class="text-center">Team Member List</h2>
                <hr>
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align:center">Sl</th>
                                <th style="text-align:center">Team Member Name</th>
                                <th style="text-align:center">Designation</th>
                                <th style="text-align:center">Message</th>
                                <th style="text-align:center">Image</th>
                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teamList as $i=>$item)
                            
                            <tr>
                                <td style="text-align:center">{{$i+1}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->designation}}</td>
                                <td>{{$item->message}}</td>
                                <td><img style="height:100px;width:100px" src="{{ asset('/webassets/portfolio').'/'.$item->image }}" alt=""></td>
                                <td><a href="{{ URL::to('admin/team-edit').'/'.$item->id }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
                                    <a href="{{ URL::to('admin/team-delete').'/'.$item->id }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              
            </div>
        </div>
      </div>
    </div>
      <!-- ./col -->
  </div>

  </section>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
<script>
    $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: "dd-mm-yy"
        ,	duration: "fast"
    });
} );
</script>
<script>
    $( function() {
    $( "#datepicker2" ).datepicker({
        dateFormat: "dd-mm-yy"
        ,	duration: "fast"
    });
} );
</script>
@endsection