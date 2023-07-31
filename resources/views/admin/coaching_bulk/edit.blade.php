@extends('admin.layouts.app')

@section('title', 'Update Coaching Bulk')

@push('before-styles')
    <style>
        .margbg{
            margin:5px;
            display: inline-block;
            position: center;
        }
    </style>
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
                                            <h6 class="card-title">{{(isset($coaching_bulk)) ? 'Update' : 'Add'}} Package </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($coaching_bulk))
                                                {{ Form::model($coaching_bulk,['method'=>'put','route' => ['coaching_bulks.update',$coaching_bulk->id]]) }}
                                            @else
                                                {{ Form::open(['route' => 'coaching_bulks.store']) }}
                                            @endif
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('first_name','First Name') }}<span style="color:red;">*</span>
                                                        {{ Form::text('first_name',old('first_name'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter First Name')) }}
                                                        {!! $errors->first('first_name', '<label id="first-name-error" class="error" for="first_name">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('last_name','Last Name') }}<span style="color:red;">*</span>
                                                        {{ Form::text('last_name',old('last_name'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Last Name')) }}
                                                        {!! $errors->first('last_name', '<label id="last-name-error" class="error" for="last_name">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('email','Email') }}<span style="color:red;">*</span>
                                                        {{ Form::email('email',old('email'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Email')) }}
                                                        {!! $errors->first('email', '<label id="email-error" class="error" for="email">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('phone','Phone Number') }}<span style="color:red;">*</span>
                                                        {{ Form::number('phone',old('phone'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Phone Number')) }}
                                                        {!! $errors->first('phone', '<label id="phone-error" class="error" for="phone">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('organization','Team/School/Organization Name') }}<span style="color:red;">*</span>
                                                        {{ Form::text('organization',old('organization'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Team/School/Organization Name')) }}
                                                        {!! $errors->first('organization', '<label id="organization-error" class="error" for="organization">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('role','Role') }}<span style="color:red;">*</span>
                                                        {{ Form::text('role',old('role'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Role')) }}
                                                        {!! $errors->first('role', '<label id="role-error" class="error" for="role">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('country','Country') }}<span style="color:red;">*</span>
                                                        {{ Form::text('country',old('country'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter your country')) }}
                                                        {!! $errors->first('country', '<label id="country-error" class="error" for="country">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('city','City') }}<span >(optional)</span>
                                                        {{ Form::text('city',old('city'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter your city')) }}
                                                        {!! $errors->first('city', '<label id="city-error" class="error" for="city">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('message','What kind of help you are hoping to get?') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('message',old('message'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Write here ...')) }}
                                                        {!! $errors->first('message', '<label id="message-error" class="error" for="message">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($coaching_bulk)) ? 'Update' : 'Save'}} </button>
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
@endsection
