

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
  <body style="background-image: url(./images/bg.png); background-repeat: no-repeat; background-size: cover; ">
    <section class="login-page">
      <div class="container">
       <a href="<?php echo e(url('home')); ?>"> <img class="mt-5 mb-5 logo-login" src="images/logo.png"></a>
        <div class="row justify-content-center mb-4">
          <div class="col-md-3 order-2 order-sm-1">
            <div class="card shadow-lg rounded m-auto" style="width: 20rem;" >
                <div class="card-body">
                    <h3 class="font-weight-bold mb-2">Login</h3>
                    <div class="inner2">&nbsp;</div>
              <a href="<?php echo e(url('register')); ?>"><h6 class="mt-2 color-a mb-4" >Create new account</h6></a>
               <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <?php if(Session::has('message')): ?>
                                <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
              <form method="POST" action="<?php echo e(route('guest.login')); ?>" class="js-form form">
                <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e(request()->p); ?>" name="p" />
                <label class="text-muted h8" >Email/Username</label>
                <input class="form-control bg-light" type="email" name="email"  style="height: 2.2rem;" value="<?php echo e(old('email')); ?>" data-validate-field="email">
                <?php echo $errors->first('email', '<label id="email-error" class="text-danger" for="email">:message</label>'); ?>


                <label class="text-muted h8">Password</label>
                <input class="form-control bg-light" type="password" name="password" style="height: 2.2rem;" data-validate-field="password">
                <?php echo $errors->first('password', '<label id="password-error" class="text-danger" for="password">:message</label>'); ?>


                <button type="submit" class="btn btn-default-login mt-5 text-uppercase">LOGIN</button>
              </form>
            <a href="<?php echo e(url('forget-password')); ?>"> <h6 class="text-center mt-3">Forgot Password?</h6></a> 
                </div>
                <h5 class="text-center" >Login with Gmail instead!</h5>
                <div class="text-center pb-2">
                  <a href="<?php echo e(url('/redirect')); ?>" >
                    <img src="<?php echo e(asset('images/google.png')); ?>" width="50">
                  </a>
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
<script src="<?php echo e(asset('js/just-validate.min.js')); ?>"></script>
<script>
    new window.JustValidate('.js-form', {
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }, 
        },
        messages: {
            email: {
                required: 'Email field must be filled!',
            },
            password: {
                required: 'Password field must be filled!',
            },
        },
    });
</script>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/laravel/resources/views/user/pages/login.blade.php ENDPATH**/ ?>