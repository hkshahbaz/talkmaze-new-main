<div class="modal-content">
    <div class="modal-header">
        <h3 class="text-center pull-left">Refund Payment</h3>
        <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
    </div>
    <form action="{{ route('session.refund.payment') }}" method="POST">
        @csrf
        <div class="modal-body">
            <input type="hidden" name="stripe_id" value="{{ $transaction->stripe_id }}">
            <div class="form-group">
                <label class="font-weight-bold">Student</label>
                <input type="text" class="form-control" name="payment" value="{{ $student->name }}" readonly>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Package Amount</label>
                <input type="text" class="form-control" name="payment" value="{{ $student->package->plan->name }} ( ${{ $transaction->amount }} )" readonly>
            </div> 
            <div class="form-group">
                <label class="font-weight-bold">Enter Payment</label>
                <input type="text" class="form-control numbers" name="payment" value="">
            </div> 
        </div>
        <div class="modal-footer">
            <button class="btn btn-success">Refund</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>