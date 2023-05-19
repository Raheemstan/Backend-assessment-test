
    <div class="card">
        
            <div class="card-body" style="">

                <div class="card-title" style="">
                    <h6 class="panel-title txt-light-dark-blue">
                        <a href="<?php echo e(route('wf.requests')); ?>">
                            <i class="zmdi zmdi-assignment mr-5"></i>
                            Tasks
                        </a>
                    </h6>
                </div>

                <table class="table table-hover mb-0 small">
                    <?php if(count($assignments)==0): ?>
                    <tr>
                        <td class="text-center pa-5">No tasks assigned to you</td>
                    </tr>
                    <?php else: ?>
                    <tbody>
                        <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="pa-5"><a href="<?php echo e(route('wf.request-display',$item->id)); ?>"><?php echo $item->work_item->title; ?></td>
                                <td class="pa-5"><?php echo $item->getAssignmentDateDurationString(); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <?php endif; ?>
                </table>
            </div>

    </div>
<?php /**PATH C:\Users\DocB\Desktop\workspace\scola-gradebook-portal\resources\views/dashboard/partials/assignments.blade.php ENDPATH**/ ?>