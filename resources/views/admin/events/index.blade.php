@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @component('card', ['title' => 'Events'])

                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Scheduled At</th>
                            <th>Actions</th>
                        </tr>
                    	@foreach($events as $event)

                    		<tr>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->scheduled_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('admin.events.attendees.index', $event->id) }}" class="btn btn-primary btn-sm">
                                        Attendees
                                    </a>

                                    @if($event->scheduled_at->isToday())
                                    
                                        <a href="{{ route('admin.events.checkin.index', $event->id) }}" class="btn btn-success btn-sm">
                                            Check In
                                        </a>

                                    @endif    
                                </td>
                            </tr>

                    	@endforeach
                    </table>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
