@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
			<div class="col-md-8">

				@if(request('state'))

					@component('card', ['title' => 'Status'])

						@if(request('state') === 'not-found')

							//Form for basic name & email

						@else

							Welcome :D

						@endif

						<hr>

						<a href="{{ route('admin.events.checkin.index', $event->id) }}" class="btn btn-primary">New Check In</a>

		    		@endcomponent

				@else

					@component('card', ['title' => 'Check In for ' . $event->title])

						<form method="POST" action="{{ route('admin.events.checkin.update', $event) }}">
		                    @csrf
		                    @method('patch')

							<div class="form-group">
		                        <label class="col-form-label">Invitation Code</label>
		                        <input type="text" class="form-control" name="invitation_code" required>
		                    </div>

		                    <div class="form-group">
								<button type="submit" class="btn btn-primary">
		                            Submit
		                        </button>
		                    </div>
		                </form>

					@endcomponent

				@endif

			</div>
        </div>
    </div>

@endsection
