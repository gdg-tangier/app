@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Share'])

                    <p>
                        This section is under construction.

                        <br>

                        Here will be a list of opportunities: 

                        <br>

                        <ul>
                            <li>Jobs</li>
                            <li>Internships</li>
                        </ul>
                    </p>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
