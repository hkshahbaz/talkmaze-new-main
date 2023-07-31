@extends('user.layouts.main')

@section('title', 'FAQS')

@section('content')
<!----------------------Nav Bar---------------------------->
@include('user.partials.navbar')

  <!--  -->
  <section class="hero-section">
    <div class="container text-center">
      <div class="row" style="margin-right: 0px!important;">
        <div class="col-lg-5 col-md-5 text-justify m-auto">
          <div class=" text-center">
            <h1 class="text-uppercase mt-2 text-white">Frequently asked questions</h1>
            <h5 class="text-uppercase mt-4 text-white">need more help?</h3>
            <button type="button" class="btn btn-dark text-uppercase mt-1 btn-darkblue" data-toggle="modal" data-target="#exampleModalCenterOne"> contact us</button>

          </div>
        </div>
        <div class="col-lg-7 col-md-7 m-auto">
          <div class="hub-img2">
            <img class="img-fluid mt-2 mb-2" src="{{asset('images/faq.png')}}" width="340" >
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-us-sec mt-5">
    <div class="container">
      <h3 class="bolder text-center mt-5 mb-5">
      {{ !empty($keyword) ? 'Search results for: '.$keyword : ''}}
      </h3>
      <h4 class="text-dark text-center text-uppercase pb-2 pt-3">Faq's</h4>
      <div class="inner">&nbsp;</div>
      <div class="row justify-content-center mt-4">

        <div class="col-md-10">

          <form action="{{  url('faqs') }}" method="GET" class="js-form debate-modal">
          <div class="input-group md-form form-sm form-1 pl-0 " style="border: 1px solid #b4b2b2;">
            <div class="input-group-prepend">
              <span class="input-group-text cyan lighten-2 bg-white" id="basic-text1"><i class="fas fa-search color-a"
                  aria-hidden="true"></i></span>
            </div>
            <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" name="keyword" required="required">
          </div>
          </form>

        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div id="accordion" class="accordion mt-3">
            <div class="card mb-0">
              @forelse($faqs as $index => $faq)
                @if($index < 10)
                  <div class="card-header collapsed"
                    data-toggle="collapse" data-target="#collapse{{$loop->iteration}}"
                    aria-expanded="false"
                    aria-controls="collapseExample"
                    style="cursor: pointer;"
                    id="question{{$loop->iteration}}">
                     <a class="card-title">
                      <b>Q{{$loop->iteration}}.</b>
                       {{ $faq->question }}
                       <span  class="float-right" >
                        <i class="fas fa-plus"></i>
                      </span>

                    </a>
                  </div>
                  <div class="collapse" id="collapse{{$loop->iteration}}">
                    <div class="card card-body">
                      {{ $faq->answer }}
                    </div>
                  </div>
                @endif
                @empty
                <div class="col-md-12 mt-3">
                  <h3 class="text-center">No Faqs Found!</h3>
                  <h4 class="text-center">Please visit some other time or search with some other keyword!</h4>
                </div>
              @endforelse

              <div id="view-more-question" style="display: none">
              @forelse($faqs as $index => $faq)
              @if($index > 9)

                  <div class="card-header collapsed"
                    data-toggle="collapse" data-target="#collapse{{$loop->iteration}}"
                    aria-expanded="false"
                    aria-controls="collapseExample"
                    style="cursor: pointer;"
                    id="question{{$loop->iteration}}">
                     <a class="card-title">
                      <b>Q{{$loop->iteration}}.</b>
                       {{ $faq->question }}
                       <span  class="float-right" >
                        <i class="fas fa-plus"></i>
                      </span>

                    </a>
                  </div>
                  <div class="collapse" id="collapse{{$loop->iteration}}">
                    <div class="card card-body">
                      {{ $faq->answer }}
                    </div>
                  </div>
                @endif
                @empty
                <!-- <div class="col-md-12 mt-3">
                  <h3 class="text-center">No Faqs Found!</h3>
                  <h4 class="text-center">Please search with some other keywords!</h4>
                </div> -->
              @endforelse
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-dark text-uppercase mt-4 view-more">View more</button>
          </div>
        </div>
      </div>

    </div>
  </section>
    <!-- Modal For pop Up sign in -->
    <div class="modal fade" id="exampleModalCenterOne" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterOneTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content " style=" margin-left: auto; margin-right:auto; display: block;">
        <div class="modal-header bg-fav ">
          <h4 class="modal-title ml-auto text-white" id="exampleModalLongTitle">Contact Us</h4>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
          <div class="row">
            <div class="col-md-12">
              <form method="POST" action="{{ route('guest.contact_us') }}" class="form">
              @csrf

                <div class="form-group">
                  <label  for="exampleInputname" style="font-weight: 500 !important;">Name</label>
                  <input type="email" class="form-control bg-light" id="name" aria-describedby="emailHelp" placeholder="John" style="height: 2.5rem;" name="name" value="{{ old('name') }}" placeholder="Search here...">
                  <label id="name-error" for="name" class="d-none" style="color:#D75A4A">Name is required!</label>
                  {!! $errors->first('name', '<label id="name-error-default" style="color:#D75A4A" for="name">:message</label>') !!}
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1" style="font-weight: 500 !important;">Email address</label>
                  <input type="email" class="form-control bg-light" id="email" aria-describedby="emailHelp" placeholder="john@example.com" style="height: 2.5rem;" name="email" value="{{ old('email') }}">
                  <label id="email-error" for="email" class="d-none" style="color:#D75A4A">Email is required!</label>
                  <label id="email-error-valid" for="valid-email" class="d-none" style="color:#D75A4A">Please enter a valid Email Address!</label>
                  {!! $errors->first('email', '<label id="email-error-default" style="color:#D75A4A" for="email">:message</label>') !!}
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1" style="font-weight: 500 !important;">Cell No</label>
                  <input type="text" class="form-control bg-light" id="phone" placeholder="+921234567890" style="height: 2.5rem;" name="phone" value="{{ old('phone') }}">
                  <label id="phone-error" for="phone" class="d-none" style="color:#D75A4A">Phone is required!</label>
                  {!! $errors->first('phone', '<label id="phone-error-default" style="color:#D75A4A" for="phone">:message</label>') !!}
                </div>

                <div class="form-group">
                  <label  for="exampleInputname11" style="font-weight: 500 !important;">Company/School Name</label>
                  <input type="email" class="form-control bg-light" id="organization" aria-describedby="emailHelp" placeholder="Enter School Name" style="height: 2.5rem;" name="organization" value="{{ old('organization') }}">
                  <label id="organization-error" for="organization" class="d-none" style="color:#D75A4A">Organization/Company is required!</label>
                  {!! $errors->first('organization', '<label id="organization-error-default" style="color:#D75A4A" for="organization">:message</label>') !!}
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1" style="font-weight: 500 !important;">Message</label>
                  <textarea class="form-control bg-light" id="message" rows="3" name="message" >{{ old('message') }}</textarea>
                  <label id="message-error" for="message" class="d-none" style="color:#D75A4A">Message is required!</label>
                  {!! $errors->first('message', '<label id="message-error-default" style="color:#D75A4A" for="message">:message</label>') !!}
                </div>

                <div class="text-center">
                <button type="submit" class="btn btn-faq-modal" id="btn-faq-modal">Send</button>
                <button class="btn btn-faq-modal ml-3" data-dismiss="modal">Cancel</button>

              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!----------------------Footer ---------------------------->
