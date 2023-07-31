@if(isset($subscribe))
    @if(!$subscribe->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('subscribes.edit', [$subscribe->id]) }}" title="Edit Subscriber"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/subscribes/{{$subscribe->id}}')" title="Suspend Subscriber" class="delete-row delete-color" data-id="{{ $subscribe->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('subscribes/restore/{{$subscribe->id}}')" title="Restore Subscriber" class="restore-row restore-color" data-id="{{ $subscribe->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('subscribes/deletePermanently/{{$subscribe->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $subscribe->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
