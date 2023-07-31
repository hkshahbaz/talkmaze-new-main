@extends('user.dashboard.layouts.main')

@section('title', 'Home')

@section('content')
    <!-------------------------MAin Setion------------------------>
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
            @include('user.dashboard.partials.sidebar')
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4 ">
                    <div class="container-fluid">
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <h3 class="color-1 mt-3 font-weight-normal">Dashboard</h3>
                                <h6 class="color-1">Welcome to the @if(auth()->user()->hasRole('coach')) Coaching @else Student @endif Dashboard</h6>
                            </div>

                            <div class="col-md-8">
                                <div class="row mt-3 justify-content-end">
                                    <a href="#" class="mr-2" style="display:inline-block;"> <img onclick="myFunction()" class="mt-1 dropbtn " src="images/-e-notifications.png" width="30" height="30"><span id="noti-badge" style="background-color: red; border-radius: 50%;padding: 0px 5px 0px 5px; color: white; @if($notifications->count()>0) {{'display:block;'}} @else {{'display:none;'}} @endif" >{{ $notifications->count() }}</span></a>
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
                                        <div class="container-fluid @if($notifications->count()==0) {{ 'h-100' }} @endif" id="notipan">
                                            @forelse($notifications as $fg)
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

                    <div class="container">
                        <div class="row justify-content-center">
                             @if(session('success'))
                                <div class="alert alert-primary" role="alert">
                                    Your request has been sent. The coach will reach out to you soon to schedule your first session.
                                </div>
                            @endif
                        </div>
                        
                        @if(auth()->user()->timezone == null)
                        <div class="row justify-content-center">
                            <div class="alert alert-danger" role="alert">
                                Your time is set to <strong>GMT 0</strong> time zone, please <a href="{{ url('/dashboard-profile') }}">Click Here</a> update your time zone by your location
                            </div>
                        </div>
                        @endif

                        <!--------------------------------------------------------------1st card-------------------------->
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <a href="{{ url('/dashboard-session') }}" class="text-decoration-none">
                                        <div class="card shadow-card">
                                            <div class="card-body">
                                                <h1 class="text-center color-1">@if(auth()->user()->hasRole('coach')) {{ auth()->user()->tutor_session()->count() }}  @else {{ auth()->user()->student_session()->count() }} @endif</h1>
                                                <h5 class="text-center color-1">Sessions Attended</h5>
                                                <img class="center-btn mt-3" src="images/-e-coaching.png" width="50">

                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <a href="{{ url('/dashboard-coaching') }}" class="text-decoration-none">
                                        <div class="card shadow-card">
                                            <div class="card-body">
                                                <h1 class="text-center color-1">@if(auth()->user()->hasRole('coach')) {{ auth()->user()->host()->count() }}  @else {{ auth()->user()->enrollments()->count() }} @endif</h1>
                                                <h5 class="text-center color-1">Upcoming Sessions</h5>
                                                <img class="center-btn mt-3" src="images/-e-coaching.png" width="50">

                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <a href="{{ url('/dashboard-my/courses') }}" class="text-decoration-none">
                                        <div class="card shadow-card">
                                            <div class="card-body">
                                                <h1 class="text-center color-1">{{ auth()->user()->courses()->count() }}</h1>
                                                <h5 class="text-center color-1">My Resources</h5>
                                                <img class="center-btn mt-3" src="images/-e-coaching.png" width="50">

                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <a href="{{ url('/dashboard-post') }}" class="text-decoration-none">
                                        <div class="card shadow-card">
                                            <div class="card-body">
                                                <h1 class="text-center color-1">{{ auth()->user()->debates()->count() }}</h1>
                                                <h5 class="text-center color-1">My Posts</h5>
                                                <img class="center-btn mt-3" src="images/-e-coaching.png" width="50">

                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-------------------------------------------------calender--------------------->
                        <div class="row mt-4 mb-5">
                            <div class="col-md-8 mt-3">
                                <div class="card shadow-card">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-md-8">
                                                <div>
                                                    <div id="basic" class="article">
                                                        <div class="calendar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 scroll-f" id="dispzone">
                                                <a style="float:right;" class="row p-0 m-0" href="{{ url('dashboard-home') }}">View All</a>
                                                <br/>
                                                @if($scheduals)
                                                @forelse($scheduals as $scr)
                                                    <div>
                                                        <h5 class="mt-2">{{ date('d-M-Y',strtotime($scr->date_time.' '.auth()->user()->timezone.' hours')) }} <span class="ml-4 text-muted"
                                                                                                style="font-size: 12px;">{{ date('h:i a',strtotime($scr->date_time.' '.auth()->user()->timezone.' hours')) }}</span></h5>
                                                        <h6 class="text-muted">{{ $scr->title }}</h6>
                                                    </div>
                                                    <hr>
                                                @empty
                                                    <div class="row p-3 d-flex justify-content-center text-center h-100" style="align-items:center;">
                                                        <div>
                                                            <p class="text-muted">You haven’t signed up for any sessions. Learn more about coaching now!</p>
                                                            <a href="{{ url('/group-coaching') }}" class="btn default1 change mt-2">Explore Now</a>
                                                        </div>
                                                    </div>
                                                @endforelse
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="card shadow-card">
                                    <div class="card-body ">
                                        <div class="row " style="padding-top: 1rem;">
                                            <div class="col-12 scroll-f" >
                                                <h3 >News Feed</h3>
                                                @foreach($debates as $deb)
                                                @if($deb->user)
                                        <div class="row mt-2">
                                            <h4 class="font-weight-bold ml-3">@if($deb->anonymous) {{ $deb->user->nick }} @else{{ $deb->user->name }} @endif</h4>
                                            <h6 class="ml-3 mt-1 text-muted">{{ $deb->created_at->diffForHumans() }}</h6>
                                        </div>
                                                <div class="row">
                                                    <h5 class="ml-3 mr-2 font-weight-normal">{{ $deb->topic }}
                                                    </h5>
                                                </div>
                                                <div class="row">
                                                    <a class="ml-3 link-card" href="{{ url('/forum-detail/'.$deb->slug) }}" target="_blank">View detail</a>
                                                </div>
                                        <hr>
                                        @endif
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4 mb-5 justify-content-center">
                            @if(auth()->user()->hasRole('user') && $coach)

                                <div class="col-md-12 mt-3">
                                    <div class="card shadow-card">
                                        <div class="card-body">
                                            <h3 class=" font-weight-bold text-center">Your Coach</h3>
                                            <div class="text-center">
                                                <br/>
                                                <div style="width: 100px; height: 100px; border-radius: 10px; overflow: hidden;" class="m-auto">
                                                    <img style="object-position: center; object-fit: cover;" width="100%" src="{{ $coach->profile->image }}">
                                                </div>
                                                <h3 class=" mt-3">{{ $coach->name }}</h3>
                                                <!--<h4 class="text-muted">Effective speech in <br> larger audience</h4>-->
                                                <h5 class="font-weight-bold">{{ $coach->profile->city }}, {{ $coach->profile->country }}</h5>
                                                @if($session)
                                                    @if($session->is_group)
                                                    <a href="https://meet.google.com/iip-xucs-izy" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>
                                                        <!--<a href="{{ route('call.group.caller',['id'=>$session->room_id]) }}" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>-->
                                                    @else
                                                        <!--<a href="{{ route('call.caller',['id'=>$session->room_id]) }}" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>-->
                                                        <a href="https://meet.google.com/iip-xucs-izy" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>
                                                    @endif
                                                @else
                                                    <!--<a href="{{ route('call.caller',['id'=>$coach->pivot->room_id]) }}" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>-->
                                                    <a href="https://meet.google.com/iip-xucs-izy" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>
                                                @endif

                                                    {{--                                                <a href="{{ route('call.end',['id'=>$session->room_id]) }}" class="btn default3 mt-4 mb-5">Start Session</a>--}}
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            @elseif(auth()->user()->hasRole('coach'))
                                <style>
                                    .green{
                                        background-color: #69d2b1;
                                    }
                                </style>
                                <div class="col-md-4 mt-3">
                                    <div class="row p-0 m-0">
                                        <div class="card shadow-card w-100">

                                            <div class="card-body">
                                                <h3 class="text-muted">Initialize a Session</h3>
                                                <div class=" d-flex align-items-center">
                                                    <button type="button" class="m-2 btn green text-white" style="" data-toggle="modal" data-target="#exampleModal">
                                                        Start a Group Call
                                                    </button>
                                                    <button type="button" class="m-2 btn green text-white" data-toggle="modal" data-target="#exampleModal2">
                                                        Schedule a Session
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($session)
                                    <div class="row p-0 m-0 mt-4">
                                        <div class="card shadow-card w-100">
                                            <div class="card-body">
                                                <h3 class="text-muted">You Have Session Running</h3>
                                                <div class="d-flex justify-content-center" style="flex-direction: row;">
                                                    @if($session)
                                                        @if($session->is_group)
                                                            <a href="{{ route('call.group.caller',['id'=>$session->room_id]) }}" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>
                                                        @else
                                                            <a href="{{ route('call.caller',['id'=>$session->room_id]) }}" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>
                                                        @endif
                                                    @else
                                                        <a href="{{ route('call.caller',['id'=>$session->room_id]) }}" target="_blank" @if($running) style="background-color: #1a7c00;" @endif class="btn default3 mt-4 mb-5">@if($running) Join Session @else Start Session @endif</a>
                                                    @endif
                                                            <a href="{{ route('end.session',['id'=>$session->room_id]) }}" @if($running) style="background-color: red; margin: 5px;" @endif class="btn default3 mt-4 mb-5">@if($running) End Session @else Start Session @endif</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
        <!-----------------------drop down script--------------------------->
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            $('#noti-badge').hide()
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        document.getElementById("myDropdown").addEventListener('click', function (event) {
            event.stopPropagation();
        });
        $(document).ready(function () {
            $("#form-total-t-1").click(function () {
                // alert("The paragraph was clicked.");
                $("div.actions").children().css('display', "inline-block");
            });

            // $('a[href^="#finish"]').click(function () {
            //     $("#form-total").hide();
            //     $("#lastmodal").show();
            // });
        })

    </script>
    <!--calender-->
    
    <script type="text/javascript">
        //<![CDATA[
        $(function () {
            $('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.version);

            function onSelectHandler(date, context) {
                /**
                 * @date is an array which be included dates(clicked date at first index)
                 * @context is an object which stored calendar interal data.
                 * @context.calendar is a root element reference.
                 * @context.calendar is a calendar element reference.
                 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
                 * @context.storage.events is all events associated to this date
                 */
                //  alert(date)
                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You selected date ';

                if (date[0] !== null) {
                    text += date[0].format('YYYY-MM-DD');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                }
                else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('YYYY-MM-DD');
                }
                // console.log("calendar");


                $.ajax({
                    method:"post",
                    url:"{{ url('/get-active-classes') }}",
                    data:{
                        _token:'{{ csrf_token() }}',
                        date:date[0].format('YYYY-MM-DD')
                    },
                    success:function(data){
                        
                        // let datal = '<a style="float:right;" class="row p-0 m-0" href="{{ url('dashboard-home') }}">View All</a><br/>'
                        // data.forEach(obj=>{
                        //     datal += '<div><h5 class="mt-2">'+obj.date+'<span class="ml-4 text-muted" style="font-size: 12px;">'+obj.time+'</span></h5><h6 class="text-muted">'+obj.title+'</h6></div><hr>'
                        // });
                        // console.log("Hello");
                        document.getElementById('dispzone').innerHTML = datal
                    },
                    error:function(error){
                        console.log("error");
                    }
                })

                $box.text(text);
            }

            function onApplyHandler(date, context) {
                /**
                 * @date is an array which be included dates(clicked date at first index)
                 * @context is an object which stored calendar interal data.
                 * @context.calendar is a root element reference.
                 * @context.calendar is a calendar element reference.
                 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
                 * @context.storage.events is all events associated to this date
                 */

                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You applied date ';

                if (date[0] !== null) {
                    text += date[0].format('YYYY-MM-DD');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                }
                else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('YYYY-MM-DD');
                }

                $box.text(text);
            }

            // Default Calendar
            $('.calendar').pignoseCalendar({
                select: onSelectHandler,
                schedules: [
                    @forelse($scheduals as $scr)
                        @php echo "{
                            name:'holiday',
                            date:'".date('Y-m-d',strtotime($scr->date_time.' '.auth()->user()->timezone.' hours'))."'
                        },";
                        @endphp
                    @endforeach
                ],
                    scheduleOptions: {
                        colors: {
                            holiday: '#2fabb7',
                            seminar: '#5c6270',
                            meetup: '#ef8080',
                        }
                    }
            });

            // This use for DEMO page tab component.
            $('.menu .item').tab();
        });
    </script>
    @if(session('success'))
        <script>
            $.toast({
                text: "Congratulations! You have successfully requested for a Tutor. We weill contacting you soon", // Text that is to be shown in the toast
                heading: 'Congratulations!', // Optional heading to be shown on the toast
                icon: 'success', // Type of toast icon
                showHideTransition: 'fade', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 10000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                textAlign: 'left',  // Text alignment i.e. left, right or center
                loader: true,  // Whether to show loader or not. True by default
                loaderBg: '#9EC600',  // Background color of the toast loader
                beforeShow: function () {}, // will be triggered before the toast is shown
                afterShown: function () {}, // will be triggered after the toat has been shown
                beforeHide: function () {}, // will be triggered before the toast gets hidden
                afterHidden: function () {}  // will be triggered after the toast has been hidden
            });
        </script>
    @endif
@endsection
