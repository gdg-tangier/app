@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Dashboard'])

                    You are logged in!

                @endcomponent
            </div>
        </div>
    </div>

@endsection
