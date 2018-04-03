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
		
			@include('events.single', [
				'event' => $event
			])

		@endforeach
	</tbody>
</table>