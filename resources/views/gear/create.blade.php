@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Add Gear</div>
					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						{!! Form::open(['action' => 'GearController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
							<div class="form-group">
								{{Form::label('name', 'Name')}}
								{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
							</div>
							<div class="form-group">
								{{Form::label('nickname', 'Nickname')}}
								{{Form::text('nickname', '', ['class' => 'form-control', 'placeholder' => 'Nickname'])}}
							</div>
				        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
				    {!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
