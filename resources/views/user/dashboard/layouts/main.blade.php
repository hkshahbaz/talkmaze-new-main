<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('images/output-onlinepngtools.png') }}" type="image/gif" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/dist/css/pignose.calendar.min.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/steps.css')}}" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap-multiselect.min.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!--<link href="{{asset('dashboard/css/fm.selectator.jquery.css')}}" rel="stylesheet">-->
    <!--<link href="{{ asset('admin/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">-->
    <!--<link href="{{ asset('admin/css/layout.min.css') }}" rel="stylesheet" type="text/css">-->
    <!--<link href="{{ asset('admin/css/components.min.css') }}" rel="stylesheet" type="text/css">-->
<!--{{--    <link href="{{ asset('admin/css/colors.min.css') }}" rel="stylesheet" type="text/css">--}}-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link href="{{ asset('css/custom2.css') }}" rel="stylesheet">
    <style>
        .multiselect.dropdown-toggle.custom-select{
            height: 43px !important;
            border-radius: 0px !important
        }
        .bootstrap-select {
            width:100%!important;
        }
        /*DateTimePicker Design Customization*/
        .bootstrap-datetimepicker-widget
        {
            background: #60d0ac !important;
            color: #fff;
        }
        .bootstrap-datetimepicker-widget .picker-switch:hover,
        .bootstrap-datetimepicker-widget .prev:hover,
        .bootstrap-datetimepicker-widget .next:hover,
        .bootstrap-datetimepicker-widget .month:hover,
        .bootstrap-datetimepicker-widget .day:hover{
            background: #fff !important;
            color: #60d0ac !important;
        }
        .bootstrap-datetimepicker-widget .prev:hover span,
        .bootstrap-datetimepicker-widget .next:hover span{
            color: #60d0ac !important;
        }
    </style>
    @yield('css')
    <title>Coaching</title>
</head>

