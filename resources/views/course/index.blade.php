@extends('layouts.app')

@section('content')


<section class="main-content-wrapper">
    @if (count($var)>0)
        @foreach ($var as $course)
        <!-- check if id of auth center equal the id of course                           pivot_institute_id            -->


                <div class="posts-wrapper">
                        <div class="empty"></div>
                        <div class="post-wrap">
                            <div class="user-info">
                                    <a href=""><img src="storage/uploads/centerDefualt.png">Route</a>
                            </div>
                            <div class="post">
                                    <div class="post-content scroll:none">

                                    <div><h4 class="pull-left">Course Name: {{$course->course_name}}</h4>
                                    <h4 class="pull-left">Course Description: {{$course->course_desc}}</h4>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="course-description">
                                        <h3 class="first"><i class="fas fa-code"></i> Programming</h3>
                                        <h3><i class="far fa-clock"></i>{{$course->pivot->co_sc_sDate}}</h3>
                                        <h3><i class="fas fa-map-marker-alt"></i>{{$course->pivot->institute_name}}</h3>
                                        <h3><i class="far fa-clipboard"></i> Duration:{{$course->pivot->duration}}  hours</h3>
                                        <h3><i class="fas fa-chalkboard-teacher"></i> Trainer:{{$course->pivot->trainer}}</h3>
                                        <h3><i class="fas fa-user-friends"></i> Price: {{$course->pivot->co_sc_price}} LE</h3>
                                        <a href="" class="applying">Apply</a>
                                        <a href="" style="color: #1153b8 !important;
                                        text-decoration: underline !important;
                                        margin-left: 1rem;">ask question <i class="fas fa-question"></i></a>
                                </div>
                </div>



        @endforeach

    @endif
   <!-- <div class="container"><div class="row"><div class="col-md-8"><div class="alert-danger">there is no courses yet!</div>
</div></div></div>-->
</section>


@endsection
