@extends('user.dashboard.layouts.main')

@section('title', 'Resources')

@section('content')
    <!--------------------------MAin Setion---------------->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <!---------------------------------------------------------Colloum 1-------------------------------------------->
                @include('user.dashboard.partials.sidebar')
                <!-------------------------------------------------------------colloum2------------------------------------------->
                <div class="col-md-8dot4 p-0">
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
                                                        <a href="{{ route('buy.course',['id'=>$course->id]) }}">   <button class="btn btn-dark mb-3 mt-3">Buy Now</button></a>
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
                                                                Chapter {{$loop->iteration}}: {{$lesson->name}}
                                                            </h5>
                                                        </div>
                                                        <div class="col">
                                                       <span  class="float-right" >
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                        </div>

                                                    </div>
                                                    <div class="collapse" id="collapse{{$loop->iteration}}">
                                                        @forelse($lesson->course_contents as $content_dat)
                                                        

                                                        @if($content_dat->content_type_id == 1)
                                                            <div class="row mt-4" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{ $content_dat->id }}">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/doc.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <h5 class="ml-1 font-weight-bold mt-1">
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
                                                                                                        <span aria-hidden="true" style="color: grey !important;">&times;</span>
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
                                                                            <img  src="{{ asset('images/d (2).png') }}" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <hr>

                                                        @endif

                                                        @if($content_dat->content_type_id == 2)
                                                            <div class="row mt-4" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{ $content_dat->id }}">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/audio.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <h5 class="ml-1 font-weight-bold mt-1" >
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
                                                                                                        <span aria-hidden="true" style="color: grey !important;">&times;</span>
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
                                                                            <img  src="{{ asset('images/d (2).png') }}" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <hr>
                                                        @endif

                                                        @if($content_dat->content_type_id == 3)
                                                            <div class="row mt-4" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{ $content_dat->id }}">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/playres.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <h5 class="ml-1 font-weight-bold mt-1" >
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
                                                                                                        <span aria-hidden="true" style="color: grey !important;">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="row justify-content-center">
                                                                                                        <video controls width="550" height="400" class="vid">
                                                                                                            <source src="{{ asset('storage/videos/'.$content_dat->content) }}" type="video/mp4">
                                                                                                        </video>
                                                                                                    </div>
                                                                                                    <br/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endauth
                                                                            <img  src="{{ asset('images/d (2).png') }}" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <hr>
                                                        @endif
                                                        
                                                        @if($content_dat->content_type_id == 4)
                                                            <div class="row mt-4" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{ $content_dat->id }}">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-1">
                                                                            <img src="{{asset('images/doc.png')}}" width="30">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <h5 class="ml-1 font-weight-bold mt-1" >
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
                                                                                                        <span aria-hidden="true" style="color: grey !important;">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="row justify-content-center">
                                                                                                        <!--<video controls width="550" height="400">-->
                                                                                                        <!--    <source src="" type="video/mp4">-->
                                                                                                        <!--</video>-->
                                                                                                        <iframe src="{{ asset('storage/pdf/'.$content_dat->content) }}" width="100%" height="500px"></iframe>
                                                                                                    </div>
                                                                                                    <br/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endauth
                                                                            <img  src="{{ asset('images/d (2).png') }}" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
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
                                                                            <img  src="{{ asset('images/d (2).png') }}" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-4"style="font-size: 1em;">
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/eye.png')}}" width="15">
                                                                            <span class="ml-1">{{$content_dat->views_count}} views</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/like.png')}}"  width="15">
                                                                            <span class="ml-1">{{$content_dat->likes_count}} Likes</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/size.png')}}"  width="15">
                                                                            <span class="ml-1">{{$content_dat->size}} Size</span>
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
                                                                                                        <span aria-hidden="true" style="color: grey !important;">&times;</span>
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
                                                                            <img  src="{{ asset('images/d (2).png') }}" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-4"style="font-size: 1em;">
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/eye.png')}}" width="15">
                                                                            <span class="ml-1">{{$content_dat->views_count}} views</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/like.png')}}"  width="15">
                                                                            <span class="ml-1">{{$content_dat->likes_count}} Likes</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/size.png')}}"  width="15">
                                                                            <span class="ml-1">{{$content_dat->size}} Size</span>
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
                                                                                    <div class="modal fade bd-example-modal-lg" id="exampleModal{{ $content_dat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="exampleModalLabel">{{ $content_dat->title }}</h5>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true" style="color: grey !important;">&times;</span>
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
                                                                            <img  src="{{ asset('images/d (2).png') }}" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-4"style="font-size: 1em;">
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/eye.png')}}" width="15">
                                                                            <span class="ml-1">{{$content_dat->views_count}} views</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/like.png')}}"  width="15">
                                                                            <span class="ml-1">{{$content_dat->likes_count}} Likes</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/size.png')}}"  width="15">
                                                                            <span class="ml-1">{{$content_dat->duration}} Duration</span>
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
                                                                                    <div class="modal fade bd-example-modal-lg" id="exampleModal{{ $content_dat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="exampleModalLabel">{{ $content_dat->title }}</h5>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true" style="color: grey !important;">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="row justify-content-center">
                                                                                                        <video controls width="550" height="400">
                                                                                                            <source src="{{ asset('storage/videos/'.$content_dat->content) }}" type="video/mp4">
                                                                                                        </video>
                                                                                                    </div>
                                                                                                    <br/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endauth
                                                                            <img  src="{{ asset('images/d (2).png') }}" width="17">
                                                                            <span class="ml-1">{{ $content_dat->posted_on}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-4"style="font-size: 1em;">
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/eye.png')}}" width="15">
                                                                            <span class="ml-1">{{$content_dat->views_count}} views</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/like.png')}}"  width="15">
                                                                            <span class="ml-1">{{$content_dat->likes_count}} Likes</span>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <img src="{{asset('images/size.png')}}"  width="15">
                                                                            <span class="ml-1">{{$content_dat->duration}} Duration</span>
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
                                                                    <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 50%;">
                                                                        <img src="{{ (!empty($user->profile->image)) ? $user->profile->image : asset('images/Rectangle 1.png') }}" width="100%"  height="100%">
                                                                    </div>
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
                                                                    <img src="{{ (!empty($user->profile->image)) ? $user->profile->image : asset('images/Rectangle 1.png') }}" width="100%"  height="100%" class="rounded-circle">
                                                                </div>
                                                                <div class="col p-0">
                                                                
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
    <!-----------------------drop down script--------------------------->
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            $('#noti-badge').hide()
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        document.getElementById("myDropdown").addEventListener('click', function (event) {
            event.stopPropagation();
        });
    </script>
    <!-------------------------------tab script-------------->
    <script>
        function hideElementZero() {
            document.getElementById('1stmodal').style.display = 'block';
            document.getElementById('2ndmodal').style.display = 'none';
            document.getElementById("notdul").style.color = '#69d2b1';
            document.getElementById("reqdul").style.color = 'black';
        }
        function hideElement() {
            document.getElementById('1stmodal').style.display = 'none';
            document.getElementById('2ndmodal').style.display = 'block';
            document.getElementById("notdul").style.color = 'black';
            document.getElementById("reqdul").style.color = '#69d2b1';
        }
    </script>
    <!----hide show of button-->
    <script>
        var toggle = document.getElementById("toggle");
        var content = document.getElementById("content");

        toggle.addEventListener("click", function () {
            content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
        });


    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


   <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
 <script src="{{ asset('dashboard/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <!--steps-->
    <script>
        $(document).ready(function () {
            $("#form-total-t-1").click(function () {
                // alert("The paragraph was clicked.");
                $("div.actions").children().css('display', "inline-block");
            });

            $('a[href^="#finish"]').click(function () {
                $("#form-total").hide();
                $("#lastmodal").show();
            });
        })
        
        $('.modal').on('hidden.bs.modal', function () {
            $('.vid').each(function() {
                $(this).get(0).pause();
            });
        })

    </script>

@endsection
