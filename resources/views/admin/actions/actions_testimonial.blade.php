@if(isset($testimonial))
    @if(!$testimonial->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('testimonials.edit', [$testimonial->id]) }}" title="Edit Testimonial"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/testimonials/{{$testimonial->id}}')" title="Suspend Testimonial" class="delete-row delete-color" data-id="{{ $testimonial->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('testimonials/restore/{{$testimonial->id}}')" title="Restore Testimonial" class="restore-row restore-color" data-id="{{ $testimonial->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('testimonials/deletePermanently/{{$testimonial->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $testimonial->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
    </div>
    @endif
@endif
