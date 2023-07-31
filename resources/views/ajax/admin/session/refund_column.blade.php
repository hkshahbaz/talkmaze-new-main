@if(isset($sessions))
    @if($sessions->refund_status == 0)
    	<span class="badge badge-info">No</span>
	@elseif($sessions->refund_status == 1)
		<span class="badge badge-success">Yes</span>
	@elseif($sessions->refund_status == 2)
		<span class="badge badge-warning">Accepted</span>
	@elseif($sessions->refund_status == 3)
		<span class="badge badge-danger">Declined</span>
    @endif
@endif
