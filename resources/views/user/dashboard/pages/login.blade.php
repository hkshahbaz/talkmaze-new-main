@extends('user.dashboard.layouts.main')

@section('title', 'Login')

@section('content')

  <body style="background-image: url(./images/bg.png); background-repeat: no-repeat; background-size: cover; ">
    <section class="login-page">
      <div class="container">
        <div class="text-center">
       <img class="mt-5 mb-5 logo-login" src="images/logo.png">
      </div>
        <div class="row justify-content-center mb-4">
          <div class="col-md-3 order-2 order-sm-1">
            <div class="card shadow-lg rounded m-auto" style="width: 20rem;" >
                <div class="card-body">
                    <h2 class="font-weight-bold mb-2">Login</h2>
                    <div class="inner2">&nbsp;</div>
              <a href="register.html" class="text-decoration-none"><h6 class="mt-2 color-a mb-4" >Create new account</h6></a>
              
              <form>
                <label class="text-muted h8" >Email/Username</label>
                <input class="form-control bg-light" type="text" name="email"  style="height: 2.2rem;">
                <label class="text-muted h8">Password</label>
                <input class="form-control bg-light" type="password" name="pass" style="height: 2.2rem;">
                <button class="btn btn-default-login mt-5">SEND</button>
              </form>
            <a href="foeget-password2.html"> <h6 class="text-center mt-3 text-dark">Forgot Password?</h6></a> 
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
   

@endsection