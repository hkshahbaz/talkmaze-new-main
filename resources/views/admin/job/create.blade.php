@extends('admin.layouts.app')

@section('title', 'Add Job')

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
    <script src="{{ asset('admin/js/plugins/editors/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo_pages/editor_summernote.js') }}"></script>
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
                                            <h6 class="card-title">{{(isset($job)) ? 'Update' : 'Add'}} Job </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($job))
                                                {{ Form::model($faq,['method'=>'put','route' => ['jobs.store',$job->id]]) }}
                                            @else
                                                {{ Form::open(['route' => 'jobs.index']) }}
                                            @endif
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('title','Job Title') }}<span style="color:red;">*</span>
                                                        {{ Form::text('title',old('title'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Job Title')) }}
                                                        {!! $errors->first('title', '<label id="title-error" class="error" for="title">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('location','Job Location') }}<span style="color:red;">*</span>
                                                        {{ Form::text('location',old('location'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Job location')) }}
                                                        {!! $errors->first('location', '<label id="location-error" class="error" for="location">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('requistion_number','Requistion Number') }}<span style="color:red;">*</span>
                                                        {{ Form::number('requistion_number',old('requistion_number'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Requistion Number')) }}
                                                        {!! $errors->first('requistion_number', '<label id="requistion_number-error" class="error" for="requistion_number">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('category','Category') }}<span style="color:red;">*</span>
                                                        {{ Form::text('category',old('category'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Category')) }}
                                                        {!! $errors->first('category', '<label id="category-error" class="error" for="category">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('role','Job Role') }}<span style="color:red;">*</span>
                                                        {{ Form::text('role',old('role'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Job Role')) }}
                                                        {!! $errors->first('role', '<label id="role-error" class="error" for="role">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('apply_by','Apply By') }}<span style="color:red;">*</span>
                                                        {{ Form::date('apply_by',old('apply_by'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Last Date To Apply')) }}
                                                        {!! $errors->first('apply_by', '<label id="apply_by-error" class="error" for="apply_by">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('small_desc','Small Description') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('small_desc',old('small_desc'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Small Description')) }}
                                                        {!! $errors->first('small_desc', '<label id="small_desc-error" class="error" for="small_desc">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('requirement','Job Requirement') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('requirement',old('requirement'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Job Requirement','id'=>'summernoteO')) }}
                                                        {!! $errors->first('requirement', '<label id="requirement-error" class="error" for="requirement">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('description','Job Description') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('description',old('description'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Job Description','id'=>'summernoteT')) }}
                                                        {!! $errors->first('description', '<label id="description-error" class="error" for="description">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($job)) ? 'Update' : 'Save'}} </button>
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
        $('#summernoteO').summernote();
        $('#summernoteT').summernote();
    </script>
@endsection
