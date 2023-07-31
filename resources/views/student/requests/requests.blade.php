@extends('user.dashboard.layouts.main')

@section('title', 'Coach Requests')

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
                        @include('components.header')
                        @if($req_count > 0)
                            <h2 class="text-muted">My Requests</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="col-lg-12 mb-3 text-center  ">
                                            </div>
                                            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                                <li class="nav-item waves-effect   waves-light">
                                                    <a class="nav-link custom-nav-link text-center custom_nav_tab_ancor active" id="home-tab" data-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="false"> <i class="fa fa-clock mr-2"></i> Pending</a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link custom-nav-link text-center custom_nav_tab_ancor" id="profile-tab" data-toggle="tab" href="#approved" role="tab" aria-controls="approved" aria-selected="false"> <i class="fa fa-check mr-2"></i> Approved</a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link custom-nav-link text-center custom_nav_tab_ancor " id="profile-tab" data-toggle="tab" href="#cancelled" role="tab" aria-controls="cancelled" aria-selected="false"> <i class="fa fa-window-close mr-2"></i> Cancelled</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade active show" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                                                    <div class="col-lg-12 p-3">
                                                        <table class="table w-100 data_table" >
                                                            <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Coach</th>
                                                                <th>Interval</th>
                                                                <th>Slots</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach($pending as $request)
                                                                <tr>
                                                                    <td>
                                                                        {{ \Carbon\Carbon::parse($request->date)->format("Y-m-d") }}
                                                                    </td>
                                                                    <td>{{ $request->tutor->name }}</td>
                                                                    <td>
                                                                        @if($request->interval == '1')
                                                                            One Time
                                                                        @else
                                                                            Recurring
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $request->slot }}</td>
                                                                    <td class="text-right">
                                                                        <a href="javascript:void(0);" data-href="{{route('student.tutor.request.cancel',['id'=>$request->id])}}"   rel="tooltip" class="btn btn-danger rounded-circle btn-round cancel_button" data-toggle="tooltip" data-html="true" title="Cancel Request">
                                                                            <i class="fa fa-window-close"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade show" id="approved" role="tabpanel" aria-labelledby="approved-tab">
                                                    <div class="col-lg-12 p-3">
                                                        <table class="table w-100 data_table" >
                                                            <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Coach</th>
                                                                <th>Interval</th>
                                                                <th>Slots</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($approved as $approve)
                                                                <tr>
                                                                    <td>
                                                                        {{ \Carbon\Carbon::parse($approve->date)->format("Y-m-d") }}
                                                                    </td>
                                                                    <td>{{ $approve->tutor->name }}</td>
                                                                    <td>
                                                                        @if($approve->interval == '1')
                                                                            One Time
                                                                        @else
                                                                            Recurring
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $approve->slot }}</td>
                                                                    <td class="text-right">

                                                                        <a href="javascript:void(0);" data-href="{{route('student.tutor.request.cancel',['id'=>$approve->id])}}"   rel="tooltip" class="btn btn-danger rounded-circle btn-round cancel_button" data-toggle="tooltip" data-html="true" title="Cancel Request">
                                                                            <i class="fa fa-window-close"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade show" id="cancelled" role="tabpanel" aria-labelledby="cancelled-tab">
                                                    <div class="col-lg-12 p-3">
                                                        <table class="table w-100 data_table" >
                                                            <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Coach</th>
                                                                <th>Interval</th>
                                                                <th>Request Date</th>
                                                                <th>Slots</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($cancelled as $cancel)
                                                                <tr>
                                                                    <td>
                                                                        {{ \Carbon\Carbon::parse($cancel->date)->format("Y-m-d") }}
                                                                    </td>
                                                                    <td>{{ $cancel->tutor->name }}</td>
                                                                    <td>
                                                                        @if($cancel->interval == '1')
                                                                            One Time
                                                                        @else
                                                                            Recurring
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $cancel->slot }}</td>
                                                                    {{--<td class="text-right">
                                                                        <a href="{{route('tutor.student.request.approve',['id'=>$cancel->id])}}" type="button"  rel="tooltip" class="btn btn-success rounded-circle btn-round " data-original-title="Cancel Approve" title="Request Approve">
                                                                            <i class="fa fa-check-circle"></i>
                                                                        </a>
                                                                    </td>--}}
                                                                </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- Approve Modal -->
                                    <div class="modal fade rounded" id="approveModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title text-secondary font-weight-600">Are you want to approve ?</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body ">
                                                        <div class="form-group col-12 mt-3">
                                                            <a href="" class="btn custom-btn-primary w-100 rounded-sm approve_link" type="submit">Yes</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Approve Modal -->

                                    <!-- Cancel Modal -->
                                    <div class="modal fade rounded" id="cancelModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title text-secondary font-weight-600">Are you want to cancel request ?</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body ">
                                                        <div class="form-group col-12 mt-3">
                                                            <a href="" class="btn custom-btn-primary w-100 rounded-sm cancel_link" type="submit">Yes </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cancel Modal -->
                                </div>
                            </div>
                        @else
                            <div style="height: 70vh; width: 100%; align-items: center; display: flex; justify-content: center;">
                                <div class="text-center">
                                    <img src="{{ asset('images/young-people-stydying-together-online-courses_81522-1664.jpg') }}" width="75%" alt="">
                                    <H3>You haven’t had any requests yet.</H3>
                                    <a href="{{ url('/findacoach') }}" class="btn default1 change mt-4">Find Coach</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <br/>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------drop down script--------------------------->

    <!-- Approve Modal -->
    <div class="modal fade rounded" id="approveModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">    
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-secondary font-weight-600">Are you want to approve ?</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                        <div class="form-group col-12 mt-3">
                            <a href="" class="btn custom-btn-primary w-100 rounded-sm approve_link" type="submit">Yes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Approve Modal -->

    <!-- Cancel Modal -->
    <div class="modal fade rounded" id="cancelModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-secondary font-weight-600">Are you want to cancel request ?</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                        <div class="form-group col-12 mt-3">
                            <a href="" class="btn custom-btn-primary w-100 rounded-sm cancel_link" type="submit">Yes </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cancel Modal -->
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
   <script>
        // Approve Modal Jquery
        $(document).on("click",".approve_button",function(){
            var approve_link=$(this).attr('data-href');
            $(".approve_link").attr("href",approve_link);
            $("#approveModal").modal('show');
        });

        // Cancel Modal Jquery
        $(document).on("click",".cancel_button",function(){
            var cancel_link=$(this).attr('data-href');
            $(".cancel_link").attr("href",cancel_link);
            $("#cancelModal").modal('show');
        });
    </script>