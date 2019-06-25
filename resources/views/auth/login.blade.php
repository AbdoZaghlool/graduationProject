@extends('layouts.app3')

@section('content')


@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>
	    		{{ $error}}
			</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                  <!-- aaaaaaaaaa-->
                      
                <div class="container-signin" id="container-login">
                <div class="form-container sign-in-user-container">

                   <form method="POST" action="{{ route('login') }}">
                        @csrf 

                        <h1 style=" text-shadow: 0 0 10px rgb(22, 48, 58);color: #fff"> User Login</h1>
                        <!-- <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>   -->
                        <span>or use your email for Login</span>
                        
                        <input type="email" placeholder="Email" class=" @error('email') is-invalid @enderror" name="email" />
                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <input type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <br>
                         <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    
                </div>
                <div class="form-container sign-in-org-container">
                    <form action="/ispi/public/institute/login" method="GET">
                         <h1 style=" text-shadow: 0 0 10px rgb(22, 48, 58);color: #fff
                        ">Training-Center Login</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                   <!--    -->
                        <input type="email" placeholder="Email" name="email" />
                        <input type="password" placeholder="Password" name='password' />
                    <br>
                    
                        <button><a href="/ispi/public/centers"></a>Sign In</button>  
                    </form>

                    <!--    -->

                    
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Logging In as a Training Center</h1>
                            <p>Enter your personal details and start Advertise Journey</p>
                            <br>
                            <button class="ghost" id="signInCenter">Center Logging In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h2>User Signinig In</h2>
                            
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signInUser">User Login</button>
                        </div>

                    </div>
                </div>
            </div>




                  <!--  <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
                    </form>  -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
