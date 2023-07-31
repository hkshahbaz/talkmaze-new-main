@if(isset($user))
    @if(!$user->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('users.edit', [$user->id]) }}" title="Edit User"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/users/{{$user->id}}')" title="Suspend User" class="delete-row delete-color" data-id="{{ $user->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('users/restore/{{$user->id}}')" title="Restore User" class="restore-row restore-color" data-id="{{ $user->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('users/deletePermanently/{{$user->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $user->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
