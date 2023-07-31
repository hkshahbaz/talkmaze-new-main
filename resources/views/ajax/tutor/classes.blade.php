@if(!isset($req->view_all))
	<a style="float:right;" class="row p-0 m-0 view_all_active_classes" href="javascript:void(0);">View All</a>
@endif
<br>
@foreach($request_list as $item)
	<div>
		<h5 class="mt-2">{{ $date }}<span class="ml-4 text-muted" style="font-size: 12px;">{{ $item->start_time }}</span></h5>
		<h6 class="text-muted">
			@if(!is_null($item->parent_student_id))
				{{ $item->parent_student->student_name }}
			@else
				{{ $item->student->name }}
			@endif
			<a href="javascript:void(0);" data-id="{{ $item->id }}" class="start-zoom-session" style="float: right;">Start Session</a>
		</h6>

	</div><hr>
@endforeach
@if($request_list->count() == 0)
	<div style="border:2px solid #69d2b1;height: 30px;text-align: center;">
		No Class Yet, Take Rest
	</div>
@endif