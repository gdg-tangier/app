@extends('layout')

@section('content')

	<div class="container">
        <div class="row">
            <div class="col-md-3">
                @component('card', ['title' => $event->title])

                    @include('events.single')

                @endcomponent
            </div>
            <div class="col-md-9">
                
                @if($event->applied(auth()->user()))

                    @component('card', ['title' => 'Your invitation'])
                            
                        @include('events.invitation', [
                            'invitation' => $event->users()->where('user_id', auth()->id())->first()->invitation
                        ])

                    @endcomponent

                @else

                    @include('events.form')

                @endif

           	</div>
        </div>
	</div>

@endsection