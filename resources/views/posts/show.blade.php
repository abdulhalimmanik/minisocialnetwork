@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="card">
					<div class="card-header">
						<span>Manik</span> <small><a href="/posts/{{ $post->id }}/edit">Edit</a></small>
						<span class="float-right">{{ $post->created_at->diffForHumans() }}</span></div>
					<div class="card-body">{{ $post->content }}</div>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>
	
@endsection