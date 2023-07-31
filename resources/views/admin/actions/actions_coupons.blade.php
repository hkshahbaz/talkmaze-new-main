@if(isset($course))
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:sdelete('admin/coupons/{{$course->id}}')" title="Suspend Course" class="delete-row delete-color" data-id="{{ $course->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
@endif    