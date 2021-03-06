@extends('layouts.website.app')

@section('title'){{ $title }}@endsection

@section('content')

<div class="col-md-8">
	<div class="card">
		<div class="card-header">{{ __('Dashboard') }}</div>

		<div class="card-body">
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif

			{{ __('You are logged in!') }}
			{{ in_array("ADMIN", json_decode(Auth::user()->roles)) ? "ADMINISTRATOR" : "" }}
		</div>
	</div>
</div>
@endsection
