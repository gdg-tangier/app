@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @component('card', ['title' => $event->title . ' attendees'])

                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Invitation Code</th>
                            <th>State</th>
                        </tr>
                        @foreach($event->attendees()->get() as $user)
                        
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><strong>{{ $user->invitation->code }}</strong></td>
                                <td>
                                    @include('admin.events.attendees.state', [
                                        'state' => $user->invitation->state
                                    ])
                                </td>
                            </tr>

                        @endforeach
                    </table>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
