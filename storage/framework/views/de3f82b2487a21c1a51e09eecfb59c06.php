<?php $__env->startSection('title','Sen Mecanique || Register Page'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="container-fluid m-0 p-0" style="width: 100%; height: 100vh; background-color: #f8f9fa;">
    <div class="row w-100 h-100">
        <!-- Left side: Carousel section -->
        <div class="d-none d-md-block col-lg-6 h-100" style="background-color: #dc3545;">
           <div class="row w-75 pt-3 mx-auto" style="height: 70%;">
               <div id="carouselExample" class="carousel slide h-100" data-bs-ride="carousel">
                   <div class="carousel-inner h-100">
                       <div class="carousel-item active h-100">
                           <img src="<?php echo e(asset('frontend/img/mecaniciens/mecaniciens1.jpg')); ?>" class="d-block w-100 h-100 rounded-3 shadow-lg" alt="Mecanicien 1">
                       </div>
                       <div class="carousel-item h-100">
                           <img src="<?php echo e(asset('frontend/img/mecaniciens/mecaniciens2.jpg')); ?>" class="d-block w-100 h-100 rounded-3 shadow-lg" alt="Mecanicien 2">
                       </div>
                   </div>
                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                   </button>
               </div>
               <div class="row">
                   <p class="text-light text-center my-4" style="font-size: 1.1rem;">
                       <span class="d-block text-center fs-5 fw-bold mb-3">Rejoignez la Révolution du Service Mécanique au Sénégal !</span>
                       Trouvez rapidement des mécaniciens fiables près de chez vous ou inscrivez-vous comme mécanicien pour élargir votre clientèle avec senMécanique.
                   </p>
               </div>
           </div>
        </div>

        <!-- Right side: Form section -->
        <div class="col-12 col-lg-6 h-100 d-flex flex-column justify-content-center align-items-center">
            <div class="row w-100 text-center mb-4">
                <?php
                    $settings=DB::table('settings')->get();
                ?>
                <a href="#" class="py-2 w-100">
                    <img src="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->logo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" alt="Logo" style="width: 150px; height: auto;">
                </a>
            </div>

            <div class="row w-100 text-center">
                <h1 class="text-dark fw-bold mb-4">Inscription</h1>
            </div>

            <div class="row w-100">
                <form class="form" style="width: 80%; margin: auto;" method="post" action="<?php echo e(route('GarageRegister.submit')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Votre Nom<span>*</span></label>
                        <input type="text" class="form-control rounded-3 shadow-sm" name="name" id="name" placeholder="Entrez votre nom" required value="<?php echo e(old('name')); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Votre Email<span>*</span></label>
                        <input type="email" class="form-control rounded-3 shadow-sm" name="email" id="email" placeholder="Entrez votre email" required value="<?php echo e(old('email')); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Votre mot de passe<span>*</span></label>
                        <input type="password" class="form-control rounded-3 shadow-sm" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mb-4">
                        <label for="password_confirmation" class="form-label">Confirmer votre mot de passe<span>*</span></label>
                        <input type="password" class="form-control rounded-3 shadow-sm" name="password_confirmation" id="password_confirmation" placeholder="Confirmez votre mot de passe" required>
                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-danger w-100 rounded-3 py-2 shadow-sm">Suivant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.assistance.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mouss\Desktop\SenMecanique\resources\views/frontend/assistance/pages/registerGarage.blade.php ENDPATH**/ ?>