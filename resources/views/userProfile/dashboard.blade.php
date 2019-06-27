
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <meta name="description" content="this's a website yoc an easily find any course where are you there.....">
                    <meta name="keywords" content="courses, diploma, cetification, programming, computer science">
                    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

                <link rel="stylesheet" href="css/all.min.css">
                <link rel="stylesheet" href="css/user-style.css">
                    <link rel="stylesheet" href="css/sideNav.css">
                <script src="js/all.min.js"></script>
                <script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>

                <title>Intelligent Search Private Inistitute</title>
                </head>
                <body>


<aside class="menu-wrap">
        <div class="profileInfo">
            <a><img src="storage/uploads/{{Auth::user()->photo}}"></a>
            <h4><a href="/ispi/public/dashboard">{{Auth::user()->name}}</a></h4>
        </div>
        <div class="editProfile">
                <h4><i class="fas fa-user-edit"></i> <a href="">edit personal Info</a></h4>
                    <div class="clear-fix"></div>
                <h5><a href="/ispi/public/changePhoto">change photo</a></h5>
                <h5><a href="/ispi/public/changeInfo">edit basic info</a></h5>
                <h5><a href="/ispi/public/changePrivacy">Account</a></h5>

        </div>
        <div class="clear-fix"></div>

        <div class="sid-nav-socialItems" style="margin-top: 3.2rem;font-size: .9rem;margin-bottom: 4rem;">
            <h4 style="font-size: .9rem;float:left;width:100%"><i class="fas fa-envelope"></i> Contact Us</h4>
            <i class="fab fa-facebook-square" style="font-size:1.2rem"></i>
            <i class="fab fa-linkedin" style="font-size:1.2rem"></i>
            <i class="fab fa-github" style="font-size:1.2rem"></i>
            <i class="fab fa-google" style="font-size:1.2rem"></i>
        </div>
        <div class="privacyInfo">
            <hr>
            <div>  <h5><a><i class="fas fa-question"></i> HELP</a></h5>
                    <h5><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Log Out</a></h5>
            </div>
    </div>
    </aside>







    <nav id="main-nav-user">

            <h1><a href="">ETC</a></h1>
            <ul>
                <li><a href="/ispi/public/">home</a></li>
                <li><a href="/ispi/public/course">courses</a></li>
                <li><a href="/ispi/public/diploma">diplama</a></li>
                <li><a href="/ispi/public/certification">certification</a></li>
            </ul>
            <a href=""><i class="far fa-question-circle"></i> Show Recieved Answers</a>


    <ul class="nav navbar-nav navbar-right">

        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">

                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>
                </ul>
            </li>
        @endif
    </ul>

