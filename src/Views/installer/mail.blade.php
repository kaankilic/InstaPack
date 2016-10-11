@extends('instapack::layouts.app')

@section('content')
<div class="panel">
	
	<p class="lead">Please set your smtp connection settings on below</p>
	<form action="{{route('instapack::post.mail')}}" method="POST" role="form">
		<legend>SMTP Connection Settings</legend>
	
		<div class="form-group">
			<label for="">SMTP Host</label>
			<input type="text" name="Hostname" class="form-control" id="" value="localhost" placeholder="Set your smtp host">
		</div>

		<div class="form-group">
			<label for="">Username</label>
			<input type="text" name="Username" class="form-control" id="" placeholder="Set your smtp username">
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="text" name="Password" class="form-control" id="" placeholder="Set your smtp password">
		</div>

		<div class="form-group">
			<label for="">Mail Address</label>
			<input type="text" name="Email" class="form-control" id="" placeholder="Set your main mail address">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Next</button>
	</form>
</div>
@stop