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
                    <div class="container-fluid">
                        @include('components.header')
                    </div>
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
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                        <li class="nav-item waves-effect   waves-light">
                                            <a class="nav-link custom-nav-link text-center active custom_nav_tab_ancor" id="home-tab" data-toggle="tab" href="#profile_info" role="tab" aria-controls="pending" aria-selected="false"> <i class="fa fa-clock mr-2"></i> Profile</a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link custom-nav-link text-center custom_nav_tab_ancor" id="profile-tab" data-toggle="tab" href="#time_table" role="tab" aria-controls="approved" aria-selected="false"> <i class="fa fa-check mr-2"></i> Time Table</a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link custom-nav-link text-center custom_nav_tab_ancor" id="profile-tab" data-toggle="tab" href="#connect_zoom" role="tab" aria-controls="cancelled" aria-selected="false"> <i class="fa fa-user mr-2"></i> Connect Zoom Account</a>
                                        </li>
                                    </ul>
                                </div>
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
                                        <div id="1stupdate" style="display: block;">
                                            <div class="row justify-content-center mt-4 ">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">First Name</label>
                                                        <input name="first_name" type="text" class="form-control input-bg"
                                                            id="formGroupExampleInput" placeholder="John" value="{{ explode(" ", $user->name)[0] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput5">Last Name</label>
                                                        <input name="last_name" type="text" class="form-control input-bg"
                                                            id="formGroupExampleInput5" placeholder="Doe" value="{{ explode(" ", $user->name)[1] ?? '' }}">
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
                                                        <input name="password" type="password" disabled class="form-control input-bg"
                                                            id="formGroupExampleInput11" value="{{ $user->password }}">
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
                                                        <select name="timezone" class="form-control input-bg time_zone">
                                                            <option value="0">--select timezone--</option>
                                                            <option value='Pacific/Midway' >(UTC-11:00) Midway Island</option>
                                                            <option value='Pacific/Samoa' >(UTC-11:00) Samoa</option>
                                                            <option value='Pacific/Honolulu' >(UTC-10:00) Hawaii</option>
                                                            <option value='US/Alaska' >(UTC-09:00) Alaska</option>
                                                              <option value='America/Los_Angeles' >(UTC-08:00) Pacific Time (US &amp; Canada)</option>
                                                            <option value='America/Tijuana' >(UTC-08:00) Tijuana</option>
                                                            <option value='US/Arizona' >(UTC-07:00) Arizona</option>
                                                            <option value='America/Chihuahua' >(UTC-07:00) Chihuahua</option>
                                                            <option value='America/Chihuahua' >(UTC-07:00) La Paz</option>
                                                            <option value='America/Mazatlan' >(UTC-07:00) Mazatlan</option>
                                                            <option value='US/Mountain' >(UTC-07:00) Mountain Time (US &amp; Canada)</option>
                                                            <option value='America/Managua' >(UTC-06:00) Central America</option>
                                                            <option value='US/Central' >(UTC-06:00) Central Time (US &amp; Canada)</option>
                                                            <option value='America/Mexico_City' >(UTC-06:00) Guadalajara</option>
                                                            <option value='America/Mexico_City' >(UTC-06:00) Mexico City</option>
                                                            <option value='America/Monterrey' >(UTC-06:00) Monterrey</option>
                                                            <option value='Canada/Saskatchewan' >(UTC-06:00) Saskatchewan</option>
                                                            <option value='America/Bogota' >(UTC-05:00) Bogota</option>
                                                            <option value='US/Eastern' >(UTC-05:00) Eastern Time (US &amp; Canada)</option>
                                                            <option value='US/East-Indiana' >(UTC-05:00) Indiana (East)</option>
                                                            <option value='America/Lima' >(UTC-05:00) Lima</option>
                                                            <option value='America/Bogota' >(UTC-05:00) Quito</option>
                                                            <option value='Canada/Atlantic' >(UTC-04:00) Atlantic Time (Canada)</option>
                                                            <option value='America/Caracas' >(UTC-04:30) Caracas</option>
                                                            <option value='America/La_Paz' >(UTC-04:00) La Paz</option>
                                                            <option value='America/Santiago' >(UTC-04:00) Santiago</option>
                                                            <option value='Canada/Newfoundland' >(UTC-03:30) Newfoundland</option>
                                                            <option value='America/Sao_Paulo' >(UTC-03:00) Brasilia</option>
                                                            <option value='America/Argentina/Buenos_Aires' >(UTC-03:00) Buenos Aires</option>
                                                            <option value='America/Argentina/Buenos_Aires' >(UTC-03:00) Georgetown</option>
                                                            <option value='America/Godthab' >(UTC-03:00) Greenland</option>
                                                            <option value='America/Noronha' >(UTC-02:00) Mid-Atlantic</option>
                                                            <option value='Atlantic/Azores' >(UTC-01:00) Azores</option>
                                                            <option value='Atlantic/Cape_Verde' >(UTC-01:00) Cape Verde Is.</option>
                                                            <option value='Africa/Casablanca' >(UTC+00:00) Casablanca</option>
                                                            <option value='Europe/London' >(UTC+00:00) Edinburgh</option>
                                                            <option value='Etc/Greenwich' >(UTC+00:00) Greenwich Mean Time : Dublin</option>
                                                            <option value='Europe/Lisbon' >(UTC+00:00) Lisbon</option>
                                                            <option value='Europe/London' >(UTC+00:00) London</option>
                                                            <option value='Africa/Monrovia' >(UTC+00:00) Monrovia</option>
                                                            <option value='UTC' >(UTC+00:00) UTC</option>
                                                            <option value='Europe/Amsterdam' >(UTC+01:00) Amsterdam</option>
                                                            <option value='Europe/Belgrade' >(UTC+01:00) Belgrade</option>
                                                            <option value='Europe/Berlin' >(UTC+01:00) Berlin</option>
                                                            <option value='Europe/Berlin' >(UTC+01:00) Bern</option>
                                                            <option value='Europe/Bratislava' >(UTC+01:00) Bratislava</option>
                                                            <option value='Europe/Brussels' >(UTC+01:00) Brussels</option>
                                                            <option value='Europe/Budapest' >(UTC+01:00) Budapest</option>
                                                            <option value='Europe/Copenhagen' >(UTC+01:00) Copenhagen</option>
                                                            <option value='Europe/Ljubljana' >(UTC+01:00) Ljubljana</option>
                                                            <option value='Europe/Madrid' >(UTC+01:00) Madrid</option>
                                                            <option value='Europe/Paris' >(UTC+01:00) Paris</option>
                                                            <option value='Europe/Prague' >(UTC+01:00) Prague</option>
                                                            <option value='Europe/Rome' >(UTC+01:00) Rome</option>
                                                            <option value='Europe/Sarajevo' >(UTC+01:00) Sarajevo</option>
                                                            <option value='Europe/Skopje' >(UTC+01:00) Skopje</option>
                                                            <option value='Europe/Stockholm' >(UTC+01:00) Stockholm</option>
                                                            <option value='Europe/Vienna' >(UTC+01:00) Vienna</option>
                                                            <option value='Europe/Warsaw' >(UTC+01:00) Warsaw</option>
                                                            <option value='Africa/Lagos' >(UTC+01:00) West Central Africa</option>
                                                            <option value='Europe/Zagreb' >(UTC+01:00) Zagreb</option>
                                                            <option value='Europe/Athens' >(UTC+02:00) Athens</option>
                                                            <option value='Europe/Bucharest' >(UTC+02:00) Bucharest</option>
                                                            <option value='Africa/Cairo' >(UTC+02:00) Cairo</option>
                                                            <option value='Africa/Harare' >(UTC+02:00) Harare</option>
                                                            <option value='Europe/Helsinki' >(UTC+02:00) Helsinki</option>
                                                            <option value='Europe/Istanbul' >(UTC+02:00) Istanbul</option>
                                                            <option value='Asia/Jerusalem' >(UTC+02:00) Jerusalem</option>
                                                            <option value='Europe/Helsinki' >(UTC+02:00) Kyiv</option>
                                                            <option value='Africa/Johannesburg' >(UTC+02:00) Pretoria</option>
                                                            <option value='Europe/Riga' >(UTC+02:00) Riga</option>
                                                            <option value='Europe/Sofia' >(UTC+02:00) Sofia</option>
                                                            <option value='Europe/Tallinn' >(UTC+02:00) Tallinn</option>
                                                            <option value='Europe/Vilnius' >(UTC+02:00) Vilnius</option>
                                                            <option value='Asia/Baghdad' >(UTC+03:00) Baghdad</option>
                                                            <option value='Asia/Kuwait' >(UTC+03:00) Kuwait</option>
                                                            <option value='Europe/Minsk' >(UTC+03:00) Minsk</option>
                                                            <option value='Africa/Nairobi' >(UTC+03:00) Nairobi</option>
                                                            <option value='Asia/Riyadh' >(UTC+03:00) Riyadh</option>
                                                            <option value='Europe/Volgograd' >(UTC+03:00) Volgograd</option>
                                                            <option value='Asia/Tehran' >(UTC+03:30) Tehran</option>
                                                            <option value='Asia/Muscat' >(UTC+04:00) Abu Dhabi</option>
                                                            <option value='Asia/Baku' >(UTC+04:00) Baku</option>
                                                            <option value='Europe/Moscow' >(UTC+04:00) Moscow</option>
                                                            <option value='Asia/Muscat' >(UTC+04:00) Muscat</option>
                                                            <option value='Europe/Moscow' >(UTC+04:00) St. Petersburg</option>
                                                            <option value='Asia/Tbilisi' >(UTC+04:00) Tbilisi</option>
                                                            <option value='Asia/Yerevan' >(UTC+04:00) Yerevan</option>
                                                            <option value='Asia/Kabul' >(UTC+04:30) Kabul</option>
                                                            <option value='Asia/Karachi' >(UTC+05:00) Islamabad</option>
                                                            <option value='Asia/Karachi' >(UTC+05:00) Karachi</option>
                                                            <option value='Asia/Tashkent' >(UTC+05:00) Tashkent</option>
                                                            <option value='Asia/Calcutta' >(UTC+05:30) Chennai</option>
                                                            <option value='Asia/Kolkata' >(UTC+05:30) Kolkata</option>
                                                            <option value='Asia/Calcutta' >(UTC+05:30) Mumbai</option>
                                                            <option value='Asia/Calcutta' >(UTC+05:30) New Delhi</option>
                                                            <option value='Asia/Calcutta' >(UTC+05:30) Sri Jayawardenepura</option>
                                                            <option value='Asia/Katmandu' >(UTC+05:45) Kathmandu</option>
                                                            <option value='Asia/Almaty' >(UTC+06:00) Almaty</option>
                                                            <option value='Asia/Dhaka' >(UTC+06:00) Astana</option>
                                                            <option value='Asia/Dhaka' >(UTC+06:00) Dhaka</option>
                                                            <option value='Asia/Yekaterinburg' >(UTC+06:00) Ekaterinburg</option>
                                                            <option value='Asia/Rangoon' >(UTC+06:30) Rangoon</option>
                                                            <option value='Asia/Bangkok' >(UTC+07:00) Bangkok</option>
                                                            <option value='Asia/Bangkok' >(UTC+07:00) Hanoi</option>
                                                            <option value='Asia/Jakarta' >(UTC+07:00) Jakarta</option>
                                                            <option value='Asia/Novosibirsk' >(UTC+07:00) Novosibirsk</option>
                                                            <option value='Asia/Hong_Kong' >(UTC+08:00) Beijing</option>
                                                            <option value='Asia/Chongqing' >(UTC+08:00) Chongqing</option>
                                                            <option value='Asia/Hong_Kong' >(UTC+08:00) Hong Kong</option>
                                                            <option value='Asia/Krasnoyarsk' >(UTC+08:00) Krasnoyarsk</option>
                                                            <option value='Asia/Kuala_Lumpur' >(UTC+08:00) Kuala Lumpur</option>
                                                            <option value='Australia/Perth' >(UTC+08:00) Perth</option>
                                                            <option value='Asia/Singapore' >(UTC+08:00) Singapore</option>
                                                            <option value='Asia/Taipei' >(UTC+08:00) Taipei</option>
                                                            <option value='Asia/Ulan_Bator' >(UTC+08:00) Ulaan Bataar</option>
                                                            <option value='Asia/Urumqi' >(UTC+08:00) Urumqi</option>
                                                            <option value='Asia/Irkutsk' >(UTC+09:00) Irkutsk</option>
                                                            <option value='Asia/Tokyo' >(UTC+09:00) Osaka</option>
                                                            <option value='Asia/Tokyo' >(UTC+09:00) Sapporo</option>
                                                            <option value='Asia/Seoul' >(UTC+09:00) Seoul</option>
                                                            <option value='Asia/Tokyo' >(UTC+09:00) Tokyo</option>
                                                            <option value='Australia/Adelaide' >(UTC+09:30) Adelaide</option>
                                                            <option value='Australia/Darwin' >(UTC+09:30) Darwin</option>
                                                            <option value='Australia/Brisbane' >(UTC+10:00) Brisbane</option>
                                                            <option value='Australia/Canberra' >(UTC+10:00) Canberra</option>
                                                            <option value='Pacific/Guam' >(UTC+10:00) Guam</option>
                                                            <option value='Australia/Hobart' >(UTC+10:00) Hobart</option>
                                                            <option value='Australia/Melbourne' >(UTC+10:00) Melbourne</option>
                                                            <option value='Pacific/Port_Moresby' >(UTC+10:00) Port Moresby</option>
                                                            <option value='Australia/Sydney' >(UTC+10:00) Sydney</option>
                                                            <option value='Asia/Yakutsk' >(UTC+10:00) Yakutsk</option>
                                                            <option value='Asia/Vladivostok' >(UTC+11:00) Vladivostok</option>
                                                            <option value='Pacific/Auckland' >(UTC+12:00) Auckland</option>
                                                            <option value='Pacific/Fiji' >(UTC+12:00) Fiji</option>
                                                            <option value='Pacific/Kwajalein' >(UTC+12:00) International Date Line West</option>
                                                            <option value='Asia/Kamchatka' >(UTC+12:00) Kamchatka</option>
                                                            <option value='Asia/Magadan' >(UTC+12:00) Magadan</option>
                                                            <option value='Pacific/Fiji' >(UTC+12:00) Marshall Is.</option>
                                                            <option value='Asia/Magadan' >(UTC+12:00) New Caledonia</option>
                                                            <option value='Asia/Magadan' >(UTC+12:00) Solomon Is.</option>
                                                            <option value='Pacific/Auckland' >(UTC+12:00) Wellington</option>
                                                            <option value='Pacific/Tongatapu' >(UTC+13:00) Nuku'alofa</option>
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
                                            <button id="btn2" class="mt-5 mb-5 btn btn-lg btn-size center-btn" type="submit" style="display: block;" >UPDATE</button>
                                        </div>
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
                                <div id="connect_zoom" class="tab-pane fade show">
                                    <div class="col-lg-12 p-3">
                                        <form action="{{ route('tutor.profile.timetable.save') }}" method="POST" class="mt-5">
                                            @csrf
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="{{ route('zoom.oauth.redirect') }}" class="btn btn-size center-btn">Connect Zoom Account</a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        
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

        selected_user_time_zone();
        function selected_user_time_zone()
        {
            time_zone = '{{ auth()->user()->timezone ?? "N/A" }}';
            $("body").find(".time_zone option").each(function(){
                if($(this).val() == time_zone)
                {
                    $(this).attr("selected", true);
                }

            });
        }

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
