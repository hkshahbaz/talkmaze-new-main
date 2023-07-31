@if(isset($class_plan))
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('class_plans.edit', [$class_plan]) }}" title="Edit Class Plan"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/class_plans/{{$class_plan->id}}')" title="Suspend Class Plan" class="delete-row delete-color" data-id="{{ $class_plan->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
@endif
