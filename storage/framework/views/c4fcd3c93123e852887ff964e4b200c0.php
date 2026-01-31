<?php $__env->startSection('title','Sen Mecanique || Login Page'); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="<?php echo e(route('home')); ?>">Acceuil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Connection</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shop Login -->
    <section class="shop login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form border rounded-3 shadow p-3">
                        <h2>Connection</h2>
                        <p>Veuillez vous inscrire pour passer à la caisse plus rapidement</p>
                        <!-- Form -->
                        <form class="form" method="post" action="<?php echo e(route('login.submit')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Votre Email<span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required" value="<?php echo e(old('email')); ?>">
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
                                        <input type="password" name="password" placeholder="" required="required" value="<?php echo e(old('password')); ?>">
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
                                    <div class="form-group login-btn">
                                        <div class="row d-flex justify-content-between" style="width: 70%; margin:auto;">
                                            <button class="btn" type="submit">Connection</button>
                                            <a href="<?php echo e(route('register.form')); ?>" class="btn">Inscription</a>
                                        </div>
                                        <p class="mt-2 text-center fs-2 fw-2">ou enregsitrer vous avec</p>
                                        <div class="row d-flex justify-content-between" style="width: 70%; margin:auto;">
                                            <a href="<?php echo e(route('login.redirect','facebook')); ?>" ><i class="bi bi-facebook fa-3x text-primary"></i></a>
                                            <a href="<?php echo e(route('login.redirect','github')); ?>" ><i class="bi bi-github fa-3x text-dark"></i></a>
                                            <a href="<?php echo e(route('login.redirect','google')); ?>" ><i class="bi bi-google fa-3x text-danger" ></i></a>
                                        </div>
                                    </div>
                                    <div class="checkbox d-flex justify-content-between my-2" style="width: 70%; margin:auto;">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Se souvenir de moi</label>
                                        <?php if(Route::has('password.request')): ?>
                                            <a class="lost-pass" href="<?php echo e(route('password.reset')); ?>">
                                                Mot de passe oublié ?
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Login -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<style>
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mouss\Desktop\SenMecanique\resources\views/frontend/pages/login.blade.php ENDPATH**/ ?>