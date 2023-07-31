

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <!-------------------------MAin Setion------------------------>
    <section>
        <div class="container-fluid ">
            <div class="row">
            <?php echo $__env->make('user.dashboard.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-8dot4 ">
                    <div class="container-fluid">
                        <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="container">
                        <div class="row justify-content-center">
                             <?php if(session('successs') ): ?>
                                <div class="alert alert-primary" role="alert">
                                    Your request has been sent. The coach will reach out to you soon to schedule your first session.
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <?php if(auth()->user()->timezone == null): ?>
                            <div class="row justify-content-center">
                                <div class="alert alert-danger" role="alert">
                                    To update your time zone by your location. <a href="<?php echo e(url('/dashboard-profile')); ?>">Click Here</a>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!--------------------------------------------------------------1st card-------------------------->
                        <?php if(!is_null(auth()->user()->package)): ?>
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 mt-2">
                                            <a href="<?php echo e(url('/dashboard-session')); ?>" class="text-decoration-none">
                                            <div class="card shadow-card">
                                                <div class="card-body">
                                                    <h1 class="text-center color-1"><?php echo e(auth()->user()->studentSessions->count()); ?></h1>
                                                    <h5 class="text-center color-1">Sessions Attended</h5>
                                                    <img class="center-btn mt-3" src="images/-e-coaching.png" width="50">

                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <a href="<?php echo e(url('/dashboard-coaching')); ?>" class="text-decoration-none">
                                            <div class="card shadow-card">
                                                <div class="card-body">
                                                    <h1 class="text-center color-1"><?php if(auth()->user()->hasRole('coach')): ?> <?php echo e(auth()->user()->host()->count()); ?>  <?php else: ?> <?php echo e(auth()->user()->enrollments()->count()); ?> <?php endif; ?></h1>
                                                    <h5 class="text-center color-1">Upcoming Sessions</h5>
                                                    <img class="center-btn mt-3" src="images/-e-coaching.png" width="50">

                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <a href="<?php echo e(url('/dashboard-my/courses')); ?>" class="text-decoration-none">
                                            <div class="card shadow-card">
                                                <div class="card-body">
                                                    <h1 class="text-center color-1"><?php echo e(auth()->user()->courses()->count()); ?></h1>
                                                    <h5 class="text-center color-1">My Resources</h5>
                                                    <img class="center-btn mt-3" src="images/-e-coaching.png" width="50">

                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <a href="<?php echo e(url('/dashboard-post')); ?>" class="text-decoration-none">
                                            <div class="card shadow-card">
                                                <div class="card-body">
                                                    <h1 class="text-center color-1"><?php echo e(auth()->user()->debates()->count()); ?></h1>
                                                    <h5 class="text-center color-1">My Posts</h5>
                                                    <img class="center-btn mt-3" src="images/-e-coaching.png" width="50">

                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php if(!is_null(auth()->user()->package->plan)): ?>
                                        <div class="row">
                                            <div class="col-md-12 text-center mt-5">
                                                <h3 class="pb-0 dashboard-pkg-heading">
                                                    You have purchased "<?php echo e(auth()->user()->package->plan->name ?? ''); ?>" Package
                                                </h3>
                                                <p class="pakcage-paragraph">
                                                    You have <strong><?php echo e(auth()->user()->package->remaining_hour ?? ''); ?> hours</strong> left in your current package
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-------------------------------------------------calender--------------------->
                        <div class="row mt-4 mb-5">
                            <div class="col-md-8 mt-3">
                                <div class="card shadow-card">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-md-8">
                                                <div>
                                                    <div id="basic" class="article">
                                                        <div class="calendar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 scroll-f" id="dispzone">
                                                <a style="float:right;" class="row p-0 m-0 view_all_active_classes" href="javascript:void(0);">View All</a>
                                                <br/>
                                                <?php if($scheduals): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = $scheduals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <div>
                                                        <h5 class="mt-2"><?php echo e(date('d-M-Y',strtotime($scr->date_time.' '.auth()->user()->timezone.' hours'))); ?> <span class="ml-4 text-muted"
                                                                                                style="font-size: 12px;"><?php echo e(date('h:i a',strtotime($scr->date_time.' '.auth()->user()->timezone.' hours'))); ?></span></h5>
                                                        <h6 class="text-muted"><?php echo e($scr->title); ?></h6>
                                                    </div>
                                                    <hr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <div class="row p-3 d-flex justify-content-center text-center h-100" style="align-items:center;">
                                                        <div>
                                                            <p class="text-muted">You haven’t signed up for any sessions. Learn more about coaching now!</p>
                                                            <a href="https://talkmaze.com/private-coaching" class="btn default1 change mt-2">Explore Now</a>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="card shadow-card">
                                    <div class="card-body ">
                                        <div class="row " style="padding-top: 1rem;">
                                            <div class="col-12 scroll-f" >
                                                <h3 >News Feed</h3>
                                                <?php $__currentLoopData = $debates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($deb->user): ?>
                                        <div class="row mt-2">
                                            <h4 class="font-weight-bold ml-3"><?php if($deb->anonymous): ?> <?php echo e($deb->user->nick); ?> <?php else: ?><?php echo e($deb->user->name); ?> <?php endif; ?></h4>
                                            <h6 class="ml-3 mt-1 text-muted"><?php echo e($deb->created_at->diffForHumans()); ?></h6>
                                        </div>
                                                <div class="row">
                                                    <h5 class="ml-3 mr-2 font-weight-normal"><?php echo e($deb->topic); ?>

                                                    </h5>
                                                </div>
                                                <div class="row">
                                                    <a class="ml-3 link-card" href="<?php echo e(url('/forum-detail/'.$deb->slug)); ?>" target="_blank">View detail</a>
                                                </div>
                                        <hr>
                                        <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="modal fade rounded" id="joinMeetingnModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-secondary font-weight-600">Join Meeting</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                        <div class="form-group col-12 mt-3">
                            <a href="" class="btn custom-btn-primary w-100 rounded-sm join_session_btn" type="submit">Join</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------drop down script--------------------------->
    <script>

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        document.getElementById("myDropdown").addEventListener('click', function (event) {
            event.stopPropagation();
        });
    </script>
    <!-------------------------------tab script-------------->

    <script src="<?php echo e(asset('dashboard/js/jquery-3.3.1.min.js')); ?>"></script>

    <script src="<?php echo e(asset('dashboard/js/jquery.steps.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/js/main.js')); ?>"></script>
    <!--steps-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
    <script>
        $(document).ready(function () {
            $("#form-total-t-1").click(function () {
                // alert("The paragraph was clicked.");
                $("div.actions").children().css('display', "inline-block");
            });
        })

    </script>
    <!--calender-->
    <script type="text/javascript" src="<?php echo e(asset('dashboard/dist/js/pignose.calendar.full.min.js')); ?>"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(function () {
            $('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.version);

            function onSelectHandler(date, context) {
                /**
                 * @date  is an array which be included dates(clicked date at first index)
                 * @context  is an object which stored calendar interal data.
                 * @context.calendar is a root element reference.
                 * @context.calendar is a calendar element reference.
                 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
                 * @context.storage.events is all events associated to this date
                 */
                //  alert(date)
                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You selected date ';

                if (date[0] !== null) {
                    text += date[0].format('YYYY-MM-DD');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                }
                else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('YYYY-MM-DD');
                }
                // console.log("calendar");


                $.ajax({
                    method:"post",
                    url:"<?php echo e(url('/get-active-classes')); ?>",
                    data:{
                        _token:'<?php echo e(csrf_token()); ?>',
                        date:date[0].format('YYYY-MM-DD')
                    },
                    success:function(data){
                        document.getElementById('dispzone').innerHTML = data;
                    },
                    error:function(error){
                        console.log("error");
                    }
                })

                $box.text(text);
            }

            get_all_active_classes("<?php echo e(url('/get-all-active-classes')); ?>?view_all=set");
            $(document).on("click", ".view_all_active_classes", function(){
                get_all_active_classes("<?php echo e(url('/get-all-active-classes')); ?>?view_all=set");
            }); 
            function get_all_active_classes(url)
            {
                $.get(url, function(data)
                {
                    document.getElementById('dispzone').innerHTML = data;
                });
            }

            function onApplyHandler(date, context) {
                /**
                 * @date  is an array which be included dates(clicked date at first index)
                 * @context  is an object which stored calendar interal data.
                 * @context.calendar is a root element reference.
                 * @context.calendar is a calendar element reference.
                 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
                 * @context.storage.events is all events associated to this date
                 */

                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You applied date ';

                if (date[0] !== null) {
                    text += date[0].format('YYYY-MM-DD');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                }
                else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('YYYY-MM-DD');
                }

                $box.text(text);
            }

            // Default Calendar
            $('.calendar').pignoseCalendar({
                select: onSelectHandler,
                schedules: [
                    <?php $__empty_1 = true; $__currentLoopData = $scheduals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php echo "{
                            name:'holiday',
                            date:'".date('Y-m-d',strtotime($scr->date_time.' '.auth()->user()->timezone.' hours'))."'
                        },";
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                    scheduleOptions: {
                        colors: {
                            holiday: '#2fabb7',
                            seminar: '#5c6270',
                            meetup: '#ef8080',
                        }
                    }
            });

            // This use for DEMO page tab component.
            $('.menu .item').tab();
        });
    //]]>
        //// end
    </script>
    <?php if(session('success')): ?>
        <script>
            $.toast({
                text: "Congratulations! You have successfully requested for a Tutor. We weill contacting you soon", // Text that is to be shown in the toast
                heading: 'Congratulations!', // Optional heading to be shown on the toast
                icon: 'success', // Type of toast icon
                showHideTransition: 'fade', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 10000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                textAlign: 'left',  // Text alignment i.e. left, right or center
                loader: true,  // Whether to show loader or not. True by default
                loaderBg: '#9EC600',  // Background color of the toast loader
                beforeShow: function () {}, // will be triggered before the toast is shown
                afterShown: function () {}, // will be triggered after the toat has been shown
                beforeHide: function () {}, // will be triggered before the toast gets hidden
                afterHidden: function () {}  // will be triggered after the toast has been hidden
            });
        </script>
    <?php endif; ?>
    <script>
        $(document).on("click", ".join-zoom-meeting", function(){
            var $join_url = $(this).attr("data-url");
            $(".join_session_btn").attr("href", $join_url);
            $("#joinMeetingnModal").modal("show");
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/laravel/resources/views/student/dashboard/dashboard.blade.php ENDPATH**/ ?>