</nav>


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

                    <section class="main-content-wrapper">



            <div class="posts-wrapper">
                    <div class="empty"></div>
                    <div class="post-wrap">
                        <div class="user-info">
                                <a href="#"><img src="images/anonymous-dp-for-boys.jpg">user Name</a>
                        </div>
                        <div class="post">
                                <div class="post-content">
                                <p> الكورس بتاعنا مش نظري انت هاتشتغل في على 6 مواقع تعملهم كلهم كاملين منهم موقع متجر إلكتروني وموقع أخبار كامل، ده غير أننا هانعلمك ازاي تتعامل مع العملاء وازاي تتفاوض معاهم وكمان تسوّق نفسك صح👌
                                    <br><br>
                                    طبعا انت بتفكر دلوقتي انك متعرفش أي حاجة فملهاش لازمة تحضر، أحب اقولك انك غلطان والسبب ان احنا مش عايزين حد معاه خبرة اصلا احنا هانبدا الdiploma معاكم من ال scratch يعني من الاخر مش محتاج إي معلومات احنا هانديك كل حاجة تخليك full stack developer شامل 😉

                                    <br>
                                    موقع LinkedIn اعلن ان شغلانه ال web developer تاني اكتر شغلانه مطلوبه في العالم كله😉🙂<br>

            دي فرصه كويسه جدا ليك انك تحسن حياتك سواء انت بتشتغل ومحتاج حاجه تزود بيها دخلك او تعمل career shift

            او لو لسه طالب ومش عاوز تتخرج وانت تايه ومش عارف هتعمل ايه بعد التخرج

            بيبقي في mentor لكل طالب موجود في الدبلومه مسؤل عن مستواه ومتابعته اثناء الدبلومه ويقدر الطالب يسأله او يجيله في اي وقت يفهم منه اللي هو عاوزه😍
                                </p>
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
            <div class="posts-wrapper">
                            <div class="empty"></div>
                            <div class="post-wrap">
                                <div class="user-info">
                                        <a href="#"><img src="images/anonymous-dp-for-boys.jpg">user Name</a>
                                </div>
                                <div class="post">
                                        <div class="post-content">
                                        <p> الكورس بتاعنا مش نظري انت هاتشتغل في على 6 مواقع تعملهم كلهم كاملين منهم موقع متجر إلكتروني وموقع أخبار كامل، ده غير أننا هانعلمك ازاي تتعامل مع العملاء وازاي تتفاوض معاهم وكمان تسوّق نفسك صح👌
                                            <br><br>
                                            طبعا انت بتفكر دلوقتي انك متعرفش أي حاجة فملهاش لازمة تحضر، أحب اقولك انك غلطان والسبب ان احنا مش عايزين حد معاه خبرة اصلا احنا هانبدا الdiploma معاكم من ال scratch يعني من الاخر مش محتاج إي معلومات احنا هانديك كل حاجة تخليك full stack developer شامل 😉

                                            <br>
                                            موقع LinkedIn اعلن ان شغلانه ال web developer تاني اكتر شغلانه مطلوبه في العالم كله😉🙂<br>

                    دي فرصه كويسه جدا ليك انك تحسن حياتك سواء انت بتشتغل ومحتاج حاجه تزود بيها دخلك او تعمل career shift

                    او لو لسه طالب ومش عاوز تتخرج وانت تايه ومش عارف هتعمل ايه بعد التخرج

                    بيبقي في mentor لكل طالب موجود في الدبلومه مسؤل عن مستواه ومتابعته اثناء الدبلومه ويقدر الطالب يسأله او يجيله في اي وقت يفهم منه اللي هو عاوزه😍
                                        </p>
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
                                            <a href="" style="color: #0066ff !important;
                                            text-decoration: underline !important;
                                            margin-left: 1rem;">ask question <i class="fas fa-question"></i></i></a>
                                    </div>
                    </div>
                    <div class="posts-wrapper">
                                    <div class="empty"></div>
                                    <div class="post-wrap">
                                        <div class="user-info">
                                                <a href="#"><img src="images/anonymous-dp-for-boys.jpg">user Name</a>
                                        </div>
                                        <div class="post">
                                                <div class="post-content">
                                                <p> الكورس بتاعنا مش نظري انت هاتشتغل في على 6 مواقع تعملهم كلهم كاملين منهم موقع متجر إلكتروني وموقع أخبار كامل، ده غير أننا هانعلمك ازاي تتعامل مع العملاء وازاي تتفاوض معاهم وكمان تسوّق نفسك صح👌
                                                    <br><br>
                                                    طبعا انت بتفكر دلوقتي انك متعرفش أي حاجة فملهاش لازمة تحضر، أحب اقولك انك غلطان والسبب ان احنا مش عايزين حد معاه خبرة اصلا احنا هانبدا الdiploma معاكم من ال scratch يعني من الاخر مش محتاج إي معلومات احنا هانديك كل حاجة تخليك full stack developer شامل 😉

                                                    <br>
                                                    موقع LinkedIn اعلن ان شغلانه ال web developer تاني اكتر شغلانه مطلوبه في العالم كله😉🙂<br>

                            دي فرصه كويسه جدا ليك انك تحسن حياتك سواء انت بتشتغل ومحتاج حاجه تزود بيها دخلك او تعمل career shift

                            او لو لسه طالب ومش عاوز تتخرج وانت تايه ومش عارف هتعمل ايه بعد التخرج

                            بيبقي في mentor لكل طالب موجود في الدبلومه مسؤل عن مستواه ومتابعته اثناء الدبلومه ويقدر الطالب يسأله او يجيله في اي وقت يفهم منه اللي هو عاوزه😍
                                                </p>
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
                                                    <a href="" style="color: #0066ff !important;
                                                    text-decoration: underline !important;
                                                    margin-left: 1rem;">ask question <i class="fas fa-question"></i></a>
                                            </div>
                            </div>
                            <div class="posts-wrapper">
                                            <div class="empty"></div>
                                            <div class="post-wrap">
                                                <div class="user-info">
                                                        <a href="#"><img src="images/anonymous-dp-for-boys.jpg">user Name</a>
                                                </div>
                                                <div class="post">
                                                        <div class="post-content">
                                                        <p> الكورس بتاعنا مش نظري انت هاتشتغل في على 6 مواقع تعملهم كلهم كاملين منهم موقع متجر إلكتروني وموقع أخبار كامل، ده غير أننا هانعلمك ازاي تتعامل مع العملاء وازاي تتفاوض معاهم وكمان تسوّق نفسك صح👌
                                                            <br><br>
                                                            طبعا انت بتفكر دلوقتي انك متعرفش أي حاجة فملهاش لازمة تحضر، أحب اقولك انك غلطان والسبب ان احنا مش عايزين حد معاه خبرة اصلا احنا هانبدا الdiploma معاكم من ال scratch يعني من الاخر مش محتاج إي معلومات احنا هانديك كل حاجة تخليك full stack developer شامل 😉

                                                            <br>
                                                            موقع LinkedIn اعلن ان شغلانه ال web developer تاني اكتر شغلانه مطلوبه في العالم كله😉🙂<br>

                                    دي فرصه كويسه جدا ليك انك تحسن حياتك سواء انت بتشتغل ومحتاج حاجه تزود بيها دخلك او تعمل career shift

                                    او لو لسه طالب ومش عاوز تتخرج وانت تايه ومش عارف هتعمل ايه بعد التخرج

                                    بيبقي في mentor لكل طالب موجود في الدبلومه مسؤل عن مستواه ومتابعته اثناء الدبلومه ويقدر الطالب يسأله او يجيله في اي وقت يفهم منه اللي هو عاوزه😍
                                                        </p>
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
                                                            <a href="" style="color: #0066ff !important;
                                                            text-decoration: underline !important;
                                                            margin-left: 1rem;">ask question <i class="fas fa-question"></i></a>
                                                    </div>
                                    </div>
                                    <div class="posts-wrapper">
                                                    <div class="empty"></div>
                                                    <div class="post-wrap">
                                                        <div class="user-info">
                                                                <a href="#"><img src="images/anonymous-dp-for-boys.jpg">user Name</a>
                                                        </div>
                                                        <div class="post">
                                                                <div class="post-content">
                                                                <p> الكورس بتاعنا مش نظري انت هاتشتغل في على 6 مواقع تعملهم كلهم كاملين منهم موقع متجر إلكتروني وموقع أخبار كامل، ده غير أننا هانعلمك ازاي تتعامل مع العملاء وازاي تتفاوض معاهم وكمان تسوّق نفسك صح👌
                                                                    <br><br>
                                                                    طبعا انت بتفكر دلوقتي انك متعرفش أي حاجة فملهاش لازمة تحضر، أحب اقولك انك غلطان والسبب ان احنا مش عايزين حد معاه خبرة اصلا احنا هانبدا الdiploma معاكم من ال scratch يعني من الاخر مش محتاج إي معلومات احنا هانديك كل حاجة تخليك full stack developer شامل 😉

                                                                    <br>
                                                                    موقع LinkedIn اعلن ان شغلانه ال web developer تاني اكتر شغلانه مطلوبه في العالم كله😉🙂<br>

                                            دي فرصه كويسه جدا ليك انك تحسن حياتك سواء انت بتشتغل ومحتاج حاجه تزود بيها دخلك او تعمل career shift

                                            او لو لسه طالب ومش عاوز تتخرج وانت تايه ومش عارف هتعمل ايه بعد التخرج

                                            بيبقي في mentor لكل طالب موجود في الدبلومه مسؤل عن مستواه ومتابعته اثناء الدبلومه ويقدر الطالب يسأله او يجيله في اي وقت يفهم منه اللي هو عاوزه😍
                                                                </p>
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
                                                                    <a href="" style="color: #0066ff !important;
                                                                    text-decoration: underline !important;
                                                                    margin-left: 1rem;">ask question <i class="fas fa-question"></i></a>
                                                            </div>
                                            </div>


            <footer id="" class="">
                    <div class="footer-wrap">
                            <div>
                                    <a href="">about us</a>
                                    <a href="">careers</a>
                                    <a href="">blog</a>
                            </div>
                            <div>
                                    <a href="">topics</a>
                                    <a href="">support</a>
                                    <a href="">affiliate</a>
                            </div>
                            <div>
                                    <a href="">careers</a>
                                    <a href="">blog</a>
                                    <a href="">support</a>
                            </div>
                            <div>
                                    <h4>our news mail</h4>
                                    <input type="text" class="checkLang">
                            </div>
                     </div>
                     <div class="copyright">
                            <h6>copyright@ 2019 SEC.IN</h6>
                            <h6>Terms Policy and Cookies Policy</h6>
                     </div>
            </footer>





            <script src="js/jquery.nicescroll.min.js"></script>
            <script src="js/script-index.js"></script>

                </body>
            </html>
