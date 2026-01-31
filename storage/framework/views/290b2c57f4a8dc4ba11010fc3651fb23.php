<?php $__env->startSection('title', 'Sen Mecanique || Garage profil'); ?>
<?php $__env->startSection('main-content'); ?>
<style>
        .profile-header {
            background-color: #ff4c4c;
            padding: 20px;
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        .rating {
            color: gold;
        }

        .map {
            height: 300px;
            background-color: #eee;
            border-radius: 10px;
        }

        .gallery img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .list-group-item {
            border: none;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 10px;
            margin: 10px 0;
        }

        .carousel img {
            height: 700px;
            /* Ajuste cette valeur selon la hauteur désirée */
            object-fit: cover;
            /* Pour conserver le ratio d'aspect des images */
        }

        /* Rating */
        .rating_box {
            display: inline-flex;
        }

        .star-rating {
            font-size: 0;
            padding-left: 10px;
            padding-right: 10px;
        }

        .star-rating__wrap {
            display: inline-block;
            font-size: 1rem;
        }

        .star-rating__wrap:after {
            content: "";
            display: table;
            clear: both;
        }

        .star-rating__ico {
            float: right;
            padding-left: 2px;
            cursor: pointer;
            color: #F7941D;
            font-size: 16px;
            margin-top: 5px;
        }

        .star-rating__ico:last-child {
            padding-left: 0;
        }

        .star-rating__input {
            display: none;
        }

        .star-rating__ico:hover:before,
        .star-rating__ico:hover~.star-rating__ico:before,
        .star-rating__input:checked~.star-rating__ico:before {
            content: "\F005";
        }
    </style>
    <div class="container my-4 ">
        <div class="profile-header">
            <img src="<?php echo e(asset('storage/' . $garage_information["garage_detail"]->logo)); ?>" alt="Logo du garage">
            <h1><?php echo e($garage_information["garage_user"]->name); ?></h1>
            <p class="text-light fs-3"><strong>Type de garage :</strong> <?php echo e($garage_information["garage_detail"]->type_garage); ?></p>
            <div class="rating-main">
                <ul class="rating">
                    <?php
                        $rate=ceil($garage_information["evaluation"]->avg('note_evaluation'))
                    ?>
                        <?php for($i=1; $i<=5; $i++): ?>
                            <?php if($rate>=$i): ?>
                                <li><i class="fa fa-star"></i></li>
                            <?php else: ?>
                                <li><i class="fa fa-star-o"></i></li>
                            <?php endif; ?>
                        <?php endfor; ?>
                </ul>
            </div>
        </div>

        <div class="row">
            <!-- Description du Garage -->
            <div class="col-md-12 mb-3 mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="product-info">
                            <div class="nav-main">
                                <!-- Tab Nav -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description"
                                            role="tab">Description</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews"
                                            role="tab">Avis</a></li>
                                </ul>
                                <!--/ End Tab Nav -->
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <!-- Description Tab -->
                                <div class="tab-pane fade show active" id="description" role="tabpanel">
                                    <div class="tab-single">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="single-des">
                                                    <p><?php echo e($garage_information["garage_detail"]->description); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Description Tab -->
                                <!-- Reviews Tab -->
                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="tab-single review-panel">
                                        <div class="row">
                                            <div class="col-12">

                                                <!-- Review -->
                                                <div class="comment-review">
                                                    <div class="add-review">
                                                        <h5>Ajouter un avis</h5>
                                                        <p>Votre adresse email ne sera pas publiée. Les champs obligatoires
                                                            sont marqués</p>
                                                    </div>
                                                    <h4>Votre évaluation <span class="text-danger">*</span></h4>
                                                    <div class="review-inner">
                                                        <!-- Form -->
                                                        <?php if(auth()->guard()->check()): ?>
                                                            <form class="form" method="post"
                                                                action="<?php echo e(route('garagereview.store',$garage_information["garage_detail"]->id)); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-12">
                                                                        <div class="rating_box">
                                                                            <div class="star-rating">
                                                                                <div class="star-rating__wrap">
                                                                                    <input class="star-rating__input"
                                                                                        id="star-rating-5" type="radio"
                                                                                        name="note_evaluation" value="5">
                                                                                    <label class="star-rating__ico fa fa-star-o"
                                                                                        for="star-rating-5"
                                                                                        title="5 out of 5 stars"></label>
                                                                                    <input class="star-rating__input"
                                                                                        id="star-rating-4" type="radio"
                                                                                        name="note_evaluation" value="4">
                                                                                    <label class="star-rating__ico fa fa-star-o"
                                                                                        for="star-rating-4"
                                                                                        title="4 out of 5 stars"></label>
                                                                                    <input class="star-rating__input"
                                                                                        id="star-rating-3" type="radio"
                                                                                        name="note_evaluation" value="3">
                                                                                    <label class="star-rating__ico fa fa-star-o"
                                                                                        for="star-rating-3"
                                                                                        title="3 out of 5 stars"></label>
                                                                                    <input class="star-rating__input"
                                                                                        id="star-rating-2" type="radio"
                                                                                        name="note_evaluation" value="2">
                                                                                    <label class="star-rating__ico fa fa-star-o"
                                                                                        for="star-rating-2"
                                                                                        title="2 out of 5 stars"></label>
                                                                                    <input class="star-rating__input"
                                                                                        id="star-rating-1" type="radio"
                                                                                        name="note_evaluation" value="1">
                                                                                    <label class="star-rating__ico fa fa-star-o"
                                                                                        for="star-rating-1"
                                                                                        title="1 out of 5 stars"></label>
                                                                                    <?php $__errorArgs = ['note_evaluation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                        <span
                                                                                            class="text-danger"><?php echo e($message); ?></span>
                                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-12">
                                                                        <div class="form-group">
                                                                            <label>Ajouter un Avis</label>
                                                                            <textarea name="commentaire_evaluation" rows="6" placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-12">
                                                                        <div class="form-group button5">
                                                                            <button type="submit"
                                                                                class="btn">Ajouter</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        <?php else: ?>
                                                            <p class="text-center p-5">
                                                                Vous devez <a href="<?php echo e(route('login.form')); ?>"
                                                                    style="color:rgb(54, 54, 204)">vous connecter</a> OU <a
                                                                    style="color:blue"
                                                                    href="<?php echo e(route('register.form')); ?>">vous inscrire</a>
                                                                <!--/ End Form -->
                                                            <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="ratting-main">
                                                    <div class="avg-ratting">
                                                        <h4><?php echo e(ceil(2)); ?> <span>(Overall)</span></h4>
                                                        <span>Based on Commentaires</span>
                                                    </div>
                                                    
                                                </div>

                                                <!--/ End Review -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Reviews Tab -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Proposés -->
            <div class="col-md-6 mb-3">
                <div class="w-100 mt-3">
                    <h2>Services Proposés</h2>
                    <ul class="list-group">
                        <li class="list-group-item"><?php echo e($garage_information["garage_detail"]->service_garage); ?></li>
                    </ul>
                </div>

            </div>
            <!-- Localisation (Carte) -->
            <div class="col-md-6 mb-3">
                <div id="map" style="width: 100%;height:500px;"></div>
            </div>
            <!-- Galerie d'Images -->
            <div class="col-md-12 mb-3">
                <div id="carouselExample" class="carousel slide w-100">
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $garage_information["images"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                                <img src="<?php echo e(asset('storage/' . $image->url)); ?>" class="d-block w-100" alt="...">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <?php
                                    $settings = DB::table('settings')->get();
                                ?>
                                <h4>Demandez un service</h4>
                            <h3>Écrivez-nous un message <?php if(auth()->guard()->check()): ?> <?php else: ?><span style="font-size:12px;"
                                    class="text-danger">[Vous devez d'abord vous connecter]</span><?php endif; ?>
                            </h3>
                        </div>
                        <form class="form-contact form contact_form" method="post" action="<?php echo e(route('serviceRequest.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="type_service">Type de service requis<span>*</span></label>
                                        <input type="text" name="type_service" id="type_service"
                                               class="form-control <?php $__errorArgs = ['type_service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               value="<?php echo e(old('type_service')); ?>">

                                        <?php $__errorArgs = ['type_service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group message">
                                        <label for="description_probleme">Description du problème<span>*</span></label>
                                        <textarea name="description_probleme" id="description_probleme" cols="30" rows="5"
                                                  class="form-control <?php $__errorArgs = ['description_probleme'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                  placeholder="Décrivez votre problème"><?php echo e(old('description_probleme')); ?></textarea>

                                        <?php $__errorArgs = ['description_probleme'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="hidden" name="garage_id" value="<?php echo e($garage_information["garage_detail"]->id); ?>">
                                </div>

                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn btn-primary">Envoyer la demande</button>
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
                                <li>
                                    +221 <?php echo e($garage_information["garage_detail"]->telephone_garage); ?>

                                </li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-envelope-open"></i>
                            <h4 class="title">Email:</h4>
                            <ul>
                                <li><a href="mailto:info@yourwebsite.com">
                                    <?php echo e($garage_information["garage_user"]->email); ?>

                                    </a></li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-calendar"></i>
                            <h4 class="title">Jour de Travail:</h4>
                            <ul>
                                <li>
                                    <?php echo e($garage_information["garage_detail"]->jour_travail); ?>

                                </li>
                            </ul>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-users"></i>
                            <h4 class="title">Nombre de mecaniciens:</h4>
                            <ul>
                                <li>
                                    <?php echo e($garage_information["garage_detail"]->nombre_mecanicien); ?>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->
<script>
    // Récupérer la position enregistrée dans la base de données via Laravel
    var destLatitude = <?php echo e($garage_information["localisation"]->latitude); ?>;
    var destLongitude = <?php echo e($garage_information["localisation"]->longitude); ?>;

    // Initialisation de la carte avec un centre par défaut
    var map = L.map('map').setView([destLatitude, destLongitude], 13);

    // Ajouter la couche de tuiles OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Utiliser l'API de géolocalisation pour obtenir la position actuelle de l'utilisateur
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var userLatitude = position.coords.latitude;
            var userLongitude = position.coords.longitude;

            // Ajouter l'itinéraire entre la position actuelle de l'utilisateur et la destination
            L.Routing.control({
                waypoints: [
                    L.latLng(userLatitude, userLongitude),  // Position actuelle de l'utilisateur
                    L.latLng(destLatitude, destLongitude)   // Position enregistrée en base
                ],
                routeWhileDragging: true,
                // geocoder: L.Control.Geocoder.nominatim()
            }).addTo(map);
        }, function() {
            alert('Impossible de récupérer votre position actuelle.');
        });
    } else {
        alert('La géolocalisation n\'est pas supportée par votre navigateur.');
    }
</script>
<!-- Lien vers les scripts de Bootstrap -->

<!-- Inclure Leaflet Routing Machine -->
<?php $__env->startPush('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>


<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mouss\Desktop\SenMecanique\resources\views/frontend/assistance/pages/garage_details.blade.php ENDPATH**/ ?>