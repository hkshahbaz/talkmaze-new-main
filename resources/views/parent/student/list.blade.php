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
                        @include('components.welcome_message')
                       <div class="row">
                        <div class="col-md-12 clearfix mb-3">
                            <a href="{{ route('parent.student.add') }}"><button class="pull-right btn btn-size center-btn mt-2">Add Student</button></a>
                        </div>
                        <div class="col-md-12">
                            <div class="card ">
                                
                                <div class="card-body">
                                    <div class="col-lg-12 mb-3">
                                        <h2 class="text-muted">Student List</h2>
                                    </div>
                                    <div class="clearfix mt-4">
                                            
                                    </div>
                                    <div class="col-lg-12 p-3">
                                        <table class="table w-100 data_table" >
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>DoB</th>
                                                <th>Date Added</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($list as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->student_name }}</td>
                                                    <td>{{ $item->student_dob }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    
                                                    <td class="text-right">
                                                        <a href="{{ route('parent.student.edit', $item->id) }}"  rel="tooltip" class="btn btn-info rounded-circle btn-round" data-original-title="Add Review" title="Add Review">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" data-href="{{ route('parent.student.delete', $item->id) }}"  rel="tooltip" class="btn btn-danger rounded-circle btn-round delete_btn" data-original-title="Delete Student" title="Request For Payment Refund">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
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
                    <br/>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------drop down script--------------------------->
    <!-- Approve Modal -->
        <div class="modal fade rounded" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-secondary font-weight-600">Are you sure ?</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                            <div class="form-group col-12 mt-3">
                                <a href="" class="btn custom-btn-primary w-100 rounded-sm delete_link" type="submit">Yes</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Approve Modal -->
@endsection
@section('js')
    <script>
        $(document).on("click", ".delete_btn",function(){
            var $href = $(this).attr("data-href");
            $(".delete_link").attr("href", $href);
            $("#deleteModal").modal('show');
        });
    </script>
@endsection
    <!-- DatePicker Js -->
