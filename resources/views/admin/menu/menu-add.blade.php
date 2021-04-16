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
          <h4><i class="fa fa-user-o"></i> Menu</h4>
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
              <form action="{{ URL::to('admin/menu') }}" method="POST" enctype="multipart/form-data">
                @csrf()
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Menu Name :</label>
                                <input id="name" class="form-control"  type="text" name="name" required autofocus>
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="form-group">
                                <label for="url">URL :</label>
                                <input id="url" type="text" class="form-control"  name="url"  required>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="position">Position :</label>
                                <input id="position" type="number" min=1 class="form-control"  name="position"  required>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
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