

<?php $__env->startSection('title', 'News'); ?>

<?php $__env->startSection('content'); ?>
    <!----------------------Nav Bar---------------------------->
    <?php echo $__env->make('user.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- -------------- Forum page starts here  ------------------ -->
    <style>
        .heroPostSection{
            background: #312f2f4f;

        }
    </style>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-9 main-section mt-5" style="background-image: url('<?php echo e($bignews[0]->image); ?>'); background-size: cover !important;background-position: 100% 100%;height: 100%;width: 100%;">
                    <div class="container mt-5 mb-5 pt-5">


                            <div class="col-md-6 pt-5 heroPostSection">
                                <?php
                                    $tags = explode(",",$bignews[0]->tags);
                                ?>


                                <h5 class="biger-text pb-2 text-capitalize h5 text-white border-bottom border-light font-weight-bold">
                                    <?php echo e($bignews[0]->small_title); ?>

                                </h5>

                                <p class="size-font3 mt-3 text-white"><?php echo e($bignews[0]->small_description); ?>

                                    <a class="border-bottom text-info " href="<?php echo e(route('news.details',['id'=> str_replace(' ', '_',$bignews[0]->title)])); ?>">Read more...</a>
                                </p>





                                <div class="col-md-12 mt-2 py-2"><span class="explore pb-1"> <b>TAGS:</b> #<?php echo e($tags[0]); ?></span></div>
                            </div>

                    </div>
                </div>

                <div class="col-md-3 mt-5 p-0">
                    <div class="card card-style" >
                        <div class="card-body">
                            <h6 class="size-font1 text-center text-uppercase pt-1">Top Stories</h6>
                        </div>
                    </div>
                    <?php
                        $x = 0;
                    ?>
                    <?php $__currentLoopData = $fsidenews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php
                    $x++;
                    ?>
                    <!-- <a href="<?php echo e(route('news.details',['id'=>str_replace(' ', '_',$tl->title)])); ?>">
                        <div class="card card-style">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-1">
                                        <span class="number"><?php echo e($x); ?></span>
                                    </div>
                                    <div class="col-10 ml-2">
                                        <h6 class="size-font3 font-weight-bold"><?php echo e($tl->small_title); ?></h6>
                                        <h6 class="size-font3 text-muted"><?php echo e(substr($tl->small_description,0,100)); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a> -->

                        <div class="card bg-dark text-white">
  <img src="<?php echo e($tl->image); ?>" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>
    <!-- =======================section2============= -->
    <section>
        <div class="container p-0">
            <div class="row mb-5">
                <div class="col-md-10">
                    <h1 class="mt-5"></h1>

                    <?php $__currentLoopData = $fbottomrightnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $btn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                   <!--  <a href="<?php echo e(route('news.details',['id'=>str_replace(' ', '_',$btn->title)])); ?>"> -->
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="row no-gutters">
                                <div class="col-md-4" >
                                    <div style="background-image: url('<?php echo e($btn->image); ?>'); background-size: 100% 100%;height: 100%;width: 100%;"></div>
                                 <!--  <img src="<?php echo e($btn->image); ?>" class="card-img" alt="..." height="100%" width="100%"> -->
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">

                                    <?php
                                        $tags = explode(",",$bignews[0]->tags);
                                    ?>

                                    <span class="explore pb-1 text-dark">#<?php echo e($tags[0]); ?></span>

                                    <h5 class="card-title font-weight-bold mt-4 size-font2 "><?php echo e($btn->small_title); ?></h5>

                                    <p class="card-text">
                                        <?php echo substr($btn->small_description,0,300); ?>... &nbsp;<a href="<?php echo e(route('news.details',['id'=>str_replace(' ', '_',$btn->title)])); ?>">read more</a>
                                    </p>
                                    <p class="card-text">
                                        <div class="row mt-3">
                                        <div class="col-md-12">
                                            <a class="btn btn-twit text-uppercase"><i class="fab fa-twitter mr-1 text-white"></i>Twitter</a>
                                            <a class="btn btn-fb text-uppercase ml-1"><i class="fab fa-facebook-f mr-1 text-white"></i>facebook</a>
                                            <a class="btn btn-goog text-uppercase ml-1"><i class="fab fa-google mr-1 text-white"></i>google</a>
                                        </div>
                                    </div>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- </a> -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                
            </div>
        </div>
    </section>
    <!-- =======section3 slider=============== -->
    <!--<section class="mt-5 mb-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12">-->
    <!--                <div class="card">-->
    <!--                    <div class="card-body">-->
    <!--                        <h5 class="size-font3 text-uppercase font-weight-bold">Latest form life style</h5>-->
    <!--                        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">-->

                                <!--Controls-->
    <!--                            <div class="controls-top" style="position: absolute;right: 11px;top: -30px;">-->
    <!--                                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i-->
    <!--                                        class="fas fa-chevron-left"></i></a>-->
    <!--                                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i-->
    <!--                                        class="fas fa-chevron-right"></i></a>-->
    <!--                            </div>-->
                                <!--/.Controls-->


                                <!--Slides-->
    <!--                            <div class="carousel-inner">-->
                                    <!--First slide-->
    <!--                                <div class="carousel-item active">-->
    <!--                                    <div class="row mt-4">-->
    <!--                                        <div class="col-md-4">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/1.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-4 mt-4 mt-md-0">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/2.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-4 mt-4 mt-md-0">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/3.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
                                    <!--/.First slide-->

                                    <!--Second slide-->
    <!--                                <div class="carousel-item">-->
    <!--                                    <div class="row mt-4">-->
    <!--                                        <div class="col-md-4">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/1.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-4 mt-4 mt-md-0">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/2.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-4 mt-4 mt-md-0">-->
    <!--                                            <div class="row">-->
    <!--                                                <div class="col-3">-->
    <!--                                                    <img src="images/3.png" class="img-fluid">-->
    <!--                                                </div>-->
    <!--                                                <div class="col-9">-->
    <!--                                                    <h5 class="size-font3 text-muted text-uppercase">New Outfits</h5>-->
    <!--                                                    <h5 class="size-font4 text-dark font-weight-bold">Check out the new trend for 2018/2019 form H&M</h5>-->

    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
                                    <!--/.Second slide-->
    <!--                            </div>-->
                                <!--/.Slides-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


    <!----------------------Footer ---------------------------->
    <?php echo $__env->make('user.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!----------------------Copyright---------------------------->
    <?php echo $__env->make('user.partials.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('js/just-validate.min.js')); ?>"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            // display modal on page load if any validation error
            <?php if($errors->get('email') || $errors->get('password')): ?>

            $('#loginModal').modal('show');

            <?php elseif($errors->get('topic') || $errors->get('description')): ?>
            $('#debateModal').modal('show');
            <?php endif; ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/laravel/resources/views/user/pages/news-details.blade.php ENDPATH**/ ?>