@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div style="color: cornflowerblue">
                        <header id="search-cover">
                            <div class="overlay-user"></div>
                        <h1>
                            find your courses easily,<br>
                            with our new social educational<br>
                            community
                        </h1>

                        <div class="main-search">
                            <div class="search-bar">
                                    <i class="fas fa-search"></i>
                            <input type="text" placeholder="Web, Network, control....etc" id="search-m" class="checkLang">
                        </div>
                                <ul>

                                    <li class="active">courses</li>
                                    <li>diplomas</li>
                                    <li>certifications</li>

                                </ul>
                            </div>
                    </div>
                    </header>


                        <p style="color: cornflowerblue">Welcome  {{$user->name}} here is your home page would you like to update a nice photo to your profile?
                            <a href="/ispi/public/changePhoto">Change Photo</a>
                        or you maybe need update your information
                        <a href="/ispi/public/changeInfo"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
