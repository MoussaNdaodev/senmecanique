<!DOCTYPE html>
<html lang="fr">
<head>
	<?php echo $__env->make('frontend.assistance.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
    <div style="position: relative;">
        <?php echo $__env->make('frontend.assistance.layouts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('main-content'); ?>
        <?php echo $__env->make('frontend.assistance.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\MOUSSA NDAO\Desktop\SenMecanique\resources\views/frontend/assistance/layouts/master.blade.php ENDPATH**/ ?>