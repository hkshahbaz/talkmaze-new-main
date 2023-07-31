@if(isset($course_content))
    @if(!$course_content->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('course_contents.edit', [$course_content->id]) }}" title="Edit Course Content"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/course_contents/{{$course_content->id}}')" title="Suspend Course Content" class="delete-row delete-color" data-id="{{ $course_content->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('course_contents/restore/{{$course_content->id}}')" title="Restore Course Content" class="restore-row restore-color" data-id="{{ $course_content->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('course_contents/deletePermanently/{{$course_content->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $course_content->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
