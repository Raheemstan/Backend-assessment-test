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

    <header class="header-area">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="w-full">

                        <?php echo $__env->yieldContent('nav'); ?>

                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

     
        <div id="home" class="relative z-10 header-hero" style="background-image: url(<?php echo e(asset('gradebook-frontend-blue/images/students-bg.jpg')); ?>)">
            <div class="container">
                <div class="justify-center row">
                    <div class="w-full lg:w-5/6 xl:w-2/3">
                        <div class="pt-48 pb-64 text-center header-content">
                            <h3 class="mb-5 text-3xl font-semibold leading-tight text-gray-900 md:text-5xl">Next Level in Academic Excellence</h3>
                            <p class="px-5 mb-10 text-xl text-grey-900">Transform your school's reporting capabilities to give students highly insightful report cards while gaining unique and powerful insights into teacher performance to drive unprecedented academic excellence.</p>
                            <ul class="flex flex-wrap justify-center">
                                <li><a class="mx-3 main-btn video-popup" href="https://www.youtube.com/watch?v=r44RKWyfcFw">FIND OUT MORE <i class="ml-2 lni-play"></i></a></li>
                                <li><a class="mx-3 main-btn gradient-btn" href="#contact">GET STARTED NOW</a></li>
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="absolute bottom-0 z-20 w-full h-auto -mb-1 header-shape">
                <img src="<?php echo e(asset('gradebook-frontend-blue/images/header-shape.svg')); ?>" alt="shape">
            </div>
        </div> 
        
        
        <!-- header content -->
    </header>
    <!--====== HEADER PART ENDS ======-->



    <?php echo $__env->yieldContent('body'); ?>


    <!--====== SERVICES PART START ======-->

    <section id="service" class="relative services-area py-16">
        <div class="container">
            <div class="flex">
                <div class="w-full mx-4">
                    <div class="pb-10 section-title">
                        <h4 class="title">GradeBook Empowers You</h4>
                        <p class="text">Designed for Secondary Schools, its time to stop wasting precious time and energy manually producing the same old bland and uninsightful student report cards. Manual report cards are prone to mistakes that can easily cast aspersion at your school's integrity. 
                            GradeBook empowers your school to revolutionize how you manage and produce academic report cards for your students and more much.
                        </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="flex">
                <div class="w-full lg:w-2/3">
                    <div class="row">
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-popup"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title">Student Report Card</h4>
                                    <p class="text-sm">
                                        GradeBook generates your student's report card. It presents scores in an easy to understand and insightful report progressively linking present and past scores. This gives students unique insights into their performance beyond the typical report card showing score tables with average, range, and position figures.
                                    </p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-users"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title mb-0">Teacher Performance</h4>
                                    <p class="text-sm">
                                        Teachers are the backbone in delivering knowledge and academic excellence. GradeBook generates teacher performance reports derived from student scores in agreegate, term over term. This enables quality assurance in rating how effective knowledge delivery translates to improving academic performance.
                                    </p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-notepad"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title mb-0">Subject Reports</h4>
                                    <p class="text-sm">
                                        GradeBook generates performance reports on each subject for each class, linking both present with past performances to give deeper insights into both teacher and student performance. Beyond the typical table of scores, GradeBook subject report ensures quality knowledge delivery on a subject by subject basis.
                                    </p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="block mx-4 services-content sm:flex">
                                <div class="services-icon">
                                    <i class="lni-stats-up"></i>
                                </div>
                                <div class="mb-8 ml-0 services-content media-body sm:ml-3">
                                    <h4 class="services-title mb-0">Overall Performance</h4>
                                    <p class="text-sm">
                                        Academic excellence starts with proper and insightful reporting of performance. GradeBook generates reports based on scores from what students have been tested on as a result of being taught by a teacher. With these reports, the overall performance of your school is effectively being tracked and improved.
                                    </p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- row -->
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="services-image">
            <div class="image text-center">
                <img src="<?php echo e(asset('gradebook-frontend-blue/images/services.png')); ?>" alt="Services">
                
                <a class="text-xs text-blue-500 duration-300 hover:text-blue-700 italic" rel="nofollow" target="_blank" href="http://www.hasob.ng">View Sample Report</a>
            </div>
        </div> <!-- services image -->
    </section>

    <!--====== SERVICES PART ENDS ======-->


    

    <!--====== CLIENT LOGO PART START ======-->

    <section id="clients" class="py-16 bg-gray-100 client-logo-area py-16">
        <div class="container">
            <div class="items-center row">
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="<?php echo e(asset('gradebook-frontend-blue/images/school-1.png')); ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="<?php echo e(asset('gradebook-frontend-blue/images/school-2.png')); ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="<?php echo e(asset('gradebook-frontend-blue/images/school-3.png')); ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
                <div class="w-1/2 md:w-1/4">
                    <div class="flex justify-center single-client">
                        <img src="<?php echo e(asset('gradebook-frontend-blue/images/school-4.png')); ?>" alt="Logo">
                    </div> <!-- single client -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CLIENT LOGO PART ENDS ======-->


    <!--====== CONTACT PART START ======-->
    <section id="contact" class="contact-area py-16">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Get Started</h4>
                        <p class="text">Getting started is seamless, please provide the following details so we can profile your school. You will receive an email to get started to take your school to the next level in academic excellence.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="contact-form">
                        <form id="contact-form" action="<?php echo e(route('registration')); ?>" method="post" role="form" data-disable="false">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="text" name="name" placeholder="Your Name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="text" name="school_name" placeholder="Name of School" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="text" name="phone" placeholder="Phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="text" name="address" placeholder="Address of School" data-error="Address is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        <input type="text" name="town" placeholder="City" data-error="City is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="w-full md:w-1/2">
                                    <div class="mx-4 mb-6 single-form form-group">
                                        
                                        <select name="state" data-error="State is required." required="required" class="form-select appearance-none
                                        block
                                        w-full
                                        px-6
                                        py-2
                                        text-xl
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding bg-no-repeat
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                            <?php if(isset($states_list)): ?>
                                            <?php $__currentLoopData = $states_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx=>$state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($state); ?>"><?php echo e($state); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="mx-4 form-message"></p>
                                <div class="w-full">
                                    <div class="mx-4 mt-2 text-center single-form form-group">
                                        <button type="submit" class="main-btn gradient-btn focus:outline-none">Submit</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== CONTACT PART ENDS ======-->

    <?php echo $__env->yieldContent('footer'); ?>


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


    </body>
</html><?php /**PATH C:\Users\DocB\Desktop\workspace\scola-gradebook-portal\resources\views/layouts/gradebook-frontend-blue/page-master.blade.php ENDPATH**/ ?>