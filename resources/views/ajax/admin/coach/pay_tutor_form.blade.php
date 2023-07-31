<div class="modal-content">
    <div class="modal-header">
        <h3 class="text-center pull-left">Pay Coach</h3>
        <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
    </div>
    <form action="{{ route('transfer', $tutor->id) }}" method="GET">
        <div class="modal-body">
            <div class="form-group">
                <label class="font-weight-bold">Coach Name</label>
                <input type="text" class="form-control" name="coach_name" value="{{ $tutor->name }}" readonly>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Coach Hours</label>
                <input type="text" class="form-control" name="hours" value="{{ $tutorHours }}" readonly>
            </div> 
            <div class="form-group">
                <label class="font-weight-bold">Amount</label>
                <input type="text" class="form-control numbers" name="amount" value="{{ $tutorPayment ?? 0 }}">
            </div> 
        </div>
        <div class="modal-footer">
            <button class="btn btn-success" @if($tutorHours == 0)  @endif>Pay Coach</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>