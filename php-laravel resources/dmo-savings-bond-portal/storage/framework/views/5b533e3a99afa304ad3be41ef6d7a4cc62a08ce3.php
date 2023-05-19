

<?php $__env->startSection('body'); ?>
    <?php echo $__env->yieldContent('content'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
  <?php echo $__env->make('layouts.gradebook-frontend-blue.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-login'); ?>
  <?php echo $__env->make('layouts.gradebook-frontend-blue.footer-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.gradebook-frontend-blue.page-master-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-portal\resources\views/layouts/gradebook-frontend-blue/frontend-login.blade.php ENDPATH**/ ?>