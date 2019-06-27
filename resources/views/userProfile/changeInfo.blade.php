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
                        <label for="inputFirstName"> Name</label>
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
                            <label for="inputCity">Choose a City</label>
                            <select name="address" class="custom-select" multiple>
                                <option value="1">Alexandria</option>
                                <option value="2">Asyut</option>
                                <option value="3">Maadi</option>
                                <option value="4">El Nozha</option>
                                <option value="5">El Shorouk</option>
                                <option value="6">Zamalek</option>
                                <option value="7">Hada'iq El Qobbah</option>
                                <option value="8">Helwan</option>
                                <option value="9">Nasr City</option>
                                <option value="10">El Mansoura</option>
                                <option value="11">Kafr el Sheikh</option>
                                <option value="12">Desouk</option>
                                <option value="13">Banha</option>
                                <option value="14">Zagazig</option>
                                <option value="15">Suez</option>
                            </select>
                        </div>
                    </div>

                    <!--<div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text"  name="address" class="form-control checkLang" id="inputAddress" placeholder="your address : country, mohafza">
                    </div>-->
                    <div class="form-group">
                      <label for="inputAddress2">Phone Number</label>
                      <input type="text" name="phone" class="form-control checkLang" id="inputAddress2" placeholder="+201111111111">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
            </form>

    </div>



</section>


@endsection
