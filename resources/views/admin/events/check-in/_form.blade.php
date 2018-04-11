@component('card', ['title' => 'Check In for ' . $event->title])

	<form method="POST" action="{{ route('admin.events.checkin.update', $event) }}">
        @csrf
        @method('patch')

		<div class="form-group">
            <label class="col-form-label">Invitation Code</label>
            <input type="text" class="form-control" name="invitation_code" required>
        </div>

        <div class="form-group">
			<button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>

@endcomponent