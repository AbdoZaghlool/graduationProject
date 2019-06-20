@extends('layouts.app')

@section('content')

    @if (count($diplomas)>0)

    @foreach ($diplomas as $diploma)

    <div class="posts-wrapper">
        <div class="empty"></div>
            <div class="post-wrap">
                <div class="user-info">
                    <a href="#"><img src="images/anonymous-dp-for-boys.jpg">user Name</a>
                </div>
                <div class="post">
                    <div class="post-content">
                        <div>
                        <h4><span class="strong">diploma name: </span></h4>{{$diploma->diploma->d_name}}
                            <br>
                            <h4><span class="strong">center name: </span></h4>{{$diploma->institute_name}}
                            <br>
                            <h4><span class="strong">trainer : </span></h4>{{$diploma->trainer}} 
                            <br>
                            <h4><span class="strong">diploma description: </span></h4>{{$diploma->diploma->d_desc}}
                            <br>
                            <h4><span class="strong">duration: </span></h4>{{$diploma->duration}} hours
                            <br>
                            <h4><span class="strong">price : </span></h4>{{$diploma->d_sc_sDate}} 
                            <br>
                            <h4><span class="strong">start date : </span></h4>{{$diploma->d_sc_price}} L.E

                        </div>
                    </div>
                </div>
            </div>
            <div class="course-description">
                <h3><i class="far fa-clock"></i> 16 oct 2019</h3>
                <h3><i class="far fa-clipboard"></i> intermediatee</h3>
                <h3><i class="fas fa-map-marker-alt"></i> 22 salah salem,<br> Egypt</h3>
                <h3><i class="fas fa-user-friends"></i> 30</h3>

                <a href="" class="joining">Apply Course</a>
            </div>

        </div>


    </div>

    @endforeach

    @else
    <p>No Posts Found :(</p>
    @endif

    <button class="joinFree"><a href="/ispi/public/signup">Join For Free</a></button>

@endsection
