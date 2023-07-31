@extends('admin.layouts.app')

@section('title', 'Add News')

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
    <script src="{{ asset('admin/js/plugins/editors/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo_pages/editor_summernote.js') }}"></script>
    
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
                                            <h6 class="card-title">{{(isset($new)) ? 'Update' : 'Add'}} News </h6>
                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if(isset($new))
                                                {{ Form::model($new,['method'=>'put','route' => ['coupons.update',$new->id],'enctype' => 'multipart/form-data']) }}
                                            @else
                                                {{ Form::open(['route' => 'coupons.store' ,'enctype' => 'multipart/form-data']) }}
                                            @endif
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('code','Code') }}<span style="color:red;">*</span>
                                                        {{ Form::text('code',old('code'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Code')) }}
                                                        {!! $errors->first('code', '<label id="code-error" class="error" for="code">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('discount_type','Select Discount Type') }}<span style="color:red;">*</span>
                                                        @php $type[''] = 'Please Select Course Category'; @endphp
                                                        {{ Form::select('discount_type', $type ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) }}

                                                        {!! $errors->first('discount_type', '<label id="discount_type-error" class="error" for="discount_type">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('discount','Discount') }}<span style="color:red;">*</span>
                                                        {{ Form::number('discount',old('discount'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Discount Value')) }}
                                                        {!! $errors->first('discount', '<label id="discount-error" class="error" for="discount">:message</label>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('code_type','Select Code Type') }}<span style="color:red;">*</span>
                                                      
                                                        {{ Form::select('code_type', [1=>'Group Sessions', 2=>'Courses', 3=>'Private Sessions'] ,null, ['class' => 'form-control select2', 'style'=> 'margin-bottom:20px;']) }}

                                                        {!! $errors->first('code_type', '<label id="code_type-error" class="error" for="code_type">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('valid_through','Valid Through') }}<span style="color:red;">*</span>
                                                        {{ Form::date('valid_through' ,old('featured'), ['class' => 'form-control', 'style'=> 'margin-bottom:20px;']) }}

                                                        {!! $errors->first('valid_through', '<label id="valid_through-error" class="error" for="valid_through">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        {{ Form::label('number_of_use','Number of Usage') }}<span style="color:red;">*</span>
                                                        {{ Form::number('number_of_use',old('number_of_use'),array('class'=>'form-control', 'style'=> 'margin-bottom:10px;','placeholder'=>'Enter Number of Usage')) }}
                                                        {!! $errors->first('number_of_use', '<label id="number_of_use-error" class="error" for="number_of_use">:message</label>') !!}
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
                <div class="row">
                    <div class="col-xl-12">

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h5 class="card-title">News List</h5>

                                            <div class="header-elements">
                                                <div class="list-icons">
                                                    <a class="list-icons-item" data-action="collapse"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table" id="rtable">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Code</th>
                                                <th>Discount</th>
                                                <th>Discount Type</th>
                                                <th>Code Type</th>
                                                <th>Valid Through</th>
                                                <th>Times of Usage</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    @push('after-scripts')
                                        <script>
                                            $(function() {
                                                $('#rtable').DataTable({
                                                    processing: true,
                                                    serverSide: true,
                                                    autoWidth: false,
                                                    responsive: true,
                                                    ajax: '{!! route('coupons.index') !!}',
                                                    columns: [
                                                        { data: 'id', name: 'id' },
                                                        { data: 'code', name: 'code' },
                                                        { data: 'discount', name: 'discount' },
                                                        { data: 'discount_type', name: 'discount_type' },
                                                        { data: 'code_type', name: 'code_type' },
                                                        { data: 'valid_through', name: 'valid_through' },
                                                        { data: 'number_of_use', name: 'number_of_use' },
                                                        { data: 'action', name: 'action', orderable: false, searchable: false }
                                                    ],
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
                                @endpush
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
<script type="text/javascript" src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/imageValidate.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/myvalidate.js') }}"></script>

    <!-- tags input js  -->
<script src="{{ asset('admin/js/tagsinput.js') }}"></script>
<script>
        // searchable dropdown
    $('.select2').select2();
    $('#summernote').summernote();
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
