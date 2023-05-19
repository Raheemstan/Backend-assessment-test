

<?php $__env->startSection('body'); ?>

    <?php echo $__env->yieldContent('content'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gradebook-frontend-blue.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\scola-gradebook-portal\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>