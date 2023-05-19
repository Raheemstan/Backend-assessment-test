<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            <?php if(isset($app_settings) && isset($app_settings['portal_short_name'])): ?>
                <?php echo e($app_settings['portal_short_name']); ?> ::
            <?php else: ?>
                <?php echo $__env->yieldContent('title', config('app.title', 'Scola ::')); ?>
            <?php endif; ?>
            <?php echo $__env->yieldContent('title_prefix'); ?>
            <?php echo $__env->yieldContent('title_postfix', config('app.title_postfix', '')); ?>
        </title>
        
        <?php if(isset($app_settings) && isset($app_settings['portal_seo_description'])): ?>
            <meta name="description" content="<?php echo e($app_settings['portal_seo_description']); ?>" />
        <?php endif; ?>

        <?php if(isset($app_settings) && isset($app_settings['portal_seo_keywords'])): ?>
            <meta name="keywords" content="<?php echo e($app_settings['portal_seo_keywords']); ?>" />
        <?php endif; ?>


		<link rel="shortcut icon" href="<?php echo e(asset('gradebook-frontend-blue/images/scola-icon.fw.png')); ?>">
		<link rel="icon" href="<?php echo e(asset('gradebook-frontend-blue/images/scola-icon.fw.png')); ?>" type="image/png">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="<?php echo e(asset('gradebook-frontend-blue/css/slick.css')); ?>">

        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="<?php echo e(asset('gradebook-frontend-blue/css/LineIcons.css')); ?>">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="<?php echo e(asset('gradebook-frontend-blue/css/magnific-popup.css')); ?>">

        <!--====== tailwind css ======-->
        <link rel="stylesheet" href="<?php echo e(asset('gradebook-frontend-blue/css/tailwind.css')); ?>">

        <!--====== font awesome ======-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

		<!-- Custom CSS -->
        <?php echo $__env->yieldContent('third_party_stylesheets'); ?>
        <?php echo $__env->yieldPushContent('page_css'); ?>

        <style>
            .header-hero::before {
                content: '';
                z-index: -1;
                opacity: .9;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                --bg-opacity: 0.9;
                background-color: #bee3f8;
                background-color: rgba(190, 227, 248, var(--bg-opacity));
            }
            .services-title {
                margin-bottom: 0rem;
                font-size: 1.5rem;
                font-weight: 500;
                --text-opacity: 1;
                color: #1a202c;
                color: rgba(26, 32, 44, var(--text-opacity));
            }
        </style>
          
    </head>
    <body>


    <!--====== HEADER PART START ======-->
<div class="h-screen relative z-10 w-full" style="background-image: url(<?php echo e(asset('gradebook-frontend-blue/images/students-bg.jpg')); ?>);
      no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;"
>
    <header class="header-area h-screen">
        <div class ="w-full h-screen">
            <div class="navigation">
                <div class="container">
                        <div class="w-full">

                            <?php echo $__env->yieldContent('nav'); ?>

                        </div>
                </div> <!-- container -->
            </div> <!-- navgition -->

     
            <div id="home " class="  header-hero w-full h-screen" >
                <div class="container h-screen">
                    <div class="row h-screen justify-center items-center overflow-y-scroll">
                        <div class="w-full lg:w-5/6 xl:w-2/3 items-center">
                                <?php echo $__env->yieldContent('body'); ?>
                        </div>
                    </div>  <!--row -->
            </div> 
        </div>
        <!-- header content -->
    </header>
    <!--====== HEADER PART ENDS ======-->

    <?php echo $__env->yieldContent('footer-login'); ?>
<div>

    <!--====== jquery js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/vendor/modernizr-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/vendor/jquery-1.12.4.min.js')); ?>"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/ajax-contact.js')); ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/scrolling-nav.js')); ?>"></script>

    <!--====== Validator js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/validator.min.js')); ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/jquery.magnific-popup.min.js')); ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/slick.min.js')); ?>"></script>

    <!--====== Main js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/main.js')); ?>"></script>

    <?php echo $__env->yieldContent('third_party_scripts'); ?>
	<?php echo $__env->yieldPushContent('third_party_scripts'); ?>

	<?php echo $__env->yieldContent('page_scripts'); ?>
	<?php echo $__env->yieldPushContent('page_scripts'); ?>
	
	<?php echo $__env->yieldContent('page_scripts2'); ?>
	<?php echo $__env->yieldPushContent('page_scripts2'); ?>


    </body>
</html><?php /**PATH C:\Users\DocB\Desktop\workspace\scola-gradebook-portal\resources\views/layouts/gradebook-frontend-blue/page-master-login.blade.php ENDPATH**/ ?>