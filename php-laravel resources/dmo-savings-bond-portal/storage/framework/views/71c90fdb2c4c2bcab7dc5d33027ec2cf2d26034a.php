


<?php $__env->startSection('title_postfix'); ?>
    <?php if($is_edit): ?>
    Edit User
    <?php else: ?>
    Create User
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php if($is_edit): ?>
    <?php echo e($edited_user->full_name); ?>

    <?php else: ?>
    Create User
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <div class="user-block">

                    <div class="row">
                        <div class="ma-20 col-lg-12">

                            <form id="frmUserDetails" name="frmUserDetails" class="form-horizontal" novalidate="" method="post" action="<?php echo e(route('fc.user.store',[ $edited_user!=null?$edited_user->id:0])); ?>" enctype="multipart/form-data" >

                                <?php echo e(csrf_field()); ?>


                                <input type='hidden' id="idUserDetails" name="idUserDetails" value="<?php echo e($edited_user!=null?$edited_user->id:0); ?>" />

								<ul class="nav nav-pills" id="myTab" role="tablist">
									<li role="presentation" class="nav-item"><a href="#details" class="nav-link active" aria-controls="details" role="tab" data-bs-toggle="tab">Details</a></li>

                                    <?php if(FoundationCore::has_feature('user-presence', $organization)): ?>
                                    <li role="presentation" class="nav-item"><a href="#presence" class="nav-link" aria-controls="presence" role="tab" data-bs-toggle="tab">Presence Status</a></li>
                                    <?php endif; ?>

									<li role="presentation" class="nav-item"><a href="#disable" class="nav-link" aria-controls="disable" role="tab" data-bs-toggle="tab">Disable</a></li>
                                    <li role="presentation" class="nav-item"><a href="#roles" class="nav-link" aria-controls="roles" role="tab" data-bs-toggle="tab">Security Roles</a></li>
                                    
                                    <?php if(FoundationCore::has_feature('user-active-directory', $organization)): ?>
                                    <li role="presentation" class="nav-item"><a href="#active-directory" class="nav-link" aria-controls="active-directory" role="tab" data-bs-toggle="tab">Active Directory</a></li>
                                    <?php endif; ?>

                                    <li role="presentation" class="nav-item"><a href="#others" class="nav-link" aria-controls="others" role="tab" data-bs-toggle="tab">Others</a></li>
                                    <?php if($is_edit): ?>
                                    <li role="presentation" class="nav-item"><a href="#raw" class="nav-link" aria-controls="raw" role="tab" data-bs-toggle="tab">Raw</a></li>
                                    <?php endif; ?>
								</ul>

								<div class="tab-content">

									<div  class=" tab-pane fade show active  mt-3" id="details">

                                        <div class="row">
                                            <div class="col-lg-9">


                                                <div class="row g-3">
                                                    
                                                    <div class="col-md-2 mt-4">
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('userTitle') ? ' has-error' : ''); ?>">
                                                                <?php
                                                                    $titles = ["Mr.","Mrs.","Miss.","Dr.","Arc.","Engr.","Alh.","Prof.","QS.","Mal."];
                                                                ?>
                                                                <select id="userTitle" name="userTitle" class="form-select">
                                                                    <option value="">N/A</option>
                                                                    <?php $__currentLoopData = $titles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($title); ?>" <?php echo e($edited_user!=null&&$title==$edited_user->title?'selected':''); ?>><?php echo e($title); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 mt-4">
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('firstName') ? ' has-error' : ''); ?>">
                                                                <div class="input-group"> 
                                                                    <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
                                                                    <input type="text" class="form-control" id="firstName" name="firstName"  placeholder="First Name"  value="<?php echo e($is_edit ? $edited_user->first_name : old('firstName')); ?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 mt-4">
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('middleName') ? ' has-error' : ''); ?>">
                                                                <input type="text" class="form-control" id="middleName" name="middleName"  placeholder="Middle Name"  value="<?php echo e($is_edit ? $edited_user->middle_name : old('middleName')); ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="col-lg-12 form-label">Last Name</label>
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('lastName') ? ' has-error' : ''); ?>">
                                                                <div class="input-group"> 
                                                                    <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
                                                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Surname"  value="<?php echo e($is_edit ? $edited_user->last_name : old('lastName')); ?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="col-lg-12 form-label">Email Address</label>
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('emailAddress') ? ' has-error' : ''); ?>" >
                                                                <div class="input-group"> 
                                                                    <span class="input-group-text bg-transparent"><i class="bx bxs-envelope-open"></i></span>
                                                                    <input type='text' class="form-control" id="emailAddress" name="emailAddress" value="<?php echo e($is_edit ? $edited_user->email : old('emailAddress')); ?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="col-lg-12 form-label">Phone Number</label>
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('phoneNumber') ? ' has-error' : ''); ?>" >
                                                                <div class="input-group"> 
                                                                    <span class="input-group-text bg-transparent"><i class="bx bxs-phone"></i></span>
                                                                    <input type='text' class="form-control" id="phoneNumber" name="phoneNumber" value="<?php echo e($is_edit ? $edited_user->telephone : old('phoneNumber')); ?>" placeholder="Phone Number" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="col-lg-12 form-label">Password</label>
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('password1') ? ' has-error' : ''); ?>">
                                                                <div class="input-group"> 
                                                                    <span class="input-group-text bg-transparent"><i class="bx bxs-lock-open"></i></span>
                                                                    <input type="password" class="form-control" id="password1" name="password1"  placeholder="Enter Password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="col-lg-12 form-label">Confirm Password</label>
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('password1_confirmation') ? ' has-error' : ''); ?>">
                                                                <div class="input-group"> 
                                                                    <span class="input-group-text bg-transparent"><i class="bx bxs-lock"></i></span>
                                                                    <input type="password" class="form-control" id="password1_confirmation" name="password1_confirmation" placeholder="Re-enter Password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="col-lg-12 form-label">Department</label>
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('department') ? ' has-error' : ''); ?>">
                                                                <select id="department" name="department" class="form-select">
                                                                    <option value="">Select a Department</option>
                                                                <?php if(isset($departments)): ?>
                                                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($department->id); ?>" <?php echo e($edited_user!=null&&$department->id==$edited_user->department_id?'selected':''); ?>>
                                                                        <?php echo e($department->long_name); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="col-lg-12 form-label">Job Title</label>
                                                        <div class="col-lg-12">
                                                            <div class="<?php echo e($errors->has('jobTitle') ? ' has-error' : ''); ?>" >
                                                                <div class="input-group"> 
                                                                    <span class="input-group-text bg-transparent"><i class="bx bxs-label"></i></span>
                                                                    <input type='text' class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title i.e. Director, etc."  value="<?php echo e($is_edit ? $edited_user->job_title : old('jobTitle')); ?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="file_profile_image" class="col-lg-12 form-label">Profile Image</label>
                                                        <div class="col-lg-9">
                                                            <div class="<?php echo e($errors->has('profile_image')?'has-error':''); ?>">
                                                                <input id="file_profile_image" 
                                                                    type="file" 
                                                                    class="form-control" 
                                                                    name="file_profile_image"  
                                                                    placeholder="Select File"
                                                                    accept="image/*"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            
                                            </div>
                                            <div class="col-lg-3">
                                                
                                                <div class="d-flex flex-column align-items-center text-center">

                                                    <br/>
                                                    <br/>
                                                    <br/>
                                                    <?php if( $edited_user==null || $edited_user->profile_image == null ): ?>
                                                        
                                                        <img src="<?php echo e(asset('imgs/bare-user.png')); ?>" class="rounded-circle p-1" style="max-width:100px;max-height:100px;" />
                                                        <br/><br/>
                                                        <span class="small text-center" style="display:inline-block;">No Profile Image</span>
                                                        
                                                    <?php else: ?>
                                                        <img class="rounded-circle p-1" style="max-width:100px;max-height:100px;" src="<?php echo e(route('fc.get-profile-picture',[$edited_user->id])); ?>" >
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <?php if(FoundationCore::has_feature('user-presence', $organization)): ?>
                                    <div class=" tab-pane fade mt-3" id="presence">

                                        <div class="mb-3">
                                            <label class="col-sm-3 form-label">Current Status</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <select id="availability_status" name="availability_status" class="form-select">
                                                        <option value="available" <?php echo e($edited_user!=null&&$edited_user->presence_status=='available' ? 'selected' : ''); ?>>Available</option>
                                                        <option value="on leave" <?php echo e($edited_user!=null&&$edited_user->presence_status=='on leave' ? 'selected' : ''); ?>>On Leave</option>
                                                        <option value="do not disturb" <?php echo e($edited_user!=null&&$edited_user->presence_status=='do not disturb' ? 'selected' : ''); ?> >Do Not Disturb</option>
                                                    </select>
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="presence_comments" class="col-sm-3 form-label">Comments</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="presence_comments" name="presence_comments" rows="5"><?php echo $edited_user!=null?$edited_user->leave_delegation_notes:''; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <div  class=" tab-pane fade  mt-3" id="disable">

                                        <div class="mb-3 form-check">
                                            <label for="cbx_is_disabled" class="col-sm-3 form-check-label">Disabled</label>
                                            
                                                <input class='form-check-input' type="checkbox" id="cbx_is_disabled" name="cbx_is_disabled" value="1" <?php echo e($edited_user!=null&&$edited_user->is_disabled?'checked':''); ?> />
                                            
                                        </div>

                                        <div class="mb-3">
                                            <label for="disable_reason" class="col-sm-3 form-label">Disable Reason</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="disable_reason" name="disable_reason" rows="5"><?php echo $edited_user!=null?$edited_user->disable_reason:''; ?></textarea>
                                            </div>
                                        </div>

                                        <?php if($edited_user != null): ?>
                                            <?php if($edited_user->is_disabled && $edited_user->disabling_user): ?>
                                            <div class="mb-3">
                                                <label for="disable_reason" class="col-sm-3 form-label">Disabled By</label>
                                                <div class="col-sm-9">
                                                    <?php echo e($edited_user->disabling_user->full_name); ?>

                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disable_reason" class="col-sm-3 form-label">Disabled Date</label>
                                                <div class="col-sm-9">
                                                    <?php echo e($edited_user->getDisabledDateString()); ?>

                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                    </div>

                                    <div  class="tab-pane fade  mt-3" id="roles">
                                        <?php if(isset($all_roles) && $all_roles!=null): ?>
                                        <div class="m-3">
                                            <div class="row row-cols-3 row-cols-sm-3 row-cols-lg-3 row-cols-xl-3 g-2">
                                            <?php $__currentLoopData = $all_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx=>$role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col">
                                                    <input id='userRole_<?php echo e($role->name); ?>' name='userRole_<?php echo e($role->name); ?>' type="checkbox" value="1" class="roleCbx form-check-input" <?php echo e($edited_user!=null&&$edited_user->hasRole($role->name)?'checked':''); ?> />
                                                    <label class="form-check-label" for="userRole_<?php echo e($role->name); ?>">
                                                        <?php echo e($role->name); ?>

                                                    </label>                                   
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if(FoundationCore::has_feature('user-active-directory', $organization)): ?>
                                    <div  class="tab-pane fade  mt-3" id="active-directory">

                                        <div class="mb-3 form-check">
                                            <label for="cbx_is_ad_import" class="col-sm-3 form-check-label">AD Imported</label>
                                            <!-- <div class="col-sm-9"> -->
                                                <input class="form-check-input" type="checkbox" id="cbx_is_ad_import" name="cbx_is_ad_import" value="1" <?php echo e($edited_user!=null&&$edited_user->is_ad_import?'checked':''); ?> />
                                            <!-- </div> -->
                                        </div>

                                        <div class="mb-3">
                                            <label for="txt_ad_type" class="col-sm-3 form-label">AD Type</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="txt_ad_type" name="txt_ad_type" value='<?php echo $edited_user!=null?$edited_user->ad_type:""; ?>' />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="txt_ad_key" class="col-sm-3 form-label">AD Key</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="txt_ad_key" name="txt_ad_key" value='<?php echo $edited_user!=null?$edited_user->ad_key:""; ?>' />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="txt_ad_data" class="col-sm-3 form-label">AD Data</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="txt_ad_data" name="txt_ad_data"><?php echo $edited_user!=null?$edited_user->ad_data:""; ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endif; ?>

                                    <div  class=" tab-pane fade mt-3" id="others">

                                        <div class="mb-3">
                                            <label for="txt_website" class="col-sm-3 form-label">Website</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="txt_website" name="txt_website" value='<?php echo $edited_user!=null?$edited_user->website_url:""; ?>' />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="txt_ranking_ordinal" class="col-sm-3 form-label">Ranking Ordinal</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="txt_ranking_ordinal" name="txt_ranking_ordinal" value='<?php echo $edited_user!=null?$edited_user->ranking_ordinal:"0"; ?>' />
                                            </div>
                                        </div>

                                        
                                        <div class="mb-3">
                                            <label for="txt_staff_code" class="col-sm-3 form-label">User Code</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="txt_user_code" name="txt_user_code" value='<?php echo $edited_user!=null?$edited_user->user_code:""; ?>' />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="txt_preferred_name" class="col-sm-3 form-label">Preferred Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="txt_preferred_name" name="txt_preferred_name" value='<?php echo $edited_user!=null?$edited_user->preferred_name:""; ?>' />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="txt_physical_location" class="col-sm-3 form-label">Physical Location</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="txt_physical_location" name="txt_physical_location"><?php echo $edited_user!=null?$edited_user->physical_location:""; ?></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <?php if($is_edit): ?>
                                        <div  class=" tab-pane fade mt-3" id="raw">
                                        <?php if($edited_user != null): ?>
                                            <?php echo $edited_user->toJson(JSON_PRETTY_PRINT); ?>

                                        <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>

								<hr style="width: 100%;">

								<!-- <div style="width: 75%; margin-left: auto"> -->
                                    <div >
									<button type="submit" class="btn btn-warning me-2 px-5" id="save" name="btn_save">Save</button>

									<a href="<?php echo e(route('fc.users.index')); ?>">
										<button type="button" class="btn btn-primary  px-5" id="cancel" name="btn_cancel">Cancel</button>
									</a>
								</div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make(config('hasob-foundation-core.view_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-portal\vendor\hasob\hasob-foundation-core-bs-5\src/../resources/views/users/edit.blade.php ENDPATH**/ ?>