@if(isset($course))
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('news.edit', [$course->id]) }}" title="Edit Course"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/news/{{$course->id}}')" title="Suspend Course" class="delete-row delete-color" data-id="{{ $course->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
@endif
