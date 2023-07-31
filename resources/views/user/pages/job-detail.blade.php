@extends('user.layouts.main')

@section('title', $job->title)

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')

<section class="hero-section">
    <div class="container text-center">
        <div class="row" style="margin-right: 0px!important;">
            <div class="col-lg-5 col-md-5 text-justify">
                <div class="hub-content text-center">
                    <h1 class="text-uppercase">Join Our Team</h1>
                    <a href="{{ url('join-our-team') }}" type="button" class="btn btn-dark text-uppercase mt-3">Explore more</a>

                </div>
            </div>
            <div class="col-lg-7 col-md-7 ">
                <div>
                    <img class=" img-fluid mt-5 mb-5" src="{{asset('images/joinTeam.png')}}" width="340">
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4 class="text-dark text-uppercase mt-2">
                    {{ $job->title}}
                </h4>
                <h5 class="mt-2 font-weight-normal">Location:
                {{ $job->location }}
                </h5>
                <div class="row justify-content-center">
                    <div class="col-md-12 ml-4">
                        <h5>Job Category: {{ $job->category}}</h5>
                        <h5 style="color: black !important;">{{ $job->location}}</h5>
                        <h5 class="mt-4">Job Description</h5>
                        <div class="inner3">&nbsp;</div>
                        <div class="remvoe mt-2" style="color: black !important;">
                            {!! $job->description !!}
                        </div>
                        <h5 class="mt-4">Job Requirements</h5>
                        <div class="inner3">&nbsp;</div>
                        <div class="mt-2 remvoe" style="color: black !important;">
                            {!! $job->requirement !!}
                        </div>
                        <div class="text-center">
                            <a href="{{  route('job.apply', [$job->slug])  }}">
                                <button class="btn btn-job mt-3" id="apply">Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
                }

            </style>

            <div class="col-md-3">
                <a href="{{  route('job.apply', [$job->slug])  }}">
                    <button class="btn btn-job mt-2" >Apply Now</button>
                </a>
                <!-- <h5 class="mt-4">Not ready to apply?</h5>
                <a class="text-dark" href="#" style="text-decoration: underline;">Save For Later</a> -->
                <hr style="color: gray;">
                <h6 class="mb-2" style="font-size: 0.9em;">Share This Job</h6>
                <!-- AddToAny BEGIN -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_email"></a>
                    <a class="a2a_button_pinterest"></a>
                </div>
                <!-- AddToAny END -->
                <h6 class="mt-4" style="font-size: 0.9em;">Other Jobs</h6>
                @forelse($jobs as $job)
                <a class="text-dark mt-3" href="{{  route('job.detail', [$job->slug])  }}" style="text-decoration: underline;"> {{$job->title}} </a>
                <h6> {{ $job->location }}</h6>
                @empty
                <h6 class="mt-4" style="font-size: 0.9em;">No recent jobs</h6>
                @endforelse
            </div>
        </div>
    </div>
    <br>

<!----------------------Footer ---------------------------->
@include('user.partials.footer')

<!----------------------Copyright---------------------------->
@include('user.partials.copyright')
<script async src="https://static.addtoany.com/menu/page.js"></script>
@endsection
