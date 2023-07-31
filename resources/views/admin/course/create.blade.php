@extends('admin.layouts.app')

@section('title', 'Add Course')

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
    
    <!-- tags input css -->
    <link href="{{ asset('admin/css/tagsinput.css') }}" rel="stylesheet" type="text/css">

    
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
                                            <h6 class="card-title">{{(isset($course)) ? 'Update' : 'Add'}} Course </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($course))
                                                {{ Form::model($course,['method'=>'put','route' => ['courses.update',$course->id],'enctype' => 'multipart/form-data']) }}
                                            @else
                                                {{ Form::open(['route' => 'courses.store' ,'enctype' => 'multipart/form-data']) }}
                                            @endif
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('name','Course Name') }}<span style="color:red;">*</span>
                                                        {{ Form::text('name',old('name'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Social Link Name')) }}
                                                        {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('tags','Tags') }}<span style="color:red;">*</span>
                                                        {{ Form::text('tags',old('tags'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Tags', 'data-role' => 'tagsinput' ,'id' => 'courseTags', 'data-role' => 'tagsinput')) }}
                                                        {!! $errors->first('tags', '<label id="tags-error" class="error" for="tags">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('photo','Course Image') }}<span style="color:red;">*</span>
                                                        {{ Form::file('photo',array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Select Image')) }}
                                                        {!! $errors->first('photo', '<label id="photo-error" class="error" for="photo">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('price','Price') }}<span style="color:red;">*</span>
                                                        {{ Form::number('price',old('price'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Course Price')) }}
                                                        {!! $errors->first('price', '<label id="price-error" class="error" for="price">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('category_id','Select Course Category') }}<span style="color:red;">*</span>
                                                        @php $category[''] = 'Please Select Course Category'; @endphp
                                                        {{ Form::select('category_id', $category ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) }}

                                                        {!! $errors->first('category_id', '<label id="category-id-error" class="error" for="category_id">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('is_private','Course Type') }}<span style="color:red;">*</span>
                                                        {{ Form::select('is_private', [0=>'Public', 1=>'Private'] ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) }}
    
                                                        {!! $errors->first('is_private', '<label id="is_private-error" class="error" for="is_private">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('user_id','Select Course Owner') }}<span style="color:red;">*</span>
                                                        @php $user[''] = 'Please Select Course Category'; @endphp
                                                        {{ Form::select('user_id', $user ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) }}

                                                        {!! $errors->first('user_id', '<label id="user_id-error" class="error" for="user_id">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('description','Course Description') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('description',old('description'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Course Description')) }}
                                                        {!! $errors->first('description', '<label id="description-error" class="error" for="description">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($course)) ? 'Update' : 'Save'}} </button>
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

    <!-- tags input js  -->
<script src="{{ asset('admin/js/tagsinput.js') }}"></script>
<script>
        // searchable dropdown
    $('.select2').select2();
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
@endsection
