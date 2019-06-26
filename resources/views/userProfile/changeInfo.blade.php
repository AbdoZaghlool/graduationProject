@extends('layouts.app')

@section('content')


<section class="edite-personal-info-wrapper">
    <h1>Public profile
    </h1>
    <h3>Add and edit information about yourself</h3>

    <div class="container">

            <form method="POST" action="/ispi/public/updateInfo" >
                @csrf
                <div class="form-row">
                    <div class="col">
                        <label for="inputFirstName">First name</label>
                      <input type="text" name="name" class="form-control checkLang" placeholder="First name">
                    </div>
                   <!-- <div class="col">
                        <label for="inputLastName">Last Name</label>
                      <input type="text" class="form-control checkLang" placeholder="Last name">
                    </div>-->
                  </div>
                  <br>
                  <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="inputCity">categories</label>
                          <select class="custom-select" multiple>


                            </select>
                        </div>

                      </div>

<!--                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text"  name="address" class="form-control checkLang" id="inputAddress" placeholder="your address : country, mohafza">
                    </div>-->
                    <div class="form-group">
                      <label for="inputAddress2">Address 2</label>
                      <input type="text" name="address2" class="form-control checkLang" id="inputAddress2" placeholder="markaz, street">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
            </form>

    </div>



</section>


@endsection
