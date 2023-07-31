<!----------------------Nav Bar---------------------------->
<section class="nav-section sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <!-- <div class="row"> -->
        <div class="col-lg-3 col-sm-12 p-0">
          <a class="navbar-brand" href="{{ url('home') }}">
            <img class="main-logo" src="{{asset('images/logo.png')}}">
              <h5 style="display: inline; color: #60d0ac;">
              </h5>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
              </button>
        </div>
        <div class="col-lg-9 col-sm-12 p-0">
          <div class="collapse navbar-collapse float-right" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item {{Request::is('home') ? 'active' : 'else'}}">
                <a class="nav-link" href="{{ url('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>



                    <li class="nav-item dropdown {{Request::is('private-coaching') || Request::is('group-coaching') || Request::is('coaching')  ? 'active' : 'else'}}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Coaching
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('schools') }}">SCHOOLS</a>
                          <a class="dropdown-item" href="{{ url('private-coaching') }}">Private Coaching</a>
                          <a class="dropdown-item" href="{{ url('group-coaching') }}">Group Coaching</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown {{Request::is('private-coaching') || Request::is('group-coaching') || Request::is('coaching')  ? 'active' : 'else'}}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Resources
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('forum') }}">Forum</a>
                          <a class="dropdown-item" href="{{ url('resources') }}">Courses</a>

                        </div>
                    </li>


                    <li class="nav-item dropdown {{Request::is('news') || Request::is('about-us') || Request::is('faqs') || Request::is('partner') || Request::is('join-our-team')  ? 'active' : 'else'}}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('about-us') }}">About Us</a>
                            <a class="dropdown-item" href="{{ url('news') }}">News</a>
                          <a class="dropdown-item" href="{{ url('faqs') }}">FAQs</a>
                          <a class="dropdown-item" href="{{ url('partner') }}">Partners</a>
                           <!--SP: Competition tab-->
                          @if(Auth::check())
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ url('competition') }}">Competitions</a>
                          @endif
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ url('join-our-team') }}">Jobs</a>
                        </div>
                    </li>


                    @if(Auth::check())
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item">
                        <i class="icon-switch2"></i>
                        Log out
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/dashboard-home') }}" >My Account</a>
                    </li>
                    @else
                    <li class="nav-item {{Request::is('login') ? 'active' : 'else'}}">
                      <a class="nav-link loginLink" href="{{ url('login') }}">Log in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link signupLink" href="{{ url('register') }}">Sign up</a>
                    </li>
                    @endif
                </ul>
              </div>
        </div>
      <!-- <div> -->
    </div>
  </nav>
</section>

<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<style>
    .banner{
        padding: 15px;
        background: url("{{ asset('images/Untitled design (1).png') }}");
        background-size: cover;
    }
</style>