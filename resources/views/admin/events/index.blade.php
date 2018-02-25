@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @component('card', ['title' => 'Events'])

                    <ul>
                    	@foreach($events as $event)

                    		<li>{{ $event->title }} - <a href="{{ route('admin.events.attendees.index', $event->id) }}" class="btn btn-primary btn-sm">Attendees</a></li>

                    	@endforeach
                    </ul>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
