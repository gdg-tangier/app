@if($state === 'cancelled')

    <span class="badge badge-warning">Cancelled</span>

@elseif($state === 'attended')

    <span class="badge badge-success">Attended</span>

@elseif($state === 'missed')

    <span class="badge badge-danger">Missed</span>

@else

    <span class="badge badge-dark">Pending</span>                                

@endif