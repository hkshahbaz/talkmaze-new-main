@extends('user.layouts.main')

@section('title', 'Plans')

@section('content')
    <!----------------------Nav Bar---------------------------->
{{--    @include('user.partials.navbar')--}}
    @include('user.partials.navbar')
    <!--  -->
    <section class="res-section bg-image">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <h1 class="font-weight-bolder mt-5 mb-5 text-white">Resources</h1>
                        <p class="mr-5 text-white">We have worked with experienced debaters and speakers from around the world to
                            develop professional resources for students and teams to use while learning the art of
                            speech and debate.
                            Check out the resources below and send in a request if you’d like to see a new resource!</p>
                        <form style="max-width:350px" action="{{ url('course') }}" method="GET" class="example mt-5 mb-3">
                            <input type="text" placeholder="Search here..." name="keyword" required>
                            <button type="submit">Search</button>
                        </form>
                    </div>

                    <div class="col-md-6 mt-5">
                        <div class="text-center">
                        <img class="w-75 resourxs-img  mb-5" src="{{asset('images/VectorSmartObject.png')}}">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h4 class="text-dark mt-5">Courses</h4>
            @if($courses->count()>0)
            <div class="center slider pb-2 row">
                @forelse($courses as $course)
                    @if($course->user)

                        <div>
                        <a href="{{  url('course?slug='.$course->slug) }}" class="text-decoration-none text-dark">
                            <div class="card" style="width:300px;">
                                <div style="position: relative; left: 0; top: 0;">
                                    <img class="card-img-top main-img"
                                    src="{{$course->image }}"
                                    alt="Card image cap">
                                    <img class="img-fluid prof-img rounded-circle"
                                    src="{{ $course->user->profile->image }}"
                                    width="50">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $course->name}}
                                    </h5>
                                    <h6 class="card-text font-weight-normal" style="font-size: 0.7em;">
                                        {{
                                            $first20words = implode(' ', array_slice(str_word_count($course->description,1), 0, 20))

                                          }}
                                    </h6>
                                    <h5 class="color-a">
                                        {{ !empty($course->price) ? 'Price: '.$course->price : 'Free'}}
                                    </h5>
                                    <hr>
                                    <i class="fas fa-star card-font" style="color: #ffc32c;"></i><span
                                        class="ml-2 card-font text-muted">
                                        @php
                                        $rate = $course->rating()->avg('rate');
                                        $rate = number_format((float)$rate, 1, '.', '');
                                        @endphp

                                        {{ !empty($rate) ? $rate : '0' }}
                                    </span>
                                    <span class="float-right card-font text-muted"><i class="fas fa-users text-muted"></i> {{ !empty($course->users_enroll_count) ? $course->users_enroll_count : 'No'}} Students Enrolled</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @empty

                @endforelse
                <!---2nd slide-->
            </div>
            @else
             <div class="row justify-content-center">
                        <h1 class="text-center text-muted">
                            Resources are coming soon. <br/>Stay tuned!
                        </h1>
                    </div>
            @endif
        </div>
    </section>
    <!---------------Categories section-->
    <section class="cat-section bg-image mt-5">
        <div class="container-fluid">
            <div class="row">
                @forelse($categories as $index => $category)
                @if($index < 4)

                @if($loop->odd)
                <div class="col-md-3 bg-fav" style="opacity: 0.92; ">
                    <div class="text-center margin-cat-2">
                        <a href="{{  url('course?cat_id='.$category->id.'&cat_name='.$category->name) }}">
                            <img src="images/hardware.png" width="40">
                            <h5 class="text-uppercase mt-2 text-white">
                            {{ $category->name}}
                            </h5>
                        </a>
                    </div>
                </div>
                @elseif($loop->even)
                <div class="col-md-3 bg-white" style="opacity: 0.7; ">

                    <div class="text-center margin-cat-2  ">
                        <a href="{{  url('course?cat_id='.$category->id.'&cat_name='.$category->name) }}">
                            <img src="images/icon7.png" width="40">
                            <h5 class="text-uppercase mt-2">
                            {{ $category->name}}
                            </h5>
                        </a>
                    </div>

                </div>
                @endif
                @endif
                @empty
                <div class="col-md-12 mt-3">
                    <h3 class="text-center">No Categories Found!</h3>
                </div>
                @endforelse
            </div>
        @if($cat_count > 4)
            <div class="row">
                @forelse($categories as $index => $category)
                @if($index > 3)

                @if($loop->even)
                <div class="col-md-3 bg-fav" style="opacity: 0.92; ">
                    <div class="text-center margin-cat-2">
                        <a href="{{  url('course?cat_id='.$category->id.'&cat_name='.$category->name) }}">
                            <img src="images/hardware.png" width="40">
                            <h5 class="text-uppercase mt-2 text-white">
                            {{ $category->name}}
                            </h5>
                        </a>
                    </div>
                </div>
                @elseif($loop->odd)
                <div class="col-md-3 bg-white" style="opacity: 0.7; ">

                    <div class="text-center margin-cat-2  ">
                        <a href="{{  url('course?cat_id='.$category->id.'&cat_name='.$category->name) }}">
                            <img src="images/icon7.png" width="40">
                            <h5 class="text-uppercase mt-2">
                            {{ $category->name}}
                            </h5>
                        </a>
                    </div>

                </div>
                @endif
                @endif
                @empty
                @endforelse
                <div class="col-md-3 bg-fav" style="opacity: 0.92; ">
                    <div class="text-center ">
                        <a href="{{  route('course') }}">
                            <h5 class="text-uppercase margin-cat text-white">[View All]</h5>
                        </a>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </section>
    <!------Most rated courses-->
    <section class="mt-5">
        <div class="container ">
            <h4 class="text-dark">Most Rated Courses</h4>
            @forelse($courses as $course)
            @if($course->user)
            @php
                $rate = $course->rating()->avg('rate');
                $rate = number_format((float)$rate, 1, '.', '');
            @endphp
            @if(!empty($rate) && $rate >= 4.0)
            <div class="row shadow-sm p-3 mb-5 bg-white rounded">
                <div class="col-md-3">
                    <img class="card-img-top" src="{{ $course->image }}" >
                </div>
                <div class="col-md-9 ">
                    <h5 class="mt-2">{{ $course->name}}</h5>
                    <h5 class="color-a">{{ !empty($course->price) ? 'Price: '.$course->price.'$' : 'Free'}}</h5>
                    <hr>
                    <h6 style="font-size: 0.9em;">
                        {{
                            $first20words = implode(' ', array_slice(str_word_count($course->description,1), 0, 40))

                        }}
                    </h6>
                    <i class="fas fa-star" style="color: #ffc32c;"></i><span class="ml-2">{{$rate}}</span><span
                        class="float-right"><a href="{{  url('course?slug='.$course->slug) }}">View More</a></span>
                </div>
            </div>
            @endif
            @endif
            @empty
            @endforelse
        </div>
    </section>
    <!----------------------Footer ---------------------------->
    @include('user.partials.footer')

    <!----------------------Copyright---------------------------->
    @include('user.partials.copyright')



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{ asset('slick/slick.js')}}" type="text/javascript"></script>
    <script>
        $(".center").slick({
            dots: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 2,
            responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 2,
                                infinite: true,
                                dots: false,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 0,
                            }
                        }
                    ]
        });
    </script>
    

@endsection
