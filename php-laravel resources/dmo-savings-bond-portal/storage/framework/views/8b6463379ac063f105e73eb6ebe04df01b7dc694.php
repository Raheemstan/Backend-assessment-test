

<?php $__env->startSection('content'); ?>


    <div >
        <div class="flex justify-center" role="alert">
            <?php if($errors->any()): ?>
                    <div class="text-center bg-red-100 border border-red-400 text-red-700 px-4 pb-3 w-full md:w-1/2 m-4 rounded relative">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <h4 class="block"><i class="icon fa fa-warning"></i> Errors!</h4>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="mb-2"><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            
                <?php if($message = Session::get('error')): ?>
                    <div class="alert alert-danger alert-block" style="margin:15px;">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                <?php endif; ?>
            
            
                <?php if($message = Session::get('warning')): ?>
                    <div class="alert alert-warning alert-block" style="margin:15px;">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                <?php endif; ?>
            
            
                <?php if($message = Session::get('info')): ?>
                    <div class="alert alert-info alert-block" style="margin:15px;">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                <?php endif; ?>
            
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block" style="margin:15px;">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                <?php endif; ?>
        </div>

        <div class="flex justify-center">      
            <div class=" bg-white shadow-md border border-blue-300 rounded-md w-full md:w-1/2 z-10 px-8 pt-6 pb-8 mb-4" >
                <form method="post" action="<?php echo e(url('/login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4 ">
                        <label class="block text-gray-500 text-sm font-bold p-2 mb-2 " for="username">
                            <?php echo e(__('E-Mail Address')); ?>

                        </label>
                        <input 
                                type="email" 
                                id="email" 
                                class="shadow appearance-none border rounded py-2 px-2 w-full md:w-full text-gray-700 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                name="email" 
                                value= "<?php echo e(old('email')); ?>" 
                                required 
                                autocomplete="email" 
                                autofocus 
                                placeholder="example@mail.com"
                            >
                            <!-- <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                    <div class="mb-6">
                        <label class="block text-grey-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <div class="input-group flex">
                           <input 
                                type="password" 
                                id="password" 
                                class="form-control shadow appearance-none border border-red rounded py-2 px-2 w-full md:w-full text-gray-700 mb-3 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                name="password" 
                                required 
                                autocomplete="current-password"   
                                placeholder="******************"
                            >
                            <div>
                                <span class="input-group-text">
                                    <a href="#" class="toggle_hide_password">
                                        <i 
                                            class="fas fa-eye" 
                                            aria-hidden="true" 
                                            style="margin-left: -30px; cursor: pointer; margin-top:13px;" 
                                            >
                                        </i>
                                    </a>
                                </span>
                            </div>
                            
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
                        </div>
                       
                    </div>
                    <div class="md:flex md:items-center justify-between">
                        <div>
                        <input
                            type="checkbox" 
                            name="remember" 
                            id="remember" 
                            <?php echo e(old('remember') ? 'checked' : ''); ?> 
                        />
                        <label class="ml-1 md:inline-block">Keep me logged in</label>  
                        </div>
                        <div>
                        <a 
                            class="md:inline-block block align-baseline font-bold text-sm text-blue hover:text-blue-darker ml-6"
                            href="<?php echo e(route('password.request')); ?>">
                            Forgot Password?
                        </a>
                    </div>
                </div>
                <div class=" pt-3 md:w-2/4">
                    <button class="bg-blue hover:bg-blue-500 text-white font-bold py-2 px-5 rounded" type="submit">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    <div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>

<script >
    $(document).ready(function() {
        
        if ( window.location.pathname == '/login' ) {
             $('#login').addClass('active');
            $('#login').siblings().removeClass('active');
        }
          $(".toggle_hide_password").on('click', function(e) {
            e.preventDefault()

            // get input group of clicked link
            const input_group = $(this).closest('.input-group')

            // find the input, within the input group
            const input = input_group.find('input.form-control')

            // find the icon, within the input group
            const icon = input_group.find('i')

            // toggle field type
            input.attr('type', input.attr("type") === "text" ? 'password' : 'text')

            // toggle icon class
            icon.toggleClass('fa-eye fa-eye-slash')
        })
    });

        
</script>
    
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.frontend-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DocB\Desktop\workspace\scola-gradebook-portal\resources\views/auth/login.blade.php ENDPATH**/ ?>