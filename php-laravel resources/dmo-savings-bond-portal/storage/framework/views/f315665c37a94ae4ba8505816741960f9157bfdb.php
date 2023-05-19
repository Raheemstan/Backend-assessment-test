

<?php $__env->startSection('title_postfix'); ?>
Savings Bond Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
Savings Bond Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>



    <div class="row">
        <div class="col-lg-12">
            
            <div class="card pa-0">
                    <div class="card-body pa-0">
                        <div class="sm-data-box">
                            <div class="container-fluid">
                                <div class="row pa-10">

                                    <div class="col-lg-12 pa-10">
                                        
                                        Welcome to <span style='font-weight:bold'>DMO SAvings Bond</span> portal.
                                        
                                    </div>

                                </div>	
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <?php echo $__env->make('dmo-savings-bond-module::dashboard.partials.assignments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('page_scripts'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-module\src/../resources/views/dashboard/index.blade.php ENDPATH**/ ?>