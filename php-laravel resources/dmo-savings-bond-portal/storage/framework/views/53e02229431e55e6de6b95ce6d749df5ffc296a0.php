<?php if( isset($work_item) && $work_item!=null ): ?>
<div class="row">
    <div class="col-lg-12">
        <?php
            $wi_assignments = $work_item->assignments;
        ?>
        <div class="list-group">
            <?php $__currentLoopData = $wi_assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx=>$assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="small list-group-item list-group-item-<?php echo e($assign->assigner_user->is_principal_officer?'danger':'info'); ?>">

                    <span style="font-size:60%;" class="label label-default small"><?php echo e($idx+1); ?></span>

                    <?php echo e($assign->assigner_user->full_name); ?> &nbsp;->>&nbsp;<?php echo e($assign->assigned_user->full_name); ?>

                    
                    <span class="pt-8 pb-5 float-end">
                        <?php echo $assign->getAssignedDateString(); ?> - <?php echo $assign->getAssignmentDateDurationString(); ?>

                    </span>

                </span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-workflow-engine-bs-5\src/../resources/views/components/assignment-trail.blade.php ENDPATH**/ ?>