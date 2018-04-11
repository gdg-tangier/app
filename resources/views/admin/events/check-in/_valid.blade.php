<p class="text-center">
	<img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/256/sign-check-icon.png" alt="Icon Check" width="200px">
</p>
<h3 class="text-center">Valid ticket</h3>
<p class="text-center">
	<strong>"{{ $invitation->code }}"</strong> for <strong>{{ $invitation->user->name }}, {{ $invitation->user->email }}</strong>
</p>
<hr>
<p class="text-center">
	<a href="{{ route('admin.events.checkin.index', $event->id) }}" target="_blank" class="btn btn-primary">
		New Check In
	</a>
</p>