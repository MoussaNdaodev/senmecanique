
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo w-50">
								<a href="index.html"><img src="<?php echo e(asset('frontend/img/logo2.png')); ?>" alt="#"></a>
							</div>
							<?php
								$settings=DB::table('settings')->get();
							?>
							<p class="text"><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->short_des); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
							<p class="call">Vous avez une question ? Appelez-nous 24h/24 et 7j/7<span><a href="tel:123456789"><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="<?php echo e(route('about-us')); ?>">À propos </a></li>
								<li><a href="#">Foire aux questions</a></li>
								<li><a href="#">Conditions Générales</a></li>
								<li><a href="<?php echo e(route('contact')); ?>">Contactez Nous</a></li>
								<li><a href="#">Aide</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Service client</h4>
							<ul>
								<li><a href="#">Moyens de paiement</a></li>
								<li><a href="#">Satisfait ou remboursé</a></li>
								<li><a href="#">Retours</a></li>
								<li><a href="#">Livraison</a></li>
								<li><a href="#">Politique de confidentialité</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Contactez-nous</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->address); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
									<li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->email); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
									<li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
								</ul>
							</div>
							<!-- End Single Widget -->
							
                            <div class="row">
                                <a href="https://www.instagram.com/" target="blank" class="mx-3 my-3"> <i class="bi bi-instagram fa-lg"></i></a>
                                <a href="https://x.com/Accueil" target="blank" class="mx-3 my-3"> <i class="bi bi-twitter-x fa-lg"></i></a>
                                <a href="https://web.whatsapp.com/" target="blank" class="mx-3 my-3"> <i class="bi bi-whatsapp fa-lg text-success"></i></a>
                                <a href="https://fr-fr.facebook.com/" target="blank" class="mx-3 my-3"> <i class="bi bi-facebook fa-lg text-primary"></i></a>
                            </div>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © <?php echo e(date('Y')); ?> <a href="#" >Sen Mecanique</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="<?php echo e(asset('frontend/img/logo_paypal/paypal.png')); ?>" style="width: 60px;" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
    <script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery-migrate-3.0.0.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/jquery-ui.min.js')); ?>"></script>
	<!-- Popper JS -->
	<script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
	<!-- Color JS -->
	<script src="<?php echo e(asset('frontend/js/colors.js')); ?>"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo e(asset('frontend/js/slicknav.min.js')); ?>"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo e(asset('frontend/js/owl-carousel.js')); ?>"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo e(asset('frontend/js/magnific-popup.js')); ?>"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo e(asset('frontend/js/waypoints.min.js')); ?>"></script>
	<!-- Countdown JS -->
	<script src="<?php echo e(asset('frontend/js/finalcountdown.min.js')); ?>"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo e(asset('frontend/js/nicesellect.js')); ?>"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo e(asset('frontend/js/flex-slider.js')); ?>"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo e(asset('frontend/js/scrollup.js')); ?>"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo e(asset('frontend/js/onepage-nav.min.js')); ?>"></script>
	
	<script src="<?php echo e(asset('frontend/js/isotope/isotope.pkgd.min.js')); ?>"></script>
	<!-- Easing JS -->
	<script src="<?php echo e(asset('frontend/js/easing.js')); ?>"></script>

	<!-- Active JS -->
	<script src="<?php echo e(asset('frontend/js/active.js')); ?>"></script>


	<?php echo $__env->yieldPushContent('scripts'); ?>
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>
<?php /**PATH C:\Users\mouss\Desktop\SenMecanique\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>