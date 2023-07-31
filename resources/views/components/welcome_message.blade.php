<div class="col-md-4">
    <h3 class="color-1 mt-3 font-weight-normal">Dashboard</h3>
    <h6 class="color-1">Welcome to the @if(auth()->user()->hasRole('coach')) Coaching @elseif(auth()->user()->hasRole('parent')) Parent @else Student @endif Dashboard</h6>
</div>