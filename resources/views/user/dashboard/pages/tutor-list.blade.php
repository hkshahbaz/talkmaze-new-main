@extends('user.dashboard.layouts.main')

@section('title', 'Tutor List')

@section('css')

@endsection
@section('content')
    <!----------------------------MAin Setion------------------------>
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
                @include('user.dashboard.partials.sidebar')
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4">
                    <div class="container-fluid mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-4 m-1">
                                <div class="row mt-3 ">
                                    <select class="form-control shadow-card border-curve" onChange="nextpagefilt(this.value)">
                                       <option value="">All Coaches</option>
                                       <option value="1" @if(isset($type) && $type == 1) {{ 'selected' }} @endif>Bronze</option>
                                       <option value="2" @if(isset($type) && $type == 2) {{ 'selected' }} @endif>Silver</option>
                                       <option value="3" @if(isset($type) && $type == 3) {{ 'selected' }} @endif>Gold</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4 m-1">
                                <div class="row mt-3 ">
                                    <select class="form-control shadow-card border-curve" onChange="nextpage(this.value)">
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
                            <div class="col-md-3 m-1">
                                <div class="row mt-3 ">
                                    <form>
                                        <input class="margin-search top-search-bar3" type="text" name="search" style="margin-left:0!important;"
                                            placeholder="Search..." style="width: 100%;" value="@if(isset($search)) {{ $search }} @endif">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container ">
                        <br/>
                        <!--------------------------------------------------------------1st card-------------------------->
                        <div class="row dashboard">
                            <div class="mt-5"></div>
                            @foreach($tuts as $tut)
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <div class="card">
                                        <img src="{{ $tut->profile->image }}" class="card-img" alt="">
                                        <div class="card-body">
                                            <div class="coach-detail">
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        <h5 class="mb-0 h_5">{{ $tut->name }}</h5>
                                                        <small class="text-muted"><b>Time Zone</b> : {{ $tut->timezone }}</small>
                                                    </div>
                                                   <div class="float-right">
                                                          
                                                    </div>
                                                </div>
                                                <p class="mt-2" style="min-height: 70px;">
                                                    @if($tut->bio)
                                                        {{ Str::limit($tut->bio, 60,'') }}
                                                        <a class="btn p-0 readMoreBtn" data-toggle="modal" data-target="#detailmodel{{ $tut->id }}" href="javaScript:void(0);">Read More...</a>
                                                    @endif
                                                </p>
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        @if(!is_null(auth()->user()->package) && auth()->user()->package->status == 'active')
                                                            <a data-toggle="modal" data-target="#coachRequestModal" class="btn btn-theme btn-small btnRequestTutor text-white" data-tutor-id="{{ $tut->id }}">Request Coach</a>
                                                        @else
                                                            <a data-toggle="modal" data-target="#updatePackageModal" class="btn btn-theme btn-small btnRequestTutor text-white" data-tutor-id="{{ $tut->id }}">Request Coach</a>
                                                        @endif
                                                    </div>
                                                    <div class="float-right">
                                                        <div class="rating text-right m-auto">
                                                            {{-- <span>4.7</span> --}}
                                                            <a href=""><i class="fa-star {{ ($tut->rating >= 1) ? 'fas':'far' }}"></i></a>
                                                            <a href=""><i class="fa-star {{ ($tut->rating >= 2) ? 'fas':'far' }}"></i></a>
                                                            <a href=""><i class="fa-star {{ ($tut->rating >= 3) ? 'fas':'far' }}"></i></a>
                                                            <a href=""><i class="fa-star {{ ($tut->rating >= 4) ? 'fas':'far' }}"></i></a>
                                                            <a href=""><i class="fa-star {{ ($tut->rating >= 5) ? 'fas':'far' }}"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="detailmodel{{ $tut->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="exampleModalLabel">{{$tut->name}}'s Bio</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <p>{{ $tut->bio }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br/>
                        <div class="modal fade" id="coachRequestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">Request Coach</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('student.request.tutor') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="tutor_id" name="tutor_id">
                                        <div class="modal-body">
                                            @if(auth()->user()->hasRole('parent'))
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <select name="parent_student_id" id="parent_student_id" class="form-control" style="border-radius: 0px; height: 43px;">
                                                                <option value="" selected>Select Student</option>
                                                                @foreach(parent_students() as $student)
                                                                    <option value="{{ $student->id }}">{{ $student->student_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label for="message">Write a message to Coach</label>
                                                <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" rows="3" required=""></textarea>
                                                @error('message')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="interval">Interval</label>
                                                        <select name="interval" id="interval" class="form-control" style="border-radius: 0px; height: 43px;">
                                                            <option value="1">One Time</option>
                                                            <option value="2">Recurring</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="no_of_weeks d-none">
                                                            <label for="no_of_weeks">No of Weeks</label>
                                                            <input type="number" name="no_of_weeks" class="form-control" id="no_of_weeks">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p><strong>Note:</strong> Select multiple time slots to schedule a session longer than half an hour.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="data">Book Slot</label>
                                                {{-- <input type="text" name="slot" id="data" class="form-control tutordatepicker" autocomplete="off"> --}}
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        {{-- <select name="day" id="day" class="form-control">
                                                            <option value="" disabled selected>Select Day</option>
                                                        </select> --}}
                                                        <input type="text" name="date" id="data" class="form-control @error('date') is-invalid @enderror tutordatepicker datepicker" autocomplete="off" required>
                                                        @error('date')
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <select name="slot[]" id="slot" class="form-control @error('slot') is-invalid  @enderror multiselect" style="height: 100%; border-radius:0px;width: 100%;" multiple required>
                                                            <option value="" selected disabled>Select Time</option>
                                                            <option value="08:00am-08:30am" selected>12:16am-01:30am</option>
                                                            <option value="08:00am-08:30am" selected>08:00am-08:30am</option>
                                                            <option value="08:30am-09:00am" selected>08:30am-09:00am</option>
                                                            <option value="09:00am-09:30am" selected>09:00am-09:30am</option>
                                                        </select>
                                                        @error('slot')
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12 error-div">
                                                        <span class="invalid-feedback font-weight-bold">Tutor is not available at this day</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary">Submit</button>
                                            <button type="button" class="btn btn-dander" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="updatePackageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">Buy Package</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3 class="alert alert-danger">Buy or Upgrade Your Package</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('student.packages.list') }}" class="btn btn-secondary">Buy Package</a>
                                        <button type="button" class="btn btn-dander" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------------------------------------------------------Login detail tab-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
