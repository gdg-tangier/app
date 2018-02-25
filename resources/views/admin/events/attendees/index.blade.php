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

                                @if($user->invitation->state === 'cancelled')

                                    <span class="badge badge-warning">Cancelled</span>

                                @elseif($user->invitation->state === 'attended')

                                    <span class="badge badge-success">Attended</span>

                                @elseif($user->invitation->state === 'missed')

                                    <span class="badge badge-danger">Missed</span>

                                @else

                                    <span class="badge badge-dark">Pending</span>                                
    
                                @endif

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
