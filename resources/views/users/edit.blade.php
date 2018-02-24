@extends('layout')

@section('content')

    <div class="container">
    	<form method="post" action="{{ route('users.update', $user->id) }}">
			@method('patch')
    		@csrf

        	<div class="row justify-content-center">
	            <div class="col-md-6">
	                @component('card', ['title' => 'Personal Informations'])    

						<div class="form-group">
							<label>Name</label>
							<input name="name" type="text" class="form-control" placeholder="John Doe" value="{{ $user->name }}">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input name="email" type="text" class="form-control" placeholder="name@email.com" value="{{ $user->email }}">
						</div>
						<div class="form-group">
							<label>Phone Number</label>
							<input name="phone_number" type="text" class="form-control" placeholder="06 XX XX XX XX" value="{{ $user->phone_number }}">
						</div>
						<div class="form-group">
							<label>Bio</label>
							<textarea name="bio" class="form-control" placeholder="We want to know your story!" rows="4">{{ $user->bio }}</textarea>
						</div>
						<div class="form-group">
							<label>Skills</label>
							<textarea name="skills" class="form-control" placeholder="We want to know your skills!" rows="4">{{ $user->skills }}</textarea>
						</div>
						<div class="form-group">
							<label>Current Position</label>
							<textarea name="current_position" class="form-control" placeholder="Example: Currently, I am studying at or I am working at" rows="4">{{ $user->current_position }}</textarea>
						</div>
						<div class="form-group">
							<label>City</label>
							<input name="city" type="text" class="form-control" placeholder="Example: Tangier, Casablanca, Rabat..." value="{{ $user->city }}">
						</div>
						<div class="form-group">
							<label>Birthdate <br> <small>Format: 2018-02-24</small></label>
							<input name="birthdate" type="text" class="form-control" placeholder="2018-02-24" value="{{ $user->birthdate }}">
						</div>

                	@endcomponent
            	</div>	
            	<div class="col-md-6">
	                @component('card', ['title' => 'Your social media accounts'])

						<div class="form-group">
							<label>Github</label>
							<input name="github" type="text" class="form-control" placeholder="Paste the url" value="{{ $user->github }}">
						</div>
						<div class="form-group">
							<label>LinkedIn</label>
							<input name="linkedin" type="text" class="form-control" placeholder="Paste the url" value="{{ $user->linkedin }}">
						</div>
						<div class="form-group">
							<label>Facebook</label>
							<input name="facebook" type="text" class="form-control" placeholder="Paste the url" value="{{ $user->facebook }}">
						</div>
						<div class="form-group">
							<label>Twitter</label>
							<input name="twitter" type="text" class="form-control" placeholder="Paste the url" value="{{ $user->twitter }}">
						</div>
						

	                @endcomponent
	            </div>
        	</div>
        	<br>
        	<button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection