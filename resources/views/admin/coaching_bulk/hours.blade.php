@extends('admin.layouts.app')

@section('title', 'Coaching Hours')

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
            @include('admin.includes.pageheader')
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">


                <!-- Dashboard content -->
                <div class="row">
                    <div class="col-xl-12">

                        <!-- /quick stats boxes -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-header header-elements-inline">
                                                <h6 class="card-title">{{(isset($new)) ? 'Update' : 'Add'}} News </h6>
                                                <div class="header-elements">
                                                    <div class="list-icons">
                                                        <a class="list-icons-item" data-action="collapse"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                    {{ Form::open(['route' => 'coaching_hours.get' ,'enctype' => 'multipart/form-data']) }}
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            {{ Form::label('coach_id','Select Coach') }}<span style="color:red;">*</span>
                                                            <select name="coach_id" id="coach_id" class="form-control select2" style="margin-bottom:10px;">
                                                                <option value="">Please Select Course </option>
                                                                @forelse($coaches as $coach)
                                                                    <option value="{{$coach->id}}" @if($coach->id == $form_data['coach'])selected="selected" @endif> {{ $coach->name}}</option>
                                                                @empty
                                                                    <option >No Coach Available</option>
                                                                @endforelse
                                                            </select>
                                                            {!! $errors->first('coach_id', '<label id="coach_id-error" class="error" for="coach_id">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            {{ Form::label('month','Select Month') }}<span style="color:red;">*</span>
                                                            {{ Form::month('month',$form_data['month'],array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'month')) }}
                                                            {!! $errors->first('month', '<label id="month-error" class="error" for="month">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <button type="submit" name="submit" class="btn bg-blue ml-3"> Filter </button>
                                                </div>

                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h5 class="card-title">Coaching Hours List  </h5>

                                            @if (isset($total_hours))
                                            <h5 class="card-title" style="float: right;">Total Hours: {{$total_hours}}</h5>
                                            @endif

                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="rtable">
                                            <thead>
                                            <tr>
                                                <th>Session Name</th>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th> Hours</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @if(isset($sessions))
                                                 @foreach($sessions as $session)
                                                     <tr>
                                                         <td>{{ucwords($session->title)}}</td>
                                                         <td> {{$session->date_time}} </td>
                                                         <td>
                                                             @if($session->is_group === 0)
                                                                 Private
                                                                 @elseif ($session->is_group === 1)
                                                             Group
                                                                 @endif
                                                         </td>
                                                         <td>{{$session->num_hours}}</td>
                                                     </tr>
                                                     @endforeach
                                                 @endif

                                            </tbody>
                                        </table>
                                    </div>

                                <!-- /basic initialization -->


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
    <script>
        // searchable dropdown
        $('.select2').select2();
    </script>
    <script>
        $(function() {
            $('#rtable').DataTable({
                buttons: {
                    dom: {
                        button: {
                            className: 'btn btn-light'
                        }
                    },
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'

                    ],
                    'columnDefs': [
                        {
                            "className": "dt-center", "targets": "_all"
                        }
                    ],
                }

            });
        });
    </script>
@endsection
