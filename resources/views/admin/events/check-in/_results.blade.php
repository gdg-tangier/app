@component('card', ['title' => 'Status'])

	@if(request('state') === 'not-found')

		@include('admin.events.check-in._invalid')

	@else

		@include('admin.events.check-in._valid')

	@endif

@endcomponent