@extends('layouts.app')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{$gear->name}}
					@if (strlen($gear->nickname) > 0)
						<small class="float-right">"<i>{{$gear->nickname}}</i>"</small>
					@endif
				</div>
				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
						<a href="./{{$gear->id}}/edit"><button class="btn btn-primary float-right">Edit</button></a>
				</div>
			</div>
		</div>
	</div>
@endsection
