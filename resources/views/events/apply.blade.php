@extends('layout')

@section('content')

	<div class="container">
        <div class="row">
            <div class="col-md-3">
                @component('card', ['title' => $event->title])

                    //Basic events informations

                @endcomponent
            </div>
            <div class="col-md-9">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne">
                                I don't know If this event will benefit me? Am I skilled enough? Will I benefit or It will be too hard?
                            </button>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                You can use this quiz to assess your skills and know if you are eligible to assist this event.<hr> 

                                <a href="#" class="btn btn-primary">Assess my skills</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">
                                I want to assist this event, I am ready! :)
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Click on the button down below to get your invitation code. <hr>

                                <a href="#" class="btn btn-success">I want my invitation code</a>
                            </div>
                        </div>
                    </div>      
                </div>
           	</div>
        </div>
	</div>

@endsection