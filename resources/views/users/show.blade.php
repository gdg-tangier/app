@extends('layout')

@section('content')

	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
				@component('card', ['title' => $user->name])

					<p>
						<strong>Current position</strong> <br> {{ $user->current_position }} <hr>

						<strong>Bio</strong> <br> {{ $user->bio }} <hr>

						<strong>Skills</strong> <br> {{ $user->skills }} <hr>

						<ul>
							<li><a href="{{ $user->github }}" target="_blank">{{ $user->github }}</a></li>
							<li><a href="{{ $user->linkedin }}" target="_blank">{{ $user->linkedin }}</a></li>
						</ul>

						<a href="#" class="btn btn-primary float-right disabled">Contact Informations</a>
					</p>

				@endcomponent
			</div>
		</div>
	</div>

@endsection