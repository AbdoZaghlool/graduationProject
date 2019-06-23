@extends('layouts.app')

@section('content')

    @if (count($courses)>0)

    @foreach ($courses as $course)

    <div class="posts-wrapper">
        <div class="empty"></div>
            <div class="post-wrap">
                <div class="user-info">
                    <a href="#"><img src="images/anonymous-dp-for-boys.jpg">user Name</a>
                </div>
                <div class="post">
                    <div class="post-content">
                        <div>
                            <h4><span class="strong">course name: </span></h4>{{$course->course->course_name}}
                            <br>
                            <h4><span class="strong">center name: </span></h4>{{$course->institute_name}}
                            <br>
                            <h4><span class="strong">trainer : </span></h4>{{$course->trainer}} 
                            <br>
                            <h4><span class="strong">course description: </span></h4>{{$course->course->course_desc}}
                            <br>
                            <h4><span class="strong">duration: </span></h4>{{$course->duration}} hours
 
                            <br>
                            <h4><span class="strong">start date : </span></h4>{{$course->co_sc_price}} L.E
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-description">
                <h3><i class="far fa-clock"></i> {{$course->co_sc_sDate}} </h3>
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

    

@endsection
