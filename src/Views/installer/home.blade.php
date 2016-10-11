@extends('instapack::layouts.app')
@section('content')
<div class="panel">
	<p class="lead">Hello welcome to installer! For continue please press to next button</p>
	<strong>Extensions needs to be installed:</strong>
	<ul>
	@foreach($Extensions as $Extension)
		@if($Extension["Installed"])
			<li>{{$Extension["Name"]}} is already <span class="installed">installed</span>!</li>
		@else
			<li>{{$Extension["Name"]}} is <span class="not-installed">not installed</span>! Please install the extension</li>
		@endif
	@endforeach
	</ul>
	<a href="{{route('instapack::connections')}}" class="btn btn-primary">Next</a>
</div>
@stop