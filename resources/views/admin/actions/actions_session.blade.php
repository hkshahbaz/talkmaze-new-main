@if(isset($sessions))
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('session.delete', $sessions->id) }}" title="Delete" class="delete-row delete-color" data-id="{{ $sessions->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
        <a href="javascript:void(0);" title="Refund" data-student-id="{{ $sessions->student_id }}" class="btn btn-warning refund_btn" data-id="{{ $sessions->id }}">Refund</a>
    </div>
@endif
