<tr>
	<td>{{ $event->title }}</td>
	<td>{{ $event->scheduled_at->toFormattedDateString() }} <br> <small>{{ $event->scheduled_at->diffForHumans() }}</small></td>
	<td><a href="{{ $event->url }}" target="_blank">meetup.com/{{ $event->title }}</a></td>
	<td>
		{{ $event->invitations_available - $event->invitations_count }} invitations left.
	</td>
	<td>
		@if($event->hasInvitation(auth()->user()))
			
			@include('events.invitations.edit', [
				'event' => $event
			])

		@else
		
			@if(($event->invitations_available - $event->invitations_count) > 0)

				@include('events.invitations.store', [
					'event' => $event
				])

			@else

				<span class="badge badge-danger">No seats available</span>

			@endif
		
		@endif
	</td>
</tr>