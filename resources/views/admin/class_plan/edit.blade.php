@extends('admin.layouts.app')

@section('title', 'Update Class Plan')

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
                                            <h6 class="card-title">{{(!isset($class_plan)) ? 'Update' : 'Add'}} Category </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($class_plan))
                                                {{ Form::model($class_plan,['method'=>'put','route' => ['class_plans.update',$class_plan->id] ,'enctype' => 'multipart/form-data']) }}
                                            @else
                                                {{ Form::open(['route' => 'class_plans.index','enctype' => 'multipart/form-data']) }} 
                                            @endif
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('class_category_id','Select Class Category') }}<span style="color:red;">*</span>
                                                        @php $class_cat[''] = 'Please Select Class Category'; @endphp
                                                        {{ 

                                                            Form::select('class_category_id', $class_cat ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) 
                                                        }}

                                                        {!! $errors->first('class_category_id', '<label id="class_category_id-error" class="error" for="class_category_id">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('host_id','Select Tutor') }}<span style="color:red;">*</span>
                                                        @php $tutor[''] = 'Please Select Tutor'; @endphp
                                                        {{ 

                                                            Form::select('host_id', $tutor ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) 
                                                        }}

                                                        {!! $errors->first('host_id', '<label id="host_id-error" class="error" for="host_id">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('title','Title') }}<span style="color:red;">*</span>
                                                        {{ Form::text('title',old('title'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Title')) }}
                                                        {!! $errors->first('title', '<label id="title-error" class="error" for="title">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="customFile">Choose Image</label>
                                                        {{ Form::file('photo',array('class'=>'custom-file-input', 'style'=> 'margin-bottom:10px;','placeholder'=>'Select Image','id'=> 'customFile')) }}
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
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('date','Date') }}<span style="color:red;">*</span>

                                                        {{ Form::date('date',old('date'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Title')) }}

                                                        {!! $errors->first('date', '<label id="date-error" class="error" for="date">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('time','Time') }}<span style="color:red;">*</span>

                                                        {{ Form::time('time',old('time'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Title', 'step' => 1)) }}

                                                        {!! $errors->first('time', '<label id="time-error" class="error" for="time">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('time_zone','Time Zone') }}<span style="color:red;">*</span>

                                                        <input type="text" name="time_zone" value="{{ $class_plan->time_zone }}" class="form-control">

                                                        {!! $errors->first('time_zone', '<label id="time_zone-error" class="error" for="time_zone">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('price','Price') }}<span style="color:red;">*</span>
                                                        {{ Form::text('price',old('price'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Title')) }}
                                                        {!! $errors->first('price', '<label id="price-error" class="error" for="price">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="is_visible" style="height: 24px;width: 28px;margin-top: 0;">
                                                          <label class="form-check-label" for="defaultCheck1">
                                                            <b>Visible on website?</b>
                                                          </label>
                                                        </div>

                                                        {!! $errors->first('is_visible', '<label id="is_visible-error" class="error" for="is_visible">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        {{ Form::label('description','Description') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('description',old('description'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Description')) }}
                                                        {!! $errors->first('description', '<label id="description-error" class="error" for="description">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="1" id="repeat" name="repeat" style="height: 24px;width: 28px;margin-top: 0;">
                                                          <label class="form-check-label" for="repeat">
                                                            <b>Repeated Session?</b>
                                                          </label>
                                                        </div>

                                                        {!! $errors->first('repeat', '<label id="repeat-error" class="error" for="repeat">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-none mb-2" id="repeat_details">

                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <select class="custom-select" name="repeat_type">
                                                          <option selected>Select Repeat Type</option>
                                                          <option value="1">Weekly</option>
                                                          <option value="2">Monthly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {{ Form::label('repeat_sessions','Number of Sessions?') }}<span style="color:red;">*</span>
                                                        <input type="text" name="repeat_sessions" placeholder="Enter number of sessions" value="{{old('repeat_sessions')}}" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($class_plan)) ? 'Update' : 'Save'}} </button>
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
<script type="text/javascript" src="{{ asset('admin/js/imageValidate.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/myvalidate.js') }}"></script>
<script>
        // searchable dropdown
    $('.select2').select2();

    $('#repeat').bind('change', function () {

       if ($(this).is(':checked'))
         $('#repeat_details').removeClass('d-none');
       else
         $('#repeat_details').addClass('d-none');

    });


    @if($class_plan->is_visible == 1)

        $('#defaultCheck1').prop('checked', true)

        @else

        $('#defaultCheck1').prop('checked', false)
        
        @endif
</script>
@endsection
