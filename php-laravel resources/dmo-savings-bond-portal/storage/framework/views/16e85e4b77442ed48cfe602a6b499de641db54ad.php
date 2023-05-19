

<?php $__env->startSection('app_css'); ?>
    <?php echo $cdv_offers->render_css(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_postfix'); ?>
Offers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
Offers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title_subtext'); ?>
<a class="ms-1" href="<?php echo e(route('dashboard')); ?>">
    <i class="bx bx-chevron-left"></i> Back to Dashboard
</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title_buttons'); ?>
<a id="btn-new-mdl-offer-modal" class="btn btn-primary btn-new-mdl-offer-modal">
    <i class="bx bx-book-add mr-1"></i>New Offer
</a>
<?php if(Auth()->user()->hasAnyRole(['','admin'])): ?>
    <?php echo $__env->make('dmo-savings-bond-module::pages.offers.bulk-upload-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 hidden-sm hidden-xs">
        
    </div>
    
    <div class="card border-top border-0 border-4 border-primary">
        <div class="card-body">
            <?php echo e($cdv_offers->render()); ?>

        </div>
    </div>

    <?php echo $__env->make('dmo-savings-bond-module::pages.offers.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('side-panel'); ?>
<div class="card radius-5 border-top border-0 border-4 border-primary">
    <div class="card-body">
        <div><h5 class="card-title">More Information</h5></div>
        <p class="small">
            This is the help message.
            This is the help message.
            This is the help message.
        </p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>
    <?php echo $cdv_offers->render_js(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-module\src/../resources/views/pages/offers/card_view_index.blade.php ENDPATH**/ ?>