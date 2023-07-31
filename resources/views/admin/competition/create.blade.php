@extends('admin.layouts.app')

@section('title', 'Add New Competition')

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
                                            <h6 class="card-title">{{(isset($competition)) ? 'Update' : 'Add'}} Competitions </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($competition))
                                                {{ Form::model($competition,['method'=>'put','route' => ['competitions.store',$competition->id],'enctype' =>'multipart/form-data']) }}
                                            @else
                                                {{ Form::open(['route' => 'competitions.index', 'enctype' =>'multipart/form-data']) }}
                                            @endif
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('title','Title') }}<span style="color:red;">*</span>
                                                        {{ Form::text('title',old('title'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Competition Title')) }}
                                                        {!! $errors->first('title', '<label id="title-error" class="error" for="title">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('description','Description') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('description',old('description'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter description','id'=>'summernoteT')) }}
                                                        {!! $errors->first('description', '<label id="description-error" class="error" for="description">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                     {{ Form::label('open_date','Competition Opens') }}<span style="color:red;">*</span>
                                                        {{ Form::date('open_date',old('open_date'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Opening Date To Apply')) }}
                                                        {!! $errors->first('open_date', '<label id="open_date-error" class="error" for="open_date">:message</label>') !!}
                                                    </div>
                                                </div>
                                           
                                                <div class="col">
                                                    <div class="form-group">
                                                     {{ Form::label('close_date','Final Entries Due') }}<span style="color:red;">*</span>
                                                        {{ Form::date('close_date',old('close_date'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Last Date To Apply')) }}
                                                        {!! $errors->first('close_date', '<label id="close_date-error" class="error" for="close_date">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                 <div class="col">
                                                    <div class="form-group">
                                                    {{ Form::label('requirement','Competition Requirement') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('requirement',old('requirement'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Competition Requirement','id'=>'summernoteO')) }}
                                                        {!! $errors->first('requirement', '<label id="requirement-error" class="error" for="requirement">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                     {{ Form::label('status','Select status') }}<span style="color:red;">*</span>
                                                        {{ Form::select('status', ['current' => 'Current Competition', 'future' => 'Future Competition' , 'past' => 'Past Competition'] ,'T' , ['class' => 'form-control select2', 'style'=> 'margin-bottom:10px;']) }}

                                                        {!! $errors->first('status', '<label id="status-error" class="error" for="status">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                     {{ Form::label('comp_image','Competition Poster') }}<span style="color:red;">*</span>
                                                        {{ Form::file('comp_image',array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Select Image')) }}
                                                        {!! $errors->first('comp_image', '<label id="comp_image-error" class="error" for="comp_image">:message</label>') !!}
                                                        <p id="error1" style="display:none; color:#FF0000;">
                                                        Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                                                        </p>
                                                        <p id="error2" style="display:none; color:#FF0000;">
                                                        Maximum File Size Limit is 5MB.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($competition)) ? 'Update' : 'Save'}} </button>
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
<script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
<script>
        /*$('#summernoteO').summernote();
        $('#summernoteT').summernote();
        // searchable dropdown
        $('.select2').select2();*/

//SP Text editors
CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('summernoteO'); 
CKEDITOR.replace('summernoteT'); 
</script>
@endsection
