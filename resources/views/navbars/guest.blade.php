@component('navbar')

	@slot('left')

		<li><a class="nav-link" href="https://www.meetup.com/gdgtangier/events/" target="_blank">Events</a></li>
		<li><a class="nav-link" href="https://goo.gl/forms/Lmf2gpm2TMKDC6Xx1" target="_blank">Host a meetup</a></li>

	@endslot

    @slot('right')

        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
    
    @endslot

@endcomponent