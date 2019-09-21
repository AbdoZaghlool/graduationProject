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
        <link rel="stylesheet" href="{{asset('css/company-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/companyViewProfile-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/sideNav.css')}}">
        <link rel="stylesheet" href="{{asset('css/addPostAll.css')}}">


        <script src="js/all.min.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>

    <title>intelligent search in privte institute</title>
    </head>

    <body>


        @include('inc.nav2')

        @yield('content')

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @include('inc.messages')
                </div>
            </div>
        </div>


        @include('inc.footer')


        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/script-index.js"></script>


    </body>
</html>
