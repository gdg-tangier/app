<p class="text-center">
    <img src="https://cdn2.iconfinder.com/data/icons/free-basic-icon-set-2/300/11-512.png" width="100px">
</p>
<h3 class="text-center"><small>Invitation Code: </small> <strong>"{{ $invitation->code }}"</strong></h3>
<p class="text-center">
    Your invitation has been confirmed. You can cancel anytime. <br>
    If having a code and you didn't come, you will lose points.
</p>
<form method="post" action="{{ route('invitations.update', $invitation->id) }}">
	@method('patch')
	@csrf
	<p class="text-center">
	    <button type="submit" class="btn btn-danger btn-ms" name="canceled" value="true" onclick="this.disabled='disabled'; this.form.submit()">
	        Cancel
	    </button>
	    <hr>
	    <small>Please cancel 24h at least before the event to let a chance for the other attendees.</small>
	</p> 
</form>