@extends('user.dashboard.layouts.main')

@section('title', 'Student Requests')

@section('content')
    <!------------------------MAin Setion------------------------->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
                @include('user.dashboard.partials.sidebar')
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4">
                    <div class="container-fluid mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="row mt-3 bg-white shadow-card mr-2 border-curve">
                                    <h6 class=" ml-3 custom-font">Available on</h6>
                                    <span style="display: block; margin-left:auto;"><img class="p-1"
                                            src="images/calender (2).png" width="64%"></span>
                                </div>
                            </div>
                            <div class="col-md-4 ml-1 mr-1">
                                <div class="row mt-3 ">
                                    <select class="form-control shadow-card border-curve" onChange="nextpage(this.value)">
                                        <option value="">Please Select Timezone</option>
                                                    <option value="0" @if(isset($time) && $time == "0") {{ 'selected' }} @endif>GMT 0</option>
                                                    <option value="+1" @if(isset($time) && $time == "+1") {{ 'selected' }} @endif>GMT +1</option>
                                                    <option value="+2" @if(isset($time) && $time == "+2") {{ 'selected' }} @endif>GMT +2</option>
                                                    <option value="+3" @if(isset($time) && $time == "+3") {{ 'selected' }} @endif>GMT +3</option>
                                                    <option value="+4" @if(isset($time) && $time == "+4") {{ 'selected' }} @endif>GMT +4</option>
                                                    <option value="+5" @if(isset($time) && $time == "+5") {{ 'selected' }} @endif>GMT +5</option>
                                                    <option value="+6" @if(isset($time) && $time == "+6") {{ 'selected' }} @endif>GMT +6</option>
                                                    <option value="+7" @if(isset($time) && $time == "+7") {{ 'selected' }} @endif>GMT +7</option>
                                                    <option value="+8" @if(isset($time) && $time == "+8") {{ 'selected' }} @endif>GMT +8</option>
                                                    <option value="+9" @if(isset($time) && $time == "+9") {{ 'selected' }} @endif>GMT +9</option>
                                                    <option value="+10" @if(isset($time) && $time == "+10") {{ 'selected' }} @endif>GMT +10</option>
                                                    <option value="+11" @if(isset($time) && $time == "+11") {{ 'selected' }} @endif>GMT +11</option>
                                                    <option value="+12" @if(isset($time) && $time == "+12") {{ 'selected' }} @endif>GMT +12</option>
                                                    <option value="-1" @if(isset($time) && $time == "-1") {{ 'selected' }} @endif>GMT -1</option>
                                                    <option value="-2" @if(isset($time) && $time == "-2") {{ 'selected' }} @endif>GMT -2</option>
                                                    <option value="-3" @if(isset($time) && $time == "-3") {{ 'selected' }} @endif>GMT -3</option>
                                                    <option value="-4" @if(isset($time) && $time == "-4") {{ 'selected' }} @endif>GMT -4</option>
                                                    <option value="-5" @if(isset($time) && $time == "-5") {{ 'selected' }} @endif>GMT -5</option>
                                                    <option value="-6" @if(isset($time) && $time == "-6") {{ 'selected' }} @endif>GMT -6</option>
                                                    <option value="-7" @if(isset($time) && $time == "-7") {{ 'selected' }} @endif>GMT -7</option>
                                                    <option value="-8" @if(isset($time) && $time == "-8") {{ 'selected' }} @endif>GMT -8</option>
                                                    <option value="-9" @if(isset($time) && $time == "-9") {{ 'selected' }} @endif>GMT -9</option>
                                                    <option value="-10" @if(isset($time) && $time == "-10") {{ 'selected' }} @endif>GMT -10</option>
                                                    <option value="-11" @if(isset($time) && $time == "-11") {{ 'selected' }} @endif>GMT -11</option>
                                                    <option value="-12" @if(isset($time) && $time == "12") {{ 'selected' }} @endif>GMT -12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mt-3 ">
                                    <form>
                                        <input class="margin-search top-search-bar3" type="text" name="search"
                                            placeholder="Search..." style="width: 100%;" value="{{ isset($search) ? $search:'' }}">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container ">

                        @foreach($stuts as $st)
                            <div class="row mt-5">
                            <div class="container">
                                <div class="bg-white shadow-card" style="border-radius: 14px;">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div style="height: 120px; overflow: hidden;">
                                                <img src="{{ $st->student->profile->image }}" width="100%" height="100%" style="object-fit: cover;">
                                            </div>

                                        </div>
                                        <div class="col-md-4 p-4">
                                            <h4 class="text-left font-weight-bold mt-2">{{ $st->student->name }}</h4>
                                            <p>Time Zone : GMT{{ auth()->user()->timezone }}</p>
                                        </div>
{{--                                        <div class="col-md-3 p-2">--}}
{{--                                            <h4 class="text-center font-weight-bold mt-2">Availabality Days</h4>--}}
{{--                                            <h6 class="text-center">Monday</h6>--}}
{{--                                            <h6 class="text-center">Tuesday</h6>--}}
{{--                                            <h6 class="text-center">Wednesday</h6>--}}
{{--                                        </div>--}}
                                        <div class="col p-4">

                                        </div>
                                        <div class="col-md-4 p-2">
                                            <div class="text-center mt-def">

                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#detailmodel{{ $st->id }}">
                                                    View
                                                </button>
                                                <button onclick="updayteid({{$st->id}})" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                    Accept
                                                </button>
                                                <a href="/" class="btn default4"> Reject</a>
                                                 <div class="modal fade" id="detailmodel{{ $st->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title" id="exampleModalLabel">Request Details</h2>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <h3>Why would you like to be matched with a coach?</h3>
                                                                <p>{{ $st->why_would_you_like_to_be_matched_with_a_coach }}</p>
                                                                <hr/>
                                                                <h3>Do you have any experience with public speaking or debate? If so, please explain.</h3>
                                                                <p>{{ $st->experience_of_public_speaking }}</p>
                                                                <hr/>
                                                                <h3>You require a webcam and mic to effectively engage in sessions. Do you have access to a webcam and mic?Do you have access to a webcam and mic?</h3>
                                                                <p>{{ $st->do_you_have_access_to_a_webcam_and_mic }}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>
    <!--steps-->
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
        var modelid = 0
        function updayteid(id) {
            modelid = id
        }

    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" onclick="movealong(modelid)">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function movealong(modelid) {
            window.location.replace('{{ url('request/accept/') }}/'+ modelid)
        }
        function nextpage(val){
            
            // Construct URLSearchParams object instance from current URL querystring.
            // var queryParams = new URLSearchParams(window.location.search);
             
            // // Set new or modify existing parameter value. 
            // queryParams.set("timezone", val);
            // history.replaceState(null, null, "?"+queryParams.toString());
            // window.reload()
            
            var url = new URL(window.location.href);
            var timezone = url.searchParams.get("timezone");
            var search = url.searchParams.get("search");
            var type = url.searchParams.get("type");
            
            if(timezone || timezone === ''){
                window.location.replace(replaceUrlParam(window.location.search,'timezone',val))
            }else if(search || type){
                window.location.replace(window.location.href+'&timezone='+val)
            }else{
                window.location.replace(window.location.href+'?timezone='+val)
            }
        }
        function replaceUrlParam(url, paramName, paramValue)
        {
            if (paramValue == null) {
                paramValue = '';
            }
            var pattern = new RegExp('\\b('+paramName+'=).*?(&|#|$)');
            if (url.search(pattern)>=0) {
                return url.replace(pattern,'$1' + paramValue + '$2');
            }
            url = url.replace(/[?#]$/,'');
            return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
        }
    </script>
@endsection