@include('user.partials.footer')

<!----------------------Copyright---------------------------->
@include('user.partials.copyright')

<script type="text/javascript">
  $(document).ready(function(){

    @if($errors->any())
      $('#exampleModalCenterOne').modal('show');
    @endif

    // Contact Us Modal Validations

    $('#btn-faq-modal').click(function(event){

      event.preventDefault();
      let name = $('#name').val();
      let email = $('#email').val();
      let phone = $('#phone').val();
      let organization = $('#organization').val();
      let message = $('#message').val();

      var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

      if(name == ''){
        $('#name-error').removeClass('d-none');
        $('#name').css("border","1px solid #D75A4A");//more efficient
      }
      else if(email == ''){
        $('#email-error').removeClass('d-none');
        $('#email-error-valid').addClass('d-none');
        $('#email').css("border","1px solid #D75A4A");//more efficient
      }
      else if(!pattern.test(email)){
        $('#email-error').addClass('d-none');
        $('#email-error-valid').removeClass('d-none');
        $('#email').css("border","1px solid #D75A4A");//more efficient
      }
      else if(phone == ''){
        $('#phone-error').removeClass('d-none');
        $('#phone').css("border","1px solid #D75A4A");//more efficient
      }
      else if(organization == ''){
        $('#organization-error').removeClass('d-none');
        $('#organization').css("border","1px solid #D75A4A");//more efficient
      }
      else if(message == ''){
        $('#message-error').removeClass('d-none');
        $('#message').css("border","1px solid #D75A4A");//more efficient
      }
      else{
        $( ".form" ).submit();
      }

    })

    $('#name').focus(function(){
        $(this).css('border','1px solid #ced4da');
    });
    $('#email').focus(function(){
        $(this).css('border','1px solid #ced4da');
    });
    $('#phone').focus(function(){
        $(this).css('border','1px solid #ced4da');
    });
    $('#organization').focus(function(){
        $(this).css('border','1px solid #ced4da');
    });
    $('#message').focus(function(){
        $(this).css('border','1px solid #ced4da');
    });

    // Valition End Here ...


    let count = '{{ count($faqs) }}';
    for(var i=1; i<=count; i++){

      $('#question'+i).click(function(){
        let questionClass = $(this).attr('class');
        if(questionClass.includes("collapsed")){
          $(this).find('.fas').removeClass('fa-plus').addClass('fa-minus')
        }
        else{
          $(this).find('.fas').removeClass('fa-minus').addClass('fa-plus')
        }
      })
    }

    $('#question'+i).dblclick(function(e){
        e.preventDefault();
    })

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
  })
</script>
 @endsection
