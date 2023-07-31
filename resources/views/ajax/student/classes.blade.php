@if(!isset($req->view_all))
	<a style="float:right;" class="row p-0 m-0 view_all_active_classes" href="javascript:void(0);">View All</a>
@endif
<br/>
@foreach($request_list as $item)
	<div>
		<h5 class="mt-2">{{ $date }}<span class="ml-4 text-muted" style="font-size: 12px;">{{ $item->start_time }}</span></h5>
		<h6 class="text-muted">
			{{ $item->tutor->name }} 
			@if(!is_null($item->parent_student_id)) - {{ $item->parent_student->student_name }} @endif
			@if(!is_null($item->meetingSession) && $item->meetingSession->status == '1')
				<a href="javascript:void(0);" data-url="{{ $item->meetingSession->join_url }}" class="join-zoom-meeting" style="float: right;">Join Meeting</a>
			@endif
		</h6>
	</div><hr>
@endforeach	
@if($request_list->count() == 0)
	<div style="border:2px solid #69d2b1;height: 30px;text-align: center;">
		No Class Yet, Take Rest
	</div>
@endif