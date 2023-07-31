@extends('user.dashboard.layouts.main')

@section('title', 'Post')

@section('content')
    <!------------------------MAin Setion----------------------->
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
                                    <a href="#" class="mr-2" style="display:inline-block;"> <img onclick="myFunction()" class="mt-1 dropbtn " src="images/-e-notifications.png" width="30" height="30">@if($notifications->count()>0)<span id="noti-badge" style="background-color: red; border-radius: 50%;padding: 0px 5px 0px 5px; color: white;">{{ $notifications->count() }}</span>@endif</a>
                                    <form action="{{ route('search.posts') }}">
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
                    <br>
                    <h2 class="container text-muted">My Posts</h2>
                    <br/>
                    <div class="container">
                        @forelse($myposts as $post)
                        <!--------------------------------------------------------------1st card-------------------------->
                        <div class="row mt-3">
                            <div class="container">
                                <div class="card shadow-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto m-auto">
                                                <div style="width: 100px; height: 100px; overflow: hidden; border-radius: 50%;">
                                                    <img style="object-fit: cover; object-position: center;  width: 100%;" src="{{ auth()->user()->profile->image }}" height="100%">
                                                </div>
                                                <p class="mt-4 font-weight-bold text-muted">{{ auth()->user()->name }}</p>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3 class="font-weight-bold">{{ $post->topic }}</h3>
                                                        <p style="word-wrap: break-word;">{{ substr($post->description,0,300) }}</p>
                                                        <h5 class="mt-2 text-muted">{{ $post->created_at->diffForHumans() }}</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <img src="images/like.png" width="25"><span
                                                            class="ml-1 like-text">{{ $post->likes_count }}</span>
                                                        <img class="ml-2" src="images/dislike.png" width="25"><span
                                                            class="ml-1 like-text">{{ $post->dislikes_count }}</span>
                                                        <img class="ml-3" src="images/comments.png" width="25"><span
                                                            class="ml-1 like-text">{{ $post->comments_count }} Comments</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-right mr-3">
                                                            <a href="{{ url('/forum-detail/'.$post->slug) }}" target="_blank" style="text-decoration: none; color:#69d2b1;">View detail</a>
                                                            &nbsp;&nbsp;&nbsp;<a href="{{ route('delete.post',['id'=>$post->id]) }}" style="color: red;"><i class="fas fa-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @empty
                            @if(isset($type))
                                    <div style="height: 70vh; width: 100%; align-items: center; display: flex; justify-content: center;">
                                        <div cla class="text-muted" ss="text-center">
                                            <h1>No Posts Found!</h1>
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
                                        <img src="{{ asset('images/Discussion_s3f5-ns@2x.png') }}" width="50%" alt="">
                                        <H3>You haven't started any debates! Post now</H3>
                                        <a href="{{ url('/forum') }}" class="btn default1 change mt-4">Post Now</a>
                                    </div>
                                </div>
                             @endif
                        @endforelse
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>
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
