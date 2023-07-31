@if(isset($partner))
    @if(!$partner->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('partners.edit', [$partner->id]) }}" title="Edit Partner"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/partners/{{$partner->id}}')" title="Suspend Partner" class="delete-row delete-color" data-id="{{ $partner->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('partners/restore/{{$partner->id}}')" title="Restore Partner" class="restore-row restore-color" data-id="{{ $partner->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('partners/deletePermanently/{{$partner->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $partner->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
