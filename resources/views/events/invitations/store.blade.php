<form method="post" action="{{ route('events.invitations.store', [$event->id, auth()->id()]) }}">
    @csrf

    <button type="submit" class="btn btn-success btn-sm" onclick="this.disabled='disabled'; this.form.submit()">
    	Reserve Ticket
    </button>
</form>