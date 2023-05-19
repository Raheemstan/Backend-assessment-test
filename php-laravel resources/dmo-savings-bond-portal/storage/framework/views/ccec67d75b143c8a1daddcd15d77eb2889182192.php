<section class="small">

    <?php if($errors->any()): ?>
    <div class="alert alert-danger alert-dismissible ml-10 mr-10">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
        <h4><i class="icon fa fa-warning"></i> Errors!</h4>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>


    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block ml-10 mr-10">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong><?php echo e($message); ?></strong>
    </div>
    <?php endif; ?>

    <?php if($message = Session::get('error')): ?>
    <div class="alert alert-danger alert-block ml-10 mr-10">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
    <?php endif; ?>


    <?php if($message = Session::get('warning')): ?>
    <div class="alert alert-warning alert-block ml-10 mr-10">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong><?php echo e($message); ?></strong>
    </div>
    <?php endif; ?>


    <?php if($message = Session::get('info')): ?>
    <div class="alert alert-info alert-block ml-10 mr-10">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong><?php echo e($message); ?></strong>
    </div>
    <?php endif; ?>


</section>
<?php /**PATH C:\Users\DocB\Desktop\workspace\scola-gradebook-portal\resources\views/layouts/errors.blade.php ENDPATH**/ ?>