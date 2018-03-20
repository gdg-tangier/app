@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @component('card', ['title' => 'Upcoming Events'])

					@if($events->isEmpty())

						@include('events.empty')

					@else

						@include('events.all')
				
					@endif

                @endcomponent
            </div>

            <div class="col-md-3">
                @component('card', ['title' => 'Links'])

					<ul>
						<li><a href="https://www.meetup.com/gdgtangier/" target="_blank">Meetup</a></li>
						<li><a href="https://gdg-tangier.slack.com" target="_blank">Slack</a></li>
						<li><a href="https://github.com/gdg-tangier" target="_blank">Github</a></li>
					</ul>

					<ul>
						<li><a href="https://www.facebook.com/gdgtangier/" target="_blank">Facebook</a></li>
						<li><a href="https://twitter.com/gdgtangier" target="_blank">Twitter</a></li>
						<li><a href="https://www.instagram.com/gdgtangier/" target="_blank">Instagram</a></li>
						<li><a href="mailto:gdgtangier@gmail.com">Email us</a></li>
					</ul>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
