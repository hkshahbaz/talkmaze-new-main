@if(isset($competition))
    @if(!$competition->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('competitions.edit', [$competition->id]) }}" title="Edit Competition"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/competitions/{{$competition->id}}')" title="Suspend Competition" class="delete-row delete-color" data-id="{{ $competition->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('competitions/restore/{{$competition->id}}')" title="Restore Competition" class="restore-row restore-color" data-id="{{ $competition->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('competitions/deletePermanently/{{$competition->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $competition->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif