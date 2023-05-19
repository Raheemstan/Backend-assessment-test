<?php if(isset($app_settings) && isset($app_settings['portal_file_high_res_picture'])): ?>
<div class="card radius-5">
    <div class="card-body">
        <div class="text-center">

            <img style="max-width:150px;" src="<?php echo e(route('fc.attachment.show',$app_settings['portal_file_high_res_picture'])); ?>" />

            <?php if(isset($app_settings) && isset($app_settings['portal_long_name'])): ?>
                <p><?php echo e(strtoupper($app_settings['portal_long_name'])); ?></p>
            <?php endif; ?>

        </div>
    </div>
</div>
<?php endif; ?>


<div class="card radius-5">
    <div class="card-body">
        <div>
            <h5 class="card-title">Quick Links</h5>
        </div>

        <p>
            <i class="bx bx-right-arrow-alt mx-1"></i>Link 1 <br/>
        </p>

    </div>
</div>
<?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-portal\resources\views/dashboard/partials/right-panel.blade.php ENDPATH**/ ?>