@if(isset($coach_requests))
    @if($coach_requests->interval == '1')
        {{ 'One Time' }}
    @else
        {{ 'Recurring' }}
    @endif
@endif
