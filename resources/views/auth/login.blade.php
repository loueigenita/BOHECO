{{-- @extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    
    <link rel = "stylesheet" href = "{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel = "stylesheet" href = "{{asset('resources/animate.css-main/animate.css')}}">

    <title>BOHECO I</title>
  </head>
  <body>

    <div class="form-wraps">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="logo" >
                <img src="../images/logo.png" alt="logo">
                        <a href="/"><h3>BOHECO I</h3></a>
                    </div>
                        <h3 class="text-center">WELCOME BACK</h3>
                    <div class="actual-form">

                        <div class="input-wrap"> 
                            <input type="email" id="email" class="inp-field form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label><i class="fas fa-envelope"></i> Email</label>
                        </div>

                        <div class="input-wrap">
                            <input type="password" id="password" class="inp-field form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label><i class="fas fa-lock"></i> Password</label>
                        </div>
                    </div>

                    <div class="btnlog">
                        <a href="{{ route('password.request') }}">Forgot Password?</a> 
                        <button type="submit" class="btn btn-sm btn-primary">Login</button>
                    </div>

                    <div class="bot">
                        <h6>Create Account?</h6>
                        <a href="{{ route('register')}}" class="toggle">Sign up here</a>
                    </div>
                    
                    <span class="or text-muted">&mdash; or &mdash;</span>

                <div class="social-login">
                    <div class="icons">
                    <a href="#" class="fb">
                        <span class="icon-facebook"></span>
                    </a>
                    <a href="#" class="twit">
                        <span class="icon-twitter"></span>
                    </a>
                    <a href="#" class="goog">
                        <span class="icon-google"></span>
                    </a>
                </div>     
            </div>
        </form>
    </div>
    <div class="carousel">
        <div class="con">
            <div class="container wow animate__animated animate__fadeInLeft animate__slow">
            <h3 class="text-center text-warning">MISSION</h3>
            <p><h6 class="text-light text-center">
                To deliver quality electric services consistent
            with our core values,  <br> taking
                advantage of the latest technologies of the  resources 
                <br> for member-consumer-owner-satistfaction.
            </h6></p>
            </div>
            
            <div class="container wow animate__animated animate__fadeInRight animate__slow">
            <h3 class="text-center text-warning">VISION</h3>
            <p><h6 class="text-light text-center">The premier electric power 
                provider improving the lives of every  <br> BOHOLANO.</h6></p>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src = "{{asset('resources/WOW-master/dist/wow.js')}}"></script>
  </body>
  <style>
    .con{
      margin-top:200px;
      align-items:center;
    }
    h6{
      font-size: 1.0rem;
    }
    
    body {
        margin: 0;
        font-family: var(--bs-body-font-family);
        font-size: var(--bs-body-font-size);
        font-weight: var(--bs-body-font-weight);
        line-height: var(--bs-body-line-height);
        color: var(--bs-body-color);
        text-align: var(--bs-body-text-align);
        background-color: var(--bs-body-bg);
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: transparent
    }

  
  </style>
  <script>
    const inputs = document.querySelectorAll(".inp-field");

    inputs.forEach((inp)=>{
        inp.addEventListener("focus", ()=>{
            inp.classList.add("active");
        });
        inp.addEventListener("blur", ()=>{
            if(inp.value != "") return;
            inp.classList.remove("active");
        })
    })
  </script>
</html>