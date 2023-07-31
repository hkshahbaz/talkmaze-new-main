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
                            src="{{ $course->image}}">
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
                        <div class="col-md-12">
                            <h3 class="bolder text-center mt-2">
                                {{ !empty($keyword) ? 'Search results for: '.$keyword : ''}}
                            </h3>
                        </div>
                        @forelse($courses as $course)
                        <div class="col-md-5 mt-2">
                            <a href="{{  route('course', [$course->slug]) }}" class="text-decoration-none text-dark">
                            <div class="card">
                                <div style="position: relative; left: 0; top: 0;">
                                    <img class="card-img-top main-img" 
                                    src="{{ $course->image  }}" 
                                    alt="Card image cap">
                                    <img class="img-fluid prof-img rounded-circle" 
                                    src="{{ $course->user->profile->image }}"
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
                                    <i class="fas fa-star card-font text-muted" style="color: #ffc32c;"></i><span
                                        class="ml-2 card-font text-muted">4.5</span>
                                    <span class="float-right card-font text-muted"><i class="fas fa-users"></i> 
                                    {{ !empty($course->users_enroll_count) ? $course->users_enroll_count : 'No'}} Students Enrolled
                                    </span>
                                </div>
                            </div>
                        </a>
                        </div>
                        @empty
                        <div class="col-md-12 mt-3">
                          <h3 class="text-center">No Courses Found!</h3>
                          <h4 class="text-center">Please visit some other time or search with some other keyword!</h4>
                        </div>
                    @endforelse
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form style="max-width:350px" action="{{ url('course') }}" method="GET">
                            <input type="search" class="form-control w-100 "
                                placeholder="Search here..." style="height: 40px; margin-top: 3.5rem;" name="keyword" required>
                            <button type="submit" class="mt-2 btn btn-course-search">Search</button>
                            </form>
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