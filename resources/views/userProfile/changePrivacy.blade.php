@extends('layouts.app')

@section('content')

<section class="edite-personal-info-wrapper">
    <h1>Account
    </h1>
    <h3>Edit your account settings and change your password here.</h3>

    <div class="container">
            <form style="width: 60%">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control checkLang" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group" style="padding-top: 20px">
                      <label for="exampleInputPassword1">current Passwod</label>
                      <input type="password" class="form-control checkLang" id="exampleInputPassword1" placeholder="current Password">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" class="form-control checkLang" id="exampleInputPassword2" placeholder="New Password">
                      <label for="exampleInputPassword1">Confirm Password</label>
                      <input type="Re-Type New password checkLang" class="form-control" id="exampleInputPassword3" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </form>

    </div>



</section>


@endsection
