@extends('layouts.app')

@section('content')


<section class="edite-personal-info-wrapper" id="addNewPost"style="padding:0; margin:30px">
        <h1>ADD DIPLOMA</h1>
        <div class="container">
            <form action="/ispi/public/diploma" method="POST">
                <label style="text-transform: uppercase">choose Categoty of this Diploma</label>
                <select class="form-control">
                        <option>Programming</option> <option>Networ</option> <option>Control</option> <option>Embeded Systems</option>
                        <option>Data Base</option> <option>Business Management</option> <option>Accounting</option> <option>Language</option>
                </select>
                <br>
                <label for="inputCity">Courses Learning</label>
                <input class="form-control" type="text" placeholder="subject like: ccna or java or php">
                <br>
                 <label for="validationTextarea">Diploma Description</label>
                <textarea class="form-control" id="validationTextarea" placeholder="add course content" required></textarea>
                <small id="emailHelp" class="form-text text-muted">Please enter a Diploma description in the textarea.</small>
                <br/>
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                <br/>
                <label for="inputCity">Duration of this Diploma</label>
                <input class="form-control" type="text" placeholder="Duration as : 3 months, 200 hours">
                <br />
                <label for="start">Start date:</label>
                <input type="date" class="form-control checkLang" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2019-12-31">
                <br/>
                <label for="inputCity">Trainers Name</label>
                <input class="form-control" type="text" placeholder="Trainer Name">
                <br/>
                <label for="inputCity">Price of this Diploma</label>
                <input class="form-control" type="number" placeholder="Price">
                <br>
                <button type="submit" class="btn btn-primary mt-4">Post and publish</button>

            </form>
        </div>
    </section>





@endsection
