@extends('user.layouts.main')

@section('title',$bignews->title)

@section('content')
    <!----------------------Nav Bar---------------------------->
    @include('user.partials.navbar')

    <style>
                .remvoe>h1{
                    color: #231f20 !important;
                    font-weight: 200 !important;
                    font-size: 2rem;
                    line-height: 1;
                }
                .remvoe>h5{
                    font-size: 1rem;
                }
                .remvoe>h4{
                    font-size: 1.2rem;
                }
                .remvoe>h2,
                h3,
                h4,
                h5,
                h6 {
                    color: #231f20;
                }

                .remvoe ul{
                    list-style-type: disc !important;
                }
                .remvoe span{
                    color: black !important;
                    background: none !important;
                }
                .remvoe a{
                    color: blue !important;
                }
                .authorImg{
                    border-radius: 100%;
                    box-shadow: 0 0 8px 0 #c1bcbc;
                }

            </style>

    <!-- -------------- Forum page starts here  ------------------ -->



    {{-- <section class="hero-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 m-auto">
            <div class="text-center text-justify">
              <h1 class="font-weight-bolder text-left">Forum</h1>
              <p class="text-left">Start or join a debate and share your contentious views on
                our anonymous debate forum.
                Practice your critical thinking and argumentation skills while you’re at it.</p>

              <form class="example mt-5 " style="max-width:350px" action="{{  url('forum') }}" method="GET">
                <input type="text" placeholder="Search here..." name="keyword" required>
                <button type="submit">Search</button>
              </form>

            </div>
          </div>
          <div class=" col-md-6">
            <div >
              <img class="mt-5 mb-5 img-fluid" src="{{asset('images/forum-1st.png')}}" width="530">
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <img src="{{ asset('public/images/affordacble.png') }}" class="img-fluid">

        </div>
      </div>
    </div> --}}
    {{-- TODO --}}
    {{-- code ider aye ga sara, and css be available hay   --}}
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img  src="{{ $bignews->image }}" class="img-fluid authorImg" width="300px">

                    <h5 class="text-muted text-uppercase size-font1 mt-3 text-center">About</h5>
                    <h4 class="size-font2 mt-2">{{ $bignews->small_title }}</h4>
                    <h5 class="size-font3 text-muted mt-3">{{ $bignews->small_description }}</h5>
                    <h5 class="size-font3 text-muted mt-3"> <i class="fas fa-upload mr-1"></i> {{ $bignews->shares??0 }} shares</h5>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <h5 class="size-font1 font-weight-bold">{{ $bignews->title }}</h5>
                    <div class="remvoe">
                        <p class="size-font3 mt-3 ">{!! $bignews->description !!}</p>
                    </div>

                    <br>
                    <br>

                    @foreach($tags as $tag)
                        <a class="btn btn-link m-1">{{ $tag }}</a>
                    @endforeach

                    <hr>
                    <div class="row">
                        <div class="col-md-5">

                        </div>
                        <div class="col-md-7 mt-4 mt-md-0">
                            <a class="btn btn-twit text-uppercase" onclick="change_shares({{ $bignews->id }})" target="_blank" href="https://twitter.com/intent/tweet?text=https://talkmaze.com/news/{{ $bignews->id }}"><i  class="fab fa-twitter mr-1 text-white" ></i>Twitter</a>
                            <a class="btn btn-fb text-uppercase ml-1" onclick="change_shares({{ $bignews->id }})" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://talkmaze.com/news/{{ $bignews->id }}" ><i class="fab fa-facebook-f mr-1 text-white"></i>facebook</a>
                            <a class="btn btn-goog text-uppercase ml-1" onclick="change_shares({{ $bignews->id }})" href="https://plus.google.com/share?https://talkmaze.com/news/{{ $bignews->id }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,height=600,width=600');return false;" ><i class="fab fa-google mr-1 text-white"></i>google</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  mt-4 mt-md-0">
                    <h4 class="size-font1 text-uppercase font-weight-bold mb-3 mt-4">Recent News</h4>
                    <div class="container mb-5" style="border-bottom: 1px solid #bcbcbc; border-right: 1px solid #bcbcbc; border-left: 1px solid #bcbcbc;">
                        @foreach($fsidenewsarray as $fsid)
                            <a href="{{ route('news.details',['id'=>str_replace(' ', '_',$fsid->title)]) }}">
                                <div class="row">
                                    <div class="col-md-12">

                                        <span class="explore pb-1">#Explore</span>
                                        <h5 class="font-weight-bold mt-4">{{ $fsid->small_title }}</h5>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="size-font3 text-muted mt-2">
                                            By:
                                            <a href="#" class="text-dark">
                                            <u> {{ $fsid->user ? $fsid->user->name : 'Admin' }} </u>
                                            </a>
                                    </h5>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="size-font3 text-right text-muted mt-2">{{ date('d M Y',strtotime($fsid->created_at)) }}</h5>
                                    </div>
                                </div>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======section3 slider=============== -->
    <!--<section class="mt-5 mb-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12">-->
    <!--                <div class="card">-->
    <!--                    <div class="card-body">-->
    <!--                        <h5 class="size-font3 text-uppercase font-weight-bold">Latest form life style</h5>-->
    <!--                        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">-->

                                <!--Controls-->
    <!--                            <div class="controls-top" style="position: absolute;right: 11px;top: -30px;">-->
    <!--                                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i-->
    <!--                                        class="fas fa-chevron-left"></i></a>-->
    <!--                                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i-->
    <!--                                        class="fas fa-chevron-right"></i></a>-->
    <!--                            </div>-->
                                <!--/.Controls-->


                                <!--Slides-->
    <!--                            <div class="carousel-inner">-->
                                    <!--First slide-->
    <!--                                <div class="carousel-item active">-->
    <!--                                    <div class="row mt-4">-->
    <!--                                        <div class="col-md-4">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/1.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-4 mt-4 mt-md-0">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/2.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-4 mt-4 mt-md-0">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/3.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
                                    <!--/.First slide-->

                                    <!--Second slide-->
    <!--                                <div class="carousel-item">-->
    <!--                                    <div class="row mt-4">-->
    <!--                                        <div class="col-md-4">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/1.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-4 mt-4 mt-md-0">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/2.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-4 mt-4 mt-md-0">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/3.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
                                    <!--/.Second slide-->
    <!--                            </div>-->
                                <!--/.Slides-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- Modal For pop Up sign in -->
    {{-- <div class="modal fade p-0 " id="loginModal" tabindex="-1" role="dialog"
      aria-labelledby="loginModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: grey !important;">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="row justify-content-center m-0 p-0">
                  <h4 class="modal-title" id="exampleModalLongTitle">Log In</h4>
              </div>
              <br/>
            <form method="POST" action="{{ route('guest.login') }}" class="js-form-login form">
            @csrf
              <label class="text-muted h8 font-weight-bolder">Email/Username</label><span class="text-danger">*</span>
              <input class="form-control bg-light" type="email" name="email"  style="height: 2.2rem;" value="{{old('email')}}" id="email" data-validate-field="email"
              >
              {!! $errors->first('email', '<label id="email-error-default" style="color:#D75A4A" for="email">:message</label>') !!}
              <label id="email-error" for="email" class="d-none" style="color:#D75A4A">Email is required!</label>
              <label id="email-error-valid" for="valid-email" class="d-none" style="color:#D75A4A">Please enter a valid Email Address!</label>

              <label class="text-muted h8 font-weight-bold mt-2">Password</label><span class="text-danger">*</span>
              <input class="form-control bg-light" type="password" name="password" style="height: 2.2rem;" id="password" data-validate-field="password" >
              {!! $errors->first('password', '<label id="password-error-default" style="color:#D75A4A" for="password">:message</label>') !!}
              <label id="password-error" for="password" class="d-none" style="color:#D75A4A">Password is required!</label>

              <button id="btn-default-login" type="submit" class="btn btn-default-login mt-4">SEND</button>

              <a href="{{url('register')}}">
                <h6 class="text-center mt-2 color-a" style="font-size: 0.8em;">Create new account</h6>
              </a>

              <h5 class="text-center" >Login with Gmail instead!</h5>
              <div class="text-center">
                <a href="{{ url('/redirect') }}" >
                  <img src="{{asset('images/google.png')}}" width="50">
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    <!----------------------Footer ---------------------------->
    @include('user.partials.footer')

    <!----------------------Copyright---------------------------->
    @include('user.partials.copyright')

    <script src="{{ asset('js/just-validate.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            // display modal on page load if any validation error
            @if($errors->get('email') || $errors->get('password'))

            $('#loginModal').modal('show');

            @elseif($errors->get('topic') || $errors->get('description'))
            $('#debateModal').modal('show');
            @endif

            new window.JustValidate('.js-form', {
                rules: {
                    topic: {
                        required: true,
                    }
                },
                messages: {
                    topic: {
                        required: 'Topic is required to start debate!',
                    }
                },
            });
            new window.JustValidate('.js-form-login', {
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required:true,
                    },
                },
                messages: {
                    email: {
                        required: 'Email is required field!',
                        email: 'Please enter a valid email address',
                    },
                    password: {
                        required: 'Password is required field!',
                    },
                },
            });

            $("button[type='submit']").click(function(event){
                if($("input[name='title']").val() == ''){ event.preventDefault();}
                else{ return true;}
            })

            //  post question as anonymus
            $('#anonymous').click(function(){
                $("input[name='anonymous']").val(1);
            })
        })

        function change_shares(var_id){
            $.ajax({
            url:'{{ route("share.news") }}',
            method:"POST",
            data:{
                _token:"{{ csrf_token() }}",
                id:var_id
            },
            success:function(data){
            },
            error:function(error){
            }
        })
        }
    </script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=246912109273557&autoLogAppEvents=1" nonce="zlhbKPi8"></script>
@endsection
