@extends('user.layouts.main')

@section('title', $job->title)

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')

  <section>
    <div class="container">
        <div id="1stnormal">
          <div class="row">
            <div class="col-md-12">
              <div class="text-center ">
              <h4 class="text-dark text-uppercase pb-2 mt-5">
              {{ $job->title}}
              </h4>
              <div class="inner">&nbsp;</div>
            </div>
            </div>
          </div>
          <form method="POST" action="{{ route('applicant.register') }}" class="js-form form" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="job_id" value="{{ $job->id }}">
          <div class="row justify-content-center mt-5 ">
            <div class="col-md-4">
              <div class="form-group">
                <label class="font-weight-bold" for="formGroupExampleInput">First Name</label>
                <input class="form-control input-bg" type="text" name="fname"  style="height: 2.2rem;" data-validate-field="fname" value="{{old('fname')}}" placeholder="Jhon">
                {!! $errors->first('fname', '<label id="fname-error" class="text-danger" for="fname">:message</label>') !!}
                <p id="fname" class="mt-1 ml-1" style="display:none; color:#B81111;">
                   First Name is required!
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label class="font-weight-bold" for="formGroupExampleInput1">Last Name</label>
                <input class="form-control input-bg" type="text" name="lname"  style="height: 2.2rem;"  value="{{old('lname')}}" placeholder="Doe">
                {!! $errors->first('lname', '<label id="lname-error" class="text-danger" for="lname">:message</label>') !!}
                <p id="lname" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  Last Name is required!
                </p>
              </div>

            </div>
          </div>
          <div class="row justify-content-center ">
            <div class="col-md-4">
              <div class="form-group">
                <label class="font-weight-bold" for="formGroupExampleInput2">Email</label>
                <input class="form-control input-bg" type="text" name="email"  style="height: 2.2rem;"  value="{{old('email')}}" placeholder="johnr@gmail.com">
                {!! $errors->first('email', '<label id="email-error" class="text-danger" for="email">:message</label>') !!}
                <p id="email" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  Email is required!
                </p>
                <p id="email-valid" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  Please enter a valid email address!
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="font-weight-bold" for="formGroupExampleInput4">Phone No.</label>
                <input class="form-control input-bg" type="tel" name="phone"  style="height: 2.2rem;"  value="{{old('phone')}}" placeholder="111-222-3333">
                {!! $errors->first('phone', '<label id="phone-error" class="text-danger" for="phone">:message</label>') !!}
                <p id="phone" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  Phone number is required!
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center ">
            <div class="col-md-4">
              <div class="form-group">
                <label class="font-weight-bold" for="formGroupExampleInput5">Education Level</label>
                <input class="form-control input-bg" type="text" name="education"  style="height: 2.2rem;"  value="{{old('education')}}" placeholder="PHD">
                {!! $errors->first('education', '<label id="education-error" class="text-danger" for="education">:message</label>') !!}
                <p id="education" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  Education is required!
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label class="font-weight-bold" for="formGroupExampleInput6">Gender</label>&nbsp;
                <label class="radio-inline ml-3">
                  <input type="radio" name="gender" data-validate-field="gender" checked>&nbsp;Male
                </label>
                <label class="radio-inline ml-2">
                  <input type="radio" name="gender" data-validate-field="gender">&nbsp;Female
                </label>
                <label class="radio-inline ml-2">
                  <input type="radio" name="gender" data-validate-field="gender">&nbsp;Other
                </label>
                {!! $errors->first('gender', '<label id="gender-error" class="text-danger" for="gender">:message</label>') !!}
              </div>
            </div>

          </div>
          <div class="row justify-content-center ">
            <div class="col-md-8">
              <div class="form-group">
                <label class="font-weight-bold" for="exampleFormControlTextarea2">What skills and experiences do you have that suit you to this role?</label>
                <textarea class="form-control input-bg-box" id="exampleFormControlTextarea2" rows="3"
                  placeholder="Describe yourself here..." name="experience" >{{ old('experience') }}</textarea>
                  {!! $errors->first('experience', '<label id="experience-error" class="text-danger" for="experience">:message</label>') !!}
                  <p id="experience" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  Experience is required!
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center ">
            <div class="col-md-8">
              <div class="form-group">
                <label class="font-weight-bold" for="exampleFormControlTextarea3">Why would you like to join the TalkMaze team?</label>
                <textarea class="form-control input-bg-box" id="exampleFormControlTextarea3" rows="3"
                  placeholder="Please write here..." name="why_to_join" >{{ old('why_to_join') }}</textarea>
                  {!! $errors->first('why_to_join', '<label id="why_to_join-error" class="text-danger" for="why_to_join">:message</label>') !!}
                  <p id="why_to_join" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  Why would like to become a debate coach with Talkmaze is required!
                </p>
              </div>

            </div>
          </div>

          <!--file attachment-->
          <div class="row justify-content-center ">
            <div class="col-md-3">
              <div class="image-upload text-center">
                <label for="file-input2">
                  <div>
                    <h4 class="mt-4">Reference (attachment-optional)</h4>
                    <h6>Formate: PDF ,Max File Size: 5MB</h6>
                    <i class="fas fa-upload pointer"></i> <span class="pointer"
                      style="font-size: 18px; font-weight: 600;color:rgb(153, 153, 153) !important;">Upload</span>
                  </div>
                </label>
                <input type="file" name="reference" id="file-input2"  />
                {!! $errors->first('reference', '<label id="reference-error" class="text-danger" for="reference">:message</label>') !!}
                <p id="reference-error1" style="display:none; color:#B81111;">
                  Invalid File Format! File Format Must Be PDF.
                </p>
                <p id="reference-error2" style="display:none; color:#B81111;">
                   Maximum File Size Limit is 5MB.
                </p>
                <p id="reference_attached_success" style="display:none; color:#886060;">
                  File has been attached successfully.
                </p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="image-upload text-center">
                <label for="file-input1">
                  <div>
                    <h4 class="mt-4">Resume (attachment)</h4>
                    <h6>Format: PDF ,Max File Size: 5MB</h6>
                    <i class="fas fa-upload pointer"></i> <span class="pointer"
                      style="font-size: 18px; font-weight: 600;color:rgb(153, 153, 153) !important;">Upload</span>
                  </div>
                </label>
                <input id="file-input1" type="file" name="resume"/>
                {!! $errors->first('resume', '<label id="resume-error" class="text-danger" for="resume">:message</label>') !!}
                <p id="error1" style="display:none; color:#B81111;">
                  Invalid File Format! File Format Must Be PDF.
                </p>
                <p id="error2" style="display:none; color:#B81111;">
                   Maximum File Size Limit is 5MB.
                </p>
                <p id="resume-required" style="display:none; color:#B81111;">
                   Resume is required
                </p>
                <p id="resume_attached_success" style="display:none; color:#886060;">
                  File has been attached successfully.
                </p>
              </div>
            </div>
          </div>
          <!--accordian-->
          <div class="row justify-content-center mt-3 ">
            <div class="col-md-8 ">
              <div id="accordion" class="accordion">
                <div class="card">
                    <div class="card-header collapsed input-bg-box" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                    style="box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 14px 0 rgba(0, 0, 0, 0.19);" onclick=" hideElementZero()">
                        <a class="card-title">
                          What is your general availability like?<span id="plus" class="float-right" style="display: block;"><i
                          class="fas fa-plus"></i></span><span id="minus" class="float-right" style="display: none;"><i
                            class="fas fa-minus"></i></span>
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse input-bg-box" data-parent="#accordion" >
                        <div class="container-fluid pb-2">
                          <div class="row mt-3">
                            <div class="col-md-6">
                             <h5> Days</h5>
                            </div>
                            <div class="col-4 col-md-2 text-center"><h5> Time zone</h5> </div>
                            <div class="col-4 col-md-2 text-center"><h5>From</h5></div>
                            <div class="col-4 col-md-2 text-center"><h5>To</h5></div>
                          </div>
                        @foreach($days as $day)
                          <div class="row mt-2">
                            <div class="col-md-6">
                              <div class="form-check  mt-2">
                                <input type="checkbox" class="form-check-input checkbox" value="{{ $day->id }}" id="checkbox{{$day->id}}" name="day" data-validate-field="day">
                                <label class="form-check-label text-uppercase" for="exampleCheck1">
                                {{ $day->name }}
                                </label>
                              </div>
                            </div>
                            <div class="col-4 col-md-2">
                              <select class="form-control input-bg-select select2 time_zone false" name="day[{{$day->id}}][time_zone]" disabled >
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
                            <div class="col-4 col-md-2">
                              <select class="form-control input-bg-select select2 from false" name="day[{{$day->id}}][from]" disabled>
                                <option value="00:00">12.00 AM</option>
                                <option value="00:30">12.30 AM</option>
                                <option value="01:00">01.00 AM</option>
                                <option value="01:30">01.30 AM</option>
                                <option value="02:00">02.00 AM</option>
                                <option value="02:30">02.30 AM</option>
                                <option value="03:00">03.00 AM</option>
                                <option value="03:30">03.30 AM</option>
                                <option value="04:00">04.00 AM</option>
                                <option value="04:30">04.30 AM</option>
                                <option value="05:00">05.00 AM</option>
                                <option value="05:30">05.30 AM</option>
                                <option value="06:00">06.00 AM</option>
                                <option value="06:30">06.30 AM</option>
                                <option value="07:00">07.00 AM</option>
                                <option value="07:30">07.30 AM</option>
                                <option value="08:00">08.00 AM</option>
                                <option value="08:30">08.30 AM</option>
                                <option value="09:00">09.00 AM</option>
                                <option value="09:30">09.30 AM</option>
                                <option value="10:00">10.00 AM</option>
                                <option value="10:30">10.30 AM</option>
                                <option value="11:00">11.00 AM</option>
                                <option value="11:30">11.30 AM</option>
                                <option value="12:00">12.00 PM</option>
                                <option value="12:30">12.30 PM</option>
                                <option value="13:00">01.00 PM</option>
                                <option value="13:30">01.30 PM</option>
                                <option value="14:00">02.00 PM</option>
                                <option value="14:30">02.30 PM</option>
                                <option value="15:00">03.00 PM</option>
                                <option value="15:30">03.30 PM</option>
                                <option value="16:00">04.00 PM</option>
                                <option value="16:30">04.30 PM</option>
                                <option value="17:00">05.00 PM</option>
                                <option value="17:30">05.30 PM</option>
                                <option value="18:00">06.00 PM</option>
                                <option value="18:30">06.30 PM</option>
                                <option value="19:00">07.00 PM</option>
                                <option value="19:30">07.30 PM</option>
                                <option value="20:00">08.00 PM</option>
                                <option value="20:30">08.30 PM</option>
                                <option value="21:00">09.00 PM</option>
                                <option value="21:30">09.30 PM</option>
                                <option value="22:00">10.00 PM</option>
                                <option value="22:30">10.30 PM</option>
                                <option value="23:00">11.00 PM</option>
                                <option value="23:30">11.30 PM</option>
                              </select>
                            </div>
                            <div class="col-4 col-md-2">
                              <select class="form-control input-bg-select select2 to false" name="day[{{$day->id}}][to]" disabled>
                                <option value="00:00">12.00 AM</option>
                                <option value="00:30">12.30 AM</option>
                                <option value="01:00">01.00 AM</option>
                                <option value="01:30">01.30 AM</option>
                                <option value="02:00">02.00 AM</option>
                                <option value="02:30">02.30 AM</option>
                                <option value="03:00">03.00 AM</option>
                                <option value="03:30">03.30 AM</option>
                                <option value="04:00">04.00 AM</option>
                                <option value="04:30">04.30 AM</option>
                                <option value="05:00">05.00 AM</option>
                                <option value="05:30">05.30 AM</option>
                                <option value="06:00">06.00 AM</option>
                                <option value="06:30">06.30 AM</option>
                                <option value="07:00">07.00 AM</option>
                                <option value="07:30">07.30 AM</option>
                                <option value="08:00">08.00 AM</option>
                                <option value="08:30">08.30 AM</option>
                                <option value="09:00">09.00 AM</option>
                                <option value="09:30">09.30 AM</option>
                                <option value="10:00">10.00 AM</option>
                                <option value="10:30">10.30 AM</option>
                                <option value="11:00">11.00 AM</option>
                                <option value="11:30">11.30 AM</option>
                                <option value="12:00">12.00 PM</option>
                                <option value="12:30">12.30 PM</option>
                                <option value="13:00">01.00 PM</option>
                                <option value="13:30">01.30 PM</option>
                                <option value="14:00">02.00 PM</option>
                                <option value="14:30">02.30 PM</option>
                                <option value="15:00">03.00 PM</option>
                                <option value="15:30">03.30 PM</option>
                                <option value="16:00">04.00 PM</option>
                                <option value="16:30">04.30 PM</option>
                                <option value="17:00">05.00 PM</option>
                                <option value="17:30">05.30 PM</option>
                                <option value="18:00">06.00 PM</option>
                                <option value="18:30">06.30 PM</option>
                                <option value="19:00">07.00 PM</option>
                                <option value="19:30">07.30 PM</option>
                                <option value="20:00">08.00 PM</option>
                                <option value="20:30">08.30 PM</option>
                                <option value="21:00">09.00 PM</option>
                                <option value="21:30">09.30 PM</option>
                                <option value="22:00">10.00 PM</option>
                                <option value="22:30">10.30 PM</option>
                                <option value="23:00">11.00 PM</option>
                                <option value="23:30">11.30 PM</option>
                              </select>
                            </div>
                          </div>
                        @endforeach
                        </div>
                        </div>
                    </div>
                </div>
                <p id="timetable" style="display: none; color:#B81111;" class="mt-2">
                  At least one day should be selected! Click on plus button to expand Timetable.
                </p>
            </div>

          </div>
          <!--radio button-->
          <div class="row justify-content-center mt-3">
            <div class="col-md-8">
              <div class="form-group">
                <label class="font-weight-bold">Do you have reliable internet access as well as a webcam and microphone?</label>
                <br>
                  <input type="hidden" class="form-check-input"  name="allow_device" value="yes">
                  <input type="hidden" class="form-check-input"  name="allow_device" value="no">
                {!! $errors->first('allow_device', '<label id="allow_device-error" class="text-danger" for="allow_device">:message</label>') !!}
                <p id="allow-device-required" style="display:none; color:#B81111;">
                   You have to check devices
                </p>
                <span class="ml-2" style="font-size: 14px; font-style: italic !important;cursor: pointer;"> <a class="text-dark" id="check_devices"><u>Check
                      Devices</u></a></span>
                <span id="allowed" class="d-none"><i class="fa fa-check fa-2x text-success ml-2" aria-hidden="true" ></i>Allowed</span>
                <span id="not-allowed" class="d-none"><i class="fa fa-times fa-2x text-danger ml-2" aria-hidden="true"removeClass></i>&nbsp; Not allowed</span>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-md-8">
              <div class="form-group">
                <label class="font-weight-bold" for="how_here_about_us">How did you hear about us?</label>
                <textarea class="form-control input-bg-box" rows="3"
                  placeholder="Please write here..." name="how_here_about_us">{{ old('how_here_about_us') }}</textarea>
                  {!! $errors->first('how_here_about_us', '<label id="how_here_about_us-error" class="error" for="how_here_about_us">:message</label>') !!}
                  <p id="how_here_about_us" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  How did you here about us is required!
                </p>
              </div>

            </div>
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-md-8">
              <div class="form-group">
                <label class="font-weight-bold" for="comments">Any additional comments</label>
                <textarea class="form-control input-bg-box" rows="3"
                  placeholder="Please write here..." name="comments">{{ old('comments') }}</textarea>
                  {!! $errors->first('comments', '<label id="comments-error" class="error" for="comments">:message</label>') !!}
                  <p id="comments" class="mt-1 ml-1" style="display:none; color:#B81111;">
                  How did you here about us is required!
                </p>
              </div>

            </div>
          </div>
          <!--button-->
          <div class="row justify-content-center">
            <div class="col-md-8">
              <button type="submit" class="btn btn-form text-uppercase mt-4 ">Submit</button>

            </div>
          </div>
          </form>
        </div>
    </div>
  </section>

<!----------------------Footer ---------------------------->
@include('user.partials.footer')

<!----------------------Copyright---------------------------->
@include('user.partials.copyright')

<script type="text/javascript" src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/myvalidate.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/imageValidate.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/applicant_validate.js') }}"></script>

@endsection