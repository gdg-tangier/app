<table class="table">
	<thead>
		<tr>
			<th>Title</th>
			<th>Scheduled At</th>
			<th>Details</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($events as $event)
		<tr>
			<td>{{ $event->title }}</td>
			<td>{{ $event->scheduled_at }} <br> <small>{{ $event->scheduled_at->diffForHumans() }}</small></td>
			<td><a href="{{ $event->url }}" target="_blank">meetup.com/{{ $event->title }}</a></td>
			<td>
				@if($event->applied(auth()->user()))
					
					<span class="badge badge-success">Your invitation is ready</span>
					<br>
					Code: <strong>{{ $event->users()->where('user_id', auth()->id())->first()->invitation->code }}</strong>	

				@else
				
					<a href="{{ route('events.apply', $event->id) }}" class="btn btn-success btn-sm">I want to come?</a>
				
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>