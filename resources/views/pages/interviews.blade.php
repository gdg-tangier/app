@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Stories'])

                    <p>
                        This section is under construction.

                        <br>

                        Here will be interviews from famous people.

                        <br>

                        <ul>
                            <li>Get outside experience</li>
                        </ul>
                    </p>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
