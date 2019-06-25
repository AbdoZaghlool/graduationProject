
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="this's a website yoc an easily find any course where are you there.....">
        <meta name="keywords" content="courses, diploma, cetification, programming, computer science">

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/addpostAll.css')}}">

        <link rel="stylesheet" href="{{asset('css/sideNav.css')}}">

        <script src="js/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>

        <title>Add Post</title>

    <body>

        <aside class="menu-wrap">
                <div class="profileInfo">
                  <a><img src="images/anonymous-dp-for-boys.jpg"></a>
                    <h4><a href="">Tareq Rezk</a></h4>
                </div>
                <div class="editProfile">
                        <h4><i class="fas fa-user-edit"></i> <a href="">edit personal Info</a></h4>
                            <div class="clear-fix"></div>
                        <h5><a href="edite-profile-img.html">change photo</a></h5>
                        <h5><a href="edit-profile-basic.html">edit basic info</a></h5>
                        <h5><a href="edit-privacy.html">Account</a></h5>

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
                            <h5><a><i class="fas fa-sign-out-alt"></i> Log Out</a></h5>
                    </div>
            </div>
            </aside>


            <nav id="main-nav-company" style="height: 73px">
                <h1><a href="index.html">ISPI</a></h1>
                <ul style="margin-left: 10rem">
                    <li><a href="companyViewProfile.html">View Profile</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Report Problem</a></li>
                    <li><a href=""></a></li>
                </ul>
                <a href=""><i class="far fa-question-circle"></i> Reply Recieved Questions</a>
            </nav>

