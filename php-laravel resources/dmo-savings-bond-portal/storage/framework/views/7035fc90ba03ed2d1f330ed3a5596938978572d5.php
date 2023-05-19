


<?php $__env->startSection('title_postfix'); ?>
Application Settings
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
Application Settings
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_title_subtext'); ?>
    <a class="ml-10 mb-10" href="<?php echo e(URL::previous()); ?>" style="font-size:11px;color:blue;">
        <i class="fa fa-angle-double-left"></i> Back to Dashboard
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title_buttons'); ?>
<span class="float-end">
    
</span>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginale6ea1dfe42d95ec352ca1428fdab2d71c8a56adf = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\FoundationCore\View\Components\SettingsList::class, ['groups' => $groups,'settings' => $settings]); ?>
<?php $component->withName('hasob-foundation-core::settings-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6ea1dfe42d95ec352ca1428fdab2d71c8a56adf)): ?>
<?php $component = $__componentOriginale6ea1dfe42d95ec352ca1428fdab2d71c8a56adf; ?>
<?php unset($__componentOriginale6ea1dfe42d95ec352ca1428fdab2d71c8a56adf); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('hasob-foundation-core.view_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-portal\vendor\hasob\hasob-foundation-core-bs-5\src/../resources/views/organization/settings.blade.php ENDPATH**/ ?>