@extends('user.layouts.main')

@section('title', 'Courses')

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')
    <!--  -->
    <section class="res-section bg-image">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <div class="text-center">
                            <img class="w-100 resourxs-img  mb-5"
                            src="{{ (!empty($course->image)) ? asset('storage/storage/'.$course->image) : asset('images/technology.png') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mb-3 ">
                        <h1 class="font-weight-bolder  pt-4">
                        {{$course->name}}
                        </h1>
                        <p class="mr-5 ">
                            {{ $course->description}}
                        </p>

                        @php  $tags = explode(" ",$course->tags) @endphp
                        @foreach( $tags as $tag)
                            <a href="#" class="font-weight-bold ml-2">
                                {{$tag}}
                            </a>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="text-dark mb-4">Courses</h4>
                    
                    <div class="row">
                        @forelse($courses as $course)
                        <div class="col-md-4 mt-2">
                            <a href="{{  route('course', [$course->slug]) }}" class="text-decoration-none text-dark">
                            <div class="card">
                                <div style="position: relative; left: 0; top: 0;">
                                    <img class="card-img-top main-img" 
                                    src="{{ (!empty($course->image)) ? asset('storage/storage/'.$course->image) : asset('images/img 1.png') }}" 
                                    alt="Card image cap">
                                    <img class="img-fluid prof-img rounded-circle" 
                                    src="{{ (!empty($course->user->profile->image)) ? asset('storage/storage/'.$course->user->profile->image) : asset('images/Group 14.png') }}"
                                     width="50">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $course->name}}</h5>
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
                                        class="ml-2 card-font">4.5</span>
                                    <span class="float-right card-font"><i class="fas fa-users"></i> 
                                    {{ !empty($course->users_enroll_count) ? $course->users_enroll_count : 'No Users'}} Enrolled
                                    </span>
                                </div>
                            </div>
                        </a>
                        </div>
                        @empty
                        <div class="col-md-12 mt-3">
                          <h3 class="text-center">No Courses Found!</h3>
                          <h4 class="text-center">Please search with some other keywords!</h4>
                        </div>
                    @endforelse
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form  style="max-width:350px" action="{{ route('search.course') }}" method="POST">
                            @csrf
                            <input type="text" class="form-control w-100 "
                                placeholder="Search.." style="height: 40px; margin-top: 3.5rem;" name="keyword">
                            <button type="submit" class="mt-2 btn btn-course-search">Search</button>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mt-4">Treanding Courses</h5>
                            <hr style="background-color: rgb(170, 170, 170);">

                            @forelse($all_courses as $trending)

                            @if(!empty($trending->users_enroll_count) && $trending->users_enroll_count >= 10)
                            <a href="{{  route('course', [$trending->slug]) }}">{{$trending->name}}</a>
                            <hr style="background-color: rgb(170, 170, 170);">
                            @endif

                            @empty
                            <h6 >No Trending Courses!</h6>
                            @endforelse

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mt-4">Popular Courses</h5>
                            <hr style="background-color: rgb(170, 170, 170);">

                            @forelse($all_courses as $popular)
                            @php 
                                $rate = $popular->rating()->avg('rate');
                                $rate = number_format((float)$rate, 1, '.', '');
                            @endphp
                            @if(!empty($rate) && $rate >= 4.0)
                            <a href="{{  route('course', [$popular->slug]) }}">{{$popular->name}}</a>
                            <hr style="background-color: rgb(170, 170, 170);">
                            @endif

                            @empty
                            <h6 >No Popular Courses!</h6>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!----------------------Footer ---------------------------->
@include('user.partials.footer')

<!----------------------Copyright---------------------------->
@include('user.partials.copyright')

@endsection