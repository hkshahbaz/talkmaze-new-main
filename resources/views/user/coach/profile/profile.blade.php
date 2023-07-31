@extends('user.dashboard.layouts.main')

@section('title', 'Profile')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-----------------------MAin Setion----------------------------->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
                @include('user.dashboard.partials.sidebar')
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4 bg-light">
                    <br/>
                    @if(Session::has('success'))
                        <div class="alert alert-primary" role="alert">
                            User Updated successfuly
                        </div>
                    @elseif(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <!---------------------------------------------------------------------------------Login detail tab-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <ul class="nav nav-tabs border-0">
                                        <li class="mx-1"><a data-toggle="tab" class="active btn default1 change mt-4" href="#profile_info">Profile</a></li>
                                        <li class="mx-1"><a data-toggle="tab" class="btn default1 change mt-4" href="#time_table">Time Table</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="tab-content">
                                <div id="profile_info" class="tab-pane fade show active">
                                    <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-center " style="margin-top: 4rem;">
                                            <div class="col-md-8">
                                                <div class="text-center row justify-content-center">
                                                    <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden;">
                                                        <img src="{{ auth()->user()->profile->image }}" id="disimg" height="100%" style="width: 100%;; object-fit: cover; object-position: center;">
                                                    </div>
                                                    <div class="image-upload">
                                                        <label for="file-input">
                                                            <img class="img-position pointr" src="images/photo-camera.png"
                                                                width="30">
                                                        </label>

                                                        <input id="file-input" onchange="loadFile(event)" type="file" hidden name="photo" />
                                                    </div>
                                                    {!! $errors->first('photo', '<label id="photo-error" class="error" for="photo">:message</label>') !!}
                                                    <p id="error1" style="display:none; color:#FF0000;">
                                                        Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                                                    </p>
                                                    <p id="error2" style="display:none; color:#FF0000;">
                                                        Maximum File Size Limit is 5MB.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="1stnormal">
                                            <div class="row justify-content-center mt-4 ">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">First Name</label>
                                                        <input type="text" class="form-control input-bg"
                                                            id="formGroupExampleInput"  placeholder="John" value="{{$user->first_name}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput5">Last Name</label>
                                                        <input type="text" class="form-control input-bg"
                                                            id="formGroupExampleInput5"   placeholder="Doe" value="{{$user->last_name}}">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row justify-content-center ">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">Email</label>
                                                        <input type="text" class="form-control input-bg"
                                                            id="formGroupExampleInput2"  placeholder="johnr@gmail.com"
                                                            value="{{$user->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput3">Password</label>
                                                            <input type="password" class="form-control input-bg"
                                                                id="formGroupExampleInput3" placeholder="*******"
                                                                value="{{$user->password}}">
                                                        </div>

                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput3">Nickname</label>
                                                        <input type="text" class="form-control input-bg"
                                                               id="formGroupExampleInput3" placeholder=""
                                                               value="{{$user->nick}}">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput3">Timezone</label>
                                                        <select name="timezone" class="form-control input-bg" disabled>
                                                            <option value="" @if(auth()->user()->timezone == null) {{ 'selected' }} @endif>Please Select Timezone</option>
                                                            <option value="0" @if(auth()->user()->timezone == "0") {{ 'selected' }} @endif>GMT 0</option>
                                                            <option value="+1" @if(auth()->user()->timezone == "+1") {{ 'selected' }} @endif>GMT +1</option>
                                                            <option value="+2" @if(auth()->user()->timezone == "+2") {{ 'selected' }} @endif>GMT +2</option>
                                                            <option value="+3" @if(auth()->user()->timezone == "+3") {{ 'selected' }} @endif>GMT +3</option>
                                                            <option value="+4" @if(auth()->user()->timezone == "+4") {{ 'selected' }} @endif>GMT +4</option>
                                                            <option value="+5" @if(auth()->user()->timezone == "+5") {{ 'selected' }} @endif>GMT +5</option>
                                                            <option value="+6" @if(auth()->user()->timezone == "+6") {{ 'selected' }} @endif>GMT +6</option>
                                                            <option value="+7" @if(auth()->user()->timezone == "+7") {{ 'selected' }} @endif>GMT +7</option>
                                                            <option value="+8" @if(auth()->user()->timezone == "+8") {{ 'selected' }} @endif>GMT +8</option>
                                                            <option value="+9" @if(auth()->user()->timezone == "+9") {{ 'selected' }} @endif>GMT +9</option>
                                                            <option value="+10" @if(auth()->user()->timezone == "+10") {{ 'selected' }} @endif>GMT +10</option>
                                                            <option value="+11" @if(auth()->user()->timezone == "+11") {{ 'selected' }} @endif>GMT +11</option>
                                                            <option value="+12" @if(auth()->user()->timezone == "+12") {{ 'selected' }} @endif>GMT +12</option>
                                                            <option value="-1" @if(auth()->user()->timezone == "-1") {{ 'selected' }} @endif>GMT -1</option>
                                                            <option value="-2" @if(auth()->user()->timezone == "-2") {{ 'selected' }} @endif>GMT -2</option>
                                                            <option value="-3" @if(auth()->user()->timezone == "-3") {{ 'selected' }} @endif>GMT -3</option>
                                                            <option value="-4" @if(auth()->user()->timezone == "-4") {{ 'selected' }} @endif>GMT -4</option>
                                                            <option value="-5" @if(auth()->user()->timezone == "-5") {{ 'selected' }} @endif>GMT -5</option>
                                                            <option value="-6" @if(auth()->user()->timezone == "-6") {{ 'selected' }} @endif>GMT -6</option>
                                                            <option value="-7" @if(auth()->user()->timezone == "-7") {{ 'selected' }} @endif>GMT -7</option>
                                                            <option value="-8" @if(auth()->user()->timezone == "-8") {{ 'selected' }} @endif>GMT -8</option>
                                                            <option value="-9" @if(auth()->user()->timezone == "-9") {{ 'selected' }} @endif>GMT -9</option>
                                                            <option value="-10" @if(auth()->user()->timezone == "-10") {{ 'selected' }} @endif>GMT -10</option>
                                                            <option value="-11" @if(auth()->user()->timezone == "-11") {{ 'selected' }} @endif>GMT -11</option>
                                                            <option value="-12" @if(auth()->user()->timezone == "-12") {{ 'selected' }} @endif>GMT -12</option>
                                                            
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            @if(auth()->user()->hasRole('coach'))
                                                <div class="row justify-content-center">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput3">Bio</label>
                                                            <textarea class="form-control" name="bio" rows="5" disabled>{{ auth()->user()->bio }}</textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div id="1stupdate" style="display: none;">
                                            <div class="row justify-content-center mt-4 ">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">First Name</label>
                                                        <input name="first_name" type="text" class="form-control input-bg"
                                                            id="formGroupExampleInput" placeholder="John" value="{{$user->first_name}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput5">Last Name</label>
                                                        <input name="last_name" type="text" class="form-control input-bg"
                                                            id="formGroupExampleInput5" placeholder="Doe" value="{{$user->last_name}}">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row justify-content-center ">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">Email</label>
                                                        <input type="text" class="form-control input-bg"
                                                           disabled id="formGroupExampleInput2"
                                                           placeholder="john@example.com" value="{{$user->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label id="price11" for="formGroupExampleInput3">Password</label>
                                                        <a class="text-decoration-none color-1" style="float:right" href="#" onclick="hideElement()" id="passlink">Change password</a>
                                                        <input name="old" type="password" disabled class="form-control input-bg"
                                                            id="formGroupExampleInput11">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput4">Nickname</label>
                                                        <input type="text" class="form-control input-bg"
                                                               id="formGroupExampleInput4" name="nick" placeholder="Nick name"
                                                               value="{{$user->nick}}">
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput3">Timezone</label>
                                                        <select name="timezone" class="form-control input-bg" >
                                                           <option value="" @if(auth()->user()->timezone == null) {{ 'selected' }} @endif>Please Select Timezone</option>
                                                            <option value="0" @if(auth()->user()->timezone == "0") {{ 'selected' }} @endif>GMT 0</option>
                                                            <option value="+1" @if(auth()->user()->timezone == "+1") {{ 'selected' }} @endif>GMT +1</option>
                                                            <option value="+2" @if(auth()->user()->timezone == "+2") {{ 'selected' }} @endif>GMT +2</option>
                                                            <option value="+3" @if(auth()->user()->timezone == "+3") {{ 'selected' }} @endif>GMT +3</option>
                                                            <option value="+4" @if(auth()->user()->timezone == "+4") {{ 'selected' }} @endif>GMT +4</option>
                                                            <option value="+5" @if(auth()->user()->timezone == "+5") {{ 'selected' }} @endif>GMT +5</option>
                                                            <option value="+6" @if(auth()->user()->timezone == "+6") {{ 'selected' }} @endif>GMT +6</option>
                                                            <option value="+7" @if(auth()->user()->timezone == "+7") {{ 'selected' }} @endif>GMT +7</option>
                                                            <option value="+8" @if(auth()->user()->timezone == "+8") {{ 'selected' }} @endif>GMT +8</option>
                                                            <option value="+9" @if(auth()->user()->timezone == "+9") {{ 'selected' }} @endif>GMT +9</option>
                                                            <option value="+10" @if(auth()->user()->timezone == "+10") {{ 'selected' }} @endif>GMT +10</option>
                                                            <option value="+11" @if(auth()->user()->timezone == "+11") {{ 'selected' }} @endif>GMT +11</option>
                                                            <option value="+12" @if(auth()->user()->timezone == "+12") {{ 'selected' }} @endif>GMT +12</option>
                                                            <option value="-1" @if(auth()->user()->timezone == "-1") {{ 'selected' }} @endif>GMT -1</option>
                                                            <option value="-2" @if(auth()->user()->timezone == "-2") {{ 'selected' }} @endif>GMT -2</option>
                                                            <option value="-3" @if(auth()->user()->timezone == "-3") {{ 'selected' }} @endif>GMT -3</option>
                                                            <option value="-4" @if(auth()->user()->timezone == "-4") {{ 'selected' }} @endif>GMT -4</option>
                                                            <option value="-5" @if(auth()->user()->timezone == "-5") {{ 'selected' }} @endif>GMT -5</option>
                                                            <option value="-6" @if(auth()->user()->timezone == "-6") {{ 'selected' }} @endif>GMT -6</option>
                                                            <option value="-7" @if(auth()->user()->timezone == "-7") {{ 'selected' }} @endif>GMT -7</option>
                                                            <option value="-8" @if(auth()->user()->timezone == "-8") {{ 'selected' }} @endif>GMT -8</option>
                                                            <option value="-9" @if(auth()->user()->timezone == "-9") {{ 'selected' }} @endif>GMT -9</option>
                                                            <option value="-10" @if(auth()->user()->timezone == "-10") {{ 'selected' }} @endif>GMT -10</option>
                                                            <option value="-11" @if(auth()->user()->timezone == "-11") {{ 'selected' }} @endif>GMT -11</option>
                                                            <option value="-12" @if(auth()->user()->timezone == "-12") {{ 'selected' }} @endif>GMT -12</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                            @if(auth()->user()->hasRole('coach'))
                                                <div class="row justify-content-center">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput3">Bio</label>
                                                            <textarea class="form-control" name="bio" rows="5">{{ auth()->user()->bio }}</textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                            <div id="1stpass" style="display: none;">
                                                <div class="row justify-content-center ">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput9">New Password</label>
                                                            <input name="new" type="password" class="form-control input-bg"
                                                                id="formGroupExampleInput3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput10">Confirm Password</label>
                                                            <input name="confirm" type="password" class="form-control input-bg"
                                                                id="formGroupExampleInput7">
                                                        </div>
                                                    </div>
                                                </div></div>
                                        </div>
                                        <div class="row">
                                                <button id="btn2" class="mt-5 mb-5 btn btn-lg btn-size center-btn"
                                                onclick=" hideElementZero()" type="submit" style="display: none;" >UPDATE</button>
                                        </div>
                                        <button id="btn1" class="mt-5 mb-5 btn btn-lg btn-size center-btn"
                                            onclick=" hideElementZero()">EDIT</button>
                                        <br>
                                        <br>
                                        <br>
                                    </form>
                                </div>
                                <div id="time_table" class="tab-pane fade show">
                                    <div class="col-lg-12 p-3">
                                        <form action="{{ route('tutor.profile.timetable.save') }}" method="POST" class="mt-5">
                                            @csrf
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="timetable">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <p class="font-weight-bold">Day</p>
                                                                        <p>Monday</p>
                                                                        <p>Tuesday</p>
                                                                        <p>Wednesday</p>
                                                                        <p>Thursday</p>
                                                                        <p>Friday</p>
                                                                        <p>Saturday</p>
                                                                        <p>Sunday</p>
                                                                    </div>
                                                                    <div class="col-3 text-center">
                                                                        <p class="font-weight-bold">From</p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="from[0]" value="{{ count($from) > 0 ? $from[0] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="from[1]" value="{{ count($from) > 0 ? $from[1] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="from[2]" value="{{ count($from) > 0 ? $from[2] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="from[3]" value="{{ count($from) > 0 ? $from[3] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="from[4]" value="{{ count($from) > 0 ? $from[4] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="from[5]" value="{{ count($from) > 0 ? $from[5] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="from[6]" value="{{ count($from) > 0 ? $from[6] ?? '' : '' }}"></p>
                                                                    </div>
                                                                    <div class="col-3 text-center">
                                                                        <p class="font-weight-bold">To</p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="to[0]" value="{{ count($from) > 0 ? $to[0] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="to[1]" value="{{ count($from) > 0 ? $to[1] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="to[2]" value="{{ count($from) > 0 ? $to[2] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="to[3]" value="{{ count($from) > 0 ? $to[3] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="to[4]" value="{{ count($from) > 0 ? $to[4] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="to[5]" value="{{ count($from) > 0 ? $to[5] ?? '' : '' }}"></p>
                                                                        <p><input type='text' style="height: 24px !important;" class="form-control timepicker text-center" name="to[6]" value="{{ count($from) > 0 ? $to[6] ?? '' : '' }}"></p>
                                                                    </div>
                                                                    <div class="col-lg-12 text-center mt-3">
                                                                        <button type="submit" class="mt-5 mb-5 btn btn-lg btn-size center-btn">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- image validate  -->
    <script type="text/javascript" src="{{ asset('admin/js/imageValidate.js') }}"></script>

    <script>
        function hideElementZero() {
            document.getElementById('1stnormal').style.display = 'none';
            document.getElementById('1stupdate').style.display = 'block';
            document.getElementById('btn1').style.display = 'none';
            document.getElementById('btn2').style.display = 'block';


        }
        function hideElement() {
            document.getElementById('1stpass').style.display = 'block';
            document.getElementById('passlink').style.display = 'none';
            document.getElementById('price11').innerHTML = 'Old Password';
            document.getElementById('formGroupExampleInput11').disabled = false;
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <script src="{{asset('dashboard/js/moment.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/bootstrap-datetimepicker.min.js') }}"></script>

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

        var loadFile = function(event) {
            var image = document.getElementById('disimg');
            image.src  = 'https://www.jetroad.com.tw/v_comm/global/images/loading.gif'
            // image.src = URL.createObjectURL(event.target.files[0]);
            let form = new FormData;
            form.append('picture', $('input[type=file]')[0].files[0]);
            form.append('_token', '{{ csrf_token() }}');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'{{ route('update.profile') }}',
                data:form,
                enctype: 'multipart/form-data',
                method:'POST',
                processData:false,
                contentType: false,
                cache: false,
                success:function(data){
                    image.src = data
                },
                error:function(error){
                    image.src = 'https://cdn2.iconfinder.com/data/icons/bitsies/128/Cancel-512.png'
                }
            })
        };

        $(".timepicker").datetimepicker({
            format: 'LT',
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-bullseye',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            },
        });
    </script>

@endsection
@section('js')
@endsection
