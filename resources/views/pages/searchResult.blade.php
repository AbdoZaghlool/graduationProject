@extends('layouts.app')

@section('content')




<header id="searchResult-cover">
    <h3 style="color: #333;text-align:center">
            You Searched About :
        <span style="font-size:1.3rem;color:teal"> {{$keyword}}
    </h3>
</header>

@if (count($courses)>0))

@foreach ($courses as $course)

<section class="main-content-wrapper">
    <div class="posts-wrapper">
    <div class="empty"></div>
        <div class="post-wrap">
            <div class="user-info">
                <a href="#"><img src="storage/uploads/centerDefualt.png">Institute Name</a>
            </div>
            <div class="post">
                <div class="post-content">
                <p>course-description{{$course}}</p>
                </div>
            </div>
        </div>

        <div class="course-description">
            <h3 class="first"><i class="fas fa-code"></i> Programming</h3>
            <h3><i class="far fa-clock"></i> 16 oct 2019</h3>
            <h3><i class="fas fa-map-marker-alt"></i> 22 salah salem, Egypt</h3>
            <h3><i class="far fa-clipboard"></i> Duration: 3months, 200 hours</h3>
            <h3><i class="fas fa-chalkboard-teacher"></i> Trainer: Adel Shakl</h3>
            <h3><i class="fas fa-user-friends"></i> Price: 3000</h3>
            <a href="" class="applying">Apply</a>
            <a href="" style="color: #1153b8 !important;
            text-decoration: underline !important;
            margin-left: 1rem;">ask question <i class="fas fa-question"></i></a>
        </div>
    </div>
@endforeach
@endif


</section>

@endsection
