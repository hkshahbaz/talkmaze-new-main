@if(isset($coach_requests))
    {{ $coach_requests->student->name ?? '' }}
@endif
