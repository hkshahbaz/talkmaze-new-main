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
                        <h2 class="text-muted">Session History</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="col-lg-12 mb-3 text-center">
                                            <h2 class="text-center has-line text-dark line-primary"></h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <table class="table w-100 data_table" >
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Tutor</th>
                                                    <th>Student</th>
                                                    <th>Student Joined</th>
                                                    <th>Status</th>
                                                    <th>Refund Request</th>
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
                                                        <td>{{ $item->tutor->name }}</td>
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
                                                            @if($item->refund_status == '0')
                                                                <span class="badge badge-info">
                                                                    Not Sent
                                                                </span>
                                                            @elseif($item->refund_status == '1')
                                                                <span class="badge badge-warning">
                                                                    Sent
                                                                </span>
                                                            @elseif($item->refund_status == '2')
                                                                <span class="badge badge-success">
                                                                    Declined
                                                                </span>
                                                            @elseif($item->refund_status == '3')
                                                                <span class="badge badge-danger">
                                                                    Declined
                                                                </span>
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
                                                                <a href="{{ route('student.session.review.add', $item->id) }}"  rel="tooltip" class="btn btn-info rounded-circle btn-round cancel_button" data-toggle="tooltip" data-html="true" title="Add Review">
                                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                </a>
                                                            @endif
                                                            @if($item->refund_status == '0')
                                                                <a href="javascript:void(0);" data-href="{{ route('student.session.request.refund', $item->id) }}"  rel="tooltip" class="btn btn-warning rounded-circle btn-round refund_button" data-toggle="tooltip" data-html="true" title="Request Refund Payment">
                                                                    <i class="fa fas fa-reply-all" aria-hidden="true"></i>
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

        <!-- Refund Modal -->
    <div class="modal fade rounded" id="refundPaymentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">    
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-secondary font-weight-600">Refund Payment Request</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                        <form class="refundForm" action="" method="GET">
                            <div class="form-group">
                                <label>Why would you like a refund?</label>
                                <textarea class="form-control" name="refund_reason" placeholder="Write reason here.." rows="6" required></textarea>
                            </div>
                                <button class="btn custom-btn-primary rounded-sm approve_link pull-right">Submit</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
        <script>
            // Refund Payment Modal Jquery
            $(document).on("click",".refund_button",function(){
                var refund_action = $(this).attr('data-href');
                $(".refundForm").attr("action", refund_action);
                $("#refundPaymentModal").modal('show');
            });
        </script>
@endsection
    <!-- DatePicker Js -->
