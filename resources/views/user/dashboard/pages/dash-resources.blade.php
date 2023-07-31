@extends('user.dashboard.layouts.main')

@section('title', 'Resources')

@section('content')
    <!--------------------------MAin Setion---------------->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
            @include('user.dashboard.partials.sidebar')
            <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-md-4">
                                <h3 class="color-1 mt-3 font-weight-normal">Dashboard</h3>
                                <h6 class="color-1">Welcome to the @if(auth()->user()->hasRole('coach')) Coaching @else Student @endif Dashboard</h6>
                            </div>

                            <div class="col-md-8">
                                <div class="row mt-3 justify-content-end mr-5">
                                    <a href="#" class="mr-2" style="display:inline-block;"> <img onclick="myFunction()" class="mt-1 dropbtn " src="{{ asset('images/-e-notifications.png') }}" width="30" height="30">@if($notifications->count()>0)<span id="noti-badge" style="background-color: red; border-radius: 50%;padding: 0px 5px 0px 5px; color: white;">{{ $notifications->count() }}</span>@endif</a>
                                    <form action="{{ route('search.resources') }}">
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
                    <br/>
                    <h2 class="container text-muted">My Courses</h2>
                    <br/>
                    <div class="container">
{{--                        <div class="row justify-content-end">--}}
{{--                            @if($r->previousPageUrl() )--}}
{{--                                <a href="{{ $r->previousPageUrl() }}" class="btn btn-default m-1" style="border:1px solid #aeaeae!important;"> < Previous</a>--}}
{{--                            @endif--}}
{{--                            @if($r->count() >= $r->currentPage())--}}
{{--                                <a href="{{ $r->nextPageUrl() }}" class="btn btn-default m-1" style="border:1px solid #aeaeae!important;"> Next ></a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
                        <div class="row">
                            @forelse($r as $course)
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                                    <a href="{{  url('/dashboard-my/courses/'.$course->slug) }}" class="text-decoration-none text-dark">
                                        <div class="card">
                                            <div style="position: relative; left: 0; top: 0;">
                                                <div style="height: 130px; overflow: hidden;object-fit: cover; object-position: center;">
                                                    <img class="card-img-top main-img"
                                                         src="{{$course->image }}"
                                                         alt="Card image cap" style="object-fit: cover; object-position: center;">
                                                </div>
                                                <img class="img-fluid prof-img rounded-circle"
                                                     src="{{ $course->user->profile->image }}"
                                                     width="50" style="position: absolute; bottom: -10%; right: 3%">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-size: 22px;">
                                                    {{ $course->name}}
                                                </h5>
                                                <h6 class="card-text font-weight-normal" style="font-size: 1em;">
                                                    {{
                                                        $first20words = implode(' ', array_slice(str_word_count($course->description,1), 0, 20))

                                                      }}
                                                </h6>
                                                <hr>
                                                <i class="fas fa-star card-font" style="color: #ffc32c;"></i><span
                                                    class="ml-2 card-font text-muted">
                                    @php
                                        $rate = $course->rating()->avg('rate');
                                        $rate = number_format((float)$rate, 1, '.', '');
                                    @endphp

                                                    {{ !empty($rate) ? $rate : '0' }}
                                </span>
                                                <span class="float-right card-font text-muted"><i class="fas fa-users text-muted"></i> {{ !empty($course->users_enroll_count) ? $course->users_enroll_count : 'No'}} Students Enrolled</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                @if(isset($type))
                                    <div style="height: 70vh; width: 100%; align-items: center; display: flex; justify-content: center;">
                                        <div cla class="text-muted" ss="text-center">
                                            <h1>No Resources Found!</h1>
                                        </div>
                                    </div>
                                @else
                                <style>
                                    .change{
                                        background-color: #69d2b1!important;
                                        color: white !important;
                                    }
                                    .change:hover{
                                        background-color: white !important;
                                        color: #69d2b1 !important;
                                    }
                                </style>
                                <div style="height: 70vh; width: 100%; align-items: center; display: flex; justify-content: center;">
                                    <div class="text-center">
                                        <img src="{{ asset('images/young-people-stydying-together-online-courses_81522-1664.jpg') }}" width="75%" alt="">
                                        <H3>You don't have any resources!</H3>
                                        <a href="{{ url('/resources') }}" class="btn default1 change mt-4">Explore Now</a>
                                    </div>
                                </div>
                                @endif
                            @endforelse
                        </div>
                        <div class="row justify-content-center">
                            @if($r->previousPageUrl() )
                                <a href="{{ $r->previousPageUrl() }}" class="btn btn-default m-1" style="border:1px solid #aeaeae!important;"> < Previous</a>
                            @endif
                            @if($r->count() >= $r->currentPage())
                                <a href="{{ $r->nextPageUrl() }}" class="btn btn-default m-1" style="border:1px solid #aeaeae!important;"> Next ></a>
                            @endif
                        </div>
                        <br/>
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
{{--    <!-------------------------------tab script-------------->--}}
{{--    <script>--}}
{{--        function hideElementZero() {--}}
{{--            document.getElementById('1stmodal').style.display = 'block';--}}
{{--            document.getElementById('2ndmodal').style.display = 'none';--}}
{{--            document.getElementById("notdul").style.color = '#69d2b1';--}}
{{--            document.getElementById("reqdul").style.color = 'black';--}}
{{--        }--}}
{{--        function hideElement() {--}}
{{--            document.getElementById('1stmodal').style.display = 'none';--}}
{{--            document.getElementById('2ndmodal').style.display = 'block';--}}
{{--            document.getElementById("notdul").style.color = 'black';--}}
{{--            document.getElementById("reqdul").style.color = '#69d2b1';--}}
{{--        }--}}
{{--    </script>--}}
{{--    <!----hide show of button-->--}}
{{--    <script>--}}
{{--        var toggle = document.getElementById("toggle");--}}
{{--        var content = document.getElementById("content");--}}

{{--        toggle.addEventListener("click", function () {--}}
{{--            content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";--}}
{{--        });--}}


{{--    </script>--}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('dashboard/js/main.js') }}"></script>

{{--    <!--steps-->--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $("#form-total-t-1").click(function () {--}}
{{--                // alert("The paragraph was clicked.");--}}
{{--                $("div.actions").children().css('display', "inline-block");--}}
{{--            });--}}

{{--            $('a[href^="#finish"]').click(function () {--}}
{{--                $("#form-total").hide();--}}
{{--                $("#lastmodal").show();--}}
{{--            });--}}
{{--        })--}}

{{--    </script>--}}

@endsection
