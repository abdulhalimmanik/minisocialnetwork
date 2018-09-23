@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="card">
					<div class="card-body">
						<h2>Create Post</h2>
						<form action="/posts" method="POST">
							{{ @csrf_field() }}

							<input type="hidden" name="user_id" 
							value="{{ Auth::user()->id }}">
							<div class="form-group">
								<label for="content">Content</label>
								<textarea class="form-control" name="content"></textarea>
							</div>

							<div class="form-group">
								<label>
									<input type="checkbox" name="live">
									Live
								</label>
							</div>

							<div class="form-group">
								<label for="post_on">Post on</label>
								<input type="datetime-local" class="form-control" name="post_on"></input> 
							</div>

							<div class="form-group">
								<button class="btn btn-success" type="submit">Create post</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection