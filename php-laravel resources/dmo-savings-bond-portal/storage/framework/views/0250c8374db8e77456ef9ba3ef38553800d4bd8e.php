
<?php
$hide_right_panel = true;
?>



<?php $__env->startSection('title_postfix'); ?>
Application Workflows
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
Application Workflows
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title_subtext'); ?>
<a class="ms-1" href="<?php echo e(route('dashboard')); ?>">
    <i class="bx bx-chevron-left"></i> Back to Dashboard
</a> 
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('page_title_buttons'); ?>
<span class="float-end">
    <?php if(Auth()->user()->hasAnyRole(['workflow-admin','admin'])): ?>
        <?php echo $__env->make('hasob-workflow-engine::settings.partials.workflow-creator-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="card">
    <div class="card-body">
                    
        <div class="col-sm-12 pt-10 pl-10">
            <span class="col-sm-12" style="font-weight:bold">APPLICATION WORKFLOWS</span><br/>
            <?php if(count($workflows)>0): ?>
            <ol class="pl-50 small">
            <?php $__currentLoopData = $workflows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('wf.settings-view-workflow',$item->id)); ?>"><?php echo e($item->name); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <?php else: ?>
                <span class="col-sm-12 small text-primary pl-40" style="">No workflows created</span><br/>
            <?php endif; ?>
        </div>


        <div class="col-sm-12 pt-15 pl-10">
            <span class="col-sm-12" style="font-weight:bold">AVAILABLE WORKABLES</span><br/>
            <?php if(count($workables)>0): ?>
            <ol class="pl-50 small">
            <?php $__currentLoopData = $workables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <?php else: ?>
                <span class="col-sm-12 small text-primary pl-40" style="">No workables created</span><br/>
            <?php endif; ?>
        </div>


        <div class="col-sm-12 pt-15 pl-10 pb-20">
            <span class="col-sm-12" style="font-weight:bold">AVAILABLE OPERATIONS</span><br/>
            <?php if(count($operations)>0): ?>
            <ol class="pl-50 small">
            <?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <?php else: ?>
                <span class="col-sm-12 small text-primary pl-40" style="">No operations created</span><br/>
            <?php endif; ?>
        </div>
                
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('app_js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make(config('hasob-foundation-core.view_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-workflow-engine-bs-5\src/../resources/views/settings/index.blade.php ENDPATH**/ ?>