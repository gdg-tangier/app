@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @component('card', ['title' => $event->title . ' attendees'])

                    <ul>
                        @foreach($event->users()->get() as $user)
                        
                            <li>
                                {{ $user->name }} - {{ $user->invitation->code }} - 
                                <span class="badge badge-success">Attended</span>
                                <span class="badge badge-warning">Cancelled</span>
                                <span class="badge badge-danger">Missed</span>
                            </li>

                        @endforeach
                    </ul>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
