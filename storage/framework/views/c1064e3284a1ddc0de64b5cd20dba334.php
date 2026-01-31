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
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option>catégories</option>
                                <?php $__currentLoopData = \App\Http\Helper::getAllCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option><?php echo e($cat->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <form method="POST" action="<?php echo e(route('product.search')); ?>">
                                <?php echo csrf_field(); ?>
                                <input name="search" placeholder="Recherchez des produits ici....." type="search">
                                <button class="btnn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar d-flex align-items-center justify-content-end">
                        <!-- Wishlist -->
                        <div class="sinlge-bar shopping">
                            <a href="<?php echo e(route('wishlist')); ?>" class="single-icon"><i class="fa fa-heart-o"></i> <span class="total-count"><?php echo e(App\Http\Helper::wishlistCount()); ?></span></a>
                            <?php if(auth()->guard()->check()): ?>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span><?php echo e(count(App\Http\Helper::getAllProductFromWishlist())); ?> Items</span>
                                        <a href="<?php echo e(route('wishlist')); ?>">View Wishlist</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <?php $__currentLoopData = App\Http\Helper::getAllProductFromWishlist(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $photo = explode(',', $data->product['photo']);
                                            ?>
                                            <li>
                                                <a href="<?php echo e(route('wishlist-delete', $data->id)); ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                <a class="cart-img" href="#"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></a>
                                                <h4><a href="<?php echo e(route('product-detail', $data->product['slug'])); ?>" target="_blank"><?php echo e($data->product['title']); ?></a></h4>
                                                <p class="quantity"><?php echo e($data->quantity); ?> x - <span class="amount">$<?php echo e(number_format($data->price, 2)); ?></span></p>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$<?php echo e(number_format(App\Http\Helper::totalWishlistPrice(), 2)); ?></span>
                                        </div>
                                        <a href="<?php echo e(route('cart')); ?>" class="btn animate">Cart</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!--/ End Wishlist -->
                        <!-- Cart -->
                        <div class="sinlge-bar shopping">
                            <a href="<?php echo e(route('cart')); ?>" class="single-icon"><i class="bi bi-cart"></i> <span class="total-count"><?php echo e(App\Http\Helper::cartCount()); ?></span></a>
                            <?php if(auth()->guard()->check()): ?>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span><?php echo e(count(App\Http\Helper::getAllProductFromCart())); ?> Items</span>
                                        <a href="<?php echo e(route('cart')); ?>">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <?php $__currentLoopData = \App\Http\Helper::getAllProductFromCart(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $photo = explode(',', $data->product['photo']);
                                            ?>
                                            <li>
                                                <a href="<?php echo e(route('cart-delete', $data->id)); ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                <a class="cart-img" href="#"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></a>
                                                <h4><a href="<?php echo e(route('product-detail', $data->product['slug'])); ?>" target="_blank"><?php echo e($data->product['title']); ?></a></h4>
                                                <p class="quantity"><?php echo e($data->quantity); ?> x - <span class="amount">$<?php echo e(number_format($data->price, 2)); ?></span></p>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$<?php echo e(number_format(\App\Http\Helper::totalCartPrice(), 2)); ?></span>
                                        </div>
                                        <a href="<?php echo e(route('checkout')); ?>" class="btn animate">Paiement</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!--/ End Cart -->
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
<?php /**PATH C:\Users\MOUSSA NDAO\Desktop\SenMecanique\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>