@if(isset($faq))
    @if(!$faq->trashed())
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('faqs.edit', [$faq->id]) }}" title="Edit FAQ"><i class="icon-pencil5 mr-1 icon-1x"></i></a>
        <a href="javascript:sdelete('admin/faqs/{{$faq->id}}')" title="Suspend FAQ" class="delete-row delete-color" data-id="{{ $faq->id }}"><i class="icon-bin mr-3 icon-1x" style="color:red;"></i></a>
    </div>
    @else
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="javascript:restore('faqs/restore/{{$faq->id}}')" title="Restore FAQ" class="restore-row restore-color" data-id="{{ $faq->id }}"><i
                class="icon-loop3"></i></a>
        <a href="javascript:permanent('faqs/deletePermanently/{{$faq->id}}')" title="Delete Permanently" class="delete-permanently-row delete-color" data-id="{{ $faq->id }}"><i
                class="icon-cancel-square2" style="color: red;"></i></a>
     </div>
    @endif
@endif
