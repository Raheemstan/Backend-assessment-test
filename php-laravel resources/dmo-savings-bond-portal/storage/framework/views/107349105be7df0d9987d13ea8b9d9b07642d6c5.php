<?php if(isset($commentable) && $commentable != null): ?>
<div class="streamline user-activity">
    <?php $__currentLoopData = $commentable->get_comments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php
            $text_color= "black";
            if ($comment->user->is_principal_officer){
                $text_color= "red";
            }
        ?>

        <div class="sl-item small">
            <a href="javascript:void(0)">
                <div class="sl-avatar avatar avatar-sm avatar-circle">
                    <?php if( $comment->user->profile_image == null ): ?>
                        <img class="img-circle" src="<?php echo e(asset('hasob-foundation-core/imgs/bare-profile.png')); ?>" />
                    <?php else: ?>
                        <img class="img-circle" src="<?php echo e(route('fc.get-profile-picture', $comment->user->id)); ?>" />
                    <?php endif; ?>
                </div>
                <div class="sl-content" style="padding-bottom: 0;">
                    <p class="inline-block small">
                        <span class="capitalize-font txt-primary mr-5 weight-500"><?php echo e($comment->user->full_name); ?></span>
                        <span class="$text_color" id="comment_<?php echo e($comment->id); ?>"><?php echo e($comment->content); ?></span>
                    </p>   
                </div>
            </a> 
            <div class="sl-content">  
            <span class="block small txt-grey font-12 capitalize-font"><?php echo e($comment->getCommentedDateString()); ?> &nbsp;
                <?php if($comment->user_id == auth()->user()->id): ?>
                <a data-toggle="tooltip" 
                title="Edit" 
                data-val='<?php echo e($comment->id); ?>' 
                class="btn-edit-mdl-comment-modal inline-block " href="#">
                <i class="zmdi zmdi-border-color txt-warning" style="opacity:80%"></i>
                </a> 
                <?php endif; ?>  
            </span>
           
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>    
<?php endif; ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-foundation-core-bs-5\src/../resources/views/components/comment-list.blade.php ENDPATH**/ ?>