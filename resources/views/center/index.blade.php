@extends('layouts.app2')

@section('content')

<header id="search-cover">
        <h1>
                <span style="font-size:1.3rem;color:teal"> Advertise Your Courses Easily,</span><br> With Our New TCA
        </h1>
        <div class="adding-post" style="text-transform: uppercase;color:#333">
                <ul class="post-list">
                        <li><a href="/ispi/public/course/create">Add Course</a></li>
                        <li><a href="/ispi/public/diploma/create">Add Diploma</a></li>
                        <li><a href="/ispi/public/certification/create">Add Certification</a></li>
                </ul>
        </div>


</header>


    <section class="main-content-wrapper">


        <div class="posts-wrapper">
                <div class="empty"></div>
                <div class="post-wrap">
                    <div class="user-info">
                            <a href="/ispi/public/centerprofile"><img src="storage/uploads/centerDefualt.png">institute name</a>
                    </div>
                    <div class="post">
                            <div class="post-content" style="text-align: right">
                            <p> الكورس بتاعنا مش نظري انت هاتشتغل في على 6 مواقع تعملهم كلهم كاملين منهم موقع متجر إلكتروني وموقع أخبار كامل، ده غير أننا هانعلمك ازاي تتعامل مع العملاء وازاي تتفاوض معاهم وكمان تسوّق نفسك صح👌
                                <br><br>
                                طبعا انت بتفكر دلوقتي انك متعرفش أي حاجة فملهاش لاز
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
                        <button type="button" class="btn btn-success" style="margin:0 1rem">Edit</button>

                        <button type="button" class="btn btn-danger">Delete</button>

                        </div>

                </div>
        </div>

     </section>



@endsection
