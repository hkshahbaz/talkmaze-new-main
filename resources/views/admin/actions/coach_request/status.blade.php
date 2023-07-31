@if(isset($coach_requests))
    @if($coach_requests->status == 'pending')
        <span class="badge badge-info">{{ $coach_requests->status }}</span>
    @elseif($coach_requests->status == 'cancelled')
        <span class="badge badge-danger">{{ $coach_requests->status }}</span>
    @elseif($coach_requests->status == 'approved')
        <span class="badge badge-success">{{ $coach_requests->status }}</span>
    @endif
@endif
