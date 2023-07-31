@if(isset($social_link))
    @if(!$social_link->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('social_links.edit', [$social_link->id]) }}" title="Edit Social Link"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/social_links/{{$social_link->id}}')" title="Suspend Social Link" class="delete-row delete-color" data-id="{{ $social_link->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('social_links/restore/{{$social_link->id}}')" title="Restore Social Link" class="restore-row restore-color" data-id="{{ $social_link->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('social_links/deletePermanently/{{$social_link->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $social_link->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
    </div>
    @endif
@endif
