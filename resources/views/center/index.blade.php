@extends('layouts.app2')

@section('content')





<header id="search-cover">
        <h1 style="color :dimgrey; margin:5px;">
                <span style="font-size:1.3rem;color:teal; margin:5px;"> Advertise Your Courses Easily,</span><br> With Our New ETC
        </h1>
        <div class="adding-post" style="text-transform: uppercase;color:#333; margin-top:15px;">
                <ul class="post-list">
                        <li><a href="/ispi/public/course/create" target="_blank">Add Course</a></li>
                        <li><a href="/ispi/public/diploma/create" target="_blank">Add Diploma</a></li>
                        <li><a href="/ispi/public/certification/create" target="_blank">Add Certification</a></li>
                </ul>
        </div>


</header>


<section class="main-content-wrapper">

    <div class="posts-wrapper">
            <div class="empty"></div>
            <div class="post-wrap">
                <div class="user-info">
                        <a href="#"><img src="storage/uploads/centerDefualt.png"></a>
                </div>
                <div class="post">
                        <div class="post-content" style="text-align: right">
                            this course will teach you to create a single page application

                        </div>
                </div>
            </div>
            <div class="course-description">
                    <h3><i class="fas fa-code"></i> Programming</h3>
                    <h3><i class="far fa-clock"></i> 16 oct 2019</h3>
                    <h3><i class="fas fa-map-marker-alt"></i> 22 salah salem, Egypt</h3>
                    <h3><i class="far fa-clipboard"></i> Duration: 3months, 200 hours</h3>
                    <h3><i class="fas fa-chalkboard-teacher"></i> Trainer: Trainer Name</h3>
                    <h3><i class="fas fa-user-friends"></i> Price: 3000</h3>
                   <div>
                       <form method="patch">
                       <button type="submit" class="btn btn-success" style="margin:0 1rem"><a href="/ispi/public/course/{{}}/edit">Edit</a></button>
                </form>
                <form method="delete">
                    <button type="submit" class="btn btn-danger"><a href="/ispi/public/course/delete">Delete</a></button>
                        </form>
                    </div>

            </div>
    </div>

     </section>



@endsection
