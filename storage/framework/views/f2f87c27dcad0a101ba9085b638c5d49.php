<?php $__env->startSection('title','Sen Mecanique || Login Page'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="container-fluid m-0 p-0" style="width: 100%;height:100vh">
    <div class="row w-100 h-100">
        <div class="d-none d-md-block d-lg-block col-md-12 col-lg-6 h-100" style="background-color: red;">
           <div class="row w-75 pt-3" style="margin: auto; height:65%;">
            <div id="carouselExample" class="carousel slide" style="height: 100%;"> <!-- Carrousel prend toute la hauteur disponible -->
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <img src="<?php echo e(asset('frontend/img/mecaniciens/mecaniciens1.jpg')); ?>" class="d-block w-100 h-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="<?php echo e(asset('frontend/img/mecaniciens/mecaniciens2.jpg')); ?>" class="d-block w-100 h-100 rounded-3" alt="...">
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
            <div class="row ">
                <p class="text-light text-center">
                   <span class="d-block text-center fs-5 my-3" style="font-weight:bold;"> Rejoignez la Révolution du Service Mécanique au Sénégal !</span>
                    Vous avez une panne et vous ne savez pas où trouver un mécanicien fiable rapidement ? Ou bien, vous êtes un mécanicien à la recherche de nouvelles opportunités pour élargir votre clientèle ? Ne cherchez plus, notre application senMécanique est là pour vous simplifier la vie. Grâce à notre plateforme, trouvez en un clin d'œil les meilleurs mécaniciens près de chez vous, prêts à intervenir à tout moment.
                </p>
           </div>
           </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 h-100">
            <div class="row w-100 text-center">
                <?php
                    $settings=DB::table('settings')->get();
                ?>
                <a href="#" class="py-2 w-100"><img src="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->logo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" alt="logo"  style="width: 25%;"></a>
            </div>
            <div class="row w-100 text-center">
                <h1 class="text-center w-100" style="font-weight: bold;">Connection</h1>
            </div>
            <div class="row w-100 my-4">
                <div class="col w-75 text-center" style="margin: auto;">
                    <a href="<?php echo e(route('login.redirect','facebook')); ?>" class="mx-3"><i class="bi bi-facebook fa-3x text-primary"></i></a>
                    <a href="<?php echo e(route('login.redirect','github')); ?>" class="mx-3"><i class="bi bi-github fa-3x text-dark"></i></a>
                    <a href="<?php echo e(route('login.redirect','google')); ?>" class="mx-3"><i class="bi bi-google fa-3x text-danger" ></i></a>
                </div>
            </div>
            <div class="row w-100">
                <form class="form w-75" style="margin:auto;" method="post" action="<?php echo e(route('ClientLogin.submit')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Votre Email<span>*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="" required="required" value="<?php echo e(old('email')); ?>">
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
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Votre mot de passe<span>*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="" required="required" value="<?php echo e(old('password')); ?>">
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
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col text-center w-100 mb-2">
                                    <button class="btn" type="submit">Connection</button>
                                    <button class="btn"><a href="<?php echo e(route('Clientregister.form')); ?>">Inscription</a></button>
                                </div>
                                <div class="checkbox form-check d-flex justify-content-between my-2" style="width: 70%; margin:auto;">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" class="form-check-label" type="checkbox">Se souvenir de moi</label>
                                    <?php if(Route::has('password.request')): ?>
                                        <a class="lost-pass" href="<?php echo e(route('password.reset')); ?>">
                                            Mot de passe oublié ?
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.assistance.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mouss\Desktop\SenMecanique\resources\views/frontend/assistance/pages/login.blade.php ENDPATH**/ ?>