<body>

  @yield('content')
  <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content  w-75 ml-5" style="border-radius: 25px;">
              <div class="modal-header">
                  <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="container">
                      <div class="row ">
                          <div class="col-md-12">
                              <div class=" form-register" action="#" method="post">
                                  <div id="form-total">
                                      <!-- SECTION 1 -->
                                      <h1></h1>
                                      <section>
                                          <div class="row justify-content-center mt-4">
                                              <div class="col-md-12">
                                                  <h5 class="text-center  text-muted" style="font-size: 16px;">Why
                                                      would you like to be matched with a coach?</h5>
                                                  <div class="form-group mt-3">
                                                      <textarea class="form-control" id="message-text"
                                                          style="background-color:#ccc;"> </textarea>
                                                  </div>
                                              </div>

                                          </div>
                                          <input value="{{ csrf_token() }}" hidden type="text" id="csrf">

                                      </section>
                                      <!-- SECTION 2 -->
                                      <h1></h1>
                                      <section>
                                          <div class="row justify-content-center">
                                              <div class="col-md-12 mt-3">
                                                  <h5 class="text-center  text-muted" style="font-size: 16px;">Do you
                                                      have any experience with public speaking or debate? If so, please
                                                      explain.</h5>
                                                  <div class="form-group mt-3">
                                                      <textarea class="form-control" id="message-text1"
                                                          style="background-color:#ccc;"> </textarea>
                                                  </div>
                                              </div>

                                          </div>
                                      </section>
                                      <!-- SECTION 3 -->
                                      <h1></h1>
                                      <section>
                                          <div class="row justify-content-center">
                                              <div class="col-md-12 mt-4">
                                                  <div class="form-group mt-3 mb-5">
                                                      <div >

                                                          <h5 class="text-center  text-muted" for="exampleCheck1"
                                                              style="font-size: 16px;">You require a webcam and mic to effectively engage in sessions. Do you have access to a webcam and mic?</h5>

                                                      </div>
                                                  </div>
                                              </div>

                                          </div>
                                      </section>

                                  </div>
                              </div>
                              <div id="lastmodal" style="display: none;">
                                  <div class="text-center">
                                      <img class="mt-1" src="{{ asset('images/tick mark.png') }}">
                                  </div>
                                  <h5 class="text-center text-muted mt-4" style="font-size: 16px;">You are almost
                                      done!</h5>
                                  <div class="text-center">
                                      <a id="gotopay" class="btn default3 mt-5 mb-4">Select payment plan</a>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>

              </div>

          </div>
      </div>
    </div>

    <script>
        setInterval(()=>{
            $.ajax({
                url:'{{ url("/get-notify") }}',
                method:"GET",
                success:function (response) {
                    let data = '';
                    document.getElementById('noti-badge').innerHTML = response.length
                    $('#noti-badge').show()
                    response.forEach(obj=>{
                        if(obj.verb === "SESSION"){
                            data += '<a class="p-0 m-0" href="{{ url('/dashboard-coaching') }}">' +
                                '                                                <div class="row mt-1" >' +
                                '                                                    <div class="col-3">' +
                                '                                                        <img class="mt-3" src="'+obj.sender.profile.image+'" width="50">' +
                                '                                                    </div>' +
                                '                                                    <div class="col-9">' +
                                '                                                        <h5 class="mt-2"> '+obj.sender.name+'</h5>' +
                                '                                                        <h6>'+obj.action+'</h6>' +
                                '                                                        <h6 class="h7 color-1">'+obj.created_at+'</h6>' +
                                '                                                    </div>' +
                                '                                                </div>' +
                                '                                                </a>' +
                                '                                                <hr/>'
                        }
                        if(obj.verb === "CHAT"){
                            data += '<a class="p-0 m-0" href="{{ url('/chat/') }}/'+obj.actor_id+'">' +
                                '                                                <div class="row mt-1" >' +
                                '                                                    <div class="col-3">' +
                                '                                                        <img class="mt-3" src="'+obj.sender.profile.image+'" width="50">' +
                                '                                                    </div>' +
                                '                                                    <div class="col-9">' +
                                '                                                        <h5 class="mt-2"> '+obj.sender.name+'</h5>' +
                                '                                                        <h6>'+obj.action+'</h6>' +
                                '                                                        <h6 class="h7 color-1">'+obj.created_at+'</h6>' +
                                '                                                    </div>' +
                                '                                                </div>' +
                                '                                                </a>' +
                                '                                                <hr/>'
                        }
                        if(obj.verb === "COMMENT"){
                            data += '<a class="p-0 m-0" href="{{ url('/forum-detail/') }}/'+obj.action_id+'">' +
                                '                                                <div class="row mt-1" >' +
                                '                                                    <div class="col-3">' +
                                '                                                        <img class="mt-3" src="'+obj.sender.profile.image+'" width="50">' +
                                '                                                    </div>' +
                                '                                                    <div class="col-9">' +
                                '                                                        <h5 class="mt-2"> '+obj.sender.name+'</h5>' +
                                '                                                        <h6>'+obj.action+'</h6>' +
                                '                                                        <h6 class="h7 color-1">'+obj.created_at+'</h6>' +
                                '                                                    </div>' +
                                '                                                </div>' +
                                '                                                </a>' +
                                '                                                <hr/>'
                        }
                        document.getElementById('notipan').innerHTML = data
                    })
                },
                error:function (error) {

                }
            })
        },5000)
    </script>
    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
    <script src="{{asset('dashboard/js/moment.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{asset('dashboard/js/bootstrap-multiselect.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('dashboard/dist/js/pignose.calendar.full.min.js') }}"></script>
    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @elseif(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        $('.datepicker').datetimepicker({
            minDate:new Date(),
            useCurrent: false,
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down',
                previous: 'fa fa-angle-left',
                next: 'fa fa-angle-right',
                today: 'fa fa-bullseye',
                clear: 'fa fa-trash',
                close: 'fa fa-times',
            },
            format: 'YYYY/MM/DD',
        });

        $(document).ready(function() {
            $('.data_table').DataTable();
        } );

        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            $('#noti-badge').hide()
            document.getElementById("myDropdown").classList.toggle("show");
        }
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    @yield('js')
</body>
</html>
