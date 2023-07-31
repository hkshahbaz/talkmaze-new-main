@if(isset($coaching_bulk))
    @if(!$coaching_bulk->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('coaching_bulks.edit', [$coaching_bulk->id]) }}" title="Edit Coaching Bulk"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/coaching_bulks/{{$coaching_bulk->id}}')" title="Suspend Coaching Bulk" class="delete-row delete-color" data-id="{{ $coaching_bulk->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('coaching_bulks/restore/{{$coaching_bulk->id}}')" title="Restore Coaching Bulk" class="restore-row restore-color" data-id="{{ $coaching_bulk->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('coaching_bulks/deletePermanently/{{$coaching_bulk->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $coaching_bulk->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
