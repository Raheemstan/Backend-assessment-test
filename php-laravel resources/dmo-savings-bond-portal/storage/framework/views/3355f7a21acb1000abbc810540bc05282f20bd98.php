<?php if(isset($commentable) && $commentable!=null): ?>
    <div class="col-lg-12" style='padding-left:0px;'>
        <?php if (isset($component)) { $__componentOriginalae27bed78db026bd5fbbec33834e2e185dab8529 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\FoundationCore\View\Components\CommentEntry::class, ['commentableObject' => $commentable]); ?>
<?php $component->withName('hasob-foundation-core::comment-entry'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalae27bed78db026bd5fbbec33834e2e185dab8529)): ?>
<?php $component = $__componentOriginalae27bed78db026bd5fbbec33834e2e185dab8529; ?>
<?php unset($__componentOriginalae27bed78db026bd5fbbec33834e2e185dab8529); ?>
<?php endif; ?>
        <br/>
        <?php if (isset($component)) { $__componentOriginalfa467c3e6b693185bfaf2b3deac411af9319277d = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\FoundationCore\View\Components\CommentList::class, ['commentableObject' => $commentable]); ?>
<?php $component->withName('hasob-foundation-core::comment-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa467c3e6b693185bfaf2b3deac411af9319277d)): ?>
<?php $component = $__componentOriginalfa467c3e6b693185bfaf2b3deac411af9319277d; ?>
<?php unset($__componentOriginalfa467c3e6b693185bfaf2b3deac411af9319277d); ?>
<?php endif; ?>
    </div>
<?php endif; ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-foundation-core-bs-5\src/../resources/views/components/comments-with-entry.blade.php ENDPATH**/ ?>