<section class="edite-personal-info-wrapper" id="addNewPost"style="padding:0; margin:30px">
    <h1 >Adding Post
    </h1>


    <div class="container">

            <form>
                <div class="form-row">
                    <div class="col text-center main-website-checking">

                        <div class="form-check d-inline-block m-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" onclick="checkingMainCategory(0)" checked>
                            <label class="form-check-label" for="exampleRadios1" style="margin: 0;color:#333">
                             Course
                            </label>
                          </div>
                          <div class="form-check d-inline-block m-3">
                              <input class="form-check-input m" type="radio" name="exampleRadios" id="diplomaChecked" value="option1" onclick="checkingMainCategory(1)">
                              <label class="form-check-label" for="diplomaChecked"style="margin: 0;color:#333">
                                Diploma
                              </label>
                            </div>
                            <div class="form-check d-inline-block m-3">
                                <input class="form-check-input n" type="radio" name="exampleRadios" id="certificationChecked" value="option1" onclick="checkingMainCategory(2)">
                                <label class="form-check-label" for="certificationChecked"style="margin: 0;color:#333">
                                  Certification
                                </label>
                              </div>
                </div>
                    </div>
            </form>




                  <form id="course-form">

                      <select class="form-control" name="category">
                        <option>Programming</option>
                        <option>Network</option>
                        <option>Control</option>
                        <option>Embeded Systems</option>
                        <option>Data Base</option>
                        <option>Business Management</option>
                        <option>Accounting</option>
                        <option>Language</option>
                      </select>
                      <br>
                  <label for="inputCity">Subject Learning</label>
                      <input class="form-control" type="text" placeholder="subject like: ccna or java or php">
                <br>
                    <div class="form-group">

                        <label for="validationTextarea">Course Description</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="add course content" required></textarea>
                        <small id="emailHelp" class="form-text text-muted">Please enter a course description in the textarea.
                          </small>




                          <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                          </div>


                        <label for="inputCity">Duration of this course</label>
                        <input class="form-control" type="text" placeholder="Duration as : 3 months, 200 hours">


                        <label for="start">Start date:</label>
                        <input type="date" class="form-control checkLang" id="start" name="trip-start"
                        value="2018-07-22"
                        min="2018-01-01" max="2019-12-31">

                          <label for="inputCity">Trainer Name</label>
                          <input class="form-control" type="text" placeholder="Trainer Name">

                          <label for="inputCity">Price of this course</label>
                          <input class="form-control" type="number" placeholder="Price">

                    <button type="submit" class="btn btn-primary mt-4">Post and publish</button>



                  </form>





               <form  id="diploma-form">

                  <select class="form-control">
                    <option>Programming</option>
                    <option>Web Development</option>
                    <option>Network</option>
                    <option>Control</option>
                    <option>Embeded Systems</option>
                    <option>Data Base</option>
                    <option>Business Management</option>
                    <option>Accounting</option>
                    <option>Language</option>
                    <option>IOS</option>
                    <option>Android</option>
                  </select>
                  <br>
                  <label for="inputCity">Subject Learning</label>
                      <input class="form-control" type="text" placeholder="subject like: ccna or java or php">
                <br>

                <div class="form-group">

                    <label for="validationTextarea">diploma Description</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="add diploma content" required></textarea>
                    <small id="emailHelp" class="form-text text-muted">Please enter a diploma description in the textarea.
                      </small>

                      <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>



                        <label for="inputCity">Duration of this Diploma</label>
                        <input class="form-control" type="text" placeholder="Duration as : 3 months, 200 hours">


                    <label for="start">Start date:</label>
                    <input type="date" class="form-control checkLang" id="start" name="trip-start"
                    value="2018-07-22"
                    min="2018-01-01" max="2019-12-31">

                      <label for="inputCity">Trainer Name</label>
                      <input class="form-control" type="text" placeholder="Trainer Name">


                      <label for="inputCity">Price of this course</label>
                      <input class="form-control" type="number" placeholder="Price">

                <button type="submit" class="btn btn-primary mt-4">Post and publish</button>


           </form>






           <form id="certification-form">

              <select class="form-control">
                <option>Programming</option>
                <option>Network</option>
                <option>Control</option>
                <option>Embeded Systems</option>
                <option>Data Base</option>
                <option>Business Management</option>
                <option>Accounting</option>
                <option>Language</option>

              </select>
              <br>
                  <label for="inputCity">Subject Learning</label>
                      <input class="form-control" type="text" placeholder="subject Exam like: ccna or CMS or Sql">
                <br>
            <div class="form-group">

                <label for="validationTextarea">cetification Description</label>
                <textarea class="form-control" id="validationTextarea" placeholder="add cetification content" required></textarea>
                <small id="emailHelp" class="form-text text-muted">Please enter a cetification description in the textarea.
                  </small>




                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>

                    <label for="inputCity">Duration of this exam</label>
                    <input class="form-control" type="text" placeholder="Like : 3 Hours">

                <label for="start">Start date Availability:</label>
                <input type="date" class="form-control checkLang" id="start" name="trip-start"
                value="2018-07-22"
                min="2018-01-01" max="2019-12-31">

                  <label for="inputCity">Start date Availability:</label>
                  <input type="date" class="form-control checkLang" id="start" name="trip-end"
                value="2018-07-22"
                min="2018-01-01" max="2019-12-31">

                <label for="inputCity">The validity of the certificate</label>
                  <input class="form-control" type="number" placeholder="validity Duration">

                  <label for="inputCity">Price of this Exam</label>
                  <input class="form-control" type="number" placeholder="Price">

            <button type="submit" class="btn btn-primary mt-4">Post and publish</button>

            </form>




      </div>
</section>

<div class="clear-fix"></div>


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
                        <input type="text">
                </div>
         </div>
         <div class="copyright">
                <h6>copyright@ 2019 SEC.IN</h6>
                <h6>Terms Policy and Cookies Policy</h6>
         </div>
</footer>

<section id="#mainForm" class="main-form">
        <div class=""></div>

</section>

<script>
var courseForm = document.getElementById('course-form');
var diplomaForm = document.getElementById('diploma-form');
var certificationForm = document.getElementById('certification-form');


diplomaForm.style.display='none';
certificationForm.style.display='none';


function checkingMainCategory(x){
if(x==0){
    courseForm.style.display='block';
    diplomaForm.style.display='none';
    certificationForm.style.display='none';

}
else if(x==1){
courseForm.style.display='none';
diplomaForm.style.display='block';
certificationForm.style.display='none';

}
else if(x==2){
courseForm.style.display='none';
diplomaForm.style.display='none';
certificationForm.style.display='block';
}

};

</script>

<script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>



    </body>
</html>
