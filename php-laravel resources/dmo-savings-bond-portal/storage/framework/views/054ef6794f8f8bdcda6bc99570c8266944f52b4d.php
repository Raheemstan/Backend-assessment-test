<?php if($attachable!=null): ?>

    <?php
        $attachments = $attachable->get_attachments($file_types);
    ?>

    <?php if(count($attachments)>0): ?>
        <div class="streamline user-activity mt-10">
        <?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $attach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="sl-item small">
                <a href="javascript:void(0)">
                    <div class="sl-avatar avatar avatar-sm avatar-circle mt-2">
                        <a href="<?php echo e(route('fc.attachment.show', $attach->id)); ?>"  target="_blank">
                            <i class="fa fa-paperclip fa-3x"></i>
                        </a>
                    </div>
                    <div class="sl-content">
                        <p class="small">
                            <span class="capitalize-font txt-primary mr-5 weight-500">
                                <a href="<?php echo e(route('fc.attachment.show', $attach->id)); ?>" target="_blank">
                                    <strong><?php echo e($attach->label); ?></strong>
                                </a>
                            </span>
                            <?php if(empty($attach->description) == false): ?>
                            <br/>
                            <span class="$text_color">
                                <?php echo e($attach->description); ?>

                            </span>
                            <?php endif; ?>
                        </p>
                        <span class="block small txt-grey capitalize-font">
                            <i class="fa fa-upload"></i> <?php echo e($attach->uploader->full_name); ?> on <?php echo e($attach->getCreatedDateString()); ?>

                        </span>
                    </div>
                </a>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <div class="text-center">No Files</div>
    <?php endif; ?>

<?php endif; ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-foundation-core-bs-5\src/../resources/views/components/attachment-list.blade.php ENDPATH**/ ?>