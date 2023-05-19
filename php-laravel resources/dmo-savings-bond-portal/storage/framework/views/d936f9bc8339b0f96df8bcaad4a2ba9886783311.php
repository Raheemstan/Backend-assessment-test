

<?php
    $hide_right_panel = true;
?>


<?php $__env->startSection('title_postfix'); ?>
<?php echo e($work_item->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
<?php echo e($work_item->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_css'); ?>
    <style>
        .loader{
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position:absolute;
            top:50%;
            left:50%;
            margin:0px 0px 0px 0px;
            z-index: 5000000;
        }

        /* LOADER 1 */
        #loader-1:before, #loader-1:after{
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            width: 100%;
            height: 100%;
            border-radius: 100%;
            border: 10px solid transparent;
            border-top-color: #3498db;
        }

        #loader-1:before{
            z-index: 100;
            animation: spin 1s infinite;
        }

        #loader-1:after{
            border: 10px solid #ccc;
        }

        @keyframes  spin{
            0%{
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100%{
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-3" style="font-size:80%;">
            <?php if (isset($component)) { $__componentOriginal0adde90da0f4a17e0008b6042ec1fde299e7ade9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\Workflow\View\Components\AssignmentList::class, ['assignments' => $assignments,'selectedAssignment' => $selected_assignment]); ?>
<?php $component->withName('hasob-workflow-engine::assignment-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0adde90da0f4a17e0008b6042ec1fde299e7ade9)): ?>
<?php $component = $__componentOriginal0adde90da0f4a17e0008b6042ec1fde299e7ade9; ?>
<?php unset($__componentOriginal0adde90da0f4a17e0008b6042ec1fde299e7ade9); ?>
<?php endif; ?>
        </div>
        <div class="col-md-9">
                
            <?php if( isset($selected_assignment) && $selected_assignment!=null ): ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                    
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-9">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <?php if(isset($workable) && view()->exists($workable->get_display_view_path())): ?>
                                                    <?php echo $__env->make($workable->get_display_view_path(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 mt-10 mb-10">
                                                <i class="fa fa-tags fa-fw"></i> <?php echo e($selected_assignment->assigner_user->full_name); ?> sent this file to <?php echo e($selected_assignment->assigned_user->full_name); ?> on <?php echo e($selected_assignment->getAssignedDateString()); ?>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 mt-10 mb-10">
                                                <?php if($workflow_mgr != null): ?>
                                                    <?php echo $workflow_mgr->renderNotices(); ?>

                                                    <?php echo $workflow_mgr->renderWarnings(); ?>

                                                    <?php echo $workflow_mgr->renderNotStartedOperationsWarning(); ?>

                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-3" style="font-size:80%;">
                                        <?php if (isset($component)) { $__componentOriginal1c9708ec5024ba5a562961bf01edf6941dbba05e = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\Workflow\View\Components\AssignmentTrail::class, ['workItem' => $work_item,'assignments' => $assignments]); ?>
<?php $component->withName('hasob-workflow-engine::assignment-trail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c9708ec5024ba5a562961bf01edf6941dbba05e)): ?>
<?php $component = $__componentOriginal1c9708ec5024ba5a562961bf01edf6941dbba05e; ?>
<?php unset($__componentOriginal1c9708ec5024ba5a562961bf01edf6941dbba05e); ?>
<?php endif; ?>
                                    </div>

                                </div>

                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php if($selected_assignment->assigned_user_id == Auth::user()->id): ?>
                            
                                            <?php if($workflow_mgr != null && $workflow_mgr->hasOperations()): ?>
                                                <div class="row" style="margin-bottom:5px;">
                                                    <div class="col-lg-12">
                                                        <hr class="mb-10 ma-0" style="border-top: 1px solid #eee;"/>
                                                        <?php echo $workflow_mgr->renderOperations(); ?>

                                                        <hr style="border-top: 1px solid #eee;" />
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (isset($component)) { $__componentOriginal0ec2bed651bb63b872cc0f827c0d660c28b4cedd = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\Workflow\View\Components\ProcessMove::class, ['workItem' => $work_item,'selectedAssignment' => $selected_assignment,'assignments' => $assignments,'departments' => $all_departments,'users' => $all_users]); ?>
<?php $component->withName('hasob-workflow-engine::process-move'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ec2bed651bb63b872cc0f827c0d660c28b4cedd)): ?>
<?php $component = $__componentOriginal0ec2bed651bb63b872cc0f827c0d660c28b4cedd; ?>
<?php unset($__componentOriginal0ec2bed651bb63b872cc0f827c0d660c28b4cedd); ?>
<?php endif; ?>

                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Comments -->
                    <div class="col-lg-8">
                        <div class="card">
                            <h4 class="card-heading small p-2"><i class="fa fa-comment-o fa-fw"></i> Comments </h4>
                            <div class="card-body">
                                <?php if (isset($component)) { $__componentOriginald480c33966b07d8e7af6d8170855442d47bdc717 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\FoundationCore\View\Components\CommentsWithEntry::class, ['commentableObject' => $work_item]); ?>
<?php $component->withName('hasob-foundation-core::comments-with-entry'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald480c33966b07d8e7af6d8170855442d47bdc717)): ?>
<?php $component = $__componentOriginald480c33966b07d8e7af6d8170855442d47bdc717; ?>
<?php unset($__componentOriginald480c33966b07d8e7af6d8170855442d47bdc717); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <!-- Attachments -->
                    <div class="col-lg-4">
                        <div class="card p-2">
                            <div class="card-heading small">
                                <i class="fa fa-copy fa-fw"></i> Attachments
                                <?php if (isset($component)) { $__componentOriginal3cd444c725fafeb6dc66a400db3acfde947dd82b = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\FoundationCore\View\Components\AttachmentViewer::class, ['attachable' => $work_item]); ?>
<?php $component->withName('hasob-foundation-core::attachment-viewer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cd444c725fafeb6dc66a400db3acfde947dd82b)): ?>
<?php $component = $__componentOriginal3cd444c725fafeb6dc66a400db3acfde947dd82b; ?>
<?php unset($__componentOriginal3cd444c725fafeb6dc66a400db3acfde947dd82b); ?>
<?php endif; ?>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <?php if (isset($component)) { $__componentOriginale16ad7061002b48685c3dfcfc5bd2c03c78490f5 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\FoundationCore\View\Components\AttachmentUploader::class, ['attachable' => $work_item]); ?>
<?php $component->withName('hasob-foundation-core::attachment-uploader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale16ad7061002b48685c3dfcfc5bd2c03c78490f5)): ?>
<?php $component = $__componentOriginale16ad7061002b48685c3dfcfc5bd2c03c78490f5; ?>
<?php unset($__componentOriginale16ad7061002b48685c3dfcfc5bd2c03c78490f5); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginale901bcef11f2a55cd964a05735bfff225113b14d = $component; } ?>
<?php $component = $__env->getContainer()->make(Hasob\FoundationCore\View\Components\AttachmentList::class, ['attachable' => $work_item]); ?>
<?php $component->withName('hasob-foundation-core::attachment-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale901bcef11f2a55cd964a05735bfff225113b14d)): ?>
<?php $component = $__componentOriginale901bcef11f2a55cd964a05735bfff225113b14d; ?>
<?php unset($__componentOriginale901bcef11f2a55cd964a05735bfff225113b14d); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                
                </div>

            <?php else: ?>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-heading"><i class="fa fa-list-alt fa-fw"></i></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="mb-50 mt-50 text-center">Please select a File to View</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('page_scripts'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make(config('hasob-foundation-core.view_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-workflow-engine-bs-5\src/../resources/views/workflow/index.blade.php ENDPATH**/ ?>