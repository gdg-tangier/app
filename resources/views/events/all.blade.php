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
				<a href="{{ route('events.apply', $event->id) }}" class="btn btn-success btn-sm">I want to come?</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>