@extends('layout')

@section('content')

	<div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<ol class="breadcrumb">
				  	<li class="breadcrumb-item"><a href="/home">Home</a></li>
				  	<li class="breadcrumb-item">{{ $event->title }}</li>
				  	<li class="breadcrumb-item active">Apply</li>
				</ol>
        	</div>
        </div>
        <div class="row">
            <div class="col-md-8">
            	//Here you can apply
           	</div>
        </div>
	</div>

@endsection