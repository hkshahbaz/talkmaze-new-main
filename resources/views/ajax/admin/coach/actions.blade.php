@if(isset($coaches))
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:void(0);" title="Pay Coach" data-tutor-id="{{ $coaches->id }}" class="btn btn-warning btn-sm pay_coach_btn" data-id="{{ $coaches->id }}">Pay Coach</a>
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:void(0);" title="Pay Coach" data-tutor-id="{{ $coaches->id }}" class="btn btn-success btn-sm set_hourly_rate_btn" data-id="{{ $coaches->id }}">Set Hourly Rate</a>
    </div>
@endif
