<button id="btn-file-assignment" type="button" class="btn btn-xs btn-danger">Process & Move</button>

<div class="modal fade" id="assignment-modal" role="dialog" aria-labelledby="assignment-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="assignment-modal-label">Process & Move File</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div id="error_div_assignment" class="alert alert-danger" role="alert">
                <span id="error_msg_assignment"></span>
              </div>

              <form id="frm_assignment" name="frm_assignment" class="form-horizontal" novalidate="">
                <?php echo e(csrf_field()); ?>


                <div class="mb-3">
                  <label class="form-label"></label>
                  <!-- <div class="col-xs-9"> -->
                    <div class="input-group">
                      
                      <!-- <span class="input-group-text"><span class="glyphicon glyphicon-comment"></span></span> -->
                      <!-- <select class="form-control" id="pm_user" name="pm_user" style="width: 100%"> -->
                        <select id="comments" name="comments" class="form-select" style="width: 100%">
                        <option value="">Frequently used Comment</option>
                        <option value="Please Treat">Please Treat</option>
                        <option value="Please Vet">Please Vet</option>
                        <option value="Please Check">Please Check</option>
                        <option value="Please Recommend">Please Recommend</option>
                        <option value="Please Approve">Please Approve</option>
                        <option value="Please Deal">Please Deal</option>
                        <option value="Submitted Sir">Submitted Sir</option>
                      </select>

                    </div>
                  <!-- </div> -->
                </div>

                <div class="mb-3 error">
                    <label for="inputTask" class="form-label">Comments</label>
                    <!-- <div class="col-sm-9"> -->
                      <textarea class="form-control" id="process_file_comments" name="process_file_comments" rows="5" required></textarea>
                    <!-- </div> -->
                </div>

                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <!-- <div class="col-xs-9"> -->
                      <div class="input-group">

                        <select name="pm_department" class="form-select">
                          <option value="0">Select a Destination Department</option>
                          <?php if(isset($all_departments) && $all_departments != null): ?>
                            <?php $__currentLoopData = $all_departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx=>$dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($dept->id); ?>"><?php echo e($dept->long_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        </select>
                        <!-- <span class="input-group-addon"><span class="fa fa-institution"></span></span> -->

                      </div>
                    <!-- </div> -->
                </div>

                <div class="mb-3">
                    <label class="form-label">Destination</label>
                    <!-- <div class="col-xs-9"> -->
                      <div class="input-group">

                        <!-- <select class="form-control" id="pm_user" name="pm_user" style="width: 100%"> -->
                        <select id="pm_user" name="pm_user[]" class="form-select" style="width: 100%" placeholder="Select a Person" multiple="multiple">
                          <?php if(isset($all_users) && $all_users!=null): ?>
                            <?php $__currentLoopData = $all_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($user->id!=Auth::id()): ?>
                              
                                <?php if($user->presence_status=="available"): ?>
                                  <option value="<?php echo e($user->id); ?>" data-val-dept-id="<?php echo e($user->department_id); ?>"><?php echo e($user->full_name); ?> <?php echo e(empty($user->job_title)?"":"({$user->job_title})"); ?></option>
                                <?php else: ?>
                                  <option value="<?php echo e($user->id); ?>" data-val-dept-id="<?php echo e($user->department_id); ?>" disabled><?php echo e($user->full_name); ?> - <?php echo e(ucwords($user->presence_status)); ?> <?php echo e(empty($user->job_title)?"":"({$user->job_title})"); ?></option>
                                <?php endif; ?>

                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        </select>
                        <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> -->

                      </div>
                    <!-- </div> -->
                </div>

              </form>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save-assignment" value="add">
                  <span class="spinner-border spinner-border-sm" id="spinner" role="status" aria-hidden="true"></span>
                  <span class="visually-hidden">Loading...</span>Assign File</button>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('page_scripts'); ?>
