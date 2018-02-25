@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Ask'])

                    <p>
                        This section is under construction.

                        <br>

                        Here will be a form to ask for anything.

                        <br>

                        <ul>
                            <li>Issue</li>
                            <li>Feedback</li>
                        </ul>
                    </p>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
