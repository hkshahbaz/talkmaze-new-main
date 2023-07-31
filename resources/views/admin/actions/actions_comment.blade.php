@if(isset($comment))
    @if(!$comment->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('comments.edit', [$comment->id]) }}" title="Edit Comment"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/comments/{{$comment->id}}')" title="Suspend Comment" class="delete-row delete-color" data-id="{{ $comment->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('comments/restore/{{$comment->id}}')" title="Restore Comment" class="restore-row restore-color" data-id="{{ $comment->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('comments/deletePermanently/{{$comment->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $comment->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
