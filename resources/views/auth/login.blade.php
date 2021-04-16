<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:400,700%7CKarla:400,700%7CPoppins:400,500,600,700%7CMontserrat:400" rel="stylesheet">
    <link href="{{asset('assets/login/css-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/login/css-fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/login/css-core.css')}}" rel="stylesheet">
    <link href="{{asset('assets/login/css-classy.css')}}" rel="stylesheet">
    <link href="{{asset('assets/login/css-responsive.css')}}" rel="stylesheet">
    <title>Website Management</title>
    <script src="{{asset('assets/login/js-scripts.min.js')}}"></script>
</head>

<body class="wdes-page-Login" data-phone-cc-input="1">
<section id="main-body">
    <div class="container">
    <div class="row wdes-flex-mob">
    
    <div class="col-xs-12 main-content">
    <div class="wdes-wrap-login" style="margin-top:120px;">
   
    <div class="logincontainer">
    <div class="header-lined">
    <h1>ADMIN LOGIN</h1>
     </div>
    <div class="providerLinkingFeedback"></div>
    <div class="row">
    <div class="col-sm-12">
        <form method="POST" action="{{ route('login') }}" class="login-form" role="alert">
          @csrf
          <div class="form-group">
             <label for="inputEmail">Email Address</label>
                <input type="text" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control" id="inputEmail>
                @error('email')
                    <span style="display:block;font-size:8px;color:#FF0000;" class="invalid-feedback" role="alert">
                        <strong style="color:red;">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
           <label for="inputPassword">Password </label>
              <input type="password" placeholder="Password" name="password" required autocomplete="current-password" class="form-control" id="inputPassword">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

<input id="login" type="submit" class="btn btn-primary" value="Login">

        </form>
    </div>

  <script>
    $('strong:contains("Dev")').closest('div').css('display', 'none');
  </script>
  
</body>

</html>