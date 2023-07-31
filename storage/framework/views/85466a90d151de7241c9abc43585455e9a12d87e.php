<div class="row mb-5">
	<div class="col-md-4">
	    <h3 class="color-1 mt-3 font-weight-normal">Dashboard</h3>
	    <h6 class="color-1">Welcome to the <?php if(auth()->user()->hasRole('coach')): ?> Coaching <?php elseif(auth()->user()->hasRole('parent')): ?> Parent <?php else: ?> Student <?php endif; ?> Dashboard</h6>
	</div>
	<div class="col-md-8">
	    <div class="row mt-3 justify-content-end">
	        <a href="#" class="mr-2" style="display:inline-block;"> <img onclick="myFunction()" class="mt-1 dropbtn " src="<?php echo e(asset('images/-e-notifications.png')); ?>" width="30" height="30"><span id="noti-badge" style="background-color: red; border-radius: 50%;padding: 0px 5px 0px 5px; color: white; <?php if(notifications()->count()>0): ?> <?php echo e('display:block;'); ?> <?php else: ?> <?php echo e('display:none;'); ?> <?php endif; ?>" ><?php echo e(notifications()->count()); ?></span></a>
	        <form class="mr-3 ml-3">
	            <a href="<?php echo e(url('/dashboard-profile')); ?>">
	                <div class="row">
	                    <span class="ml-3 mr-3" style="width:30px; height:30px; overflow:hidden; border-radius:50%; display:inline-block;">
	                        <img src="<?php echo e(auth()->user()->profile->image); ?>" style="height:100%;" width="100%">
	                    </span>
	                    <span style="display:inline-block;"><p class="text-muted m-auto ml-3"><?php echo e(auth()->user()->name); ?></p></span>

	                </div>
	            </a>
	        </form>
	    </div>
	</div>
	<!----------------------------notification dropdown-------------------->
	<div id="myDropdown" class="dropdown-content dropdown-menu-right bg-white ">
	    <div class="container">
	        <div id="1stmodal">
	            <div   style="height:60vh; width:100%;" class="scroll-f mt-3 mb-3" >
	                <div class="container-fluid <?php if(notifications()->count()==0): ?> <?php echo e('h-100'); ?> <?php endif; ?>" id="notipan">
	                    <?php $__empty_2 = true; $__currentLoopData = notifications(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
	                        <a class="p-0 m-0" href="<?php if($fg->verb == 'SESSION'): ?> <?php echo e(url('/dashboard-coaching')); ?> <?php elseif($fg->verb == 'CHAT'): ?> <?php echo e(url('/chat/'.$fg->sender->id)); ?> <?php elseif($fg->verb == 'COMMENT'): ?> <?php echo e(url('/forum-detail/'.$fg->action_id)); ?> <?php endif; ?>">
	                        <div class="row mt-1" >
	                            <div class="col-3">
	                                <img class="mt-3" src="<?php echo e($fg->sender->profile->image); ?>" width="50">
	                            </div>
	                            <div class="col-9">
	                                <h5 class="mt-2"><?php echo e($fg->sender->name); ?><?php echo e($fg->sender->name); ?></h5>
	                                <h6><?php echo e($fg->action); ?></h6>
	                                <h6 class="h7 color-1"><?php echo e($fg->created_at->diffForHumans()); ?></h6>
	                            </div>
	                        </div>
	                        </a>
	                        <hr/>
	                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
	                        <div class="row justify-content-center" style="display: flex; align-items: center; height: 100% !important;">
	                            <h3 class="text-muted">No Notification Yet!</h3>
	                        </div>
	                    <?php endif; ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div><?php /**PATH /home/vagrant/code/laravel/resources/views/components/header.blade.php ENDPATH**/ ?>