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
                </div>
                  <br>
                  <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Choose a City</label>
                            <select name="address" class="custom-select" multiple>

                                @if(count($city)>0)
                                @foreach ( $city as $c=>$value )
                                    <option value={{$value}}>{{$c}}</option>

                                @endforeach
                                @endif

                            </select>
                        </div>
                    </div>

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
