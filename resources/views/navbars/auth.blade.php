@component('navbar')

    @slot('left')

        <li><a class="nav-link" href="/home">Dashboard</a></li>
        <li><a class="nav-link" href="{{ route('users.index') }}">Members</a></li>

    @endslot
            
    @slot('right')

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }} <span  class="caret"></span>
            </a>
            
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

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