

<?php $__env->startSection('title_postfix'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">

        <div class="col-lg-12">
        </div>

        <div class="col-lg-12">
            
        </div>

        <div class="col-lg-12">
            
        </div>

        <div class="col-lg-12">
            
        </div>

        
        <?php echo $__env->make('dashboard.partials.assignments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('page_scripts'); ?>
    
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-portal\resources\views/dashboard/index.blade.php ENDPATH**/ ?>