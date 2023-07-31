@extends('user.layouts.main')

@section('title', 'Jobs')

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')
    <section class="hero-section">
        <div class="container text-center">
            <div class="row" style="margin-right: 0px!important;">
                <div class="col-lg-5 col-md-5 text-left m-auto">
                    <div >
                        <h1 class="text-uppercase font-weight-bold">Join Our Team</h1>
                        <p>We're committed to creating opportunities for you to grow. We've designed a culture that encourages learning, collaboration, and engagement. Check back here often to find out how you can contribute to work that directly aligns with your passion.</p>
                      <a href="#job"> <button type="button" class="btn btn-dark text-uppercase mt-4">View Jobs</button></a>

                    </div>
                </div>
                <div class="col-lg-7 col-md-7 ">
                    <div>
                        <img class=" img-fluid mt-5 mb-5"  src="{{asset('images/joinTeam.png')}}" width="340">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" mt-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <h1 class=" text-uppercase mt-5 mb-5 text-center" style="font-weight: 400 !important;">Become part of a global team and help spread the passion for debate and public speaking.
              </h1>
            </div>
          </div>
            <div class="row mt-5" id="job">
                <div class="col-md-12">
                  @if(session('message'))
                  <h4 class=" text-center text-uppercase pb-2" id="success-message" style="color:green;">
                    Thank you! Your application has been submitted
                  </h4>
                  @endif
                    <h4 class="text-dark text-center text-uppercase pb-2">Who we are Looking for</h4>
                    <div class="inner">&nbsp;</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
              @forelse($jobs as $job )
                <div class="col-md-4 mt-3">
                    <div class="card card-width">
                        <img src="{{asset('images/Layer 564.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $job->title }}</h5>
                          <p class="card-text">
                            {{ $job->small_desc }}
                          </p>
                         <div class="row">
                             <div class="col-6 m-auto">
                                 <h5 class="mt-1" style="font-size: 11px; color: #60d0ac;"> {{ $job->apply_by }}</h5>
                                </div>
                                <div class="col-6">
                                  <div class="text-right">
                                   <a href="{{  route('job.detail', [$job->slug])  }}" ><button class="btn btn-partner text-uppercase"> Read More</button></a>
                                  </div>
                               </div>
                         </div>

                        </div>
                      </div>
                </div>
              @empty
                <div class="col-md-6 mt-3">
                  <h3 class="text-center">No Recent jobs!</h3>
                  <h4 class="text-center">Please visit some other time</h4>
                </div>
              @endforelse
            </div>
        </div>
    </section>
    <br>
    <br>
<!----------------------Footer ---------------------------->
@include('user.partials.footer')

<!----------------------Copyright---------------------------->
@include('user.partials.copyright')
<script type="text/javascript">
  $(document).ready(function(){
    $('#success-message').fadeIn('fast').delay(5000).fadeOut('slow');
  })
</script>
@endsection
