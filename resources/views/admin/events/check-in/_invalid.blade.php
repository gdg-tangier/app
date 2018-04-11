<p class="text-center">
	<img src="https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678069-sign-error-512.png" alt="Icon Unchecked" width="200px">
</p>
<h3 class="text-center">Unvalid ticket</h3>
<p class="text-center">
	<strong>"{{ request('invitation_code') }}"</strong>
</p>
<hr>
<form method="post" action="{{ route('admin.events.attendees.store', $event->id) }}">
    @csrf

	<div class="form-group">
        <label class="col-form-label">Name</label>
		<input  type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label class="col-form-label">E-Mail Address</label>
		<input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <input type="hidden" name="password">

	<a href="{{ route('admin.events.checkin.index', $event->id) }}" target="_blank" class="btn btn-primary float-right">
		New Check In
	</a>

    <button type="submit" class="btn btn-warning" onclick="this.disabled='disabled'; this.form.submit()">
    	Register
    </button>
</form>