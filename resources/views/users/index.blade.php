@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'All members'])

					<ul>
						@foreach($users as $user)
						
							<li><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></li>

						@endforeach
					</ul>

                    {{ $users->links() }}

                @endcomponent
            </div>
        </div>
    </div>

@endsection
