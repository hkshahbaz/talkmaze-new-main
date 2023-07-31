@extends('user.layouts.main')

@section('title', 'News')

@section('content')
    <!----------------------Nav Bar---------------------------->
    @include('user.partials.navbar')

    <!-- -------------- Forum page starts here  ------------------ -->
    <style>
        .heroPostSection{
            background: #312f2f4f;

        }
    </style>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-9 main-section mt-5" style="background-image: url('{{ $bignews[0]->image }}'); background-size: cover !important;background-position: 100% 100%;height: 100%;width: 100%;">
                    <div class="container mt-5 mb-5 pt-5">


                            <div class="col-md-6 pt-5 heroPostSection">
                                @php
                                    $tags = explode(",",$bignews[0]->tags);
                                @endphp


                                <h5 class="biger-text pb-2 text-capitalize h5 text-white border-bottom border-light font-weight-bold">
                                    {{ $bignews[0]->small_title }}
                                </h5>

                                <p class="size-font3 mt-3 text-white">{{ $bignews[0]->small_description }}
                                    <a class="border-bottom text-info " href="{{ route('news.details',['id'=> str_replace(' ', '_',$bignews[0]->title)]) }}">Read more...</a>
                                </p>





                                <div class="col-md-12 mt-2 py-2"><span class="explore pb-1"> <b>TAGS:</b> #{{ $tags[0] }}</span></div>
                            </div>

                    </div>
                </div>

                <div class="col-md-3 mt-5 p-0">
                    <div class="card card-style" >
                        <div class="card-body">
                            <h6 class="size-font1 text-center text-uppercase pt-1">Top Stories</h6>
                        </div>
                    </div>
                    @php
                        $x = 0;
                    @endphp
                    @foreach($fsidenews as $tl)

                    @php
                    $x++;
                    @endphp
                    <!-- <a href="{{ route('news.details',['id'=>str_replace(' ', '_',$tl->title)]) }}">
                        <div class="card card-style">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-1">
                                        <span class="number">{{ $x }}</span>
                                    </div>
                                    <div class="col-10 ml-2">
                                        <h6 class="size-font3 font-weight-bold">{{ $tl->small_title }}</h6>
                                        <h6 class="size-font3 text-muted">{{ substr($tl->small_description,0,100) }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a> -->

                        <div class="card bg-dark text-white">
  <img src="{{$tl->image}}" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- =======================section2============= -->
    <section>
        <div class="container p-0">
            <div class="row mb-5">
                <div class="col-md-10">
                    <h1 class="mt-5"></h1>

                    @foreach($fbottomrightnews as $btn)

                   <!--  <a href="{{ route('news.details',['id'=>str_replace(' ', '_',$btn->title)]) }}"> -->
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="row no-gutters">
                                <div class="col-md-4" >
                                    <div style="background-image: url('{{ $btn->image }}'); background-size: 100% 100%;height: 100%;width: 100%;"></div>
                                 <!--  <img src="{{ $btn->image }}" class="card-img" alt="..." height="100%" width="100%"> -->
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">

                                    @php
                                        $tags = explode(",",$bignews[0]->tags);
                                    @endphp

                                    <span class="explore pb-1 text-dark">#{{ $tags[0] }}</span>

                                    <h5 class="card-title font-weight-bold mt-4 size-font2 ">{{ $btn->small_title }}</h5>

                                    <p class="card-text">
                                        {!! substr($btn->small_description,0,300) !!}... &nbsp;<a href="{{ route('news.details',['id'=>str_replace(' ', '_',$btn->title)]) }}">read more</a>
                                    </p>
                                    <p class="card-text">
                                        <div class="row mt-3">
                                        <div class="col-md-12">
                                            <a class="btn btn-twit text-uppercase"><i class="fab fa-twitter mr-1 text-white"></i>Twitter</a>
                                            <a class="btn btn-fb text-uppercase ml-1"><i class="fab fa-facebook-f mr-1 text-white"></i>facebook</a>
                                            <a class="btn btn-goog text-uppercase ml-1"><i class="fab fa-google mr-1 text-white"></i>google</a>
                                        </div>
                                    </div>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- </a> -->
                    @endforeach

                </div>
                {{--
                <div class="col-md-4  mt-5 ">
                    <div class="card mb-5" >
                        <div class="card-body">
                            <h5 class="size-font1 text-uppercase font-weight-bold mb-3 mt-4">Recent News</h5>
                            @foreach($fbottomrightnews as $rgh)
                             <a href="{{ route('news.details',['id'=>str_replace(' ', '_',$rgh->title)]) }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        @php
                                            $tags = explode(",",$bignews[0]->tags);
                                        @endphp
                                        <span class="explore pb-1">#{{ $tags[0] }}</span>
                                        <h5 class="font-weight-bold mt-4">{{ $rgh->small_title }}</h5>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="size-font3 text-muted mt-2">{{ $rgh->small_description }}</h5>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="size-font3 text-muted mt-2">By: <a href="#" class="text-dark"><u>{{ $rgh->user->name }} </u></a></h5>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="size-font3 text-right text-muted mt-2">{{ date('d M Y',strtotime($rgh->created_at)) }}</h5>
                                    </div>
                                </div>
                            </a>
                            <hr>
                            @endforeach
                        </div>
                    </div>
                </div>

                --}}
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
    </script>
@endsection
