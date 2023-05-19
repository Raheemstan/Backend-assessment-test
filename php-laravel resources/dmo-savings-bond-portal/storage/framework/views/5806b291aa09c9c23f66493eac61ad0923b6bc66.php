<div class="card">
    <div class="card-body" style="">
        <div class="float-start">
            <h6 class="card-title txt-light-dark-blue">
                <a href="#">
                    <i class="zmdi zmdi-assignment mr-5"></i>
                    Tasks
                </a>
            </h6>
        </div>
        <div class="clearfix"></div>
        <?php if(isset($assignments) && $assignments!=null && count($assignments)>0): ?>
            <table class="table table-hover mb-0 small">
                <tbody>
                    <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a href="<?php echo e(route('wf.request-display',$item->id)); ?>"><?php echo $item->work_item->title; ?></td>
                            <td><?php echo $item->getAssignmentDateDurationString(); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <h6 class="text-center">No tasks assigned to you</h6>
        <?php endif; ?>

    </div>
</div><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-module\src/../resources/views/dashboard/partials/assignments.blade.php ENDPATH**/ ?>