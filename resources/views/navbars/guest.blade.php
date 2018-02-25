@component('navbar')

	@slot('left')

		<li><a class="nav-link" href="https://www.meetup.com/gdgtangier/events/" target="_blank">Events</a></li>
		<li><a class="nav-link" href="/opportunities">Opportunities</a></li>
		<li><a class="nav-link" href="/members">Members</a></li>
		<li><a class="nav-link" href="/ask">Ask</a></li>
		<li class="nav-item dropdown">
            <a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                Inspiration <span  class="caret"></span>
            </a>
            
            <div class="dropdown-menu">
            	<a class="dropdown-item" href="/moroccan-success-stories">Moroccan Success Stories</a>
            	<a class="dropdown-item" href="/interviews">Interviews</a>
            </div>
        </li>
        <li><a class="nav-link" href="/share">Share</a></li>

	@endslot

    @slot('right')

        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
    
    @endslot

@endcomponent