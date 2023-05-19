

<div class="row mb-15">
    <div class="col-sm-7">
        <?php if($data_set_group_list != null && count($data_set_group_list)>0): ?>
        <?php $__currentLoopData = $data_set_group_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button data-val="<?php echo e($key); ?>" class="<?php echo e($control_id); ?>-grp btn btn-xxs btn-primary btn-outline faded mr-5"><?php echo e($key); ?></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    <div class="col-sm-5">
        <?php if($data_set_enable_search == true): ?>
        <div class="input-group mb-3"> 
            <input type="text" id="<?php echo e($control_id); ?>-txt-search" name="<?php echo e($control_id); ?>-txt-search" class="form-control form-control-sm" placeholder="<?php echo e($search_placeholder_text); ?>" style="">
            <span class="input-group-btn">
                <button id="<?php echo e($control_id); ?>-btn-search" name="<?php echo e($control_id); ?>-btn-search" type="button" class="btn btn-xs btn-primary btn-outline faded"><i class="fa fa-search"></i></button>
            </span>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="offline-flag"><span class="offline">You are currently offline</span></div>
<div id="spinner-<?php echo e($control_id); ?>" class="row">
    <div class="loader" id="loader-<?php echo e($control_id); ?>"></div>
</div>
<div id="<?php echo e($control_id); ?>-div-card-view" class="row"></div>

<?php if($data_set_enable_pagination == true): ?>
<div class="row">
    <div class="col-xs-12">
        <ul id="<?php echo e($control_id); ?>-pagination" class="pagination ma-0"></ul>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-foundation-core-bs-5\src/../resources/views/cardview/index.blade.php ENDPATH**/ ?>