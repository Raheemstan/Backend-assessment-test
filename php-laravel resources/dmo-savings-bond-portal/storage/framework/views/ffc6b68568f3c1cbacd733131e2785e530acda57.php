<?php if(isset($messages)): ?>
<ul>
<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="small mb-5" style="color:red;">
        <i class="fa fa-times mr-5"></i> <?php echo $message; ?>

    </li>    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-workflow-engine-bs-5\src/../resources/views/workflow/partials/warning.blade.php ENDPATH**/ ?>