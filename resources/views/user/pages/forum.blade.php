@extends('user.layouts.main')

@section('title', 'Forum')

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')

  <!-- -------------- Forum page starts here  ------------------ -->

  <section class="hero-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 m-auto">
          <div class="text-center text-justify">
            <h1 class="font-weight-bolder text-left text-white">Forum</h1>
            <p class="text-left text-white">Start or join a debate and share your contentious views on
              our anonymous debate forum.
              Practice your critical thinking and argumentation skills while you’re at it.</p>

            <form class="example mt-5 " style="max-width:350px" action="{{  url('forum') }}" method="GET">
              <input type="text" placeholder="Search here..." name="keyword" required>
              <button type="submit">Search</button>
            </form>

          </div>
        </div>
        <div class=" col-md-6">
          <div >
            <img class="mt-5 mb-5 img-fluid" src="{{asset('images/forum-1st.png')}}" width="530">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="forum-section">
    <h3 class="bolder text-center mt-5 mb-5">
      {{ !empty($keyword) ? 'Search results for: '.$keyword : 'Current Debates'}}
    </h3>
    <div class="container">
      <!-- ---------------------------------------- row starts here  ------------------------------------------- -->
      <div class="row ">
      @forelse ($debates as $index => $debate)
      @if(empty($debate->user)) @continue @endif
        @if($index < 3)
        <div class="col-md-4 ">
          <a href="{{ route('forum.detail', [$debate->slug]) }}">
            <div class="main">
              <img id="Library" src="{{ $debate->image ? $debate->image:asset('images/img 3 (2).png')}}" width="100%" />
              <div class="overlay-data" style="background-color: black; opacity: 0.6"></div>
              <div class="p-2 overlay-text">
                <div class="row m-0">
                  <div class="col-2 mt-1">
                      <div style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden;">
                          <img src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="100%" style="height: 100%; object-fit: cover; object-position: center;">
                      </div>
                  </div>
                  <div class="col-10 m-auto">
                    <h5 class=" text-white ml-3">
                      <strong>{{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}</strong>
                    </h5>
                  </div>
                </div>
                <div class="p-2 overlay-text-2">
                  <h5 class="text-white ml-3">
                    {{ $debate->topic }}
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>

      @elseif($index == 3)
        <div class="col-md-8 colom-margin">
          <a href="{{ route('forum.detail', [$debate->slug]) }}">
            <div class="main">
              <img id="Library" src="{{ $debate->image ? $debate->image:asset('images/img 3 (2).png')}}" width="100%" />
              <div class="overlay-data" style="background-color: black; opacity: 0.6"></div>
              <div class="p-2 overlay-text text-white">
                <div class="row m-0">
                  <div class="col-2 mt-1 p-0 text-center">
                    <img class="rounded-circle" src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="50">
                  </div>
                  <div class="col-10 m-auto p-0">
                    <h5 class="ml-3 text-white">
                      <strong>{{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}</strong>
                    </h5>
                  </div>
                </div>
                <div class="p-2 overlay-text-2">
                  <h5 class="ml-3 text-white">
                      {{ $debate->topic }}
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 colom-margin">
          @elseif($index == 4 )
          <a href="{{ route('forum.detail', [$debate->slug]) }}">
            <div class="main">
              <img id="Library" src="{{ $debate->image ? $debate->image:asset('images/img 3 (2).png')}}" width="100%" />
              <div class="overlay-data"></div>
              <div class="p-2 overlay-text">
                <div class="row m-0">
                  <div class="col-2 mt-1">
                    <img class="rounded-circle" src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="50">
                  </div>
                  <div class="col-10 m-auto">
                    <h5 class=" text-white ml-3">
                      <strong>{{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}</strong>
                    </h5>
                  </div>
                </div>
                <div class="p-2 overlay-text-2">
                  <h5 class="text-white ml-3">
                      {{ $debate->topic }}
                  </h5>
                </div>
              </div>
            </div>
          </a>
          @elseif($index == 5 )
          <a href="{{ route('forum.detail', [$debate->slug]) }}">
            <div class="main">
              <img id="Library" src="{{ $debate->image ? $debate->image:asset('images/img 3 (2).png')}}" width="100%" />
              <div class="overlay-data" style="background-color: black; opacity: 0.6"></div>
              <div class="p-2 overlay-text">
                <div class="row m-0">
                  <div class="col-2 mt-1">
                    <img class="rounded-circle" src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="50">
                  </div>
                  <div class="col-10 m-auto">
                    <h5 class="text-white ml-3">
                      <strong>{{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}</strong>
                    </h5>
                  </div>
                </div>
                <div class="p-2 overlay-text-2">
                  <h5 class="text-white ml-3">
                      {{ $debate->topic }}
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
        @elseif($index < 12 )
        <div class="col-md-4 ">
          <a href="{{ route('forum.detail', [$debate->slug]) }}">
            <div class="main">
              <img id="Library" src="{{ $debate->image ? $debate->image:asset('images/img 3 (2).png')}}" width="100%" />
              <div class="overlay-data" style="background-color: black; opacity: 0.6"></div>
              <div class="p-2 overlay-text">
                <div class="row m-0">
                  <div class="col-2 mt-1">
                    <img class="rounded-circle" src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="50">
                  </div>
                  <div class="col-10 m-auto">
                    <h5 class=" text-white ml-3">
                      <strong>{{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}</strong>
                    </h5>
                  </div>
                </div>
                <div class="p-2 overlay-text-2">
                  <h5 class="text-white ml-3">
                      {{ $debate->topic }}
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>

        @elseif($index == 13)
        <div class="col-md-4 ">
          <a href="{{ route('forum.detail', [$debate->slug]) }}">
            <div class="main">
              <img id="Library" src="{{ $debate->image ? $debate->image:asset('images/img 3 (2).png')}}" width="100%" />
              <div class="overlay-data" style="background-color: black; opacity: 0.6"></div>
              <div class="p-2 overlay-text">
                <div class="row m-0">
                  <div class="col-2 mt-1">
                    <img class="rounded-circle" src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="50">
                  </div>
                  <div class="col-10 m-auto">
                    <h5 class=" text-white ml-3">
                      <strong>{{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}</strong>
                    </h5>
                  </div>
                </div>
                <div class="p-2 overlay-text-2">
                  <h5 class="text-white ml-3">
                      {{ $debate->topic }}
                  </h5>
                </div>
              </div>
            </div>
          </a>
        @elseif($index == 14)
          <a href="{{ route('forum.detail', [$debate->slug]) }}">
            <div class="main">
              <img id="Library" src="{{ $debate->image ? $debate->image:asset('images/img 3 (2).png')}}" width="100%" />
              <div class="overlay-data" style="background-color: black; opacity: 0.6"></div>
              <div class="p-2 overlay-text">
                <div class="row m-0">
                  <div class="col-2 mt-1">
                    <img class="rounded-circle" src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="50">
                  </div>
                  <div class="col-10 m-auto">
                    <h5 class=" text-white ml-3">
                      <strong>{{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}</strong>
                    </h5>
                  </div>
                </div>
                <div class="p-2 overlay-text-2">
                  <h5 class="text-white ml-3">
                      {{ $debate->topic }}
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
        @elseif($index == 15)
        <div class="col-md-8 ">
          <a href="{{ route('forum.detail', [$debate->slug]) }}">
            <div class="main">
              <img id="Library" src="{{ $debate->image ? $debate->image:asset('images/img 3 (2).png')}}" width="100%" />
              <div class="overlay-data" style="background-color: black; opacity: 0.6"></div>
              <div class="p-2 overlay-text">
                <div class="row m-0">
                  <div class="col-2 mt-1 p-0 text-center">
                    <img class="rounded-circle" src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="50">
                  </div>
                  <div class="col-10 m-auto p-0">
                    <h5 class=" text-white ml-3">
                      <strong>{{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}</strong>
                    </h5>
                  </div>
                </div>
                <div class="p-2 overlay-text-2">
                  <h5 class="text-white ml-3">
                      {{ $debate->topic }}
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>

      @endif
      @empty
        <div class="col-md-12 mt-3">
          <h3 class="text-center">No Debates Found!</h3>
          <h4 class="text-center">Please visit some other time or search with some other keyword!</h4>
        </div>
      @endforelse

    </div>
  </section>
  <!--plus button-->
  <div>
    <a href="#" class="float-card" style="  text-decoration: none;" data-toggle="modal"
      data-target="{{ (Auth::check()) ? '#debateModal' : '#loginModal' }}" title="Start New Debate">

      <img class=" my-float" src="{{asset('images/plus.png')}}" width="60">

    </a>
  </div>
  <!-- Modal for start debate -->
  <div class="modal fade p-0" id="debateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ml-auto " id="exampleModalLongTitle">Start a Debate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>Tips on getting responses quickly:</h5>
          <ul style="font-size: 15px;">
            <li>
              Make sure your topic hasn’t already been debated on the forum
            </li>
            <li class="mt-1">
              Keep your submission short and to the point
            </li>
            <li class="mt-1">
              Double-check grammar and spelling
            </li>
          </ul>
          <hr style="border-top: 2px solid black;">
          @if(Auth::check())
            <img src="{{ Auth::user()->profile->image }}" width="40" class="rounded-circle">
          @else
            <img src="{{ asset('images/profileavatar.png')}}" width="40" class="rounded-circle">
          @endif
          <span class="ml-3 font-weight-bold text-muted">
            {{ (!empty(Auth::user()->name)) ? Auth::user()->name : 'John Doe' }}
          </span>
          <form action="{{ route('post.debate') }}" method="post" class="js-form debate-modal">
            @csrf
            <input type="hidden"  name="anonymous">
            <div class="form-group mt-3">
              <label for="topic">Topic</label><span class="text-danger">*</span>
              <input type="text" data-validate-field="topic" name="topic" value="{{ old('topic') }}" class="form-control">
            </div>
            <div class="form-group mt-3">
              <label for="description">Description</label><span class="text-danger" >*</span>
              <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="3" data-validate-field="description" name="description">{{ old('description')}}</textarea>
            </div>

            <button type="submit" class="btn btn-dark mt-1">POST QUESTION</button>
            <button type="submit" class="btn btn-light mt-1 float-right" id="anonymous">POST AS {{ auth()->user() ? auth()->user()->nick??'nickname' : 'nickname' }}</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal For pop Up sign in -->
  <div class="modal fade p-0 " id="loginModal" tabindex="-1" role="dialog"
    aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color: grey !important;">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row justify-content-center m-0 p-0">
                <h4 class="modal-title" id="exampleModalLongTitle">Log In</h4>
            </div>
            <br/>
          <form method="POST" action="{{ route('guest.login') }}" class="js-form-login form">
          @csrf
            <label class="text-muted h8 font-weight-bolder">Email/Username</label><span class="text-danger">*</span>
            <input class="form-control bg-light" type="email" name="email"  style="height: 2.2rem;" value="{{old('email')}}" id="email" data-validate-field="email"
            >
            {!! $errors->first('email', '<label id="email-error-default" style="color:#D75A4A" for="email">:message</label>') !!}
            <label id="email-error" for="email" class="d-none" style="color:#D75A4A">Email is required!</label>
            <label id="email-error-valid" for="valid-email" class="d-none" style="color:#D75A4A">Please enter a valid Email Address!</label>

            <label class="text-muted h8 font-weight-bold mt-2">Password</label><span class="text-danger">*</span>
            <input class="form-control bg-light" type="password" name="password" style="height: 2.2rem;" id="password" data-validate-field="password" >
            {!! $errors->first('password', '<label id="password-error-default" style="color:#D75A4A" for="password">:message</label>') !!}
            <label id="password-error" for="password" class="d-none" style="color:#D75A4A">Password is required!</label>

            <button id="btn-default-login" type="submit" class="btn btn-default-login mt-4">SEND</button>

            <a href="{{url('register')}}">
              <h6 class="text-center mt-2 color-a" style="font-size: 0.8em;">Create new account</h6>
            </a>

            <h5 class="text-center" >Login with Gmail instead!</h5>
            <div class="text-center">
              <a href="{{ url('/redirect') }}" >
                <img src="{{asset('images/google.png')}}" width="50">
              </a>
            </div>
          </form>
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

    $(document).ready(function(){
      // Change Tawk.to widget position

      var flag = false;

      setInterval( function(){ 

        let iframes = $("iframe[title='chat widget']")

        if(flag === false){

          if(iframes.is(':visible')){
            let iframes = document.querySelectorAll("iframe[title='chat widget']")

              for (let f of iframes) {
                console.log(f.style.left)
                if (f.style.left === "auto") {
                  const pxBottom = Number.parseInt(f.style.right)
                  f.style.left =  pxBottom + "px"
                  f.style.right = "auto";
                } else {
                  const pxBottom = Number.parseInt(f.style.left)
                  f.style.left =  pxBottom + "px"
                  f.style.right = "auto";
                }
              }
              
              $("#tawk-bubble-container").style.display = 'none';
            flag = true;
          } 
        }

      }  , 1000 );

      // End Change Tawk.to widget position


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
