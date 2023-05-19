


<?php $__env->startSection('title_postfix'); ?>
Domains
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
Domains
<?php $__env->stopSection(); ?>

<?php $__env->startSection('app_css'); ?>   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title_subtext'); ?>
<a class="ms-1" href="<?php echo e(route('dashboard')); ?>">
    <i class="bx bx-chevron-left"></i> Back to Dashboard
</a> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title_buttons'); ?>
<?php if(Auth()->user()->hasAnyRole(['admin'])): ?>
<a href="#" class="btn btn-xs btn-primary float-end btn-new-mdl-organization-modal">Add Domain</a>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginal427de9e46dfd92f042626277ebfe06ee8475e8c1 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\FoundationCore\View\Components\DomainList::class, ['domains' => $domains]); ?>
<?php $component->withName('hasob-foundation-core::domain-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal427de9e46dfd92f042626277ebfe06ee8475e8c1)): ?>
<?php $component = $__componentOriginal427de9e46dfd92f042626277ebfe06ee8475e8c1; ?>
<?php unset($__componentOriginal427de9e46dfd92f042626277ebfe06ee8475e8c1); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('hasob-foundation-core.view_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-portal\vendor\hasob\hasob-foundation-core-bs-5\src/../resources/views/organization/domains.blade.php ENDPATH**/ ?>