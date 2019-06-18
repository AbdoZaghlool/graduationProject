@extends('layouts.app')

@section('content')


<div class="profile-menu"></div>

    <section class="edite-personal-info-wrapper">
        <h1>Photo</h1>
        <h3>Add a nice photo of yourself for your profile. </h3>

        <div class="container">

            <div class="edit-img-wrapper">
            <div class="edite-img-wrap">
                <img src="images/anonymous-dp-for-boys.jpg" >
            </div>

        </div>
        <div style="margin-top: 2rem; margin-bottom: 3rem;">
        <form>
                <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose profile photo...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
            </form>
            </div>

        </div>

    </section>


@endsection

