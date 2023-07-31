@extends('admin.layouts.app')

@section('title', 'Update Applicant')

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
                                            <h6 class="card-title">{{(isset($applicant)) ? 'Update' : 'Add'}} Applicant </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($applicant))
                                                {{ Form::model($applicant,['method'=>'put','route' => ['applicants.update',$applicant->id] , 'enctype' =>'multipart/form-data']) }}
                                            @else
                                                {{ Form::open(['route' => 'applicants.store' , 'enctype' =>'multipart/form-data']) }}
                                            @endif
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('name','Name') }}<span style="color:red;">*</span>
                                                        {{ Form::text('name',old('name'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Applicant Name')) }}
                                                        {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('email','Email') }}<span style="color:red;">*</span>
                                                        {{ Form::email('email',old('email'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Email')) }}
                                                        {!! $errors->first('email', '<label id="email-error" class="error" for="email">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('phone','Phone') }}<span style="color:red;">*</span>
                                                        {{ Form::number('phone',old('phone'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Phone Number')) }}
                                                        {!! $errors->first('phone', '<label id="phone-error" class="error" for="phone">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('education','Education') }}<span style="color:red;">*</span>
                                                        {{ Form::text('education',old('education'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Education')) }}
                                                        {!! $errors->first('education', '<label id="education-error" class="error" for="education">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('gender','Select Gender') }}<span style="color:red;">*</span>
                                                        {{ Form::select('gender', ['Male' => 'Male', 'Female' => 'Female','Other' => 'Other'] ,'M' , ['class' => 'form-control select2', 'style'=> 'margin-bottom:10px;']) }}

                                                        {!! $errors->first('gender', '<label id="gender-error" class="error" for="gender">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('debate','Debate') }}<span style="color:red;">*</span>
                                                        {{ Form::text('debate',old('debate'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Debate Topic')) }}
                                                        {!! $errors->first('debate', '<label id="debate-error" class="error" for="debate">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('experience','Experience') }}<span style="color:red;">*</span>
                                                        {{ Form::text('experience',old('experience'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Experience')) }}
                                                        {!! $errors->first('experience', '<label id="experience-error" class="error" for="experience">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('education_level','Education') }}<span style="color:red;">*</span>
                                                        {{ Form::text('education_level',old('education_level'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Education_ Level')) }}
                                                        {!! $errors->first('education_level', '<label id="education_level-error" class="error" for="education_level">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('why_to_join','Why you want to join?') }}<span style="color:red;">*</span>
                                                        {{ Form::text('why_to_join',old('why_to_join'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Why to Join')) }}
                                                        {!! $errors->first('why_to_join', '<label id="why-to-join-error" class="error" for="why_to_join">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('resume','Upload Your Resume') }}<span style="color:red;">*</span>
                                                        {{ Form::file('resume',array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Select Image')) }}
                                                        {!! $errors->first('resume', '<label id="photo-error" class="error" for="resume">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('photo','Current Resume') }}
                                                        <br>
                                                       <img src="{{asset('storage/storage/'.$applicant->resume) }} " class="img-fluid img-thumbnail" alt="Current Resume" height="300px" width="300px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">

                                                        {{ Form::label('day','When You Are Available? Availibilty Hours') }}<span style="color:red;">*</span> <br>
                                                        <table class="table">
                                                          <thead>
                                                            <tr>
                                                              <th scope="col">Days</th>
                                                              <th scope="col">Timezone</th>
                                                              <th scope="col">From</th>
                                                              <th scope="col">To</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            @foreach($days as $day)
                                                            <tr>
                                                              <td class="text-uppercase">
                                                                <input type="checkbox" name="day[{{ $day->id }}]" value="{{ $day->id }}" 
                                                                id="checkbox{{$day->id}}" class="checkbox">
                                                                {{ $day->name }}
                                                              </td>
                                                              <td>
                                                                {{ Form::select('day['.$day->id.'][time_zone]', ['GMT +5' => 'GMT +5', 'GMT +6' => 'GMT +6'] ,'GMT +5' , ['class' => 'form-control select2 time_zone false', 'style'=> 'margin-bottom:10px;' ,'disabled']) }}
                                                              </td>
                                                              <td>
                                                                {{ Form::select('day['.$day->id.'][from]', ['9 AM' => '9 AM', '01 PM' => '01 PM'] ,'9 AM' , ['class' => 'form-control select2 from false', 'style'=> 'margin-bottom:10px;' ,'disabled']) }}
                                                              </td>
                                                              <td>
                                                                {{ Form::select('day['.$day->id.'][to]', ['01 PM' => '01 PM', '9 AM' => '9 AM'] ,'01 PM' , ['class' => 'form-control select2 to false', 'style'=> 'margin-bottom:10px;' ,'disabled']) }}
                                                              </td>
                                                            </tr>
                                                            @endforeach
                                                          </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('educational_level','Educational Level') }}<span style="color:red;">*</span>
                                                        {{ Form::text('educational_level',old('educational_level'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Educational Level')) }}
                                                        {!! $errors->first('educational_level', '<label id="educational_level-error" class="error" for="educational_level">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('how_here_about_us','How You Here About Us?') }}<span style="color:red;">*</span>
                                                        {{ Form::text('how_here_about_us',old('how_here_about_us'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'how_here_about_us')) }}
                                                        {!! $errors->first('how_here_about_us', '<label id="how_here_about_us-error" class="error" for="how_here_about_us">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($applicant)) ? 'Update' : 'Save'}} </button>
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

<script type="text/javascript" src="{{ asset('admin/js/myTimeTable.js') }}"></script>
@endsection
