@component('navbar')

    @slot('left')

        <li><a class="nav-link" href="/home">Dashboard</a></li>
        <li><a class="nav-link" href="https://www.meetup.com/gdgtangier/events/" target="_blank">Events</a></li>
        <li><a class="nav-link" href="/members">Members</a></li>
        <li><a class="nav-link" href="https://goo.gl/forms/Lmf2gpm2TMKDC6Xx1" target="_blank">Host a meetup</a></li>

        @if(auth()->user()->isAdmin())

            <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    Admin <span  class="caret"></span>
                </a>
                
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('users.index') }}">Members</a>
                    <a class="dropdown-item" href="{{ route('admin.events.index') }}">Events</a>
                </div>
            </li>

        @endif

    @endslot
            
    @slot('right')

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                {{ Auth::user()->name }} <span  class="caret"></span>
            </a>
            
            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('users.edit', auth()->id()) }}">Edit Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

    @endslot

@endcomponent