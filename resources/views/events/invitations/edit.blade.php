<span class="badge badge-success">Your invitation is ready</span>
<br>
Code: <strong>{{ $event->getInvitation(auth()->user())->code }}</strong>	
<hr>

<form method="post" action="{{ route('invitations.update', $event->getInvitation(auth()->user())->id) }}">
	@method('patch')
	@csrf
	
    <button type="submit" class="btn btn-warning btn-sm" name="canceled" value="true" onclick="this.disabled='disabled'; this.form.submit()">
        Cancel
    </button>
</form>