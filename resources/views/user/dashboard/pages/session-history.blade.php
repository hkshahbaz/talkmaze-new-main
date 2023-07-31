@extends('user.dashboard.layouts.main')

@section('title', 'Session History')

@section('content')
    <!-----------------------------MAin Setion--------------------->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
                @include('user.dashboard.partials.sidebar')
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4 p-0">
                    <div class="container-fluid shadow-card">
                        <div class="row p-1 ">
                            <div class="col-md-4">
                                <h3 class="color-1 mt-3 font-weight-normal">Dashboard</h3>
                                <h6 class="color-1">Welcome to the @if(auth()->user()->hasRole('coach')) Coaching @else Student @endif Dashboard</h6>

                            </div>

                            <div class="col-md-8">
                                <div class="row mt-3 justify-content-end mr-5">
                                    <a href="#" class="mr-2" style="display:inline-block;"> <img onclick="myFunction()" class="mt-1 dropbtn " src="images/-e-notifications.png" width="30" height="30">@if($notifications->count()>0)<span id="noti-badge" style="background-color: red; border-radius: 50%;padding: 0px 5px 0px 5px; color: white;">{{ $notifications->count() }}</span>@endif</a>
                                    <form>
                                        <input class="margin-search top-search-bar" type="text" name="search"
                                            placeholder="Search...">
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
                    </div>
                    <!----------------------------------------------------------------caleder and chat portion-->
                    <div class="container-fluid">
                        <div class="row bg-white">
                            <!-------------------------date of event-------------------------->
                            <div class="col-md-3  scroll-f" style="height: 87vh;">
                                @foreach($sessions as $ses)
                                    <a href="{{ url('/dashboard-session/'.$ses->session_id) }}" style="text-decoration: none;">
                                        <div style="cursor: pointer;">
                                            <h5 class="mt-2">{{ \Carbon\Carbon::createFromDate($ses->created_at)->diffForHumans() }} <span class="ml-4 text-muted"
                                                                                                                  style="font-size: 12px;">{{ date('h:i a', strtotime($ses->created_at.' '.auth()->user()->timezone.' hour')) }}</span></h5>
                                            <h6 class="text-muted">Coaching Session</h6>
                                        </div>
                                    </a>
                                    <hr>
                                @endforeach
                            </div>

                            @if(isset($messages))
                            <div class="col-md-9 position-fixed " style="margin-left: 20.1%">
                                <div class="row bg-main p-2" style="width: 82.5%;" >
                                    <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 50%;">
                                        <img  style="object-fit: cover; object-position: center;" src="{{ $usert->profile->image }}" width="50">
                                    </div>
                                    <h4 class="text-white mt-3 ml-3">{{ $usert->name }}</h4>
                                    <i class="fas fa-paperclip text-white ml-auto mt-3 pointr"
                                      style="margin-right: 2%;"  onclick="call()"></i>
                                </div>
{{--                                <div class="row bg-light p-2">--}}
{{--                                    <img class="ml-3 " src="images/videothumbnail.png" width="auto">--}}
{{--                                    <img class="pause-position" src="images/playwhite.png" width="auto">--}}
{{--                                    <h5 class="text-center mt-4 ml-4">Session recording <br> Duration 59:50</h5>--}}

{{--                                </div>--}}
                                <!-------------------------------side menu data------------------------->
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <div class="row justify-content-center mt-2">
                                        @foreach($messages as $fil)
                                            @if($fil->type == 2)
                                                <a href="{{ $fil->message }}" target="_blank">
                                                    <div class="col-auto bg-light m-1">
                                                        <div class="text-center mt-1">
                                                            <img src="{{ asset('images/file.png') }}" width="30">
                                                            <h6>Document</h6>
                                                            <h6 class="h7">{{ date('d M Y H:i:A',strtotime($fil->created_at.' '.auth()->user()->timezone.' hours')) }}</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <!------------------------------------------chat box--------------------------->
                                <div id="main" style="height: 70vh; overflow: scroll; width: 80%;">
                                    @foreach($messages as $msg)
                                        @if($msg->type ==1)
                                            <div class="row @if($msg->sender_id == auth()->id()) justify-content-start @else justify-content-end @endif p-2 mt-2 ">
                                                <div class="col-4 p-2 border-curve bg-light">
                                                    <h4 class="ml-3 mt-1 p-2" style="word-wrap: break-word;">{{ $msg->message }}</h4>
                                                </div>
                                            </div>
                                            <div class="row @if($msg->sender_id == auth()->id()) justify-content-start @else justify-content-end @endif">
                                                <h6 class="mt-0 mr-3 p-2" style="word-wrap: break-word;">{{ $msg->created_at->diffForHumans() }}</h6>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------drop down script--------------------------->
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
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
    </script>
    <!-------------------------------tab script-------------->
    <script>
        function hideElementZero() {
            document.getElementById('1stmodal').style.display = 'block';
            document.getElementById('2ndmodal').style.display = 'none';
            document.getElementById("notdul").style.color = '#69d2b1';
            document.getElementById("reqdul").style.color = 'black';
        }
        function hideElement() {
            document.getElementById('1stmodal').style.display = 'none';
            document.getElementById('2ndmodal').style.display = 'block';
            document.getElementById("notdul").style.color = 'black';
            document.getElementById("reqdul").style.color = '#69d2b1';
        }
    </script>
    <script>
        var callOne = true;
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginRight = "445px";
            document.getElementById("main").style.width = "auto";

        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginRight = "0";
            document.getElementById("main").style.width = "80%";

        }

        function call() {
            if (callOne) openNav();
            else closeNav();
            callOne = !callOne;
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('dashboard/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#form-total-t-1").click(function () {
                // alert("The paragraph was clicked.");
                $("div.actions").children().css('display', "inline-block");
            });

            $('a[href^="#finish"]').click(function () {
                $("#form-total").hide();
                $("#lastmodal").show();
            });
        })

    </script>


@endsection
