@extends('layouts.app')

@section('content')


<section class="edite-personal-info-wrapper" id="addNewPost"style="padding:0; margin:30px">
        <h1>ADD CERTIFICATION</h1>
        <div class="container">
            <form action="/ispi/public/certification" method="POST">
                    <label style="text-transform: uppercase">choose Categoty of this Diploma</label>
                    <select class="form-control">
                        <option>Programming</option> <option>Networ</option> <option>Control</option> <option>Embeded Systems</option>
                        <option>Data Base</option> <option>Business Management</option> <option>Accounting</option> <option>Language</option>
                    </select>
                    <br>
                    <label for="inputCity">Duration of this exam</label>
                    <input class="form-control" type="text" placeholder="Like : 3 Hours">
                    <br>
                    <label for="start">Start date Availability:</label>
                    <input type="date" class="form-control checkLang" id="start" name="trip-start"
                    value="2019-05-22"
                    min="2018-01-01" max="2020-12-31">

                    <label for="inputCity">End date Availability:</label>
                      <input type="date" class="form-control checkLang" id="start" name="trip-end"
                    value="2018-07-22"
                    min="2018-01-01" max="2020-12-31">
                    <br>
                    <label for="inputCity">Duration validity of the certificate</label>
                    <input class="form-control" type="number" placeholder="validity Duration, like: ccna is 3 years">
                    <br>
                    <label for="inputCity">Price of this Exam</label>
                    <input class="form-control" type="number" placeholder="Price">
                    <br>
                <button type="submit" class="btn btn-primary mt-4">Post and publish</button>

                </form>

              </div>
        </div>
    </section>




@endsection
