@extends('layouts.app')

@section('content')


    <div class="profile-menu"></div>

    <section class="edite-personal-info-wrapper">
        <h1>Photo</h1>
        <h3>Add a nice photo of yourself for your profile. </h3>

        <div class="container">

            <div class="edit-img-wrapper text-center!important">
            <div class="edite-img-wrap text-center">
                <img src="storage/uploads/{{Auth::user()->photo}}" style="width:300px; ,height: 150px;" class="text-center" >
            </div>

        </div>
        <div style="margin-top: 2rem; margin-bottom: 3rem;">
        <form enctype="multipart/form-data" action="/ispi/public/updatePhoto" method="POST">
            @csrf
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="photo" value=""  required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose profile photo...</label>
                    <button type="submit" class="btn btn-info">Update</button>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </form>
            </div>

        </div>

    </section>


@endsection

