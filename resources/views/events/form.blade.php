<div id="accordion">
    @if($event->assessment)
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

                    <a href="{{ $event->assessment }}" target="_blank" class="btn btn-primary">Assess my skills</a>
                </div>
            </div>
        </div>
    @endif
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
                
                <form method="post" action="{{ route('events.invitations.store', [$event->id, auth()->id()]) }}">
                    @csrf

                    <button type="submit" class="btn btn-success">I want my invitation code</button>
                </form>
            </div>
        </div>
    </div>      
</div>