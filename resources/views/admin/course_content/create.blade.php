@extends('admin.layouts.app')

@section('title', 'Add Course Content')

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

                                            <h6 class="card-title">{{(isset($course_content)) ? 'Update' : 'Add'}} Course Content </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($course_content))
                                                {{ Form::model($course_content,['method'=>'post','route' => ['course_contents.store'],'enctype' => 'multipart/form-data','files' => true]) }}
                                            @else
                                                {{ Form::open(['route' => 'course_contents.store' ,'enctype' => 'multipart/form-data','files' => true]) }}
                                            @endif

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('course_id','Select Course') }}<span style="color:red;">*</span>

                                                        @php $course[''] = 'Please Select Course'; @endphp

                                                        <select name="course_id" id="course_id" class="form-control select2 dynamic" data-dependent="lesson_id" data-validate-field="course_id">
                                                            <option value="">Please Select Course</option>
                                                            @forelse($courses as $course)
                                                            <option value="{{$course->id}}"> {{ $course->name}}</option>
                                                            @empty
                                                            <option >No Courses Available</option>
                                                            @endforelse
                                                        </select>

                                                        {!! $errors->first('course_id', '<label id="course-id-error" class="error" for="course_id">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('lesson_id','Select Lesson') }}<span style="color:red;">*</span>

                                                        <select name="lesson_id" id="lesson_id" class="form-control select2" data-dependent="lesson_id">
                                                            <option value="">Please First Select Course</option>
                                                            
                                                        </select>

                                                        {!! $errors->first('lesson_id', '<label id="lesson_id-error" class="error" for="lesson_id">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{ Form::label('content_type_id','Select Content Type') }}<span style="color:red;">*</span>

                                                        @php $content_type[''] = 'Please Select Content Type'; @endphp

                                                        {{ Form::select('content_type_id', $content_type ,null, ['class' => 'form-control select2 content_type', 'style'=> 'margin-bottom:20px;']) }}

                                                        {!! $errors->first('category_id', '<label id="content_type-id-error" class="error" for="content_type_id">:message</label>') !!}
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
                                                <div class="col d-none" id="text">
                                                    <div class="form-group">
                                                        {{ Form::label('content_text','Course Content') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('content_text',old('content_text'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Text here')) }}
                                                        {!! $errors->first('content_text', '<label id="content_text-error" class="error" for="content_text">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-none" id="audio">
                                                    <div class="form-group">
                                                        {{ Form::label('audio','Upload Audio') }}<span style="color:red;">*</span>
                                                        <input type="file" name="audio" style="margin-bottom:10px;" class="form-control">
                                                        {!! $errors->first('audio', '<label id="audio-error" class="error" for="audio">:message</label>') !!}
                                                        <p id="error1" style="display:none; color:#FF0000;">
                                                        Invalid Audio Format! Audio Format Must Be mp3, 3gp, wav
                                                        </p>
                                                        <p id="error2" style="display:none; color:#FF0000;">
                                                        Maximum File Size Limit is 5MB.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-none" id="video">
                                                    <div class="form-group">
                                                        {{ Form::label('video','Upload Video') }}<span style="color:red;">*</span>
                                                        <input type="file" name="video" style="margin-bottom:10px;" class="form-control">
                                                        {!! $errors->first('video', '<label id="video-error" class="error" for="video">:message</label>') !!}
                                                        <p id="videoerror1" style="display:none; color:#FF0000;">
                                                        Invalid Video Format! Video Format Must Be mp4, webm, flv.
                                                        </p>
                                                        <p id="videoerror2" style="display:none; color:#FF0000;">
                                                        Maximum File Size Limit is 5MB.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-none" id="pdf">
                                                    <div class="form-group">
                                                        {{ Form::label('pdf','Upload PDF') }}<span style="color:red;">*</span>
                                                        <input type="file" name="pdf" style="margin-bottom:10px;" class="form-control">
                                                        {!! $errors->first('pdf', '<label id="pdf-error" class="error" for="pdf">:message</label>') !!}
                                                        <p id="videoerror1" style="display:none; color:#FF0000;">
                                                        Invalid File Format! document Format Must Be PDF.
                                                        </p>
                                                        <p id="pdferror2" style="display:none; color:#FF0000;">
                                                        Maximum File Size Limit is 5MB.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($course_content)) ? 'Update' : 'Save'}} </button>
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
<script type="text/javascript">
    // dependent dropdown 
    $('.dynamic').change(function(){
        if($(this).val() != ''){

            let select = $(this).attr('id');
            let value  = $(this).val();
            let dependent = $(this).data('dependent');
            let _token  = $('input[name="_token"]').val();
            
            $.ajax({
                url: '{{ route("dynamicdependent.fetch") }}',
                method: 'POST',
                data: {
                    select:select,
                    value:value,
                    dependent:dependent,
                    _token:_token
                },
                success:function(response){

                    $('#'+dependent).html(response);

                }
            })

        }
    })
        // searchable dropdown
    $('.select2').select2();
</script>
<script type="text/javascript">
$(document).ready(function(){

        $("select.content_type").change(function(){
        var selectedType = $(this).children("option:selected").text();
        if(selectedType == "Text"){
            $('button:submit').attr('disabled',false);
            $('#video').addClass('d-none');
            $('#audio').addClass('d-none');
            $('#pdf').addClass('d-none');
            $('#text').removeClass('d-none');
        }
        else if(selectedType == "Audio"){
            $('#audio').removeClass('d-none');
            $('#video').addClass('d-none');
            $('#pdf').addClass('d-none');
            $('#text').addClass('d-none');
        }
        else if(selectedType == "Video"){
            $('#video').removeClass('d-none');
            $('#audio').addClass('d-none');
            $('#text').addClass('d-none');
            $('#pdf').addClass('d-none');
        }
        else if(selectedType == "PDF"){
            $('#pdf').removeClass('d-none');
            $('#audio').addClass('d-none');
            $('#text').addClass('d-none');
            $('#video').addClass('d-none');
        }
        else{
            $('#video').addClass('d-none');
            $('#audio').addClass('d-none');
            $('#text').addClass('d-none');
            $('#pdf').addClass('d-none');
        }

    });
})
</script>
@endsection
