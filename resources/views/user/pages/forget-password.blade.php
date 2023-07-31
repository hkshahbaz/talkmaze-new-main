@extends('user.layouts.main')
@section('title', 'Forget Password')

@section('content')
  <body style="background-image: url(./images/bg.png); background-repeat: no-repeat; background-size: cover; ">
    <section class="login-page">
      <div class="container">
       <a href="{{ url('home') }}"><img class="mt-5 mb-5 logo-login" src="images/logo.png"></a> 
        <div class="row justify-content-center">
          <div class="col-md-3 order-2 order-sm-1 mb-2">
            <div class="card shadow-lg rounded m-auto" style="width: 20rem;" >
                <div class="card-body">
                    <h3 class="font-weight-bold mb-2">Reset Your Paasword</h3>
                    <div class="inner4">&nbsp;</div>
           <a href="{{ url('register') }}">  <h6 class="mt-2 color-a" >Create new account</h6></a> 
           @if (session('status'))
                    <p class="alert alert-success">A reset link has been sent to your email address</p>
                @endif
              <div class="w-75 m-auto">
                <h5 class="mt-4 mb-4 text-center h8 font-weight-normal">We will send a reset link to your email address</h5>
              </div>
              
              <form method="post" action="{{ url('password/email') }}">
                <label class="text-muted h8">Email/Username</label>
                @csrf
                <input class="form-control bg-light" type="text" name="email"  style="height: 2.2rem;">
                <button class="btn btn-default-login mt-5 text-uppercase">SEND</button>
              </form>
                </div>
              </div>
          </div>
          <div class="col-md-6 offset-md-2 order-1 order-sm-2 ">
            <div >
              <img class="ml-auto mb-5 mt-2"  src="images/get-started-img.png" width="100%">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
 @endsection