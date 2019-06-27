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
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
          <!--aaaaaaaaaaaaaaaaa -->

                   <div class="container-signUp" id="container">
                <div class="form-container sign-up-user-container">

                     <form method="POST" action="{{ url('/register') }}">
                        @csrf
                        <h1 style=" text-shadow: 0 0 10px rgb(22, 48, 58);color: #fff
                        ">Create User Account</h1>

                        <span>or use your email for registration</span>
                        <div style="width: 100%;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;">
                        <input type="text" placeholder="User Name" name='name' class=" @error('name') is-invalid @enderror" style="margin: 8px 8px 8px 0px"/>



                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    </div>
                        <input type="email" name='email' placeholder="Email" class="@error('email') is-invalid @enderror" />
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <input type="password" name='password' placeholder="Password" class="@error('password') is-invalid @enderror" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <form class="form-inline">
                            <div style="width: 100%;
                            display: flex;
                            flex-direction: row;
                            justify-content: space-between;
                            align-items: center">


                                <input type="text" placeholder="city" style="margin: 8px 0px 8px 8px"/>
                            </div>
                            <br>
                            <label>Birh Day</label>
                             <input type="date" placeholder="Birh Day" style="margin: 8px 0px 8px 8px"/>
                             <br><br>
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                    </form>
                </div>
                <div class="form-container sign-up-org-container">
                    <form action="{{ url('institute/register') }}" method='POST'>
                    @csrf
                        <h1 style=" text-shadow: 0 0 10px rgb(22, 48, 58);color: #fff
                        ">Create Training-Center Account</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                    <div style="width: 100%;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;">
                        <input type="text" placeholder="User Name" name='name' style="margin: 8px 8px 8px 0px"/>
                    </div>
                       <input type="email" placeholder="Email" name='email'  />
                        <input type="password" placeholder="Password"  name='password' />
                       
                        <input type="number" placeholder="Phone Number" name='phone' />


                        <br>
                        <button type="submit"  >Sign Up</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Creat Account For Training Center</h1>
                            <p>Enter your personal details and start Advertise Journey</p>
                            <br>
                            <button class="ghost" id="signUpCenter">Center Registeration</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h2>User Registeration</h2>

                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signUpUser">User Registeration</button>
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
