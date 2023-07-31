@if(isset($debate))
    @if(!$debate->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('debates.edit', [$debate->id]) }}" title="Edit Debate"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/debates/{{$debate->id}}')" title="Suspend Debate" class="delete-row delete-color" data-id="{{ $debate->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('debates/restore/{{$debate->id}}')" title="Restore Debate" class="restore-row restore-color" data-id="{{ $debate->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('debates/deletePermanently/{{$debate->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $debate->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
