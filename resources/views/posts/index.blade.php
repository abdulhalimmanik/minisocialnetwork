@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6 col-sm-offset-3">
				@forelse($posts as $post)
					<div class="card">
						<div class="card-header">
							<span>Manik</span> 
							<span class="float-right">{{ $post->created_at->diffForHumans() }}</span></div>
						<div class="card-body">{{ $post->shortContent }} <a href="/posts/{{ $post->id }}">Read More</a></div>
						<div class="card-footer">
							@if($post->user_id == Auth::id())
								<form action="/posts/{{ $post->id }}" method="POST" class="float-right">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button class="btn btn-danger btn-sm"> Delete </button>
								</form>
							@endif
						</div>
					</div>
					<br>
				@empty
					nothing
				@endforelse
			</div>
		</div>
		<br>
		<div class="row justify-content-center">
			<div class="col-sm-6 col-sm-offset-3">
				{{ $posts->links() }}
			</div>
		</div>	
	</div>
	
@endsection