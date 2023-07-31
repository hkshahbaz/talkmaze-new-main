@extends('user.layouts.main')

@section('title', 'Courses')

@section('css')
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 12px 15px;
            border: 1px solid #ced4da;
            height: 43px;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
        #card-errors{
            color: #fa755a;
        }
        .btn-theme{
            background-color: #69d2b1 !important;
    color: white !important;
        }
        #discount_code_message p{
            font-weight: 500;
            display: block;
            width: 100%;
            font-size: 16px;
        }
    </style>
@endsection

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')
    <!----------------Main Setion------------------------->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col bg-light p-0">
                    <section class="res-section bg-image">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="row pt-4 pb-3">
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <img class="img-fluid  mb-5" src="{{ $course->image}}" width="270">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <h1 class="font-weight-bolder ">{{$course->name}}
                                                </h1>
                                                <p class="mr-5 ">
                                                    {{ $course->description}}
                                                </p>
                                                @php  $tags = explode(" ",$course->tags) @endphp
                                                @foreach( $tags as $tag)
                                                    <a href="#" class="font-weight-bold text-decoration-none text-dark ml-2">
                                                        {{$tag}}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class=" col-6 col-md-3">
                                                <i class="fas fa-star card-font " style="color: #ffc32c;"></i>
                                                <span style="font-size: 16px;" >
                                                    @php
                                                    $rate = $course->rating()->avg('rate');
                                                    $rate = number_format((float)$rate, 1, '.', '');
                                                    @endphp

                                                    {{ !empty($rate) ? $rate : '0' }}
                                                </span>
                                                <span class="weight-res " style="font-size: 12px;">
                                                    ({{!empty($course->reviews_count) ? $course->reviews_count : 'No'}} reviews)
                                                </span>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <i class="fas fa-users"></i>
                                                <span class="ml-1 weight-res">{{ !empty($course->users_enroll_count) ? $course->users_enroll_count : 'No'}} students</span>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <i class="fas fa-users "></i>
                                        <span class="ml-1 weight-res">Owned By:</span> <br>
                                        <span class="ml-1 weight-res text-uppercase ml-4">{{$course->user->name}}</span>
                                            </div>
                                            <div class="col-6 col-md-3">
                                            @if(!empty($course->price) || $course->price != 0)
                                                <img class="ml-1 mb-1" src="{{asset('images/Vector Smart Object8.png')}}" width="20">
                                                <span class=" font-weight-bold" style="font-size: large;">
                                                    {{ $course->price }}
                                                </span>
                                            @else
                                                <span class="font-weight-bold" style="font-size: large;">
                                                    Free
                                                </span>
                                            @endif
                                                <br>
                                            @if(auth()->check())
                                                @if(!auth()->user()->courses()->where('course_id',$course->id)->exists())

                                                    @php
                                                    $count = count(auth()->user()->package()->get());
                                                    $plan_id = null;

                                                    $slug = $course->slug;
                                                    @endphp

                                                    @if($slug == 'introduction-to-public-speaking')
                                                        <a href="{{ route('buy.course') }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('buy-course-form').submit();"
                                                        title="Enroll Now">   <button class="btn btn-dark mb-3 mt-3">Enroll Now</button></a>

                                                        <form id="buy-course-form" action="{{ route('buy.course') }}" method="POST" style="display: none;">
                                                            <input type="hidden" name="status" value="true">
                                                            <input type="hidden" name="id" value="{{$course->id}}">
                                                            @csrf
                                                        </form>

                                                        @else

                                                        @if($count === 0)
                                                        <a href="#" data-toggle="modal"
                                                        data-target="#paymentDetailsModal" title="Buy Now">   <button class="btn btn-dark mb-3 mt-3">Buy Now</button></a>
                                                    @else
                                                        @php
                                                            $package = auth()->user()->package()->get(['plan_id'])->toArray();

                                                            $plan_id = $package[0]['plan_id'];
                                                        @endphp
                                                        
                                                        <!-- 2,3,4 are private coaching plans in the database -->
                                                        @if($plan_id === 2 || $plan_id === 3 || $plan_id === 4 )

                                                        <a href="{{ route('buy.course') }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('buy-course-form').submit();"
                                                        title="Enroll Now">   <button class="btn btn-dark mb-3 mt-3">Enroll Now</button></a>

                                                        <form id="buy-course-form" action="{{ route('buy.course') }}" method="POST" style="display: none;">
                                                            <input type="hidden" name="status" value="true">
                                                            <input type="hidden" name="id" value="{{$course->id}}">
                                                            @csrf
                                                        </form>

                                                        @endif

                                                    @endif
                                                    @endif
                                                @endif
                                            @else
                                            <a href="#" data-toggle="modal"
                                                data-target="#loginModal" title="Buy Now" >
                                                <button class="btn btn-dark mb-3 mt-3">Buy Now</button>
                                            </a>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                             @if(session('success'))
                                <div class="alert alert-success mb-0" role="alert">
                                    Congratulation's! Your payment is successfully captured and you're enrolled in the subject.
                                </div>
                            @endif
                        </div>
                    </div>
                    

                    <section class="mt-5 ml-4">
                        <div style="overflow: hidden">
                            <div class="row">
                                <div class="col-md-10 offset-1">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <nav class="bg-tab-res" style="border-radius: 25px;">
                                                <div class="nav nav-tabk nav-fill " id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab"
                                                        data-toggle="tab" href="#nav-home" role="tab"
                                                        aria-controls="nav-home" aria-selected="true">
                                                        <h5 class="text-uppercase"
                                                            style="color: white; font-size: 12px; display:inline;"> Home
                                                        </h5>
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                        aria-selected="false">
                                                        <h5 class="text-uppercase"
                                                            style="color: white; font-size: 12px; display:inline;">
                                                            Curriculum</h5>
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                        href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                        aria-selected="false">
                                                        <h5 class="text-uppercase"
                                                            style="color: white; font-size: 12px; display:inline;">
                                                            members</h5>
                                                    </a>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="nav-tabContent">
                                        <!--Home Tab-->
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <div class="container mt-4 mb-5">
                                                <p>
                                                    {{ $course->description}}
                                                </p>
                                            </div>
                                        </div>
                                        <!--Curriculum tab-->
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                            aria-labelledby="nav-profile-tab">
                                            <div class="container-fluid mt-4 mb-5">
                                                <div class="row border-res-dash">
                                                    <h5  style="font-size: 1em;">Course Curriculum</h5>
                                                </div>
                                            @forelse($course->lessons as $lesson)
                                                <div class="row border-res-dash mt-4 card-header collapsed " data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="collapseExample" style="cursor: pointer;" id="lesson{{$loop->iteration}}">
                                                    <div class="col">
                                                        <h5  style="font-size: 1em;" >
                                                        Lesson {{$loop->iteration}}: {{$lesson->name}}
                                                        </h5>
                                                    </div>
                                                    <div class="col">
                                                       <span  class="float-right" >
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="collapse" id="collapse{{$loop->iteration}}">
                                                    @forelse($lesson->course_contents as $content)

                                                        @if($content->content_type_id == 4)
                                                            <div class="row mt-4" data-toggle="modal" data-target="#exampleModal">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/doc.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <a href="{{ asset('') }}"><h5 class="ml-1 font-weight-bold mt-1">
                                                                                    {{ $content->title }}
                                                                                </h5></a>
                                                                            <img  src="images/d (2).png" width="17">
                                                                            <span class="ml-1">{{ $content->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <hr>

                                                        @endif

                                                        @if($content->content_type_id == 1)
                                                        <div class="row mt-4" data-toggle="modal" data-target="#exampleModal">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                        <img src="{{asset('images/doc.png')}}" width="30">
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <h5 class="ml-1 font-weight-bold mt-1">
                                                                        {{ $content->title }}
                                                                        </h5>
                                                                        <img  src="images/d (2).png" width="17">
                                                                <span class="ml-1">{{ $content->posted_on}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                
                                                            </div>
                                                            <hr>
                                                        </div>
                                                        <hr>

                                                        @endif

                                                        @if($content->content_type_id == 2)
                                                            <div class="row mt-4" data-toggle="modal" data-target="#exampleModal">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                        <img src="{{asset('images/audio.png')}}" width="30">
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <h5 class="ml-1 font-weight-bold mt-1">
                                                                        {{ $content->title }}
                                                                        </h5>
                                                                        <img  src="images/d (2).png" width="17">
                                                                <span class="ml-1">{{ $content->posted_on}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                
                                                            </div>
                                                            <hr>
                                                        </div>
                                                        <hr>
                                                        @endif

                                                        @if($content->content_type_id == 3)
                                                            <div class="row mt-4" data-toggle="modal" data-target="#exampleModal">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                        <img src="{{asset('images/playres.png')}}" width="30">
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <h5 class="ml-1 font-weight-bold mt-1">
                                                                        {{ $content->title }}
                                                                        </h5>
                                                                        <img  src="images/d (2).png" width="17">
                                                                <span class="ml-1">{{ $content->posted_on}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                
                                                            </div>
                                                            <hr>
                                                        </div>
                                                        <hr>
                                                        @endif

                                                    @empty
                                                    @endforelse

                                                </div>
                                            @empty
{{--                                            <div class="col-md-12 mt-3">--}}
{{--                                              <h3 class="text-center">No Recent Lessons!</h3>--}}
{{--                                              <h4 class="text-center">Please visit some other time</h4>--}}
{{--                                            </div>--}}
                                            @endforelse

                                                {{--khali content --}}

                                                @forelse($course->content as $content_dat)
                                                   @if($content_dat->lesson_id == 0)

                                                        @if($content_dat->content_type_id == 4)
                                                            <div class="row mt-4">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/doc.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <a href="{{ asset('storage/videos/'.$content_dat->content) }}">
                                                                                <a href="{{ asset('storage/documents/'.$content_dat->content) }}">
                                                                                    <h5 class="ml-1 font-weight-bold mt-1">
                                                                                        {{ $content_dat->title }}
                                                                                    </h5>
                                                                                </a>
                                                                            </a>
                                                                            <img  src="images/d (2).png" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-4"style="font-size: 1em;">
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/eye.png')}}" width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->views_count}} views</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/like.png')}}"  width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->likes_count}} Likes</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/size.png')}}"  width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->size}} Size</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <hr>

                                                        @endif

                                                        @if($content_dat->content_type_id == 1)
                                                            <div class="row mt-4">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/doc.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <h5 class="ml-1 font-weight-bold mt-1" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{ $content_dat->id }}">
                                                                                {{ $content_dat->title }}
                                                                            </h5>
                                                                            @auth
                                                                                @if(auth()->user()->courses()->where('course_id',$course->id)->exists())
                                                                                    <div class="modal fade bd-example-modal-lg" id="exampleModal{{ $content_dat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="exampleModalLabel">{{ $content_dat->title }}</h5>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true" style="color: grey !!important;">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="row justify-content-center p-3">
                                                                                                        <h2>{{ $content_dat->title }}</h2>
                                                                                                        <p class="text-justify">{{ $content_dat->content }}</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endauth
                                                                            <img  src="images/d (2).png" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-4"style="font-size: 1em;">
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/eye.png')}}" width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->views_count}} views</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/like.png')}}"  width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->likes_count}} Likes</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/size.png')}}"  width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->size}} Size</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <hr>

                                                        @endif

                                                        @if($content_dat->content_type_id == 2)
                                                            <div class="row mt-4">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/audio.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <h5 class="ml-1 font-weight-bold mt-1" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{ $content_dat->id }}">
                                                                                {{ $content_dat->title }}
                                                                            </h5>
                                                                            @auth
                                                                                @if(auth()->user()->courses()->where('course_id',$course->id)->exists())
                                                                                    <div class="modal fade" id="exampleModal{{ $content_dat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="exampleModalLabel">{{ $content_dat->title }}</h5>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true" style="color: grey !!important;">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="row justify-content-center">
                                                                                                        <figure>
                                                                                                            <figcaption>{{ $content_dat->title }}</figcaption>
                                                                                                            <audio
                                                                                                                controls
                                                                                                                src="{{ asset('storage/audios/'.$content_dat->content) }}">
                                                                                                                Your browser does not support the
                                                                                                                <code>audio</code> element.
                                                                                                            </audio>
                                                                                                        </figure>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endauth
                                                                            <img  src="images/d (2).png" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-4"style="font-size: 1em;">
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/eye.png')}}" width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->views_count}} views</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/like.png')}}"  width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->likes_count}} Likes</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/size.png')}}"  width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->duration}} Duration</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <hr>
                                                        @endif

                                                        @if($content_dat->content_type_id == 3)
                                                            <div class="row mt-4">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/playres.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <h5 class="ml-1 font-weight-bold mt-1" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{ $content_dat->id }}">
                                                                                {{ $content_dat->title }}
                                                                            </h5>
                                                                            @auth
                                                                                @if(auth()->user()->courses()->where('course_id',$course->id)->exists())
                                                                                    <div class="modal fade" id="exampleModal{{ $content_dat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="exampleModalLabel">{{ $content_dat->title }}</h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true" style="color: grey !!important;">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div class="row justify-content-center">
                                                                                                    <video controls width="350">
                                                                                                        <source src="{{ asset('storage/videos/'.$content_dat->content) }}" type="video/mp4">
                                                                                                    </video>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @endif
                                                                            @endauth
                                                                            <img  src="images/d (2).png" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-4"style="font-size: 1em;">
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/eye.png')}}" width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->views_count}} views</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/like.png')}}"  width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->likes_count}} Likes</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/size.png')}}"  width="15">
                                                                            <span class="ml-1" style="color:black !important;">{{$content_dat->duration}} Duration</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <hr>
                                                        @endif
                                                   @endif

                                                @empty
                                                @endforelse

                                            </div>
                                        </div>
                                        <!--Members Tab-->
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                            aria-labelledby="nav-contact-tab">

                                            <div class="container-fluid mt-5 mb-5">
                                                <div class="row">
                                                    @forelse($course->users as $index =>  $user)
                                                    @if($index < 24)
                                                    <div class="col-md-1 text-center">
                                                        <div class="col p-0">
                                                            <img src="{{ (!empty($user->profile->image)) ? $user->profile->image : asset('images/Rectangle 1.png') }}" width="100%"  height="100%" class="rounded-circle">
                                                        </div>
                                                        <div class="col p-0">
                                                        
                                                            <h6 class="text-center">{{ $user->profile->city.', '.$user->profile->country }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @empty
                                                    <div class="col-9 bg-gold">
                                                        <p class="text-uppercase mt-2 mb-2">No member Found</p>
                                                    </div>
                                                    @endforelse

                                                </div>
                                                <div class="row" id="view-more-question" style="display: none">
                                                    @forelse($course->users as $index =>  $user)
                                                    @if($index > 23)
                                                    <div class="col-md-1 text-center">
                                                        <div class="col p-0">
                                                            <img src="{{ (!empty($user->profile->image)) ? asset('storage/storage/'.$user->profile->image) : asset('images/Rectangle 1.png') }}" width="100%"  height="100%" class="rounded-circle">
                                                        </div>
                                                        <div class="col p-0">
                                                            <h6 class="text-center font-weight-bold mt-2">
                                                                {{ $user->name }}
                                                            </h6>
                                                            <h6 class="text-center">{{ $user->profile->city.', '.$user->profile->country }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @empty
                                                    @endforelse
                                                </div>
                                                <div class="row d-flex justify-content-center">
                                                   @if($course->users_enroll_count > 23)
                                                        <button type="button" class="btn btn-dark text-uppercase mt-4 view-more">View more</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </section>

 <!-- Modal For Stripe Payment Details -->
  <div class="modal fade" id="paymentDetailsModal" tabindex="-1" role="dialog"
    aria-labelledby="paymentDetailsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
        <div class="modal-header">
          <h4 class="modal-title ml-auto" id="exampleModalLongTitle">Payment Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form action="{{ route('buy.course') }}" method="POST" id="payment-form" class=" text-center">
                @csrf
                <input type="hidden" name="id" value="{{$course->id}}">
                <input type="hidden" name="price" id="course_price" value="{{$course->price}}">
                <input type="hidden" name="code_type" id="code_type" value="course">
                <input type="hidden" name="duration" id="duration" value="">

                <input id="card-holder-name" type="text" class="form-control" name="name" placeholder="Card Holder Name" autocomplete="off">
                <div id="card-element" class="mt-3"></div>
                <div id="card-errors" role="alert"></div>

                <div class="row mt-3">
                    <div class="col-9">
                        <input id="discount_code" type="text" class="form-control" name="name" placeholder="Coupon Code (Optional)" autocomplete="off" style="height: calc(1.6em + 0.75rem + 2px);">
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-primary" id="apply-coupon" style="display:inline-block;">Apply</button>
                    </div>
                </div>

                <div class="row p-0 m-3 justify-content-center" id="discount_code_message"></div>

                <button type="submit" class="btn btn-theme text-white mt-3" id="purchase-btn">
                    Pay Now
                </button>
            </form>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal For pop Up sign in -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
    aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
        <div class="modal-header">
          <h4 class="modal-title ml-auto" id="exampleModalLongTitle">Log In</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('guest.login') }}" class="js-form-login form">
          @csrf
            <label class="text-muted h8 font-weight-bolder">Email/Username</label>
            <input class="form-control bg-light" type="email" name="email"  style="height: 2.2rem;" value="{{old('email')}}" id="email" data-validate-field="email"
            >
            {!! $errors->first('email', '<label id="email-error-default" style="color:#D75A4A" for="email">:message</label>') !!}
            <label id="email-error" for="email" class="d-none" style="color:#D75A4A">Email is required!</label>
            <label id="email-error-valid" for="valid-email" class="d-none" style="color:#D75A4A">Please enter a valid Email Address!</label>

            <label class="text-muted h8 font-weight-bold mt-2">Password</label>
            <input class="form-control bg-light" type="password" name="password" style="height: 2.2rem;" id="password" data-validate-field="password" >
            {!! $errors->first('password', '<label id="password-error-default" style="color:#D75A4A" for="password">:message</label>') !!}
            <label id="password-error" for="password" class="d-none" style="color:#D75A4A">Password is required!</label>

            <button id="btn-default-login" type="submit" class="btn btn-default-login mt-4">SEND</button>

            <a href="{{url('register')}}">
              <h6 class="text-center mt-2 color-a" style="font-size: 0.8em;">Create a new account?</h6>
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        The Course Content is accessible through your dashboard!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-primary" href="{{ url('/dashboard-my/courses') }}">Go to courses</a>
      </div>
    </div>
  </div>
