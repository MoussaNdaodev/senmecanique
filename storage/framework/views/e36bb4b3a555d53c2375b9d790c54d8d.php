<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <?php
                                $settings=DB::table('settings')->get();

                            ?>
                            <li><i class="ti-headphone-alt"></i><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                            <li><i class="ti-email"></i> <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->email); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                        <li><i class="ti-location-pin"></i> <a href="<?php echo e(route('order.track')); ?>">Suivre la commande</a></li>
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Auth::user()->role=='admin'): ?>
                                    <li><i class="ti-user"></i> <a href="<?php echo e(route('admin')); ?>"  target="_blank">Tableau de bord</a></li>
                                <?php else: ?>
                                    <li><i class="ti-user"></i> <a href="<?php echo e(route('user')); ?>"  target="_blank">Tableau de bord</a></li>
                                <?php endif; ?>
                                <li><i class="ti-power-off"></i> <a href="<?php echo e(route('user.logout')); ?>">Déconnexion</a></li>

                            <?php else: ?>
                                <li><i class="ti-power-off"></i><a href="<?php echo e(route('login.form')); ?>">Connexion /</a> <a href="<?php echo e(route('register.form')); ?>">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <?php
                            $settings=DB::table('settings')->get();
                        ?>
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('frontend/img/favicon.png')); ?>" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner ">
        <div class="container  d-flex justify-content-center">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse justify-content-center">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="<?php echo e(Request::path()=='home' ? 'active' : ''); ?>"><a href="<?php echo e(route('home')); ?>">Accueil</a></li>
                                            <li class="<?php echo e(Request::path()=='about-us' ? 'active' : ''); ?>"><a href="<?php echo e(route('about-us')); ?>">À propos</a></li>
                                            <li class="<?php if(Request::path()=='product-grids'||Request::path()=='product-lists'): ?> active <?php endif; ?>">
                                                <a href="<?php echo e(route('product-grids')); ?>">Produits</a><span class="new">Nouveau</span>
                                            </li>
                                            <?php echo e(\App\Http\Helper::getHeaderCategory()); ?>

                                            <li class="<?php echo e(Request::path()=='blog' ? 'active' : ''); ?>"><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                                            <li class="<?php echo e(Request::path()=='contact' ? 'active' : ''); ?>"><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                            <li class="<?php echo e(Request::path()=='AssistanceHome' ? 'active' : ''); ?>"><a href="<?php echo e(route('AssistanceHome')); ?>">Trouvez une assistance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ End Header Inner -->
</header>
<?php /**PATH C:\Users\MOUSSA NDAO\Desktop\SenMecanique\resources\views/frontend/assistance/layouts/header.blade.php ENDPATH**/ ?>