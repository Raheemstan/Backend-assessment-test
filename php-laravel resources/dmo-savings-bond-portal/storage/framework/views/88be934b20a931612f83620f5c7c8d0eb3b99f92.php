
<button id="btn-new-workflow" type="button" class="btn btn-sm btn-warning">New Workflow </button>


<!-- Modal -->
<div class="modal fade" id="workflow-creator-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="workflow-creator-modal-label">Work Flow</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <div id="error_workflow_creator" class="alert alert-danger" role="alert">
                <span id="error_msg_workflow_creator"></span>
            </div>

            <form id="frm_workflow_creator" name="frm_workflow_creator" >
                  <?php echo e(csrf_field()); ?>


                <input type="hidden" id="workflow_id" value="-1" />


                <div class="error">
                    <div class="mb-3 <?php echo e($errors->has('wf_name') ? ' has-error' : ''); ?>" >
                    <label for="name" class="form-label">Name</label>
                    <input                         
                        type="text" 
                        class="form-control " 
                        value="<?php echo e(old('wf_name')); ?>" 
                        required 
                        id="wf_name"
                        name="wf_name"
                        placeholder="enter Workspace name"
                    >
                    </div>
                </div>
                    
                <div class="error">
                    <div class="mb-3">
                        <label for="wf_description" class="form-label">Description</label>
                        <textarea 
                            class="form-control" 
                            id="wf_description" 
                            name="wf_description"
                            rows="5"
                        ></textarea>
                    </div>
                </div>  

                <div class="mb-3 row error">
                    <div class="col-md-6">
                        <label for="wf_duration" class="form-label">Expected Duration</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="wf_duration" 
                            name= "wf_duration"
                            value="<?php echo e(old('wf_duration')); ?>"
                            placeholder="enter Expected Duration"
                        >

                    </div>
                </div>

                <div class="error">
                    <select 
                        class="form-select form-select-md" 
                        aria-label=".form-select-sm example"
                        id="workable_type"
                        name="workable_type"
                    >
                        <option selected>Select a Workable Object</option>
                        <?php if(isset($free_workables) && $free_workables != null): ?>
                            <?php $__currentLoopData = $free_workables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>>
                    </select>
                </div>
            </form>
        </div>

        <div id="div-workflow-creator-modal" class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-workflow-creator-save" value="add">
                <span class="spinner">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="visually-hidden">Loading...</span>
                </span>  
                Save
            </button>
        </div>
    </div>
  </div>
</div>



<?php $__env->startPush('page_scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){

        $('.spinner').hide();
        
        $('#btn-new-workflow').click(function(){
            $('#frm_workflow_creator').trigger("reset");
            $('#error_workflow_creator').hide();
            $('#workflow-creator-modal').modal('show');
        });

        $('#btn-workflow-creator-save').click(function(e){

            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}});
            e.preventDefault();

            $('.spinner').show();
            $('#btn-workflow-creator-save').prop("disabled", true);

            let formData = new FormData();
            options = JSON.stringify({
                'wf_name':$('#wf_name').val(),
                'wf_description':$('#wf_description').val(),
                'wf_duration':$('#wf_duration').val(),
                'workable_type':$('#workable_type').val(),
            });
            formData.append('options', options);

            $.ajax({
                url: "<?php echo e(route('wf.settings-new-workflow')); ?>",
                type: 'POST',
                processData: false,
                contentType: false,
                data: formData,
                success: function(data){

                    if (data!=null && data.status=='fail'){
                        $('#error_workflow_creator').show();
                        if (data.response!=null){
                            for (x in data.response) {
                                if ($.isArray(data.response[x])){
                                    $('#error_msg_workflow_creator').html('<strong>Errors</strong><br/>'+data.response[x].join('<br/>'));
                                }else{
                                    $('#error_msg_workflow_creator').html('<strong>Errors</strong><br/>'+data.response[x]);
                                }
                            }
                        } else {
                            $('#error_msg_workflow_creator').html('<strong>Error</strong><br/>An error has occurred.');
                        }
                        $('.spinner').hide();
                        $('#btn-workflow-creator-save').prop("disabled", false);
                    }else if (data!=null && data.status=='ok'){
                        swal({
                                title: "Saved",
                                text: "Workflow Created",
                                type: "success",
                                showCancelButton: false,
                                closeOnConfirm: false,
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "OK",
                                closeOnConfirm: false
                            });
                            window.setTimeout(function(){
                        location.reload(true);
                    }, 1000);
                    }else{
                        $('#error_msg_workflow_creator').html('<strong>Error</strong><br/>An error has occurred.');
                    }
                },
                error: function(data){
                    console.log(data);
                    $('.spinner').hide();
                    $('#btn-workflow-creator-save').prop("disabled", false);
                }
            });

        });

    });
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-workflow-engine-bs-5\src/../resources/views/settings/partials/workflow-creator-modal.blade.php ENDPATH**/ ?>