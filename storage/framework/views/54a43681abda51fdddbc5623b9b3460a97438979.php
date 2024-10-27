<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Home - LifeTaste</title>
        <link rel="stylesheet" href="frontend/css/nav.css">
        <link rel="stylesheet" href="frontend/css/footer.css">
        <link rel="stylesheet" href="frontend/css/chat.css">
        <meta name="csrf-token"
            content="gk1JVERKyCXdDZpmO9JiYtiM7Q9Gj92crSHmQSCd">
        <link rel="stylesheet" href="frontend/css/style.css">
        <link
            href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet" />
        <link rel="stylesheet"
            href="unpkg.com/aos%403.0.0-beta.6/dist/aos.css" />
        <link rel="stylesheet"
            href="cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.css" />
        <link
            rel="stylesheet"
            href="cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet"
            href="cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" />
        <script type="text/javascript"
            src="ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <header>
            <a href="<?php echo e(url('/')); ?>"><img src="frontend/img/logo.png" alt></a>
            <nav>
                <ul class="menu">
                    <i class="closeNav fas fa-xmark"></i>
                    <li><a id="our products" href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li class="products">
                        <a id="our products" href="#">Products <i
                                class="fas fa-angle-down"></i></a>
                        <div class="products-content">
                            <ul>
                                <li><a id="product" href="<?php echo e(route('single_product')); ?>">All
                                        Products</a></li>
                                <li><a id="events"
                                        href="<?php echo e(route('variant')); ?>">Variants</a></li>
                                <li><a id="about LifeTaste"
                                        href="<?php echo e(route('nutrition')); ?>">Nutrition</a></li>
                            </ul>
                        </div>
                    </li>

                    <li><a id="Ambassadors"
                            href="<?php echo e(route('testimonial')); ?>">Testimonials</a></li>
                    <li><a id="LifeTaste Fitness" href="<?php echo e(route('our_client')); ?>">The Green Team</a></li>
                    <li><a id="events" href="<?php echo e(route('event')); ?>">Events</a></li>
                    <li><a id="Ambassadors"
                            href="<?php echo e(route('ambassadors')); ?>">Ambassadors</a></li>
                    <li><a id="LifeTaste Fitness"
                            href="<?php echo e(route('fitness')); ?>">Fitness</a></li>
                    <li><a href="<?php echo e(route('blog-single')); ?>">Blog</a></li>
                </ul>
            </nav>
            <i class="openNav fas fa-bars"></i>
            <div class="changeLanguage">
                <button class="languagebtn">ENG</button>
                <div id="language" class="language">
                    <ul>
                        <li data-lang="en">ENG</li>
                        <li data-lang="fr">FR</li>
                        <li data-lang="sp">SP</li>
                    </ul>
                </div>
            </div>
            <a id="RegisterLoginBtn" class="login" href="#">Register / Login</a>
        </header><?php /**PATH C:\laragon\www\juman\resources\views/layouts/componets/header.blade.php ENDPATH**/ ?>