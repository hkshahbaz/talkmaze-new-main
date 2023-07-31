@extends('user.dashboard.layouts.main')

@section('title', 'Coach Requests')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        @if($list->count() > 0)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="col-lg-12 mb-3 text-center  ">
                                                <h3 class="text-center text-muted">Session History</h3>
                                            </div>
                                            <div class="col-lg-12 p-3">
                                                <table class="table w-100 data_table" >
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Date</th>
                                                        <th>Student</th>
                                                        <th>Student Joined</th>
                                                        <th>Status</th>
                                                        <th>Rating</th>
                                                        <th>Review</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($list as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ date('Y-m-d', strtotime($item->created_at)) }}</td>
                                                            <td>
                                                                @if(!is_null($item->coach_request->parent_student_id))
                                                                    {{ $item->coach_request->parent_student->student_name }}
                                                                @else
                                                                    {{ $item->student->name }}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($item->student_joined == 0)
                                                                    <span class="badge badge-danger">No</span>
                                                                @else
                                                                    <span class="badge badge-success">Yes</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($item->status == 0)
                                                                    <span class="badge badge-danger">Not Started</span>
                                                                @elseif($item->status == 1)
                                                                    <span class="badge badge-success">Active</span>
                                                                @elseif($item->status == 2)
                                                                    <span class="badge badge-warning">Ended</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if(!is_null(getRating($item->id)))
                                                                    @for($i=1; $i<=5; $i++)
                                                                        <i class="fa @if($i > getRating($item->id)) fa-star-o @else fa-star @endif text-warning" aria-hidden="true"></i>
                                                                    @endfor
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ getReview($item->id) }}
                                                            </td>
                                                            <td class="text-right">
                                                                @if(!reviewSubmitted($item->id))
                                                                    <a href="{{ route('tutor.session.review.add', $item->id) }}"  rel="tooltip" class="btn btn-info rounded-circle btn-round cancel_button" data-original-title="Add Review" title="Add Review">
                                                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    </a>
                                                                @endif
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
                        @else
                            <div style="height: 70vh; width: 100%; align-items: center; display: flex; justify-content: center;">
                                <div class="text-center">
                                    <img src="{{ asset('images/young-people-stydying-together-online-courses_81522-1664.jpg') }}" width="75%" alt="">
                                    <H3>You haven’t had any sessions yet.</H3>
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