<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Error!</div>

                    <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                Whoops, looks like something went wrong. Sorry for the inconvenience.<br>
                                Please click <a href="<?php echo e(url('/home')); ?>">here</a> to go back to home page.
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/laravel/resources/views/default-error.blade.php ENDPATH**/ ?>