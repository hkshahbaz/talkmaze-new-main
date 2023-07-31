<div class="modal-content">
    <div class="modal-header">
        <h3 class="text-center pull-left">Set Hourly Rate</h3>
        <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
    </div>
    <form action="{{ route('coach.hourly_rate.save') }}" method="POST">
        @csrf
        <input type="hidden" name="tutor_id" value="{{ $tutor->id }}">
        <div class="modal-body">
            <div class="form-group">
                <label class="font-weight-bold">Rate / Hour</label>
                <input type="text" class="form-control numbers" name="hourly_rate" value="{{ $tutor->profile->hourly_rate ?? '' }}">
            </div> 
        </div>
        <div class="modal-footer">
            <button class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>