@if(isset($user_request))
    @if(!$user_request->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('user_requests.edit', [$user_request->id]) }}" title="Edit Request"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/user_requests/{{$user_request->id}}')" title="Suspend Request" class="delete-row delete-color" data-id="{{ $user_request->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('user_requests/restore/{{$user_request->id}}')" title="Restore Request" class="restore-row restore-color" data-id="{{ $user_request->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('user_requests/deletePermanently/{{$user_request->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $user_request->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
