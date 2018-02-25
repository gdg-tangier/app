@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Welcome to GDG Tangier'])

                	Grow your skills and build a career as: 

                	<hr>

					Mobile Dev <br>
					Frontend Dev <br>
					Backend Dev <br>
					Engineer Manager <br>
					QA Engineer <br>
					Dev Ops <br>
					Software Architect <br>

                @endcomponent
            </div>
        </div>
    </div>

@endsection
