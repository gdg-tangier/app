@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Members'])

                    <p>
                        This section is under construction.

                        <br>

                        Here will be a list of our members.
                    </p>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
