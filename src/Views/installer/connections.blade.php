@extends('instapack::layouts.app')
@section('content')
<div class="panel">
	
	<p class="lead">Please set your database connection values on below</p>
	<form action="{{route('instapack::post.connections')}}" method="POST" role="form">
		<legend>Database Connection</legend>
	
		<div class="form-group">
			<label for="">Hostname</label>
			<input type="text" name="Hostname" class="form-control @if($errors->has('Hostname')) form-danger @endif" id="" value="localhost" placeholder="localhost or 127.0.0.1 by default">
			@if($errors->has('Hostname'))
				{{$errors->first('Hostname')}}
			@endif
		</div>

		<div class="form-group">
			<label for="">Username</label>
			<input type="text" name="Username" class="form-control @if($errors->has('Username')) form-danger @endif" id="" placeholder="Please set your db username">
			@if($errors->has('Username'))
				{{$errors->first('Username')}}
			@endif
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="password" name="Password" class="form-control @if($errors->has('Password')) form-danger @endif" placeholder="Please set your db password">
			@if($errors->has('Password'))
				{{$errors->first('Password')}}
			@endif
		</div>

		<div class="form-group">
			<label for="">Database Name</label>
			<input type="text" name="Database" class="form-control @if($errors->has('Database')) form-danger @endif" id="" placeholder="Please set your db name">
			@if($errors->has('Database'))
				{{$errors->first('Database')}}
			@endif
		</div>
	
		@if(Session::has('Errormessage'))
			{{Session::get('Errormessage')}}
		@endif	
		<button type="submit" class="btn btn-primary">Next</button>
	</form>
</div>
@stop