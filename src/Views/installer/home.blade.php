@extends('instapack::layouts.app');

@section('content')
<div class="panel">
	
	Hello welcome to your application! For continue please press to next button
	<a href="{{route('instapack::connections')}}" class="btn btn-default">Next</a>
</div>
@stop