</div>

<!----------------------Footer ---------------------------->
@include('user.partials.footer')

<!----------------------Copyright---------------------------->
@include('user.partials.copyright')

<script src="{{ asset('js/just-validate.min.js') }}"></script>

<script type="text/javascript">
    let count = '{{ count($course->lessons) }}';
    for(var i=1; i<=count; i++){

      $('#lesson'+i).click(function(){
        let lessonClass = $(this).attr('class');
        if(lessonClass.includes("collapsed")){
          $(this).find('.fas').removeClass('fa-plus').addClass('fa-minus')
        }
        else{
          $(this).find('.fas').removeClass('fa-minus').addClass('fa-plus')
        }
      })


    $('#lesson'+i).dblclick(function(e){
        e.preventDefault();
    })
    }

    // Validate coupan code using aJax request  

    $('#apply-coupon').click(function(e) {

        document.getElementById('apply-coupon').disabled = true;
        $('#apply-coupon').css('cursor','default');

        var io = $('#discount_code').val();
        if(io !== ''){
           $.ajax({
                url:'{{ url("/check_discount_code") }}'+'/'+io,
                method:'POST',
                data:{
                    code_type:$("#code_type").val(),
                    price:'{{$course->price}}',
                    _token:'{{ csrf_token() }}'
                },
                success:function(data){
                    console.log(data)

                    document.getElementById('discount_code_message').innerHTML = `<p style="color:green;">Congratulations! coupon code worked.</p>
                        <p style="color:green;">You will pay $`+data.price+` for this course</p>`;

                    document.getElementById('discount_code').disabled = true;
                    $('#course_price').val(data.price)
                    $('#duration').val(data.duration)
                },
                error:function (error) {
                    document.getElementById('discount_code_message').innerHTML = `<p style="color:#fa755a;">Promo code is Invalid or Expired</p>`;
                    console.log('error')
                    document.getElementById('apply-coupon').disabled = false;
                    $('#apply-coupon').css('cursor','pointer');
                }
            }) 
        }
        
    }) 

    // END Validate coupan code using aJax request


    $('.view-more').click(function(){

      $("#view-more-question").slideToggle('slow',function(){
        $(this).toggleClass('visible');
        var viewMoreQuestionClass = $('#view-more-question').attr('class');

        if(viewMoreQuestionClass.includes('visible')){
          $('.view-more').text('View Less')
        }
        else{
          $('.view-more').text('View More')
        }
      });

    })

     // Login Modal Validations
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
                required: 'Email address is required field!',
                email: 'Please enter a valid email address',
            },
            password: {
                required: 'Password is required field!',
            },
        },
    });
</script>
@endsection


<script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/js/jquery.steps.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>
    <script src="{{asset('dashboard/js/moment.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{asset('dashboard/js/bootstrap-multiselect.min.js')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        $(document).ready(function () {
            // Create a Stripe client.
            var stripe = Stripe("{{ env('STRIPE_KEY') }}");
            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"proxima-nova", "Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                    color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style, hidePostCode:true});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Disable The submit button on click
                document.getElementById('purchase-btn').disabled = true;

                var options = {
                    name: document.getElementById('card-holder-name').value,
                }
                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;

                        // Enable The submit button
                        document.getElementById('purchase-btn').disabled = false;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        });
    </script>
</script>
