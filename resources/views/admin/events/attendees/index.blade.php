@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @component('card', ['title' => $event->title . ' attendees'])

                    <ul>
                        @foreach($event->attendees()->get() as $user)
                        
                            <li>
                                {{ $user->name }} - {{ $user->invitation->code }} -

                                @include('admin.events.attendees.state', [
                                    'state' => $user->invitation->state
                                ])

                                <br>

                                <small>created at {{ $user->invitation->created_at->diffForHumans() }}, updated at {{ $user->invitation->updated_at->diffForHumans() }} </small>

                                <hr>
                            </li>

                        @endforeach
                    </ul>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
