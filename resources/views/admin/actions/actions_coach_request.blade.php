@if(isset($coach_requests))
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:void();" title="Edit Plan"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:void();" title="Delete Plan" class="delete-row delete-color" data-id="{{ $coach_requests->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
@endif
