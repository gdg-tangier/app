<table class="table">
	<thead>
		<tr>
			<th>Title</th>
			<th>Scheduled At</th>
			<th>Details</th>
			<th>Invitations</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($events as $event)
		<tr>
			<td>{{ $event->title }}</td>
			<td>{{ $event->scheduled_at->toFormattedDateString() }} <br> <small>{{ $event->scheduled_at->diffForHumans() }}</small></td>
			<td><a href="{{ $event->url }}" target="_blank">meetup.com/{{ $event->title }}</a></td>
			<td>
				{{ $event->invitations_count - $event->users()->count() }} invitation left [FIX BUG, ONLY state null for invitation]
			</td>
			<td>
				@if($event->hasInvitation(auth()->user()))
					
					<span class="badge badge-success">Your invitation is ready</span>
					<br>
					Code: <strong>{{ $event->users()->where('user_id', auth()->id())->first()->invitation->code }}</strong>	
					<hr>
					<a href="{{ route('events.apply', $event->id) }}" class="btn btn-warning btn-sm">Cancel</a>

				@else
				
					<a href="{{ route('events.apply', $event->id) }}" class="btn btn-success btn-sm">I want to come?</a>
				
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>