@section('js')
    
    
    
    <!--steps-->
    <script>
        $(document).ready(function () {

            @if($errors->any())
                $("#coachRequestModal").modal('show')
            @endif

            $("#form-total-t-1").click(function () {
                // alert("The paragraph was clicked.");
                $("div.actions").children().css('display', "inline-block");
            });

            $('a[href^="#finish"]').click(function () {
                $("#form-total").hide();
                $("#lastmodal").show();
            });
            if({{$id}} == 0){
                $('#fcoach').click();
            }
        });

        $('.datepicker').datetimepicker({
            minDate:new Date(),
            useCurrent: false,
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down',
                previous: 'fa fa-angle-left',
                next: 'fa fa-angle-right',
                today: 'fa fa-bullseye',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            },
            format: 'YYYY/MM/DD',
        });

        $(document).ready(function() {
            $('.multiselect').multiselect({
                buttonWidth: '100%',
                maxHeight: '100%',
                checkbox: true,
                enableHTML: true
            });
        });

        $(".btnRequestTutor").click(function(){
            $('#tutor_id').val($(this).attr('data-tutor-id'));
            $.ajax({
                type: "GET",
                url: "{{ route('student.load.tutor.days') }}/"+$(this).attr('data-tutor-id'),
                success: function (response) {
                    $("#day").html(response);
                    $("#costumModal10").modal();
                }
            });
        });

        $("#interval").change(function (e) {
                e.preventDefault();
                if ($(this).val() == 2) {
                    $(".no_of_weeks").removeClass('d-none');
                } else {
                    $(".no_of_weeks").addClass('d-none');
                }
            });

        $(document).on("dp.change", ".tutordatepicker", function(e) {
            e.preventDefault();
            console.log("Date Selected");
            var tutor_id = $(this).closest("form").find('#tutor_id').val();
            $(".error-div .invalid-feedback").css('display', 'none');
            $.ajax({
                type: "GET",
                url: "{{ route('student.load.tutor.intervals') }}/"+tutor_id+"?day="+$(this).val(),
                success: function (response) {
                    if (response[1] == 200) {
                        $("#slot").html(response[0]);
                        $(".multiselect").multiselect('destroy');
                        $(".multiselect").multiselect({
                            buttonWidth: '100%',
                            maxHeight: 300,
                            checkbox: true,
                            enableHTML: true,
                        });
                    } else {
                        $("#slot").html(response[0]);
                        $(".error-div .invalid-feedback").css('display', 'block');
                    }
                    console.log(response);
                }
            });
        });
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
        function nextpagefilt(val){

            var url = new URL(window.location.href);
            var timezone = url.searchParams.get("timezone");
            var search = url.searchParams.get("search");
            var type = url.searchParams.get("type");
            // alert(type)
            if(type || type === ''){
                window.location.replace(replaceUrlParam(window.location.search,'type',val))
            }else if(search || timezone){
                window.location.replace(window.location.href+'&type='+val)
            }else{
                window.location.replace(window.location.href+'?type='+val)
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

        // New Script
        
    </script>
@endsection