@extends('layouts.app')

@section('content')

<section class="edite-personal-info-wrapper" id="addNewPost"style="padding:0; margin:30px">
        <h1>ADD COURSE</h1>
        <div class="container">
            <form action="/ispi/public/course" method="POST">
                @csrf
                <!--<label style="text-transform: uppercase">choose Categoty of this Course</label>
                <select name="category" class="form-control">
                        <option>Programming</option> <option>Networ</option> <option>Control</option> <option>Embeded Systems</option>
                        <option>Data Base</option> <option>Business Management</option> <option>Accounting</option> <option>Language</option>
                </select>
            --><br>
                <label for="inputCity">Subject Learning</label>
                <input name="name" class="form-control" type="text" placeholder="subject like: ccna or java or php">
                <br>
                 <label for="validationTextarea">Course Description</label>
                <textarea name="description" class="form-control" id="validationTextarea" placeholder="add course content" required></textarea>
                <small id="emailHelp" class="form-text text-muted">Please enter a course description in the textarea.</small>
                <br/>
                <label for="inputAddress">Address</label>
                <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                <br/>
                <label for="inputCity">Duration of this course</label>
                <input name="duration" class="form-control" type="text" placeholder="Duration as : 3 months, 200 hours">
                <br />
                <label for="start">Start date:</label>
                <input name="start-date" type="date" class="form-control checkLang" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2019-12-31">
                <br/>
                <label for="inputCity">Trainer Name</label>
                <input name="trainer" class="form-control" type="text" placeholder="Trainer Name">
                <br/>
                <label for="inputCity">Price of this course</label>
                <input name="price" class="form-control" type="number" placeholder="Price">
                <br>
                <button type="submit" class="btn btn-primary mt-4">Post and publish</button>

            </form>
        </div>
    </section>

@endsection
