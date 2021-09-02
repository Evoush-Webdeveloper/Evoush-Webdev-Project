@extends('layouts.website.app')

@section('title'){{ $title }}@endsection

@section('content')
	{{-- <div id="users">
		<users></users>
	</div> --}}


	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Striped Table with Hover</h4>
				<p class="category">Here is a subtitle for this table</p>
			</div>
			<div class="content table-responsive table-full-width">
				<table class="table table-hover table-striped">
					<thead>
						<th>Name</th>
						<th>Email</th>
						<th>Username</th>
						<th>Phone</th>
						<th>Options</th>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->username }}</td>
								<td>{{ $user->phone }}</td>
								<td>

								</td>
							</tr>
						@endforeach

						{{-- @php
							var_dump($users)
						@endphp
 --}}
					</tbody>
				</table>

			</div>
		</div>
	</div>
@endsection