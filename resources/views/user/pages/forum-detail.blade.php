@extends('user.layouts.main')

@section('title', 'Forum Detail')

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')

  <section class="post-detail-section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-1">
          <img class="float-right rounded-circle" src="{{ ($debate->anonymous == 1) ? asset('images/profileavatar.png') : $debate->user->profile->image }}" width="50">
        </div>
        <div class="col-md-10">
          <div class="post-content mt-3">

            <h5 class="font-weight-bolder">
            {{ ($debate->anonymous == 1) ? $debate->user->nick : $debate->user->name }}
            <span class="ml-3 text-muted" style="font-size: 14px; font-weight: 400;">{{ $posted_on }}</span></h5>
            <div class="row">
            @if(!empty($debate->image))
              <div class="col-md-4 col-sm-3 mt-2">
                <img class="drive-img" src="{{ $debate->image }}" style="width: 100%;">
              </div>
              <div class="col-md-8 drive-para">
                <h4 class="drive-heading">
                  {{ (!empty($debate->topic)) ? $debate->topic : 'Debate Topic' }}
                </h4>
                <p>
                  {{ (!empty($debate->description)) ? $debate->description : 'Debate Description' }}
                </p>
              </div>
            @else
              <div class="col-md-12 drive-para">
                <h4 class="drive-heading">
                  {{ (!empty($debate->topic)) ? $debate->topic : 'Debate Topic' }}
                </h4>
                <p>
                  {{ (!empty($debate->description)) ? $debate->description : 'Debate Description' }}
                </p>
              </div>
            @endif
            </div>
          </div>
          <div class="options-liking ml-4 mt-2">
            <div class="row mt-5 mb-3">

               <img  title="Like" src="{{asset('images/like.png')}}" style="width: 4%;" class="like" id="like">

              <span class="text-muted ml-3 mr-3"
                style="font-size: 12px" id="likes_count">{{ (!empty($debate->likes_count)) ? $debate->likes_count : 0}}</span>
              <img  title="Dislike" src="{{asset('images/dislike.png')}}" style="width: 4%;" class="dislike" id="dislike">
              <span class="text-muted ml-3 mr-3"
                style="font-size: 12px" id="dislikes_count">{{ (!empty($debate->dislikes_count)) ? $debate->dislikes_count : 0}}</span>
              <img title="Comment" src="{{asset('images/comments.png')}}" style="width: 4%;" id="comment-icon">
              <span class="text-muted ml-3 mr-3"
                style="font-size: 12px" >
                <span id="comments_count" class="text-muted">{{ (!empty($debate->comments_count)) ? $debate->comments_count : 'No'}}</span>&nbsp;Comments
               </span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-fav" role="progressbar"
            style="width:{{ $debate->avg_likes  }}%" aria-valuenow="15"
              aria-valuemin="0" aria-valuemax="100">
            </div>
            <div class="progress-bar bg-agai" role="progressbar"
            style="width: {{ $debate->avg_dislikes  }}%" aria-valuenow="30"
              aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">

          @if(Auth::check())
            <img src="{{ Auth::user()->profile->image }}" width="50" class="rounded-circle float-right">
          @else
            <img src="{{ asset('images/profileavatar.png')}}" width="50" class="rounded-circle float-right">
          @endif

        </div>
        <div class="col-md-10 mt-3">
        <form method="POST" action="{{ route('comment') }}" class="js-form-comment form" id="comment-form">
          <div class="form-group">
            <textarea class="form-control bg-light" placeholder="Type reply here..." rows="5"
              id="comment" name="comment" data-validate-field="comment"></textarea>
              <label id="comment-error" class="d-none" for="comment" style="color: #D75A4A">
                <strong>Comment field must be filled!</strong>
              </label>
          </div>
          <div class="form-group ">
          <button type="submit" class="btn btn-dark post-comment" id="post-comment-btn">Post
            comment
          </button>
          @if(auth()->user())
            <button type="submit" class="btn btn-dark post-comment" id="post-comment-btn-nick">
                Post comment as {{ auth()->user()->nick }}
            </button>
          @endif
          <h4  class="d-inline ml-5">
            <span id="comment-response" class="text-success d-none">Your Comment is successfully posted!</span>
          </h4>
        </div>
        </form>
        </div>
      </div>
    </div>
    <div class="row container-fluid w-100 p-0 m-0 mt-5">
      <div class="col-md-6" style="border-right: 3px solid #60d0ac;">
        <div class="row">
          <div class="in-favour-text">In Favour</div>
          <div class="bg-light w-50 text-right p-3">
            <img src="{{asset('images/like.png')}}">
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="comments col-md-9 offset-md-2" id="comments">
              <h3 class="mb-4 mt-5" >
                <span id="comments_in_favour_count" style="color: #231f20 !important">{{ (!empty($debate->comments_in_favour_count)) ? $debate->comments_in_favour_count : 'No'}}</span>&nbsp; Comments
              </h3>
              <!-- comment -->
              <div class="comment mb-2 row" id="favour-comment-div">
                @foreach($debate->comments_in_favour as $comment_in_fav)
                <div class="row comment-box">
                <div class="comment-avatar col-md-2 col-sm-2 text-center pr-1">
                  <img class="mx-auto rounded-circle img-fluid" src="{{ $comment_in_fav->user->profile->image }}"
                      alt="avatar">

                </div>
                <div class="comment-content col-md-10 col-sm-10">
                  <div class="comment-body mt-2">
                    <h5>
                    @if($comment_in_fav->is_nick) @if($comment_in_fav->user->nick) {{ $comment_in_fav->user->nick }} @else {{'User'}} @endif @else  {{ $comment_in_fav->user->name }}  @endif
                      <span class="text-muted font-weight-normal"> &nbsp;
                      {{$comment_in_fav->comment}}
                      </span>
                    </h5>
                    <span class="text-muted font-like comment_likes">
                      {{$comment_in_fav->likes_count}}
                    </span>
                    <span class="text-muted font-like like favour-comment-like"> Like</span>
                     <span class="text-muted font-like reply favour-comment-reply-btn" >
                        &nbsp;Reply</span>
                    <span class="text-muted font-like "> &nbsp;{{ $comment_in_fav->comment_at}}</span>
                    <span class="text-muted font-like hide-show-reply reply"> &nbsp;Hide
                        replies</span>
                    <span class="comment-id d-none">{{$comment_in_fav->id}}</span>
{{--                    <a style="display: inline-block;" class="text-muted font-like"> &nbsp;<i class="fas fa-trash"></i></a>--}}
                      @if($comment_in_fav->user_id == auth()->id())<a href="{{ url('delete/comment/'.$comment_in_fav->id) }}" style="display: inline-block; color:red;" class="text-muted font-like"> &nbsp;<i class="fas fa-trash" style="color:red;"></i></a>@endif
                  </div><br>
                </div>
                <div class="col-10 offset-2 d-none comment-reply-div mb-3">
                  <input type="text" class="form-control reply-input" name="comment" >
                  <button class="btn mt-2 btn-outline-dark btn-post-reply">Post Reply</button>
                  @if(auth()->user())<button class="btn mt-2 btn-outline-dark btn-post-reply-nick">Post Reply as {{ auth()->user()->nick }}</button>@endif
                  <button class="btn mt-2 btn-outline-primary btn-post-cancel" >Cancel</button>
                </div>

                <!-- reply is indented -->
                @foreach($comment_in_fav->childrens as $children)
                <div class="comment-reply col-md-10 offset-md-2 col-sm-10 offset-sm-2">
                  <div class="row">
                    <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                      <a href=""><img class="mx-auto rounded-circle img-fluid" src="{{ $children->user->profile->image }}"
                          alt="avatar"></a>
                    </div>
                    <div class="comment-content col-md-11 col-sm-10 col-12">
                      <div class="comment-body">

                        <h5>@if($children->is_nick) @if($children->user->nick) {{ $children->user->nick }} @else {{'User'}} @endif  @else {{ $children->user->name }} @endif
                          <small class="text-muted">
                            {{ $children->comment }}
                          </small>
                        </h5>
                        <span class="text-muted font-like comment_likes">
                          {{$children->likes_count}}
                        </span>
                        <span class="text-muted font-like like comment-reply-like"> Like</span>
                        <span class="text-muted font-like ">
                          {{ $children->comment_at }}
                        </span>
                        <span class="comment-id d-none">{{$children->id}}</span>
                      </div><br>
                    </div>
                  </div>
                </div>
                @endforeach
                </div>
              @endforeach
              </div>
              <!-- comment -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="bg-light w-50 p-3"><img src="{{asset('images/dislike.png')}}"></div>
          <div class="against-text">Against</div>
        </div>
        <div class="container">
          <div class="row">
            <div class="comments col-md-9 offset-md-2" id="comments">
              <h3 class="mb-4 mt-5" >
                <span id="comments_against_count" style="color: #231f20 !important">
                  {{ (!empty($debate->comments_against_count)) ? $debate->comments_against_count : 'No'}}
                </span>&nbsp;Comments
              </h3>
              <!-- comment -->
              <div class="comment mb-2 row" id="against-comment-div">
                @foreach($debate->comments_against as $comment_against)
                <div class="row comment-box">
                <div class="comment-avatar col-md-2 col-sm-2 text-center pr-1">
                  <a href=""><img class="mx-auto rounded-circle img-fluid" src="{{ $comment_against->user->profile->image  }}"
                      alt="avatar"></a>

                </div>
                <div class="comment-content col-md-10 col-sm-10">
                  <div class="comment-body mt-2">
                    <h5>
                    @if($comment_against->is_nick) @if($comment_against->user->nick) {{ $comment_against->user->nick }} @else {{'User'}} @endif @else  {{ $comment_against->user->name }}  @endif
                      <span class="text-muted font-weight-normal"> &nbsp;
                        {{$comment_against->comment}}
                      </span>
                    </h5>
                    <span class="text-muted font-like comment_likes">
                        {{$comment_against->likes_count}}
                    </span>
                    <span class="text-muted font-like like against-comment-like" > Like</span>
                     <span class="text-muted font-like reply against-comment-reply-btn">
                        &nbsp;Reply</span>
                    <span class="text-muted font-like ">
                      {{ $comment_against->comment_at }}
                    </span>
                    <span class="text-muted font-like hide-show-reply reply"> &nbsp;Hide replies</span>
                    <span class="comment-id d-none">{{$comment_against->id}}</span>
{{--                      <a style="display: inline-block;" class="text-muted font-like"> &nbsp;<i class="fas fa-trash"></i></a>--}}
                      @if($comment_against->user_id == auth()->id())<a href="{{ url('delete/comment/'.$comment_against->id) }}" style="display: inline-block;" class="text-muted font-like"> &nbsp;<i class="fas fa-trash" style="color:red;"></i></a>@endif
                  </div><br>
                </div>
                <div class="col-10 offset-2 d-none comment-reply-div mb-3">
                  <input type="text" class="form-control reply-input" name="comment" >
                  <button class="btn mt-2 btn-outline-dark btn-post-reply">Post Reply</button>
                  @if(auth()->user())<button class="btn mt-2 btn-outline-dark btn-post-reply-nick">Post Reply as {{ auth()->user()->nick }}</button>@endif
                  <button class="btn mt-2 btn-outline-primary btn-post-cancel" >Cancel</button>
                </div>
              <!-- reply is indented -->
                @foreach($comment_against->childrens as $children)
                <div class="comment-reply col-md-10 offset-md-2 col-sm-10 offset-sm-2">
                  <div class="row">
                    <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                      <a href=""><img class="mx-auto rounded-circle img-fluid" src="{{ $children->user->profile->image }}"
                          alt="avatar"></a>
                    </div>
                    <div class="comment-content col-md-11 col-sm-10 col-12">
                      <div class="comment-body">
                        <h5>@if($children->is_nick) @if($children->user->nick) {{ $children->user->nick }} @else {{'User'}} @endif  @else {{ $children->user->name }} @endif
                          <small class="text-muted">
                            {{ $children->comment }}
                          </small>
                        </h5>
                        <span class="text-muted font-like comment_likes">
                          {{$children->likes_count}}
                        </span>
                        <span class="text-muted font-like like comment-reply-like"> Like</span>
                        <span class="text-muted font-like ">
                          {{ $children->comment_at }}
                        </span>
                        <span class="comment-id d-none">{{$children->id}}</span>
                      </div><br>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              @endforeach
                <!-- /reply is indented -->

              </div>
              <!-- comment -->
            </div>
          </div>
        </div>
      </div>
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
              <label for="description">Description</label><span class="text-danger">*</span>
              <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="3" data-validate-field="description" name="description">{{ old('description')}}</textarea>
            </div>
            <button type="submit" class="btn btn-dark mt-1">POST QUESTION</button>
            <button id="anonymous" type="submit" class="btn btn-light mt-1 float-right">POST AS {{ auth()->user() ? auth()->user()->nick??'nickname' : 'nickname' }}</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal For pop Up sign in -->
  <div class="modal fade p-0" id="loginModal" tabindex="-1" role="dialog"
    aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
        <div class="modal-header p-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color:black !important;">&times;</span>
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

  <!-- Modal For pop Up Vote Required Before Comment -->
  <div class="modal fade" id="exampleModalVoteRequired" tabindex="-1" role="dialog"
    aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title ml-auto" id="exampleModalLongTitle" style="color:#D75A4A">
            <strong>You Must Like or Dislike Debate Before Comment!</strong>
          </h4>
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

    // display modal on page load if any validation error
    @if($errors->get('email') || $errors->get('password'))
      $('#loginModal').modal('show');

    @elseif($errors->get('topic') || $errors->get('description'))
      $('#debateModal').modal('show');
    @endif

    var user_id = '{{ (!empty(Auth::user()->id)) ? Auth::user()->id : '' }}';
    var debate_id = '{{ $debate->id }}';
    var like = 'like';
    var dislike = 'dislike';
    var host = "{{URL::to('/')}}";
    var countFavourComment =' {{ (!empty($debate->comments_in_favour_count)) ? $debate->comments_in_favour_count : 0 }}';
    var countAgainstComment =' {{ (!empty($debate->comments_against_count)) ? $debate->comments_against_count : 0 }}';

    // display modal on page load if any validation error
    @if($errors->get('email') || $errors->get('password'))
      $('#loginModal').modal('show');

    @elseif($errors->get('topic') || $errors->get('description'))
      $('#debateModal').modal('show');
    @endif

    // Debate/Post Modal Validations
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

    // like the post when like button clicked
    $('#like').click(function(){

       $.ajax({
           type: "POST",
           url: host+'/like',
           data: {"_token": "{{ csrf_token() }}",debate_id:debate_id, user_id:user_id, like:like},
           success: function( response ) {

              if(response.message == true){
                let likesCount =  response.debate.likes_count;
                let dislikesCount = response.debate.dislikes_count;
                $('#likes_count').text(likesCount);
                $('#dislikes_count').text(dislikesCount);
              }

           },
           error:function(response){
               if(response.responseJSON.message === 'Unauthenticated.'){

                $('#loginModal').modal('show');
              }
           }
       });
    })

    // dislike the post when dislike button clicked
    $('#dislike').click(function(){

       $.ajax({
           type: "POST",
           url: host+'/dislike',
           data: {"_token": "{{ csrf_token() }}",debate_id:debate_id, user_id:user_id, dislike:dislike},
           success: function( response ) {
               if(response.message == true){
                let likesCount =  response.debate.likes_count;
                let dislikesCount = response.debate.dislikes_count;
                $('#likes_count').text(likesCount);
                $('#dislikes_count').text(dislikesCount);
              }
           },
           error: function(response){
              if(response.responseJSON.message === 'Unauthenticated.'){

                $('#loginModal').modal('show');
              }
           }
       });
    })

    // focus comment box when comment-icon is cliked
    $( "#comment-icon" ).click(function() {
      $( "#comment" ).focus();
      $('#comment-error').addClass('d-none');
      $('#comment').css("border","1px solid #ced4da");
    });

    $('#comment').focus(function(){
        $(this).css('border','1px solid #ced4da');
    });

    // post comment when post comment btn is clicked
    function post_comment(event){
      event.preventDefault();
      let comment = $('#comment').val();
      if(comment == ''){
        $('#comment-error').removeClass('d-none');
        $('#comment').css("border","1px solid #D75A4A");//more efficient
      }
      else{
         $.ajax({
           type: "POST",
           url: host+'/comment',
           data: {"_token": "{{ csrf_token() }}",debate_id:debate_id, user_id:user_id, comment:comment},
           success: function( data ) {

               if(data.message == true){

                $('textarea[name="comment"]').val('');
                $('#comment-response').fadeIn( "fast", function() {
                  $(this).removeClass('d-none');
                  $(this).delay(5000).fadeOut();
                });

                $('#comments_count').text(data.debate.comments_count);


                if(data.type == 'like'){

                  let userImg = data.debate.latest_comments_in_favour[0].user.profile.image;
                  let userName = data.debate.latest_comments_in_favour[0].user.name;
                  let comment = data.debate.latest_comments_in_favour[0].comment;
                  let commentsInFavourCount = data.debate.comments_in_favour_count;


                  $('#comments_in_favour_count').text(commentsInFavourCount);
                  let template = `<div class="row comment-box"> <div class="comment-avatar col-md-2 col-sm-2 text-center pr-1">
                            <img class="mx-auto rounded-circle img-fluid" src="`+userImg+`"" alt="avatar">
                            </div>
                            <div class="comment-content col-md-10 col-sm-10">
                            <div class="comment-body mt-2">
                              <h5>
                              `+userName+`
                                <span class="text-muted font-weight-normal"> &nbsp;
                                `+ comment +`
                                </span>
                              </h5>
                              <span class="text-muted font-like comment_likes">
                                  0
                              </span>
                              <span class="text-muted font-like like favour-comment-like"> Like</span>
                               <span class="text-muted font-like reply favour-comment-reply-btn">
                                  &nbsp;Reply</span>
                              <span class="text-muted font-like "> &nbsp;

                              Just now </span>
                              <span class="text-muted font-like hide-show-reply reply"> &nbsp;Hide
                                  replies</span>
                              <span class="comment-id d-none">`+data.debate.latest_comments_in_favour[0].id+`</span>`
                    if(data.debate.latest_comments_in_favour[0].user.id.toString() === "{{auth()->id()}}"){
                        template += `<a href="{{ url('delete/comment') }}/`+data.debate.latest_comments_in_favour[0].id+`" style="display: inline-block; color:red;" class="text-muted font-like"> &nbsp;<i class="fas fa-trash" style="color:red;"></i></a>`
                    }
                    template += `</div><br>
                          </div>
                          <div class="col-10 offset-2 d-none comment-reply-div mb-3">
                  <input type="text" class="form-control reply-input" name="comment" >
                  <button class="btn mt-2 btn-outline-dark btn-post-reply">Post Reply</button>
                  @if(auth()->user())<button class="btn mt-2 btn-outline-dark btn-post-reply-nick">Post Reply as {{ auth()->user()->nick }}</button>@endif
                  <button class="btn mt-2 btn-outline-primary btn-post-cancel" >Cancel</button>
                </div></div>
                  `;

                  $('#favour-comment-div').prepend(template)
                }
                else{

                  let userImg = data.debate.latest_comments_against[0].user.profile.image;
                  let userName = data.debate.latest_comments_against[0].user.name;
                  let comment = data.debate.latest_comments_against[0].comment;
                  let commentsAgainstCount = data.debate.comments_against_count;
                  $('#comments_against_count').text(commentsAgainstCount);

                  let template = `<div class="row comment-box"> <div class="comment-avatar col-md-2 col-sm-2 text-center pr-1">
                            <img class="mx-auto rounded-circle img-fluid" src=" `+userImg+`" alt="avatar">
                            </div>
                            <div class="comment-content col-md-10 col-sm-10">
                            <div class="comment-body mt-2">
                              <h5>
                              `+userName+`
                                <span class="text-muted font-weight-normal"> &nbsp;
                                `+ comment +`
                                </span>
                              </h5>
                              <span class="text-muted font-like comment_likes">
                                 0
                              </span>
                              <span class="text-muted font-like like against-comment-like"> Like</span>
                               <span class="text-muted font-like reply against-comment-reply-btn" >
                                  &nbsp;Reply</span>
                              <span class="text-muted font-like "> &nbsp;
                                Just now
                              </span>
                              <span class="text-muted font-like hide-show-reply reply"> &nbsp;Hide
                                  replies</span>
                              <span class="comment-id d-none">`+data.debate.latest_comments_against[0].id+`</span>`
                    if(data.debate.latest_comments_against[0].user.id.toString() === "{{auth()->id()}}"){
                        template += `<a href="{{ url('delete/comment') }}/`+data.debate.latest_comments_against[0].id+`" style="display: inline-block; color:red;" class="text-muted font-like"> &nbsp;<i class="fas fa-trash" style="color:red;"></i></a>`
                    }
                    template += `</div><br>
                          </div>
                          <div class="col-10 offset-2 d-none comment-reply-div mb-3">
                  <input type="text" class="form-control reply-input" name="comment" >
                  <button class="btn mt-2 btn-outline-dark btn-post-reply">Post Reply</button>
                  @if(auth()->user())<button class="btn mt-2 btn-outline-dark btn-post-reply-nick">Post Reply as {{ auth()->user()->nick }}</button>@endif
                  <button class="btn mt-2 btn-outline-primary btn-post-cancel" >Cancel</button>
                </div>
                          </div>
                  `;

                  $('#against-comment-div').prepend(template);

                }
               }
           },
           error: function(data){

            if(data.responseJSON.message == 'NoVote'){

              $('#exampleModalVoteRequired').modal('show');

            }
            else if(data.responseJSON.message === 'Unauthenticated.'){

                $('#loginModal').modal('show');
            }
           }
       });
      }
    }

    // comment as nickname
    function post_comment_nick(event){
      event.preventDefault();
      let comment = $('#comment').val();
      if(comment == ''){
        $('#comment-error').removeClass('d-none');
        $('#comment').css("border","1px solid #D75A4A");//more efficient
      }
      else{
         $.ajax({
           type: "POST",
           url: host+'/comment',
           data: {"_token": "{{ csrf_token() }}",debate_id:debate_id, user_id:user_id, comment:comment,nick:1},
           success: function( data ) {

               if(data.message == true){

                $('textarea[name="comment"]').val('');
                $('#comment-response').fadeIn( "fast", function() {
                  $(this).removeClass('d-none');
                  $(this).delay(5000).fadeOut();
                });

                $('#comments_count').text(data.debate.comments_count);


                if(data.type == 'like'){

                  let userImg = data.debate.latest_comments_in_favour[0].user.profile.image;
                  let userName = data.debate.latest_comments_in_favour[0].user.nick;
                  let comment = data.debate.latest_comments_in_favour[0].comment;
                  let commentsInFavourCount = data.debate.comments_in_favour_count;


                  $('#comments_in_favour_count').text(commentsInFavourCount);
                  let template = `<div class="row comment-box"> <div class="comment-avatar col-md-2 col-sm-2 text-center pr-1">
                            <img class="mx-auto rounded-circle img-fluid" src="`+userImg+`"" alt="avatar">
                            </div>
                            <div class="comment-content col-md-10 col-sm-10">
                            <div class="comment-body mt-2">
                              <h5>
                              `+userName+`
                                <span class="text-muted font-weight-normal"> &nbsp;
                                `+ comment +`
                                </span>
                              </h5>
                              <span class="text-muted font-like comment_likes">
                                  0
                              </span>
                              <span class="text-muted font-like like favour-comment-like"> Like</span>
                               <span class="text-muted font-like reply favour-comment-reply-btn">
                                  &nbsp;Reply</span>
                              <span class="text-muted font-like "> &nbsp;

                              Just now </span>
                              <span class="text-muted font-like hide-show-reply reply"> &nbsp;Hide
                                  replies</span>
                              <span class="comment-id d-none">`+data.debate.latest_comments_in_favour[0].id+`</span>`
                    if(data.debate.latest_comments_in_favour[0].user.id.toString() === '{{auth()->id()}}'){
                        template += `<a href="{{ url('delete/comment') }}/`+data.debate.latest_comments_in_favour[0].id+`" style="display: inline-block; color:red;" class="text-muted font-like"> &nbsp;<i class="fas fa-trash" style="color:red;"></i></a>`
                    }
                    template += `</div><br>
                          </div>
                          <div class="col-10 offset-2 d-none comment-reply-div mb-3">
                  <input type="text" class="form-control reply-input" name="comment" >
                  <button class="btn mt-2 btn-outline-dark btn-post-reply">Post Reply</button>
                  @if(auth()->user())<button class="btn mt-2 btn-outline-dark btn-post-reply-nick">Post Reply as {{ auth()->user()->nick }}</button>@endif
                  <button class="btn mt-2 btn-outline-primary btn-post-cancel" >Cancel</button>
                </div></div>
                  `;

                  $('#favour-comment-div').prepend(template)
                }
                else{

                  let userImg = data.debate.latest_comments_against[0].user.profile.image;
                  let userName = data.debate.latest_comments_against[0].user.nick;
                  let comment = data.debate.latest_comments_against[0].comment;
                  let commentsAgainstCount = data.debate.comments_against_count;
                  $('#comments_against_count').text(commentsAgainstCount);

                  let template = `<div class="row comment-box"> <div class="comment-avatar col-md-2 col-sm-2 text-center pr-1">
                            <img class="mx-auto rounded-circle img-fluid" src=" `+userImg+`" alt="avatar">
                            </div>
                            <div class="comment-content col-md-10 col-sm-10">
                            <div class="comment-body mt-2">
                              <h5>
                              `+userName+`
                                <span class="text-muted font-weight-normal"> &nbsp;
                                `+ comment +`
                                </span>
                              </h5>
                              <span class="text-muted font-like comment_likes">
                                 0
                              </span>
                              <span class="text-muted font-like like against-comment-like"> Like</span>
                               <span class="text-muted font-like reply against-comment-reply-btn" >
                                  &nbsp;Reply</span>
                              <span class="text-muted font-like "> &nbsp;
                                Just now
                              </span>
                              <span class="text-muted font-like hide-show-reply reply"> &nbsp;Hide
                                  replies</span>
                              <span class="comment-id d-none">`+data.debate.latest_comments_against[0].id+`</span>`
                    if(data.debate.latest_comments_against[0].user.id.toString() === "{{auth()->id()}}"){
                        template += `<a href="{{ url('delete/comment') }}/`+data.debate.latest_comments_against[0].id+`" style="display: inline-block; color:red;" class="text-muted font-like"> &nbsp;<i class="fas fa-trash" style="color:red;"></i></a>`
                    }
                    template += `</div><br>
                          </div>
                          <div class="col-10 offset-2 d-none comment-reply-div mb-3">
                  <input type="text" class="form-control reply-input" name="comment" >
                  <button class="btn mt-2 btn-outline-dark btn-post-reply">Post Reply</button>
                  @if(auth()->user())<button class="btn mt-2 btn-outline-dark btn-post-reply-nick">Post Reply as {{ auth()->user()->nick }}</button>@endif
                  <button class="btn mt-2 btn-outline-primary btn-post-cancel" >Cancel</button>
                </div>
                          </div>
                  `;

                  $('#against-comment-div').prepend(template);

                }
               }
           },
           error: function(data){

            if(data.responseJSON.message == 'NoVote'){

              $('#exampleModalVoteRequired').modal('show');

            }
            else if(data.responseJSON.message === 'Unauthenticated.'){

                $('#loginModal').modal('show');
            }
           }
       });
      }
    }


    $('#post-comment-btn').click(function(event){
        post_comment(event);
    });
    $('#post-comment-btn-nick').click(function(event){
        post_comment_nick(event);
    });

    $('textarea[name="comment"]').keypress(function(event){
      if (event.keyCode == 13)
        if (!event.shiftKey) post_comment(event);
    });


    // like each favourite comment
      $('#favour-comment-div').on('click', '.favour-comment-like', function(){

        let comment_id = $(this).parent('div').find('.comment-id').text();
        let comment_likes = $(this).prev('span.comment_likes');

        $.ajax({
           type: "POST",
           url: host+'/commentlike',
           data: {"_token": "{{ csrf_token() }}",debate_id:debate_id,comment_id:comment_id},
           success: function( response ) {

               if(response.message == 'true' || response.message == 'false'){
                $(comment_likes).text(response.comment_likes)
               }
           },
           error: function(response){

              if(response.responseJSON.message === 'Unauthenticated.'){

                $('#loginModal').modal('show');
              }
           }
        });

      })

      // hide/show reply favour comment div
      $('#favour-comment-div').on( 'click', '.favour-comment-reply-btn', function(){

        $(this).parents('div.comment-content').next('.comment-reply-div').toggleClass('d-none');
      })

       // favourite comment reply likes
      $(document).on('click', '.comment-reply-like',function(){
        let comment_id = $(this).parent('div').find('.comment-id').text();
        let comment_likes = $(this).prev('span.comment_likes');

        $.ajax({
           type: "POST",
           url: host+'/commentlike',
           data: {"_token": "{{ csrf_token() }}",debate_id:debate_id,comment_id:comment_id},
           success: function( response ) {
               if(response.message == 'true' || response.message == 'false'){
                $(comment_likes).text(response.comment_likes)
               }
           },
           error: function(response){

              if(response.responseJSON.message === 'Unauthenticated.'){

                $('#loginModal').modal('show');
              }
           }
        });
      })

      // hide reply div when cancel btn clicked
      $(document).on('click', '.btn-post-cancel', function(){
          $(this).parent('div.comment-reply-div').addClass('d-none')
      })

      // hide/show replies
      $(document).on('click', '.hide-show-reply', function(){

      $(this).toggleClass('hidden');
      $(this).parents('div.comment-box').find('.comment-reply').toggleClass('d-none')

      if($(this).attr('class').includes('hidden')){
        $(this).text('Show replies');
      }
      else{
        $(this).text('Hide replies');
      }

    })

    // post reply when post reply btn clicked
      function post_reply(event,thisObj,key){
        let comment = '';
        let parentDiv = '';

        let parent_id = thisObj.parent('div').prev('div.comment-content').find('.comment-id').text();
        if(key == 'enter'){
          comment = thisObj.val();
           parentDiv = thisObj.parents('div.comment-box').find('.comment-reply-div')
        }
        else{
          comment = thisObj.prev('input').val();
          parentDiv = thisObj.parents('div.comment-box').find('.comment-reply-div')
        }

        console.log(parentDiv)
        if(comment == ''){
          thisObj.prev('input').css("border","1px solid #D75A4A");//more efficient
        }
        else{
            $.ajax({
             type: "POST",
             url: host+'/comment-reply',
             data: {"_token": "{{ csrf_token() }}",debate_id:debate_id,parent_id:parent_id,comment:comment},
             success: function( response ) {
                 if(response.message == true){
                  $('.comment-reply-div').addClass('d-none')

                  let userImg = response.latest.latest_reply[0].user.profile.image;
                  let userName = response.latest.latest_reply[0].user.name;
                  let commentId = response.latest.latest_reply[0].id;
                  let comment = response.latest.latest_reply[0].comment;

                  let template = `<div class="comment-reply col-md-10 offset-md-2 col-sm-10 offset-sm-2">
                  <div class="row">
                    <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                      <a href=""><img class="mx-auto rounded-circle img-fluid" src="`+userImg+`" alt="avatar"></a>
                    </div>
                    <div class="comment-content col-md-11 col-sm-10 col-12">
                      <div class="comment-body">
                        <h5>`+ userName +`
                          <small class="text-muted">
                            `+ comment +`
                          </small>
                        </h5>
                        <span class="text-muted font-like comment_likes">0</span>
                        <span class="text-muted font-like like comment-reply-like"> Like</span>
                        <span class="text-muted font-like "> &nbsp;Just now</span>
                        <span class="comment-id d-none"> `+ commentId +` </span>
                      </div><br>
                    </div>
                  </div>
                </div>`;
                  parentDiv.after(template)
                 }
             },
             error: function(response){

                if(response.responseJSON.message === 'Unauthenticated.'){

                  $('#loginModal').modal('show');
                }
             }
          });
        }
      }

      function post_reply_nick(event,thisObj,key){
        let comment = '';
        let parentDiv = '';

        let parent_id = thisObj.parent('div').prev('div.comment-content').find('.comment-id').text();
        if(key == 'enter'){
          comment = thisObj.val();
           parentDiv = thisObj.parents('div.comment-box').find('.comment-reply-div')
        }
        else{
          comment = thisObj.prev().prev('input').val();
          parentDiv = thisObj.parents('div.comment-box').find('.comment-reply-div')
        }

        console.log(parentDiv)
        if(comment == ''){
          thisObj.prev('input').css("border","1px solid #D75A4A");//more efficient
        }
        else{
            $.ajax({
             type: "POST",
             url: host+'/comment-reply',
             data: {"_token": "{{ csrf_token() }}",debate_id:debate_id,parent_id:parent_id,comment:comment,is_nick:1},
             success: function( response ) {
                 if(response.message == true){
                  $('.comment-reply-div').addClass('d-none')

                  let userImg = response.latest.latest_reply[0].user.profile.image;
                  let userName = response.latest.latest_reply[0].user.nick;
                  let commentId = response.latest.latest_reply[0].id;
                  let comment = response.latest.latest_reply[0].comment;

                  let template = `<div class="comment-reply col-md-10 offset-md-2 col-sm-10 offset-sm-2">
                  <div class="row">
                    <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                      <a href=""><img class="mx-auto rounded-circle img-fluid" src="`+userImg+`" alt="avatar"></a>
                    </div>
                    <div class="comment-content col-md-11 col-sm-10 col-12">
                      <div class="comment-body">
                        <h5>`+ userName +`
                          <small class="text-muted">
                            `+ comment +`
                          </small>
                        </h5>
                        <span class="text-muted font-like comment_likes">0</span>
                        <span class="text-muted font-like like comment-reply-like"> Like</span>
                        <span class="text-muted font-like "> &nbsp;Just now</span>
                        <span class="comment-id d-none"> `+ commentId +` </span>
                      </div><br>
                    </div>
                  </div>
                </div>`;
                  parentDiv.after(template)
                 }
             },
             error: function(response){

                if(response.responseJSON.message === 'Unauthenticated.'){

                  $('#loginModal').modal('show');
                }
             }
          });
        }
      }

      $(document).on('click','.btn-post-reply', function(event){
          post_reply(event,$(this));
      });

      $(document).on('click','.btn-post-reply-nick', function(event){
          post_reply_nick(event,$(this));
      });

      $(document).on('keypress','input[name="comment"]', function(event){
        if (event.keyCode == 13)
          if (!event.shiftKey) {
            let key = 'enter';
            post_reply(event,$(this),key);
          }
      });

    // like each against comment
      $('#against-comment-div').on('click', '.against-comment-like',function(){

        let comment_id = $(this).parent('div').find('.comment-id').text();
        let comment_likes = $(this).prev('span.comment_likes');

        $.ajax({
           type: "POST",
           url: host+'/commentlike',
           data: {"_token": "{{ csrf_token() }}",debate_id:debate_id,comment_id:comment_id},
           success: function( response ) {
               if(response.message == 'true' || response.message == 'false'){
                $(comment_likes).text(response.comment_likes)
               }
           },
           error: function(response){

              if(response.responseJSON.message === 'Unauthenticated.'){

                $('#loginModal').modal('show');
              }
           }
        });
      })

      // hide/show reply against comment div
      $('#against-comment-div').on( 'click', '.against-comment-reply-btn', function(){

        $(this).parents('div.comment-content').next('.comment-reply-div').toggleClass('d-none');
      })


      // against comment reply likes
      // $('.against-comment-reply-like').click(function(){
      //   let comment_id = $(this).parent('div').find('.comment-id').text();

      //   $.ajax({
      //      type: "POST",
      //      url: host+'/commentlike',
      //      data: {"_token": "{{ csrf_token() }}",debate_id:debate_id,comment_id:comment_id},
      //      success: function( msg ) {
      //          console.log( msg );
      //      },
      //      error: function(msg){

      //         if(msg.statusText == 'Unauthorized'){

      //           $('#loginModal').modal('show');
      //         }
      //      }
      //   });
      // })

    //  post question as anonymus
    $('#anonymous').click(function(){
      $("input[name='anonymous']").val(1);
    })
  })
</script>
@endsection
