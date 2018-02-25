@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Stories'])

                    <p>
                        This section is under construction.

                        <br>

                        Here will be interviews of success morrocan stories.

                        <br>

                        <ul>
                            <li>Podcasts</li>
                            <li>Interviews</li>
                            <li>Audio or video or article</li>
                        </ul>
                    </p>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
