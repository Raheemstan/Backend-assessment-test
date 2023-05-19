<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php echo $__env->yieldContent('title', config('app.title', 'ScolaLMS :: ')); ?>
        <?php echo $__env->yieldContent('title_prefix'); ?>
        <?php echo $__env->yieldContent('title_postfix', config('app.title_postfix', '')); ?>
    </title>
    <meta name="description" content="ScolaLMS" />
    <meta name="keywords" content="ScolaLMS, LMS, Learning Management System, Hasob, GradeBook" />

	<!--favicon-->
	<link rel="icon" href="<?php echo e(asset('imgs/scola-icon.fw.png')); ?>" type="image/png" />
	
    <!--plugins-->
	<link href="<?php echo e(asset('default-app-template/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
	<link href="<?php echo e(asset('default-app-template/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('default-app-template/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('default-app-template/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet" />
	
    <!-- loader-->
	<link href="<?php echo e(asset('default-app-template/css/pace.min.css')); ?>" rel="stylesheet" />
	<script src="<?php echo e(asset('default-app-template/js/pace.min.js')); ?>"></script>
	
    <!-- Bootstrap CSS -->
	<link href="<?php echo e(asset('default-app-template/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?php echo e(asset('default-app-template/css/app.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('default-app-template/css/icons.css')); ?>" rel="stylesheet">
	
	<link href="<?php echo e(asset('dist/css/font-awesome.min.css')); ?>" rel="stylesheet">

    <!-- Theme Style CSS -->
	<link href="<?php echo e(asset('default-app-template/css/dark-theme.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('default-app-template/css/semi-dark.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('default-app-template/css/header-colors.css')); ?>" rel="stylesheet" />
	
	<link href="<?php echo e(asset('vendors/bower_components/select2/dist/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('vendors/bower_components/sweetalert/dist/sweetalert.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo e(asset('vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet" type="text/css"/>
	
    <?php echo $__env->yieldContent('cdn_scripts'); ?>
    <?php echo $__env->yieldContent('third_party_stylesheets'); ?>
    <?php echo $__env->yieldPushContent('page_css'); ?>

</head>
<body>

	<!--wrapper-->
	<div class="wrapper">

		<?php echo $__env->make('layouts.default-app-template.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<div class="page-breadcrumb d-none d-sm-flex align-items-center">
					<div class="breadcrumb-title pe-3">
						<?php echo $__env->yieldContent('page_title'); ?>
					</div>
					<div class="ms-auto">
						<div class="btn-group" role="group" aria-label="Action Buttons">
							<?php echo $__env->yieldContent('page_title_buttons'); ?>
						</div>
					</div>
				</div>

				<p class="mb-0 small">
					<?php echo $__env->yieldContent('page_title_subtext'); ?>
				</p>

				<div class="row">
					<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>

				<div class="row my-3">
					<div class="col-lg-<?php echo e((isset($hide_right_panel) && $hide_right_panel==true)?12:9); ?>">
						
							<?php echo $__env->yieldContent('content'); ?>
						
					</div>
					<div class="col-12 col-lg-3 col-xl-3 <?php echo e((isset($hide_right_panel)&&$hide_right_panel==true)?'invisible':'visible'); ?>">
						<?php echo $__env->yieldContent('side-panel'); ?>
						<?php echo $__env->make('dashboard.partials.right-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('dashboard.partials.help-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->yieldContent('bottom-side-panel'); ?>
					</div>
				</div>

			</div>
		</div>
		<!--end page wrapper -->


		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->

		<!--Start Back To Top Button--> 
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0"><?php echo e(date('Y')); ?> &copy; ScolaLMS - Powered by <a href="http://hasob.com.ng" target="_blank">HASOB</a></p>
		</footer>

	</div>
	<!--end wrapper -->

	<!-- Bootstrap JS -->
	<script src="<?php echo e(asset('default-app-template/js/bootstrap.bundle.min.js')); ?>"></script>
	<!--plugins-->
	<script src="<?php echo e(asset('default-app-template/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('default-app-template/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
	<script src="<?php echo e(asset('default-app-template/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
	<script src="<?php echo e(asset('default-app-template/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
	<script src="<?php echo e(asset('default-app-template/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('default-app-template/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
	<script src="<?php echo e(asset('default-app-template/plugins/chartjs/js/Chart.min.js')); ?>"></script>
	<script src="<?php echo e(asset('default-app-template/plugins/chartjs/js/Chart.extension.js')); ?>"></script>
	
	<script src="<?php echo e(asset('vendors/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bower_components/moment/min/moment-with-locales.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bower_components/sweetalert/dist/sweetalert.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')); ?>"></script>

	
	<!--app JS-->
	<script src="<?php echo e(asset('default-app-template/js/app.js')); ?>"></script>


	<?php echo $__env->yieldContent('third_party_scripts'); ?>
	<?php echo $__env->yieldPushContent('third_party_scripts'); ?>

	<?php echo $__env->yieldContent('page_scripts'); ?>
	<?php echo $__env->yieldPushContent('page_scripts'); ?>
	
	<?php echo $__env->yieldContent('page_scripts2'); ?>
	<?php echo $__env->yieldPushContent('page_scripts2'); ?>

</body>

</html><?php /**PATH C:\Users\DocB\Desktop\workspace\scola-gradebook-portal\resources\views/layouts/default-app-template/app.blade.php ENDPATH**/ ?>