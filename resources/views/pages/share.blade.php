@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Share'])

                    Apply for a talk <br>
                    Apply for an open source project <br>
                    Apply for event organiser <br>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
