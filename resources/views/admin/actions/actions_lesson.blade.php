@if(isset($lesson))
    @if(!$lesson->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('lessons.edit', [$lesson->id]) }}" title="Edit Course"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/lessons/{{$lesson->id}}')" title="Suspend Course" class="delete-row delete-color" data-id="{{ $lesson->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('lessons/restore/{{$lesson->id}}')" title="Restore Course" class="restore-row restore-color" data-id="{{ $lesson->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('lessons/deletePermanently/{{$lesson->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $lesson->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
