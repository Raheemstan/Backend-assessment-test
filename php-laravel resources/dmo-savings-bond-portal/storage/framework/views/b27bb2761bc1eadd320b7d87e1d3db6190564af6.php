


<?php $__env->startSection('title_postfix'); ?>
Features
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
Features
<?php $__env->stopSection(); ?>

<?php $__env->startSection('app_css'); ?>   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title_subtext'); ?>
<a class="ms-1" href="<?php echo e(route('dashboard')); ?>">
    <i class="bx bx-chevron-left"></i> Back to Dashboard
</a> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">

        <form method="POST" action="<?php echo e(route('fc.org-features-process')); ?>">
            <?php echo csrf_field(); ?>

            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="pa-0 pl-10" width="40%">
                                    <?php echo e(ucwords($item)); ?>

                                </td>
                                <td class="pa-0" width="60%">
                                    <div class="form-check mb-3">
                                        <input id="chk_<?php echo e($item); ?>" name="chk_<?php echo e($item); ?>" data-size="small" type="checkbox" class="js-switch form-check-input" value="1" <?php echo e($value?'checked':''); ?> />
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-xs btn-primary">Save Feature Settings</button>
                </div>
            </div>
        </form>

    </div>
</div>


<?php $__env->startPush('page_scripts'); ?>
<script type="text/javascript">

    var switchery = {};
    $.fn.initComponents = function () {
        var searchBy = ".js-switch";
        $(this).find(searchBy).each(function (i, html) {
            if (!$(html).next().hasClass("switchery")) {
                switchery[html.getAttribute('id')] = new Switchery(html, $(html).data());
            }
        });
    };

    $(document).ready(function(){ 
        $("body").initComponents();
    });

</script>
<?php $__env->stopPush(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('hasob-foundation-core.view_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-portal\vendor\hasob\hasob-foundation-core-bs-5\src/../resources/views/organization/features.blade.php ENDPATH**/ ?>