<script type="text/javascript">

    $(document).ready(function() {
    $("#spinner").hide()
        var selUsers = $("select[id='pm_user']");
        var selUsersClone = selUsers.clone();

        $("select[id='pm_user']").css('width', '100%');
        $("select[id='pm_user']").select2({
            width: 'resolve'
        });

        $('#btn-file-assignment').click(function(){
            $('#frm_assignment').trigger("reset");
            $('#assignment-modal').modal('show');
            $('#error_div_assignment').hide();
        });

        $("#btn-save-assignment").click(function (e) {
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}});
            e.preventDefault();
           $('#spinner').show();
           $('#btn-save-assignment').attr('disabled',true);
            // let process_confirm = confirm(`You are about to move this to ${$('#pm_user').find(":selected").text()}`);
            

            var destination = [];
            $.each($("input[name='selected_users[]']:checked"), function(){
                destination.push($(this).val());
            });

            <?php if(isset($selected_assignment) & $selected_assignment!=null): ?>
                var assign_id = "<?php echo e($selected_assignment->id); ?>";
            <?php else: ?>
                var assign_id = 0;
            <?php endif; ?>

            var formData = {
                _token:$('input[name="_token"]').val(),
                comment:$('#process_file_comments').val(),
                assignment_id:assign_id,
                destination:$('#pm_user').val(),
            }

            swal({
              title: `You are about to move this to ${$('#pm_user').find(":selected").text()}`,
              text: 'Are you sure',
              type:'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, move it!'
            },
            function (isConfirmed) {
              if(isConfirmed){
                $.ajax({
                type: "POST",
                url: "<?php echo e(route('wf.task-assignment')); ?>",
                data: formData,
                dataType: 'json',
                success: function (data) {
                  console.log(data);

                  if (data!=null && data.status=='fail'){
                    $('#error_div_assignment').show();
                    $('#spinner').hide();
                    $('#btn-save-assignment').attr('disabled',false);
                    $('#error_msg_assignment').html('<strong>Error</strong><br/>'+data.message);
                      if (data.response!=null){
                        for (x in data.response) {
                          if ($.isArray(data.response[x])){
                            $('#error_msg_assignment').html('<strong>Errors</strong><br/>'+data.response[x].join('<br/>'));
                          }else{
                            $('#spinner').hide();
                            $('#btn-save-assignment').attr('disabled',false);
                            $('#error_msg_assignment').html('<strong>Errors</strong><br/>'+data.response[x]);
                          }
                        }
                      }
                  }else if (data!=null && data.status=='ok'){
                    swal({
                      title: "Saved",
                      text: `This tasked has been sucessfully moved to ${$('#pm_user').find(":selected").text()}`,
                      type: "success",
                      showCancelButton: false,
                      closeOnConfirm: false,
                      confirmButtonClass: "btn-success",
                      confirmButtonText: "OK",
                      closeOnConfirm: false
                    });
                    window.setTimeout(function(){
                      window.location.replace('<?php echo e(route("wf.requests")); ?>');
                    }, 1000);
                  }else{
                    $('#spinner').hide();
                    $('#btn-save-assignment').attr('disabled',false);
                    $('#error_msg_assignment').html('<strong>Error</strong><br/>An error has occurred.');
                  }
                },
                error: function (data) {
                  console.log('Error:', data);
                  $('#spinner').hide();
                  $('#btn-save-assignment').attr('disabled',false);
                }
              });
            } 
          })

        }      
      )

        $("select[name='pm_department']").change(function(){
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}});
            
            var selected_department_id = this.value;
            $('select[id="pm_user"]').children('option').remove();

            var options = selUsersClone.find('option').clone();
            if (selected_department_id!="0"){
              options = selUsersClone.find('option[data-val-dept-id="'+selected_department_id+'"]').clone();
            }

            $('select[id="pm_user"]').append(options);
        });

        $("select[name='comments']").change(function(){
            $('#process_file_comments').html($("select[name='comments']").val()); 
            $("select[name='comments']").val('');       
        });

    });

</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-workflow-engine-bs-5\src/../resources/views/components/process-move.blade.php ENDPATH**/ ?>