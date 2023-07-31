@extends('admin.layouts.app')

@section('title', 'Coaches')

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
                                <div>
                                    @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="card">
                                        <div class="card-header header-elements-inline">
                                            <h5 class="card-title">Coaches List</h5>

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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Hourly Rate</th>
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
                                                    ajax: '{!! route('coach.index') !!}',
                                                    columns: [
                                                        { data: 'id', name: 'id' },
                                                        { data: 'name', name: 'Name' },
                                                        { data: 'email', name: 'Email' },
                                                        { data: 'hourly_rate', name: 'Hourly Rate' },
                                                        { data: 'action', name: 'action', orderable: false, searchable: false}
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

                                            $(document).on("keyup", ".numbers", function () { 
                                                this.value = this.value.replace(/[^0-9\.]/g,'');
                                            });

                                            $(document).on("click", ".pay_coach_btn", function(){
                                                var tutor_id = $(this).attr("data-tutor-id");
                                                $.get("{{route('coach.load.pay.coach.form')}}", {tutor_id: tutor_id}, function(result){
                                                    $(".modal-dialog").html(result);
                                                  });
                                                $("#refundPaymentModal").modal("show");
                                            });

                                            $(document).on("click", ".set_hourly_rate_btn", function(){
                                                var tutor_id = $(this).attr("data-tutor-id");
                                                $.get("{{route('coach.load.set.hourly_rate.form')}}", {tutor_id: tutor_id}, function(result){
                                                    $(".modal-dialog2").html(result);
                                                  });
                                                $("#setHourlyRateModal").modal("show");
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

    <!-- Refund Modal -->
      <!-- Modal -->
    <div class="modal fade" id="refundPaymentModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          
        </div>
    </div>

    <div class="modal fade" id="setHourlyRateModal" role="dialog">
        <div class="modal-dialog modal-dialog2">
        
          <!-- Modal content-->
          
        </div>
    </div>
@endsection

