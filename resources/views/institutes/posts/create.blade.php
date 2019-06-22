@extends('layouts.app')

@section("content")
    <section class="edite-personal-info-wrapper" id="addNewPost"style="padding:0; margin:30px">
        <h1 >Adding Post
        </h1>


        <div class="container">

            <form>
                <div class="form-row">
                    <div class="col text-center main-website-checking">

                        <div class="form-check d-inline-block m-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" onclick="checkingMainCategory(0)" checked>
                            <label class="form-check-label" for="exampleRadios1" style="margin: 0">
                                Course
                            </label>
                        </div>
                        <div class="form-check d-inline-block m-3">
                            <input class="form-check-input m" type="radio" name="exampleRadios" id="diplomaChecked" value="option1" onclick="checkingMainCategory(1)">
                            <label class="form-check-label" for="diplomaChecked"style="margin: 0">
                                Diploma
                            </label>
                        </div>
                        <div class="form-check d-inline-block m-3">
                            <input class="form-check-input n" type="radio" name="exampleRadios" id="certificationChecked" value="option1" onclick="checkingMainCategory(2)">
                            <label class="form-check-label" for="certificationChecked"style="margin: 0">
                                Certification
                            </label>
                        </div>
                    </div>
                </div>
            </form>
            <div id="course-form">

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
                <input class="form-control" id="inputCity" type="text" placeholder="subject like: ccna or java or php">
                </br>
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

                </div>

            </div>



            <div id="diploma-form">

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
                </br>

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

                </div>

            </div>





            <div id="cetification-form">

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
                </br>
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

            </div>


        </div>
    </section>
@endsection
