<div class="row mb-5">
	<div class="col-md-4">
	    <h3 class="color-1 mt-3 font-weight-normal">Dashboard</h3>
	    <h6 class="color-1">Welcome to the @if(auth()->user()->hasRole('coach')) Coaching @elseif(auth()->user()->hasRole('parent')) Parent @else Student @endif Dashboard</h6>
	</div>
	<div class="col-md-8">
	    <div class="row mt-3 justify-content-end">
	        <a href="#" class="mr-2" style="display:inline-block;"> <img onclick="myFunction()" class="mt-1 dropbtn " src="{{ asset('images/-e-notifications.png')}}" width="30" height="30"><span id="noti-badge" style="background-color: red; border-radius: 50%;padding: 0px 5px 0px 5px; color: white; @if(notifications()->count()>0) {{'display:block;'}} @else {{'display:none;'}} @endif" >{{ notifications()->count() }}</span></a>
	        <form class="mr-3 ml-3">
	            <a href="{{ url('/dashboard-profile') }}">
	                <div class="row">
	                    <span class="ml-3 mr-3" style="width:30px; height:30px; overflow:hidden; border-radius:50%; display:inline-block;">
	                        <img src="{{ auth()->user()->profile->image }}" style="height:100%;" width="100%">
	                    </span>
	                    <span style="display:inline-block;"><p class="text-muted m-auto ml-3">{{ auth()->user()->name }}</p></span>

	                </div>
	            </a>
	        </form>
	    </div>
	</div>
	<!----------------------------notification dropdown-------------------->
	<div id="myDropdown" class="dropdown-content dropdown-menu-right bg-white ">
	    <div class="container">
	        <div id="1stmodal">
	            <div   style="height:60vh; width:100%;" class="scroll-f mt-3 mb-3" >
	                <div class="container-fluid @if(notifications()->count()==0) {{ 'h-100' }} @endif" id="notipan">
	                    @forelse(notifications() as $fg)
	                        <a class="p-0 m-0" href="@if($fg->verb == 'SESSION') {{ url('/dashboard-coaching') }} @elseif($fg->verb == 'CHAT') {{ url('/chat/'.$fg->sender->id) }} @elseif($fg->verb == 'COMMENT') {{ url('/forum-detail/'.$fg->action_id) }} @endif">
	                        <div class="row mt-1" >
	                            <div class="col-3">
	                                <img class="mt-3" src="{{ $fg->sender->profile->image }}" width="50">
	                            </div>
	                            <div class="col-9">
	                                <h5 class="mt-2">{{ $fg->sender->name}}{{ $fg->sender->name }}</h5>
	                                <h6>{{ $fg->action }}</h6>
	                                <h6 class="h7 color-1">{{ $fg->created_at->diffForHumans() }}</h6>
	                            </div>
	                        </div>
	                        </a>
	                        <hr/>
	                    @empty
	                        <div class="row justify-content-center" style="display: flex; align-items: center; height: 100% !important;">
	                            <h3 class="text-muted">No Notification Yet!</h3>
	                        </div>
	                    @endforelse
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>