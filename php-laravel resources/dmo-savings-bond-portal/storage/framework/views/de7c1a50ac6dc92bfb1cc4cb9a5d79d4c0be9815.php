

<?php
$hide_right_panel = true;
?>

<?php $__env->startSection('title_postfix'); ?>
System Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
System Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection('app_css'); ?>
    <?php echo $__env->make('layouts.datatables_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title_subtext'); ?>
<a class="ms-1" href="<?php echo e(route('dashboard')); ?>">
    <i class="bx bx-chevron-left"></i> Back to Dashboard
</a> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
        <?php echo $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered mt-3']); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('page_scripts'); ?>
    <?php echo $__env->make('layouts.datatables_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $dataTable->scripts(); ?>


    <script type="text/javascript">
        $(document).ready(function() {
           
            $('.buttons-csv').hide();
            $('.buttons-pdf').hide();
            $('.buttons-print').hide();
            $('.buttons-excel').hide();
        });
    </script>    

<?php $__env->stopPush(); ?>
<?php echo $__env->make(config('hasob-foundation-core.view_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-portal\vendor\hasob\hasob-foundation-core-bs-5\src/../resources/views/users/index.blade.php ENDPATH**/ ?>