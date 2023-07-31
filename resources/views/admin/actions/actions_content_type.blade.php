@if(isset($content_type))
    @if(!$content_type->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('content_types.edit', [$content_type->id]) }}" title="Edit Content Type"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/content_types/{{$content_type->id}}')" title="Suspend Content Type" class="delete-row delete-color" data-id="{{ $content_type->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('content_types/restore/{{$content_type->id}}')" title="Restore Content Type" class="restore-row restore-color" data-id="{{ $content_type->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('content_types/deletePermanently/{{$content_type->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $content_type->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
