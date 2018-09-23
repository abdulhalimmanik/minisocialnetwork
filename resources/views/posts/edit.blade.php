@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="card">
					<div class="card-body">
						<h2>Edit Post</h2>
						<form action="/posts/{{ $post->id }}" method="POST">
							
							{{ @method_field('PUT') }}
							{{ @csrf_field() }}
							

							<div class="form-group">
								<label for="content">Content</label>
								<textarea class="form-control" name="content">{{ $post->content }}</textarea>
							</div>

							<div class="form-group">
								<label>
									<input type="checkbox" name="live" {{ $post->live == 1 ? 'checked' : '' }}>
									Live
								</label>
							</div>

							<div class="form-group">
								<label for="post_on">Post on</label>
								<input type="datetime-local" class="form-control" name="post_on" 
								value="{{ $post->post_on->format('Y-m-d\TH:i:s') }}"></input> 
							</div>

							<div class="form-group">
								<button class="btn btn-success" type="submit">Update post</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection