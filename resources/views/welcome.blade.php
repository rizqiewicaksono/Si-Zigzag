<!DOCTYPE html>
<html>
    <head>
        <title> Login page </title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
         <nav>
            <label class="logo">Si-Zigzak</label>
            <ul>
                <li><a class="active" href="#">Login</a></li>
            </ul>
        </nav>
           <div class="login-box">
           <!--  <img src="avatar.png" class="avatar"> -->
            <h1>Selamat Datang !</h1> 
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <p>Username</p>
                <div class="col-md-6">
                         <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                <p>Password</p>
                <div class="col-md-6">
                               <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              
                <input button type="submit" class="btn btn-primary">
                                    {{ __('') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
               
            </form>
        </div>
        
       
    </body>
</html>