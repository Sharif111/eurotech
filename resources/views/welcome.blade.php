
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('/assets/style.css')}}" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
          @csrf
            <h2 class="title">Sign in</h2>
            @error('email')
                <span style="display:block;font-size:12px;color:red" class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" placeholder="Username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
              
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password" />
            </div>
            <input red type="submit" value="LOGIN" class="btn solid"/>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
          @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" placeholder="Password" name="password" required autocomplete="new-password"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"/>
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="{{asset('/assets/img/log.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{asset('/assets/img/register.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('/assets/apps.js')}}"></script>
  </body>
</html>
