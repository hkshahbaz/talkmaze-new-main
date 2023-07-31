@extends('admin.layouts.app')

@section('title', 'Add User Request')

@push('before-styles')
    <link href="{{ asset('admin/css/layout.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('after-scripts')
    <script src="{{ asset('admin/js/plugins/extensions/jquery_ui/interactions.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('admin/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/tables/datatables/extensions/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/tables/datatables/extensions/buttons.min.js') }}"></script>
    <script src="{{ asset('admin/js/myapp.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <script src="{{ asset('admin/js/demo_pages/datatables_extension_buttons_html5.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('admin/js/demo_pages/form_multiselect.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('admin/js/demo_pages/dashboard.js') }}"></script>
    <link href="{{ asset('admin/css/myvalidate.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    @include('admin.includes.navbar')
    <!-- Page content -->
    <div class="page-content" style="margin-top: 0px; ">
        <!-- Main sidebar -->
    @include('admin.includes.sidebar')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
                @include('admin.includes.pageheader');
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">


                <!-- Dashboard content -->
                <div class="row">
                    <div class="col-xl-12">

                        <!-- /quick stats boxes -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h6 class="card-title">{{ (isset($user_request)) ? 'Update' : 'Add'}} User Request </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($user_request))
                                                {{ Form::model($user_request,['method'=>'put','route' => ['user_requests.update',$user_request->id]]) }}
                                            @else
                                                {{ Form::open(['route' => 'user_requests.store']) }}
                                            @endif
                                            <div class="row">
                                                 <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('user_id','Select User/Student') }}<span style="color:red;">*</span>
                                                        {{ Form::select('user_id', $user ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) }}

                                                        {!! $errors->first('user_id', '<label id="user-id-error" class="error" for="user_id">:message</label>') !!}
                                                    </div>
                                                </div>
                                                 <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('tutor_id','Select Tutor / Teacher') }}<span style="color:red;">*</span>
                                                        {{ Form::select('tutor_id', $tutor ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) }}

                                                        {!! $errors->first('tutor_id', '<label id="tutor-id-error" class="error" for="tutor_id">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('why_would_you_like_to_be_matched_with_a_coach','Why Would You Like To Be Matched With A Coach?') }}<span style="color:red;">*</span>
                                                        {{ Form::text('why_would_you_like_to_be_matched_with_a_coach',old('why_would_you_like_to_be_matched_with_a_coach'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Write here ...')) }}
                                                        {!! $errors->first('why_would_you_like_to_be_matched_with_a_coach', '<label id="why_would_you_like_to_be_matched_with_a_coach-error" class="error" for="why_would_you_like_to_be_matched_with_a_coach">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('experience_of_public_speaking','Experience of Public Speaking') }}<span style="color:red;">*</span>
                                                        {{ Form::text('experience_of_public_speaking',old('experience_of_public_speaking'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Write here ...')) }}
                                                        {!! $errors->first('experience_of_public_speaking', '<label id="experience_of_public_speaking-error" class="error" for="experience_of_public_speaking">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('do_you_have_access_to_a_webcam_and_mic','Do You Have Access To A Webcam And Mic?') }}<span style="color:red;">*</span>
                                                        <br>
                                                        <span class="ml-3"></span>
                                                        {{ Form::radio('do_you_have_access_to_a_webcam_and_mic', 'yes', true) }}
                                                        Yes
                                                        <span class="ml-3"></span>
                                                        {{ Form::radio('do_you_have_access_to_a_webcam_and_mic', 'no') }}
                                                        No
                                                        {!! $errors->first('do_you_have_access_to_a_webcam_and_mic', '<label id="do_you_have_access_to_a_webcam_and_mic-error" class="error" for="do_you_have_access_to_a_webcam_and_mic">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($faq)) ? 'Update' : 'Save'}} </button>
                                            </div>

                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /dashboard content -->
            </div>
            <!-- /content area -->

            <!-- Footer -->
            @include('admin.includes.footer')
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
<script type="text/javascript" src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/myvalidate.js') }}"></script>
<script>
        // searchable dropdown
    $('.select2').select2();
</script>
@endsection
