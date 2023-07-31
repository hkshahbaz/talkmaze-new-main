@extends('user.layouts.main')

@section('title', 'Competitions')

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')
<section class="hero-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 m-auto">
            <div class="text-center text-justify">
                <h2 class="text-uppercase text-white" style="font-size: 32px;">You can, if you believe you can.</h2>
            
            <!-- @auth
                    <button onclick="location.href='{{ url('private-coaching#price-table') }}'" class="btn-dark mt-3">REGISTER NOW</button>
            @endauth-->
               
                    <button onclick="location.href='{{ url('competition#all') }}'" class="btn-dark mt-3 btn-darkblue">Compete Now</button>
                    
            
            </div>
          </div>
          <div class=" col-md-6">
            <div class=" text-center">
              <img class="img-fluid mt-5 mb-5" src="../images/global.png" width="370">
            </div>
          </div>
        </div>
      </div>
    </section>
     <!--  <section class="container-fluid ">
        <div class="container mt-4">
        	 <p>
                <a href="{{ url('join-team') }}"> <button class="btn-light mt-1 mx-5">Upcoming Competitions</button></a>
                <a href="{{ url('join-team') }}"> <button class="btn-light mt-1 mx-5">Current Competitions</button></a>
                <a href="{{ url('join-team') }}"> <button class="btn-light mt-1 mx-5">Past Competitions</button></a>
            </p>
        </div>
    </section> -->
<section class="mt-5" id="all">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="text-dark text-uppercase mb-4">{{ !empty($trend) ? $trend : ''}} Competitions</h4>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="bolder text-center mt-2">
                                {{ !empty($keyword) ? 'Search results for: '.$keyword : ''}}
                            </h3>
                        </div>
                        @forelse($all_competitions as $competition)
                        <div class="col-md-5 mt-2">
                            <div class="card">
                                <div style="position: relative; left: 0; top: 0;">
                                    <img class="card-img-top main-img" 
                                    src="{{ $competition->comp_image  }}" 
                                    alt="Card image cap">
                                    <img class="img-fluid prof-img rounded-circle" 
                                    src="{{ $competition->comp_image }}"
                                     width="50">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $competition->title}}</h5>
                                    <h6 class="card-text font-weight-normal" style="font-size: 0.7em;">
                                        {!!
                                            $competition->description

                                        !!}
                                    </h6>
                                    <h5 class="color-a">
                                      <strong style="color: black">Competition Opens: </strong> 
                                      {{date('j F, Y', strtotime($competition->open_date))}}
                                      
                                    </h5>
                                    <h5 class="color-a">
                                      <strong style="color: black">Final Entries Due: </strong> 
                                      {{date('j F, Y', strtotime($competition->close_date))}}
                                      
                                    </h5>
                                    <!-- <h5 class="color-a">
                                        {{ !empty($competition->entry_fees) ? 'Price: '.$competition->entry_fees : 'Free'}}
                                    </h5> -->
                                    <hr>
                                      <span class=" card-font text-muted"><i class="fas fa-users text-muted"></i> {{ !empty($competition->competitionusers_count) ? $competition->competitionusers_count : 'No'}} Students Enrolled</span>

                                       <a class="float-right font-weight-bold" style="color: blue" href="{{  route('competition', [$competition->slug]) }}">Read More</a>
                                   <!--  <i class="fas fa-star card-font text-muted" style="color: #ffc32c;"></i><span
                                        class="ml-2 card-font text-muted">4.5</span>
                                    <span class="float-right card-font text-muted"><i class="fas fa-users"></i> 
                                    </span> -->
                                </div>
                            </div>
                        </a>
                        </div>
                        @empty
                        <div class="col-md-12 mt-3">
                          <h3 class="text-center">No competitions Found!</h3>
                          <h4 class="text-center">Please visit some other time or search with some other keyword!</h4>
                        </div>

                    @endforelse
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form style="max-width:350px" action="{{ url('competition') }}" method="GET">
                            <input type="search" class="form-control w-100 "
                                placeholder="Search here..." style="height: 40px; margin-top: 3.5rem;" name="keyword" required>
                            <button type="submit" class="mt-2 btn btn-course-search">Search</button>
                            <button onclick="location.href='{{ url('competition') }}'" type="button" class="mt-2 btn btn-primary">Reset</button>
                            </form>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-12">
                            <a href="{{  route('competitiontrend', 'current') }}"><h5 class="mt-4"> Current Competitions</h5></a>
                            <hr style="background-color: rgb(170, 170, 170);">

                            @forelse($competitionall as $trending)

                            @if($trending->status == 'current')
                            <a href="{{  route('competition', [$trending->slug]) }}">{{$trending->title}}</a>
                            <hr style="background-color: rgb(170, 170, 170);">
                            @endif

                            @empty
                            <h6 >No Current Competitions!</h6>
                            @endforelse

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="{{  route('competitiontrend', 'upcoming') }}"><h5 class="mt-4"> Upcoming Competitions</h5></a>
                            <hr style="background-color: rgb(170, 170, 170);">

                            @forelse($competitionall as $trending)

                            @if($trending->status == 'future')
                            <a href="{{  route('competition', [$trending->slug]) }}">{{$trending->title}}</a>
                            <hr style="background-color: rgb(170, 170, 170);">
                            @endif

                            @empty
                            <h6 >No Upcoming Competitions!</h6>
                            @endforelse

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="{{  route('competitiontrend', 'past') }}"><h5 class="mt-4"> Past Competitions</h5></a>
                            <hr style="background-color: rgb(170, 170, 170);">

                            @forelse($competitionall as $past)
                           
                            @if($past->status=='past')
                            <a href="{{  route('competition', [$past->slug]) }}">{{$past->title}}</a>
                            <hr style="background-color: rgb(170, 170, 170);">
                            @endif

                            @empty
                            <h6 >No past Competitions!</h6>
                            @endforelse

                        </div>
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