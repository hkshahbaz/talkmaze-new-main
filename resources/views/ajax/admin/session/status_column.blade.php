@if(isset($sessions))
    @if($sessions->status == 0)
    	<span class="badge badge-info">Not Started</span>
	@elseif($sessions->status == 1)
		<span class="badge badge-success">Active</span>
	@elseif($sessions->status == 2)
		<span class="badge badge-warning">Ended</span>
    @endif
@endif
