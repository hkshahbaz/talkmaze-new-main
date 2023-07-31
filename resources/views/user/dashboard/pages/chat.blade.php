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
                                    <a href="#"> <img onclick="myFunction()" class="mt-1 dropbtn "
                                                      src="{{ asset('images/-e-notifications.png') }}" width="30" height="30"></a>
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
                                        <div style="height:60vh; width:100%;" class="scroll-f mt-3 mb-3">
                                            <div class="container-fluid">
                                                <div class="row mt-1">
                                                    <div class="col-3">
                                                        <img class="mt-3" src="{{ asset('images/msgpic.png') }}" width="50">
                                                    </div>
                                                    <div class="col-9">
                                                        <h5 class="mt-2">John Doe</h5>
                                                        <h6>Lorem ipsum dolor sit amet consecte <br>dolor sit amet
                                                            consecte</h6>
                                                        <h6 class="h7 color-1">3 days</h6>
                                                    </div>
                                                </div>
                                                <div class="row mt-1 border-g">
                                                    <div class="col-3">
                                                        <img class="mt-3" src="{{ asset('images/msgpic1.png') }}" width="50">
                                                    </div>
                                                    <div class="col-9">
                                                        <h5 class="mt-2">John Doe</h5>
                                                        <h6>Lorem ipsum dolor sit amet consecte <br>dolor sit amet
                                                            consecte</h6>
                                                        <h6 class="h7 color-1">3 days</h6>
                                                    </div>
                                                </div>
                                                <div class="row mt-1 border-g">
                                                    <div class="col-3">
                                                        <img class="mt-3" src="{{ asset('images/msgpic1.png') }}" width="50">
                                                    </div>
                                                    <div class="col-9">
                                                        <h5 class="mt-2">John Doe</h5>
                                                        <h6>Lorem ipsum dolor sit amet consecte <br>dolor sit amet
                                                            consecte</h6>
                                                        <h6 class="h7 color-1">3 days</h6>
                                                    </div>
                                                </div>
                                                <div class="row mt-1 border-g">
                                                    <div class="col-3">
                                                        <img class="mt-3" src="{{ asset('images/msgpic.png') }}" width="50">
                                                    </div>
                                                    <div class="col-9">
                                                        <h5 class="mt-2">John Doe</h5>
                                                        <h6>Lorem ipsum dolor sit amet consecte <br>dolor sit amet
                                                            consecte</h6>
                                                        <h6 class="h7 color-1">3 days</h6>
                                                    </div>
                                                </div>
                                                <div class="row mt-1 border-g">
                                                    <div class="col-3">
                                                        <img class="mt-3" src="{{ asset('images/msgpic1.png') }}" width="50">
                                                    </div>
                                                    <div class="col-9">
                                                        <h5 class="mt-2">John Doe</h5>
                                                        <h6>Lorem ipsum dolor sit amet consecte <br>dolor sit amet
                                                            consecte</h6>
                                                        <h6 class="h7 color-1">3 days</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row justify-content-center" style="background-color: #69d2b1; padding: 15px;">
                                <div class="col-auto">
                                    <div style="width: 35px; height: 35px; border-radius: 50%; overflow: hidden;">
                                        <img style="object-position: center; object-fit: cover;" width="100%" height="100%" src="{{ $user->profile->image }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="mt-auto text-white m-0 p-0" style="font-weight: bold">{{ $user->name }}</p>
                                    <p class="mt-auto text-white m-0 p-0" style="font-size: 11px;">Debating Session</p>
                                </div>
                            </div>
                            <div class="row p-0 m-0" style="overflow-y: scroll; height: 80vh;position: relative; background-color: white;">
                                <div class="container mb-5" id="messeghere">

                                </div>
                                <hr/>
                            </div>
                            <div style="position: absolute; left: 0; bottom: 0; width: 100%; padding: 10px; background-color: white; z-index: 999" class="row p-2 m-0">
                                <div class="col-md-1 col-sm-1 mr-2">
                                    <input id="filesnd" type="file" hidden>
                                    <button onclick="$('#filesnd').click()" style="border: none; background-color: transparent;"><img src="{{ asset('images/plus.png') }}" width="30"></button>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="input-group">
                                <textarea class="form-control comment-box   bg-card-1 p-1" style="color: black!important; height: 2.1rem;"
                                          placeholder="Write a message here.." aria-label="With textarea" id="messagbox"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <a href="javascript:send()"><img src="{{ asset('images/send.png') }}" width="30"></a>
                                </div>
                            </div>
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
    <script>
        // message sending code
        function send() {
            let data;
            if( document.getElementById("filesnd").files.length == 0 ) {
                data = {
                    type: 1,
                    receiver_id: '{{ $user->id }}',
                    message: $("#messagbox").val(),
                    email:true,
                    _token: '{{ csrf_token() }}'
                }
                $.ajax({
                    url:'{{ route('send.message') }}',
                    method:'POST',
                    data: data,
                    success:function (data) {
                        $('#filesnd').val('');
                        $("#messagbox").val('');
                    },
                    error:function (error) {
                        console.log(error)
                    }
                })
            }else{
                data = new FormData();
                jQuery.each(jQuery('#filesnd')[0].files, function(i, file) {
                    data.append('file', file);
                });
                data.append('type', 2);
                data.append('receiver_id', '{{ $user->id }}');
                data.append('_token', '{{ csrf_token() }}');
                $.ajax({
                    url:'{{ route('send.message') }}',
                    method:'POST',
                    data: data,
                    cache : false,
                    contentType: false,
                    processData: false,
                    success:function (data) {
                        $('#filesnd').val('');
                        $("#messagbox").val('');
                    },
                    error:function (error) {
                        console.log(error)
                    }
                })
            }
            console.log(data)
        }

        function fetchmsg() {
            $.ajax({
                url:'{{ route('chat',['id'=>$id]) }}',
                method:'GET',
                success:function (data) {
                    document.getElementById('messeghere').innerHTML = data
                },
                error:function (error) {
                    console.log(error)
                }
            })
        }
        setInterval(()=>{
            fetchmsg()
        },1000)
    </script>

@endsection
