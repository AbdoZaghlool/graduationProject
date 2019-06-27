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

                   <form method="POST" action="{{ url('login') }}">
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
                    </form>
                </div>
                <div class="form-container sign-in-org-container">
                    <form action="{{ ('/institute/login') }}" method="post">
                    @csrf
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
                    
                        <button type="submit" >Sign In</button>  
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




                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
