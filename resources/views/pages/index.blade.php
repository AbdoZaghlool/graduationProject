<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="this's a website yoc an easily find any course where are you there.....">
        <meta name="keywords" content="courses, diploma, cetification, programming, computer science">

        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/sideNav.css">
        
        <script src="js/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
        <script src="js/typewriter.js"></script>

    <title>Our Website</title>

    </head>

    <body style="font-family: 'Roboto', sans-serif !important;">

<header id="header-home">
            <div class="container">
                <nav id="main-nav" style="z-index: 99 !important;">

           @if (Auth::guest())


            <div style="margin-top:1.1rem;z-index:99;" class="login-reg">
                <a href="/ispi/public/login"
                style="
                background:teal; padding:.5rem 1.2rem;margin: .5rem;
                text-decoration:none;border:none;outline:none;
                border-radius:10px;
                "
                >Login</a>
                <a href="/ispi/public/register"
                style="
                background:teal; padding:.5rem 1.2rem;margin:.5rem;
                text-decoration:none;border:none;outline:none;
                border-radius:10px;
                "
                >Register</a>


                </div>


            @else




            <h1>hello {{Auth::user()->name}}</h1>
            @endif


                <ul>
                    <li style="z-index: 99 !important;"><a href="/ispi/public/certification">certification</a></li>
                    <li style="z-index: 99 !important;"><a href="/ispi/public/diploma">diplama</a></li>
                    <li style="z-index: 99 !important;"><a href="/ispi/public/course">courses</a></li>
                    <li style="z-index: 99 !important;"><a href="/ispi/public/">home</a></li>
                </ul>
                </nav>
                <div class="header-content" style="z-index:99;opacity: 1;">
                <h1 style="font-size:2.6rem ;z-index:99 Important;color:#fff">
                    Find Your
                    <span
                    class="txt-type"
                    style="z-index:99"
                    data-wait="3000"
                    data-words='["Courses", "Diplomas","Certifications"]'
                    ></span>
                </h1>
                <p class="lead" style="z-index: 99 !important;">
                    You can Easily Advertise Also
                </p>
                <a href="work.html" class="btn-light"
                style="z-index: 99 !important;"
                >View My Work</a>
                </div>
            </div>
            </header>




            <section id="work-a" class="text-center py-3">
                    <div class="container">
                        <h2 class="section-title" style="color:darkslateblue">Our Categorys</h2>
                        <div class="bottom-line"></div>
                        <p class="lead" style="color:darkslateblue">
                        Check out some of our categorys
                        </p>
                        <div class="items">
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item1.png" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">DataBase</p>
                                <h3 class="item-text-title">SQL,Oracle</h3>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item6.png" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Web Development</p>
                                <h2 class="item-text-title">Js & Php</h2>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item7.png" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Photography & Design</p>
                                <h2 class="item-text-title">Vanishing</h2>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item7.png" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">WorkShops</p>
                                <h2 class="item-text-title">Web & Control</h2>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item1.png" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Mobile  Design</p>
                                <h2 class="item-text-title">Android IOS</h2>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item7.jpg" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Web Development</p>
                                <h2 class="item-text-title">Js Php</h2>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item4.png" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Photography</p>
                                <h2 class="item-text-title">Dock Ponder</h2>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item6.png" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Web Applications</p>
                                <h2 class="item-text-title">Restaurant App</h2>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                            <img src="images/item1.png" alt="" />
                            </div>
                            <div class="item-text">
                            <div class="item-text-wrap">
                                <p class="item-text-category">Social Network Concept</p>
                                <h2 class="item-text-title">FriendFeed</h2>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </section>

                    <section style="height:20vh">

<h1 style="text-align:center;color:rgb(9, 65, 65); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;margin-bottom:2rem">
Join Us Now For Free

</h1>
                    <div style="margin-top:1.1rem;z-index:99;text-align: center" class="login-reg">
                        <a href="/ispi/public/login"
                        style="
                        background:teal; padding:.7rem 1.5rem;margin: .5rem;
                        text-decoration:none;border:none;outline:none;
                        border-radius:10px;
                        "
                        >Login</a>
                        <a href="/ispi/public/register"
                        style="
                        background:teal; padding:.7rem 1.5rem;margin:.5rem;
                        text-decoration:none;border:none;outline:none;
                        border-radius:10px;
                        "
                        >Register</a>
                    </div>


                    </section>








<section id="indicators" style="direction:ltr">
                <div class="overlay-background">
                <div class="container text-center">
                <div class="row"
                style="width: 100vw;
                padding: 0 104px;"
                >
                <div class="col-lg-4 col-xs-12">
                <div class="to-table center-block">
                <div class="to-row">
                <span class="to-cell"><i class="fas fa-users" style="font-size:3rem"></i></span>
                <div class="to-cell">
                <p class="number">37571</p>
                <p class="text">طالب</p>
                </div>
                </div>
                </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                <div class="to-table center-block">
                <div class="to-row">
                <span class="to-cell"> <i class="fas fa-chalkboard-teacher" style="font-size:3rem"></i></span>
                <div class="to-cell">
                <p class="number">343</p>
                <p class="text"> كورس</p>
                </div>
                </div>
                </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                <div class="to-table center-block">
                <div class="to-row">
                <span class="to-cell"><i class="fas fa-award" style="font-size:3rem"></i></span>
                <div class="to-cell">
                <p class="number">5649</p>
                <p class="text">شهادة</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </section>





<footer id="" class="" style="width:100%;background:#444;text-shadow:0 !important">
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
                  <input type="text">
          </div>
   </div>
   <div class="copyright">
          <h6>copyright@ 2019 SEC.IN</h6>
          <h6>Terms Policy and Cookies Policy</h6>
   </div>
</footer>




        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        </body>
        </html>
