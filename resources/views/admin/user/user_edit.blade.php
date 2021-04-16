@extends('admin.layout.master')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-12">
      <div class="main_content_area">
        <div class="main_content_header">
          <h4><i class="fa fa-user"></i> User Edit</h4>
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
              <form action="{{ URL::to('user/update') }}" method="POST">
                @csrf()
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <label for="username">User Name :</label>
                            <input id="username" class="form-control" value="{{$editUser['name']}}" type="text" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="user_id">Email Or Phone :</label>
                            <input id="user_id" type="text" class="form-control" value="{{$editUser['email']}}" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Password :</label>
                            <input id="password" type="password" value="{{$editUser['pass_show']}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label for="cust_name">Confirm Password :</label>
                            <input id="password-confirm" value="{{$editUser['pass_show']}}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <input type="hidden" name="id" value="{{$editUser['id']}}">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                        
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

@endsection