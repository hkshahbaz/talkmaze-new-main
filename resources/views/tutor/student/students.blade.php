@extends('user.dashboard.layouts.main')

@section('title', 'Students')

@section('css')
@endsection
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
                        <div class="col-md-4">
                            <h3 class="color-1 mt-3 font-weight-normal">Dashboard</h3>
                            <h6 class="color-1">Welcome to the @if(auth()->user()->hasRole('coach')) Coaching @else Student @endif Dashboard</h6>
                        </div>
                       <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="col-lg-12 mb-3 text-center  ">
                                        <h2 class="text-center text-muted">Students</h2>
                                    </div>
                                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                        <li class="nav-item waves-effect   waves-light">
                                            
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                                            <div class="col-lg-12 p-3">
                                                <table class="table w-100 data_table" >
                                                    <thead>
                                                    <tr>
                                                        <th>Student Name</th>
                                                        <th>Package Hours</th>
                                                        <th>Remaining Hours</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($list as $item)
                                                        <tr>
                                                            <td>{{ $item->student->name ?? ""}}</td>
                                                            <td>{{ $item->student->package->plan->hours ?? ""}}</td>
                                                            <td>{{ $item->student->package->remaining_hour ?? ""}}</td>
                                                            <td class="text-right">
                                                                <a href="javascript:void(0);" type="button"  rel="tooltip" data-id="{{ $item->id }}" class="btn btn-success rounded-circle btn-round set_schedule_btn" data-toggle="modal" 
                                                                    @if($item->student->package->remaining_hour == 0) data-target="#alertNoScheduleModal" @else data-target="#setDateTimeModal" @endif title="Set Time Table">
                                                                    <i class="fa fa-clock"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div> 
                    </div>
                    <br/>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------drop down script--------------------------->

        <!-- request tutor Modal -->
    <div class="modal fade rounded" id="setDateTimeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-secondary font-weight-600">Set Class Schedule</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form method="POST" action="{{route('tutor.student.schedule.save')}}" class="row" id="tutor_request_form">
                        @csrf
                        <input type="hidden" name="req_id" class="req_field">
                        <div class="col-lg-12 p-0">
                            <input type="hidden" name="student_id" value="{{auth()->user()->id}}">
                            <input type="hidden" id="tutor_id" name="tutor_id" >
                        </div>
                        <input type="hidden" name="interval" value="1">
                        <div class="col-lg-12">
                            <div class="col-lg-6 pl-0 float-left book-slot">
                                <div class="form-group pl-0 col-12 mb-10 ">
                                    <label class="text-secondary h6 mb-2" for="book_slot">Book Slot</label>
                                    <input id="date_picker" type="text" class="form-control shadow-none rounded-sm book_slot" required="true" name="date" autocomplete="off">
                                    <div class="text-danger div_error d-none"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 float-right select-time">
                                <div class="form-group col-0 mb-10 ">
                                    <label class="text-secondary h6 mb-2">Select Time</label>
                                    <select class="form-control shadow-none w-100 rounded-sm select_time " id="interval_list" required="true" name="slot">
                                        <option value="">Select Time</option>
                                    </select>
                                    <div class="text-danger div_rror d-none"></div>
                                </div>
                            </div>
                            <div class="col-md-12 error-div float-left">
                                <span class="invalid-feedback font-weight-bold">You are not available at this day</span>
                            </div>
                        </div>
                        <div id="dd"></div>
                        <div class="form-group col-12 mt-3">
                            <button class="btn custom-btn-primary w-100 rounded-sm submit_request_btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- request tutor -->

    <!-- request tutor -->
    <div class="modal fade rounded" id="alertNoScheduleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-secondary font-weight-600"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                        <div class="form-group col-12 mt-3">
                            <p> Student hours have been compeleted!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- request tutor -->
@endsection
    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>
    <script src="{{asset('dashboard/js/moment.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{asset('dashboard/js/bootstrap-multiselect.min.js')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- DatePicker Js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    <script>
        $(document).on("click",".set_schedule_btn",function(){
            var req_id=$(this).attr('data-id');
            $('#date_picker').datepicker();
            $(".req_field").val(req_id);
        });

        $(document).on("change","#date_picker", function(){
            var date=$(this).val();
            $(".error-div .invalid-feedback").css('display', 'none');
            var id='{{ auth()->user()->id }}';
            tutorTimeList(id,date);
        });

        function tutorTimeList(id,date)
        {
            $.ajax({
                type: "GET",
                url: "{{ route('tutor.student.load.intervals') }}?id="+id+"&day="+date,
                success: function (response) {
                    if (response[1] == 200) {
                        $('#interval_list').html(response[0]);
                        $("select").niceSelect('destroy');
                        $("select").niceSelect();
                    } else {
                        $('#interval_list').html('<option value="">Select Time</option>');
                        $("select").niceSelect('destroy');
                        $("select").niceSelect();
                        $(".error-div .invalid-feedback").css('display', 'block');
                    }
                }
            });
        }
        
    </script>
