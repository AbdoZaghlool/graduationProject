@extends('layouts.app')

@section('content')


<section class="edite-personal-info-wrapper">
    <h1>Public profile
    </h1>
    <h3>Add and edit information about yourself</h3>

    <div class="container">
        <div>
            <form>
                <div class="form-row">
                    <div class="col">
                        <label for="inputFirstName">First name</label>
                      <input type="text" class="form-control checkLang" placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="inputLastName">Last Name</label>
                      <input type="text" class="form-control checkLang" placeholder="Last name">
                    </div>
                  </div>
                  <br>
                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control checkLang" id="inputAddress" placeholder="your address : country, mohafza">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Address 2</label>
                      <input type="text" class="form-control checkLang" id="inputAddress2" placeholder="markaz, street">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="inputCity">categories</label>
                        <select class="custom-select" multiple>
                            <option selected>choose your intersts</option>
                            <option value="1">Web Development</option>
                            <option value="2">Android</option>
                            <option value="3">Ios</option>
                            <option value="4">Embedded System</option>
                            <option value="5">Control</option>
                            <option value="6">Machine Learning</option>

                        </select>
                      </div>

                    </div>

                    <div class="form-group">


                    <button type="submit" class="btn btn-primary">save changes</button>
                  </form>
                </div>

    </div>



</section>


@endsection
