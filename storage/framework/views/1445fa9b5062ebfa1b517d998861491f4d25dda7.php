

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <!------------------Top Section---------------------------->

    <!----------------------Nav Bar---------------------------->
    <?php echo $__env->make('user.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  -->

   <section class="hero-section">
        <div class="container text-center">

            <div class="row" style="margin-right: 0px!important;">

                <div class="col-lg-8 col-md-7 text-justify m-auto fade-in">
                    <div class=" text-center heroContent">
                        <h1 class="mt-5 text-white"> 73% people are afraid of public speaking. </h1>
                        <h1 class="mt-2 text-white"> Let’s change that together. </h1>


                        <h3 class="h3 text-white mt-5"> ARE YOU AN</h3>

                       <a href="#organizationSec" ><button type="button" class="btn heroButton text-uppercase mt-1">organization</button></a>
                       <a href="#individualSec" ><button type="button" class="btn heroButton text-uppercase mt-1">individual</button></a>

                        <div class="col-lg-9 col-md-9 text-justify m-auto register-text  text-white text-center ">
                            Virtual public speaking and debate coaching for schools, organizations, and individuals.
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

     <section class="companiesLogo slideCon" >
        <div class="container-fluid">
            <div class="row">


            <div class="col-md-3 col-sm-6  text-center"> <img src="newhomeimages/Image 9@1X.png" class="mt-4" alt="" style="width:250px"></div>
            <div class="col-md-3 col-sm-6  text-center"> <img src="newhomeimages/Image 7@1X.png" alt="" style="width:150px"></div>
            <div class="col-md-3 col-sm-6  text-center"> <img src="newhomeimages/league.jpeg" class="mt-3" alt="" style="width:200px"></div>
            <div class="col-md-3 col-sm-6  text-center"> <img src="newhomeimages/Image 8@1X.png" class="mt-4" alt="" style="width:200px" id="individualSec"></div>
            </div>
        </div>
    </section>


    <section class="individual-orgnization mt-5" >
        <div class="container" >

            <div class="row">

                <div class="col-md-5 text-left pull-left organizationCon">

                    <img src="newhomeimages/orgSecImg.png" alt="" id="organizationSec">

                    <h2 class="h2 mt-2">Organization</h2>

                    <p>We offer group coaching for schools, non-profits, and other organizations! Public speaking and debate skills will empower your members to reach new heights. We will work with you to create a custom partnership that fits your organization.</p>
                    <a href="#" data-toggle="modal" data-target="#loginModal" title="Get Started">
                        <button type="button" class="btn orgSecButton text-uppercase mt-1" >Get Started</button>
                    </a>

                </div>

                <div class="col-md-5 pull-right individualCon" >
                    <h2 class="h2">Individual</h2>
                    <p>Work one on one with an expert to build your communication skills. Need to prepare for a debate tournament? We can help. Have an interview coming up? We can help. Every session will be personalized to your needs!</p>

                    <a href="<?php echo e(url('register')); ?>" title="Get Started">
                        <button type="button" class="btn indSecButton  text-uppercase mt-1">Get Started</button>
                    </a>

                        <img src="newhomeimages/indiSecImg.png" class="mt-3" alt="">
                </div>
            </div>

        </div>
    </section>


      <section class="quote-section mt-5" data-aos="zoom-in">

            <div class="container quote-back-color py-3">
                <div class="row">
                    <div class="col-md-8 col-lg-8 m-auto">

                        <div class="text-center text-white">
                            <blockquote>
                                It’s not just you who becomes empowered by good communication skills - you now have this amazing tool to empower others.
                            </blockquote>
                            <p class="text-center mt-0 quoteAuth"> — Ghalia Aamer, Founder and CEO</p>
                        </div>
                    </div>

                </div>
            </div>

    </section>







    <section class="testimonial-section mt-5">
        <div class="testi-bg py-5">
            <h1 class="text-center text-capitalize mt-5 d-none ">what users say about us</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="carousel-item <?php echo e(($loop->iteration == 1) ? 'active' : ''); ?> ">
                            <div class="container mb-5 p-5">
                                <div class="row container-fluid m-0">
                                    <div class="col-sm-12">
                                        <div class="text-center">
                                            <div style="width:100px; height:100px; border-radius:50%; overflow:hidden;" class="m-auto">
                                                <img class="" src="<?php echo e($testimonial->image); ?>" height="100%">
                                            </div>
                                            <h3 class=" mt-4 mb-4"> <?php echo e($testimonial->name); ?> </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class=" text-center testimo-text">
                                            <?php echo e($testimonial->feedback); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="more-reason-section">
    <div class="leftAlert" data-aos="fade-down-right">
                    <div class="leftMessage">
                        <h3>Did You Know?</h3>
                        <p>Oral communication is the top skill that employers are looking for when recruiting.</p>
                        <span> ~GMAC</span>
                    </div>

                    <img src="newhomeimages/leftToolB.png" alt="">

    </div>
        <div class="container">
            <div class="more-text text-center mt-5 mb-5 text-capitalize">
                <h1>More reasons to choose TalkMaze</h1>


            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 aos-item__inner" data-aos="zoom-out-down">
                    <div class="text-center">
                        <img src="https://talkmaze.com/images/network.png">
                        <h4 class="text-uppercase text-center mt-4 mb-4 color-a">Network</h4>
                        <p>Connect with a community of passionate debaters and speakers from across the world.</p>
                    </div>
                </div>
                <div class="col-md-3 aos-item__inner" data-aos="zoom-out-down">
                    <div class="text-center">
                        <img src="https://talkmaze.com/images/useanywhere.png">
                        <h4 class="text-uppercase text-center mt-4 mb-4 color-a">ACCESSIBILITY</h4>
                        <p>Use the site from anywhere at anytime. All you need is an internet connection!</p>
                    </div>
                </div>
                <div class="col-md-3 aos-item__inner" data-aos="zoom-out-down">
                    <div class="text-center">
                        <img src="https://talkmaze.com/images/profassional.png" width="173">
                        <h4 class="text-uppercase mt-4 mb-4 color-a">PROFESSIONALISM</h4>
                        <p>We thoroughly vet each team member to ensure you are getting top quality services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <a href="<?php echo e(url('register')); ?>"> <button class="btn indSecButton text-uppercase mt-3 mb-5">become a member</button></a>

                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="debate-speaking-sectiom">
        <div class="speaking-backround">
            <div class="container">

                <div class="row" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="col-md-6 col-lg-6 m-auto">
                        <div class="text-center">
                            <img class="img-fluid "  src="https://talkmaze.com/images/resourcespic.png">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 m-auto">
                        <div class="tips-text text-center">
                            <h1>Access resources for individual or group practice</h1><br>
                            <a href="<?php echo e(url('resources')); ?>"><button type="button" class="btn heroButton text-uppercase">Resources</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="Proudly-Serving-section">
        <div class="container">
            <div class="more-text text-center mt-5 mb-5 text-capitalize">
                <h1>Proudly Serving </h1>
            </div>

            <div class="row justify-content-center proudly-serving-container">





                <div class="col-md-2 aos-item__inner" data-aos="fade-up">
                    <div class="text-center">
                        <img src="newhomeimages/Organizations.png" width="170">
                        <h4 class="text-uppercase text-center mt-3 mb-4 color-a">Organizations</h4>

                    </div>
                </div>

                <div class="col-md-2 aos-item__inner" data-aos="fade-up">
                    <div class="text-center">
                        <img src="newhomeimages/Schools – 1.png" width="170">
                        <h4 class="text-uppercase text-center mt-3 mb-4 color-a">Individuals</h4>

                    </div>
                </div>

                <div class="col-md-2 aos-item__inner" data-aos="fade-up">
                    <div class="text-center">
                        <img src="newhomeimages/Communities.png" width="170">


                        <h4 class="text-uppercase text-center mt-3 mb-4 color-a">Communities</h4>
                    </div>
                </div>

                <div class="col-md-2 aos-item__inner" data-aos="fade-up">
                    <div class="text-center">
                        <img src="newhomeimages/Schools.png" width="170">
                        <h4 class="text-uppercase mt-3 mb-4 color-a">Schools</h4>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <a href="<?php echo e(url('register')); ?>"> <button class="btn indSecButton text-uppercase mt-5 mb-5">Get Started</button></a>

                    </div>
                </div>
            </div>

        </div>
    </section>

<section>

        <div class="tips-section py-5">

            <div class="rightAlert" data-aos="zoom-in" data-aos-duration="1000">
                                        <div class="rightMessage">
                                            <h3>Did You Know?</h3>
                                            <p>Debaters have as much a 40% higher graduation rate than non debaters.</p>
                                            <span> ~American Debate League </span>
                                        </div>

                                        <img src="newhomeimages/rightToolB.png" alt="">

        </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <img class="ml-5" src="https://talkmaze.com/images/monthlytips.png" width="250">
                    </div>
                    <div class="col-md-5 m-auto">
                        <div class=" text-center">



                            <h1 class="white-text" >Get monthly speaking tips!</h1>
                            <form class="example mt-5 margin-resp js-form" action="<?php echo e(route('guest.subscribe')); ?>" style="margin:auto;max-width:350px" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="email" placeholder="your email address..." name="email" data-validate-field="email" id="email" required="required">

                                <button type="submit">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- last -->







    <section class="d-none">
        <div class="tips-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <img class="ml-5" src="images/monthlytips.png" width="250">
                    </div>
                    <div class="col-md-5 m-auto">
                        <div class=" text-center">
                            <h1 >Get monthly speaking tips!</h1>
                            <form class="example mt-5 margin-resp js-form" action="<?php echo e(route('guest.subscribe')); ?>" style="margin:auto;max-width:350px" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="email" placeholder="your email address..." name="email" data-validate-field="email" id="email" required="required">

                                <button type="submit">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="more-reason-section d-none">
        <div class="container">
            <div class="more-text text-center mt-5 mb-5 text-capitalize">
                <h1>More reasons to choose TalkMaze</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="images/network.png">
                        <h4 class="text-uppercase text-center mt-4 mb-4 color-a">Network</h4>
                        <p>Connect with a community of passionate debaters and speakers from across the world.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="images/useanywhere.png">
                        <h4 class="text-uppercase text-center mt-4 mb-4 color-a">ACCESSIBILITY</h4>
                        <p>Use the site from anywhere at anytime. All you need is an internet connection!</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="images/profassional.png" width="173">
                        <h4 class="text-uppercase mt-4 mb-4 color-a">PROFESSIONALISM</h4>
                        <p>We thoroughly vet each team member to ensure you are getting top quality services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <a href="<?php echo e(url('register')); ?>"> <button class="btn-dark mt-3 mb-5">become a member</button></a>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="testimonial-section d-none">
        <div class="testi-bg py-5">
            <h1 class="text-center text-capitalize mt-5 ">what users say about us</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="carousel-item <?php echo e(($loop->iteration == 1) ? 'active' : ''); ?> ">
                            <div class="container mb-5 p-5">
                                <div class="row container-fluid m-0">
                                    <div class="col-sm-12">
                                        <div class="text-center">
                                            <div style="width:100px; height:100px; border-radius:50%; overflow:hidden;" class="m-auto">
                                                <img class="" src="<?php echo e($testimonial->image); ?>" height="100%">
                                            </div>
                                            <h3 class=" mt-4 mb-4"> <?php echo e($testimonial->name); ?> </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class=" text-center testimo-text">
                                            <?php echo e($testimonial->feedback); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="speaker-section container-fluid d-none">
        <div class="container mt-5">
            <h1 class="text-center" style="font-size: 2.8rem;">Are you an experienced speaker or debater?</h1>
            <div class="row mt-5 mb-5 justify-content-center">
                <div class="col-md-3 mb-1">
                    <div class="passion speaker-bt bg-passion" style="height:auto!important;width: 180px;">Share your passion</div>
                </div>
                <img class="rotate90 mt-4" src="images/arrow.png" width="50" height="40">
                <div class="col-md-3 mb-1">
                    <div class="passion speaker-bt-1 bg-passion" style="height:auto!important;width: 180px;">competitive wage</div>
                </div>
                <img class="rotate90 mt-4" src="images/arrow.png" width="50" height="40">

                <div class="col-md-3">
                    <div class="passion speaker-bt-2 bg-passion" style="height:auto!important;width: 180px;">flexible schedule</div>
                </div>
            </div>
            <p class="text-center">
                <a href="<?php echo e(url('join-our-team')); ?>"> <button class="btn-dark mt-1">Join our team</button></a>
            </p>
        </div>
    </section>

    <!-- Modal For pop Up Vote Required Before Comment -->
    <div class="modal fade" id="exampleModalRequestSent" tabindex="-1" role="dialog"
         aria-labelledby="ModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title ml-auto text-dark" id="exampleModalLongTitle" >
                        <strong>
                            <?php if(Session::has('message')): ?>
                                <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
                            <?php endif; ?>
                        </strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal For pop Up Vote Required Before Comment -->
    <div class="modal fade" id="exampleModalRequestNotSent" tabindex="-1" role="dialog"
         aria-labelledby="ModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title ml-auto text-dark" id="exampleModalLongTitle" >
                        <strong>You are already subscribe to our website.</strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal For pop Up sign in -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
    aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-3" style="width: 80%; margin-left: auto; margin-right:auto; display: block;">
        <div class="modal-header">
          <h4 class="modal-title ml-auto" id="exampleModalLongTitle">Request a Demo</h4>


          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo e(route('guest.demo.request')); ?>" class="js-form-login form">
          <?php echo csrf_field(); ?>
                <div class="row mt-3">
                     <div class="col-md-6">
                        <label class="text-muted h8" >First Name</label>
                        <input class="form-control bg-light" type="text" name="fname"  style="height: 2.2rem;" data-validate-field="fname" value="<?php echo e(old('fname')); ?>">
                        <?php echo $errors->first('fname', '<label id="fname-error" class="text-danger" for="fname">:message</label>'); ?>

                      </div>
                      <div class="col-md-6">
                        <label class="text-muted h8" >Last Name</label>
                        <input class="form-control bg-light" type="text" name="lname"  style="height: 2.2rem;" data-validate-field="lname" value="<?php echo e(old('lname')); ?>">
                        <?php echo $errors->first('lname', '<label id="lname-error" class="text-danger" for="lname">:message</label>'); ?>

                    </div>
                  </div>
                   <div class="row mt-3">
                      <div class="col-md-12">
                        <label class="text-muted h8" >Organization Name (Optional)</label>
                        <input class="form-control bg-light" type="text" name="orgname"  style="height: 2.2rem;" data-validate-field="orgname" value="<?php echo e(old('orgname')); ?>">
                        <?php echo $errors->first('orgname', '<label id="orgname-error" class="text-danger" for="orgname">:message</label>'); ?>

                      </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label class="text-muted h8" >Phone Number</label>
                      <input class="form-control bg-light" type="text" name="phone"  style="height: 2.2rem;" data-validate-field="phone" value="<?php echo e(old('phone')); ?>">
                      <?php echo $errors->first('phone', '<label id="phone-error" class="text-danger" for="phone">:message</label>'); ?>

                    </div>
                </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label class="text-muted h8" >Email</label>
                      <input class="form-control bg-light" type="text" name="email"  style="height: 2.2rem;" data-validate-field="email" value="<?php echo e(old('email')); ?>">
                      <?php echo $errors->first('email', '<label id="email-error" class="text-danger" for="email">:message</label>'); ?>

                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                      <label class="text-muted h8" ># of Students (Optional)</label>
                          <input class="form-control bg-light" type="text" name="totalstudents"  style="height: 2.2rem;" data-validate-field="totalstudents" id="totalstudents">
                          <?php echo $errors->first('totalstudents', '<label id="totalstudents-error" class="text-danger" for="totalstudents">:message</label>'); ?>

                    </div>
                  </div>
                <div class="row mt-2">
                   <div class="col-md-12">
                     <label class="text-muted h8" >How did you hear about us? (Optional)</label>
                          <input class="form-control bg-light" type="text" name="aboutus"  style="height: 2.2rem;" data-validate-field="aboutus" id="aboutus">
                          <?php echo $errors->first('aboutus', '<label id="aboutus-error" class="text-danger" for="aboutus">:message</label>'); ?>

                  </div>
              </div>
            <button id="btn-default-login" type="submit" class="btn btn-default-login mt-4">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>

    <!----------------------Footer ---------------------------->
    <?php echo $__env->make('user.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!----------------------Copyright---------------------------->

    <?php echo $__env->make('user.partials.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script type="text/javascript">

        $(document).ready(function(){

            <?php if(count($errors) > 0): ?>
            $('#loginModal').modal('show');
            <?php endif; ?>

            <?php if(Session::has('message')): ?>
            $('#exampleModalRequestSent').modal('show');
            <?php endif; ?>

            <?php if(Session::has('exist')): ?>
            $('#exampleModalRequestNotSent').modal('show');
            <?php endif; ?>

        })
        // validate subscribe email

        $('form.example').on('submit', function(e){

            // validation code here
            let email = $.trim($("input[name='email']").val());

            if(email != ''){

                var re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

                var emailFormat = re.test($("#email").val());// this return result in boolean type

                if (!emailFormat) {
                    // alert('jskdak')
                    e.preventDefault();
                }
            }
            else{
                e.preventDefault();
            }
        });

    </script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/laravel/resources/views/user/pages/index.blade.php ENDPATH**/ ?>