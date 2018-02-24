@component('navbar')

    @slot('right')

        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
    
    @endslot

@endcomponent