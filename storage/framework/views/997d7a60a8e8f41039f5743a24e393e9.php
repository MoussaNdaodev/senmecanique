<?php $__env->startSection('title','Wishlist Page'); ?>
<?php $__env->startSection('main-content'); ?>
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?php echo e(('home')); ?>">Acceuil<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Liste de souhait</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUIT</th>
								<th>NOM</th>
								<th class="text-center">TOTAL</th>
								<th class="text-center">AJOUTER AU PANIER</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php if(\App\Http\Helper::getAllProductFromWishlist()): ?>
								<?php $__currentLoopData = \App\Http\Helper::getAllProductFromWishlist(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$wishlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<?php
											$photo=explode(',',$wishlist->product['photo']);
										?>
										<td class="image" data-title="No"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></td>
										<td class="product-des" data-title="Description">
											<p class="product-name"><a href="<?php echo e(route('product-detail',$wishlist->product['slug'])); ?>"><?php echo e($wishlist->product['title']); ?></a></p>
											<p class="product-des"><?php echo ($wishlist['summary']); ?></p>
										</td>
										<td class="total-amount" data-title="Total"><span>$<?php echo e($wishlist['amount']); ?></span></td>
										<td><a href="<?php echo e(route('add-to-cart',$wishlist->product['slug'])); ?>" class='btn text-white'>Ajoutez au panier</a></td>
										<td class="action" data-title="Remove"><a href="<?php echo e(route('wishlist-delete',$wishlist->id)); ?>"><i class="ti-trash remove-icon"></i></a></td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
								<tr>
									<td class="text-center">
										Il n'y a aucune liste de souhaits disponible. <a href="<?php echo e(route('product-grids')); ?>" style="color:blue;">Continuez vos achats</a>
									</td>
								</tr>
							<?php endif; ?>


						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	<!-- Start Shop Services Area  -->
	<?php echo $__env->make("frontend.layouts.ShopServicesArea", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- End Shop Newsletter -->

	<?php echo $__env->make('frontend.layouts.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mouss\Desktop\SenMecanique\resources\views/frontend/pages/wishlist.blade.php ENDPATH**/ ?>