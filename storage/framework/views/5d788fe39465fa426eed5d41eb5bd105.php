<?php $__env->startSection('main-content'); ?>
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?php echo e(route('home')); ?>">Acceuil<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<?php
										$settings=DB::table('settings')->get();
									?>
									<h4>Contactez-nous</h4>
                                    <h3>Écrivez-nous un message <?php if(auth()->guard()->check()): ?> <?php else: ?><span style="font-size:12px;" class="text-danger">[Vous devez d'abord vous connecter]</span><?php endif; ?></h3>
								</div>
								<form class="form-contact form contact_form" method="post" action="<?php echo e(route('contact.store')); ?>" id="contactForm" novalidate="novalidate">
									<?php echo csrf_field(); ?>
									<div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Votre nom<span>*</span></label>
                                                <input name="name" id="name" type="text" placeholder="Entrez votre nom">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Vos sujets<span>*</span></label>
                                                <input name="subject" type="text" id="subject" placeholder="Entrez le sujet">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Votre email<span>*</span></label>
                                                <input name="email" type="email" id="email" placeholder="Entrez votre adresse email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Votre téléphone<span>*</span></label>
                                                <input id="phone" name="phone" type="number" placeholder="Entrez votre téléphone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <label>Votre message<span>*</span></label>
                                                <textarea name="message" id="message" cols="30" rows="9" placeholder="Entrez votre message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn">Envoyer le message</button>
                                            </div>
                                        </div>
                                    </div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Appelez Nous Maintenant:</h4>
									<ul>
										<li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com"><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->email); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Notre Adresse:</h4>
									<ul>
										<li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->address); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->

	<!-- Map Section -->
	<div class="map-section">
		<div id="myMap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7716.2228120630325!2d-17.39323000000001!3d14.762753000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2ssn!4v1722773751673!5m2!1sfr!2ssn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
	<!--/ End Map Section -->

	<!-- Start Shop Newsletter  -->
	<?php echo $__env->make('frontend.layouts.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- End Shop Newsletter -->
	<!--================Contact Success  =================-->
	<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<h2 class="text-success">Nous vous remercions!</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-success">Votre message a été envoyé avec succès…</p>
			</div>
		  </div>
		</div>
	</div>

	<!-- Modals error -->
	<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<h2 class="text-warning">Désolé!</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-warning">Quelque chose s’est mal passé</p>
			</div>
		  </div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
	.modal-dialog .modal-content .modal-header{
		position:initial;
		padding: 10px 20px;
		border-bottom: 1px solid #e9ecef;
	}
	.modal-dialog .modal-content .modal-body{
		height:100px;
		padding:10px 20px;
	}
	.modal-dialog .modal-content {
		width: 50%;
		border-radius: 0;
		margin: auto;
	}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('frontend/js/jquery.form.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/contact.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mouss\Desktop\SenMecanique\resources\views/frontend/pages/contact.blade.php ENDPATH**/ ?>