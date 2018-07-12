@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gear</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

										@if (count($user->gear) > 0)
											<ul>
												@foreach ($user->gear as $item)
													<li><a href='/gear/{{$item->id}}'>{{$item->name}}</a></li>
												@endforeach
											</ul>
										@endif

										<a href="/gear/create"><button class="btn btn-primary float-right">Add gear</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
