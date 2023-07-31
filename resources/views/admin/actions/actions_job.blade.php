@if(isset($job))
    @if(!$job->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('jobs.edit', [$job->id]) }}" title="Edit job"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/jobs/{{$job->id}}')" title="Suspend job" class="delete-row delete-color" data-id="{{ $job->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('jobs/restore/{{$job->id}}')" title="Restore User" class="restore-row restore-color" data-id="{{ $job->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('jobs/deletePermanently/{{$job->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $job->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
