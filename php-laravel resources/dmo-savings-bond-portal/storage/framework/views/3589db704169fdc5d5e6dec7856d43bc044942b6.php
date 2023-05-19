
<?php if(isset($children['children']) && $children['children']!= null && count($children['children'])>0): ?>

<li id="<?php echo e($children['id']); ?>">
    <a href="<?php echo e(isset($children['path']) && !empty($children['path']) ? $children['path'] : 'javascript:;'); ?>" class="has-arrow">
        <div class="parent-icon"><i class="<?php echo e(empty($children['icon'])?'bx bx-category':$children['icon']); ?>"></i></div>
        <div class="menu-title"><?php echo e($children['label']); ?></div>
    </a>
    <?php if(isset($children['children']) && $children['children']!= null && count($children['children'])>0): ?>
    <ul>
        <?php echo $__env->renderEach('layouts.default-app-template.menu-group', $children['children'], 'children'); ?>
    </ul>
    <?php endif; ?>
</li>

<?php else: ?>

<?php if(isset($children['is-parent']) && $children['is-parent']!= null && $children['is-parent']==true): ?>
    <li id="<?php echo e($children['id']); ?>">
        <a href="<?php echo e(isset($children['path']) && !empty($children['path']) ? $children['path'] : 'javascript:;'); ?>">
            <div class="parent-icon"><i class="<?php echo e(empty($children['icon'])?'bx bx-category':$children['icon']); ?>"></i></div>
            <div class="menu-title"><?php echo e($children['label']); ?></div>
        </a>
    </li>
<?php else: ?>
    <li id="<?php echo e($children['id']); ?>"> 
        <a id="lnk_<?php echo e($children['id']); ?>" href="<?php echo e($children['path']); ?>"><i class="<?php echo e(empty($children['icon'])?'bx bx-right-arrow-alt':$children['icon']); ?>"></i><?php echo e($children['label']); ?></a>
    </li>
<?php endif; ?>

<?php endif; ?><?php /**PATH C:\Users\DocB\Desktop\workspace\scola-gradebook-portal\resources\views/layouts/default-app-template/menu-group.blade.php ENDPATH**/ ?>