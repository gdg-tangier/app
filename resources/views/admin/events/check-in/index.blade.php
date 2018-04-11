@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
			<div class="col-md-8">

				@if(request('state'))

					@include('admin.events.check-in._results')

				@else

					@include('admin.events.check-in._form')

				@endif

			</div>
        </div>
    </div>

@endsection
