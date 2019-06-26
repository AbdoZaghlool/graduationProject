<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="this's a website yoc an easily find any course where are you there.....">
        <meta name="keywords" content="courses, diploma, cetification, programming, computer science">

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/register.css')}}">
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
        <link rel="stylesheet" href="{{asset('css/addPostAll.css')}}">
        <link rel="stylesheet" href="{{asset('css/sideNav.css')}}">
        <link rel="stylesheet" href="css/user-style.css">

        <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/edite-profile-img.css')}}">
        <link rel="stylesheet" href="{{asset('css/edit-privacy.css')}}">
        <link rel="stylesheet" href="{{asset('css/edit-profile-basic.css')}}">



        <script src="js/all.min.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>

    <title>intelligent search in privte institute</title>
    </head>

<body>

    @if (Auth::user())

        @include('inc.nav')

        <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        @include('inc.messages')
                    </div>
                </div>
            </div>
        @yield('content')

        @include('inc.footer')

        @include('inc.snav')

     @else

        @include('inc.nav')

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @include('inc.messages')
                </div>
            </div>
        </div>
        @yield('content')

        @include('inc.footer')

     @endif

    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/script-index.js"></script>


    <script>
            var signUpStudentButton = document.getElementById('signUpUser');
              var signUpCenterButton = document.getElementById('signUpCenter');
              var container = document.getElementById('container');

              signUpStudentButton.addEventListener('click', () => {
                  container.classList.add("right-panel-active");
              });

              signUpCenterButton.addEventListener('click', () => {
                  container.classList.remove("right-panel-active");
              });
</script>
<script>
            var signInStudentButton = document.getElementById('signInUser');
              var signInCenterButton = document.getElementById('signInCenter');
              var container = document.getElementById('container-login');

              signInStudentButton.addEventListener('click', () => {
                  container.classList.add("right-panel-active");
              });

              sigInpCenterButton.addEventListener('click', () => {
                  container.classList.remove("right-panel-active");
              });
          </script>


        </body>
    </html>
