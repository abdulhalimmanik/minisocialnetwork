@extends('layouts.app')

<style type="text/css">
	.profile-image{
		width: 150px;
		height: 150px;
		border: 5px solid #fff;
		border-radius: 500px;
		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
	}
</style>

@section('content')
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body text-center">
						<img class="profile-image" src="https://cdn2.iconfinder.com/data/icons/avatar-2/512/oscar_boy-512.png">
						<h2>{{ $user->name }}</h2>
						<p>{{ $user->email }}</p>
						<p>{{ $user->dob->format('l j F Y')}} ({{ $user->dob->age }} years old)</p>
						<!-- date format -->
						<button class="btn btn-success">Follow</button>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection