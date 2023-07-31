<?php if(!isset($req->view_all)): ?>
	<a style="float:right;" class="row p-0 m-0 view_all_active_classes" href="javascript:void(0);">View All</a>
<?php endif; ?>
<br/>
<?php $__currentLoopData = $request_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div>
		<h5 class="mt-2"><?php echo e($date); ?><span class="ml-4 text-muted" style="font-size: 12px;"><?php echo e($item->start_time); ?></span></h5>
		<h6 class="text-muted">
			<?php echo e($item->tutor->name); ?> 
			<?php if(!is_null($item->parent_student_id)): ?> - <?php echo e($item->parent_student->student_name); ?> <?php endif; ?>
			<?php if(!is_null($item->meetingSession) && $item->meetingSession->status == '1'): ?>
				<a href="javascript:void(0);" data-url="<?php echo e($item->meetingSession->join_url); ?>" class="join-zoom-meeting" style="float: right;">Join Meeting</a>
			<?php endif; ?>
		</h6>
	</div><hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
<?php if($request_list->count() == 0): ?>
	<div style="border:2px solid #69d2b1;height: 30px;text-align: center;">
		No Class Yet, Take Rest
	</div>
<?php endif; ?><?php /**PATH /home/vagrant/code/laravel/resources/views/ajax/student/classes.blade.php ENDPATH**/ ?>