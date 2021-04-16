@extends('admin.layout.master')
@section('content')
<style>
    .input-container {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        width: 100%;
        margin-bottom: 10px;
        margin-top: 5px;
    }

    .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 50px;
        text-align: center;
    }

    .input-field {
        width: 100%;
        padding: 5px 5px;
        outline: none;
        border: 1px solid #ccc;
        border-radius: 0px 4px 4px 0px;
    }

    .input-field:focus {
        border: 1px solid dodgerblue;
    }
</style>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-12">
      <div class="main_content_area">
        <div class="main_content_header">
          <h4><i class="fa fa-user-o"></i> About Us</h4>
        </div>
        <div class="content_filds">
            <div class="col-md-8 col-md-offset-1">
            <div class="col-md-12">
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert ">{{$error}}</div>
                    <br>
                @endforeach
                @endif
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
                    <br>
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
                    <br>
                </div>
                @endif
            </div>
              <form action="{{ URL::to('admin/about-us') }}" method="POST" enctype="multipart/form-data">
                @csrf()
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label for="title">Title :</label>
                            <input id="title" class="form-control" value="{{ $AboutData['title'] }}" type="text" name="title" required autofocus>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea name="description" id="description" cols="53" rows="3">{{ $AboutData['description'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="logo">Upload image :</label>
                            <input id="logo" type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event)">
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                        <img id="output" src="{{ asset('/webassets/aboutus/').'/'.$AboutData['image'] }}" style="height:90px;width:90px" class="img img-responsive" alt="">
                        <br>
                        
                    </div>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
      <!-- ./col -->
  </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
    <img id="output"/>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endsection