@extends('admin.layouts.app')

@section('title', 'Update User')

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
                                            <h6 class="card-title">{{(isset($user)) ? 'Update' : 'Add'}} User </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($user))
                                                {{ Form::model($user,['method'=>'put','route' => ['users.update',$user->id], 'enctype' =>'multipart/form-data']) }}
                                            @else
                                                {{ Form::open(['route' => 'users.index', 'enctype' =>'multipart/form-data']) }}
                                            @endif
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('name','Name') }}<span style="color:red;">*</span>
                                                        {{ Form::text('name',old('name'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter User Name')) }}
                                                        {!! $errors->first('name', '<label id="name-error" class="error" for="name">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('email','Email') }}<span style="color:red;">*</span>
                                                        {{ Form::email('email',old('email'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Email Address')) }}
                                                        {!! $errors->first('email', '<label id="email-error" class="error" for="email">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('role','Select Role') }}<span style="color:red;">*</span>
                                                        {{ Form::select('role', ['coach' => 'Tutor', 'user' => 'User' , 'admin' => 'Admin'] ,$role->name , ['class' => 'form-control select2', 'style'=> 'margin-bottom:10px;']) }}

                                                        {!! $errors->first('role', '<label id="email-error" class="error" for="email">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('phone','Phone') }}<span style="color:red;">*</span>
                                                        {{ Form::number('phone',old('phone',$user->profile->phone),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Phone Number')) }}
                                                        {!! $errors->first('phone', '<label id="name-error" class="error" for="name">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('type','Type') }}<span style="color:red;">*</span>
                                                        {{ Form::select('type', ['1' => 'Bronze', '2' => 'Silver' , '3' => 'Gold'] ,$user->type , ['class' => 'form-control select2', 'style'=> 'margin-bottom:10px;']) }}
                                                        {!! $errors->first('type', '<label id="type-error" class="error" for="type">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('city','City') }}<span style="color:red;">*</span>
                                                        {{ Form::text('city',old('city',$user->profile->city),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter City Name')) }}
                                                        {!! $errors->first('city', '<label id="city-error" class="error" for="city">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('country','Country') }}<span style="color:red;">*</span>
                                                        {{ Form::text('country',old('country',$user->profile->country),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Country Name')) }}
                                                        {!! $errors->first('country', '<label id="country-error" class="error" for="country">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">

                                                        {{ Form::label('address','Address') }}<span style="color:red;">*</span>
                                                        {{ Form::text('address',old('address',$user->profile->address), array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter  Address')) }}
                                                        {!! $errors->first('address', '<label id="email-error" class="error" for="email">:message</label>') !!}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                {{ Form::label('photo','User Image') }}<span style="color:red;">*</span>
                                                                {{ Form::file('photo',array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Select Image')) }}
                                                                {!! $errors->first('photo', '<label id="photo-error" class="error" for="photo">:message</label>') !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('bio','Bio') }}<span style="color:red;">*</span>
                                                        {{ Form::textarea('bio',old('bio',$user->bio), array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter User Bio','rows'=>5)) }}
                                                        {!! $errors->first('bio', '<label id="bio-error" class="error" for="bio">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('photo','Current Image') }}
                                                        <br>
                                                       <img src="{{$user->profile->image }}" class="img-fluid img-thumbnail" alt="Responsive image" height="300px" width="300px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <button type="submit" name="submit" class="btn bg-blue ml-3">{{(isset($user)) ? 'Update' : 'Save'}} </button>
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
