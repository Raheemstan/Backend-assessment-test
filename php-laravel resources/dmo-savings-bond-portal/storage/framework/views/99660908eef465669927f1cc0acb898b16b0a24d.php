
<?php $__env->startPush('page_css'); ?>
<style type="text/css">
.my-custom-scrollbar {
    position: relative;
    height: 1024px;
    overflow: auto;
}
.table-wrapper-scroll-y {
    display: block;
}
</style>
<?php $__env->stopPush(); ?>

<div class="card">

    <div class="card-title small p-2 fs-6">
        <i class="fa fa-tasks fa-fw"></i> Assigned Requests
    </div>

    <div class="card-body">
        <div id="aitem" class="list-group">

            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <?php if(isset($assignments)): ?>
                    <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wi_assignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a id="aTag_<?php echo e($wi_assignment->id); ?>" href="<?php echo e(route('wf.request-display',$wi_assignment->id)); ?>" class="list-group-item <?php echo e($wi_assignment->id==$selected_assignment->id?'active':''); ?>" value="<?php echo e($wi_assignment->id); ?>">
                            <p class="list-group-item-heading" style="line-height:15px"><?php echo e($wi_assignment->work_item->title); ?></p>
                            <p class="list-group-item-text small">
                                <i class="fa fa-calendar fa-fw"></i> <?php echo e($wi_assignment->getAssignedDateString()); ?> - <?php echo e($wi_assignment->getAssignmentDateDurationString()); ?>

                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p class="text-center">No Requests Assigned</p>
                <?php endif; ?>
            </div>

        </div>
    </div>

</div>

<?php $__env->startPush('page_scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        <?php if(isset($selected_assignment)): ?>
            //$("a[id='aTag_<?php echo e($selected_assignment->id); ?>']")[0].scrollIntoView()
        <?php endif; ?>
    });
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-workflow-engine-bs-5\src/../resources/views/components/assignment-list.blade.php ENDPATH**/ ?>