@extends('layouts.app3')

@section('content')


@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>
	    		{{ $error}}
			</li>
			@endforeach
		</ul>
	</div>
@endif

    <form action="{{ route("institute.attempt") }}" method="post">
        @csrf
        <input name="email" placeholder="email" type="email"> <br>
        <input name="password" placeholder="password" type="password"> <br>
        <input value="login" type="submit">
    </form>

@endsection
