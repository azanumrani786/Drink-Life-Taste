<?php echo $__env->make('layouts.componets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <section> 
    <div class="hero">
        <div class="container-hero">
            <div class="col" data-aos="fade-up" data-aos-duration="2000">
                <h4 class="category-show"><?php echo e(__('messages.Sparkling Refresher')); ?></h4>
                <h2 class="hero-title" id="Unleash Your Power Fuel Your Energy"><?php echo e(__('messages.Fizzy and Fresh, Perfectly Refreshing!')); ?></h2>
                <p class="hero-text"><?php echo e(__('messages.Now in Pompelmo Grapefruit, Blood Orange, Mandarin Orange, Mango, Pineapple Ginger, Pomegranate Cherry, and Tropical Punch!')); ?></p>
                <a class="contact-us" id="contact us" href="PK/products.html"><?php echo e(__('messages.Shop now')); ?></a>
            </div>
            <div class="col" data-aos="fade-up" data-aos-duration="2000">
                <img class="water animate__animated" src="frontend/img/water.png" alt="...">
                <img class="drink animate__animated" src="frontend/img/sparkling.png" alt="...">
            </div>
            <div class="col" data-aos="fade-up" data-aos-duration="2000">
                <h4 class="citrus" id="Citrus Blast Flavor"><?php echo e(__('messages.Enjoy The Taste Of Life')); ?></h4>
                <div class="image">
                    <img src="frontend/img/hero1.jpg" alt="...">
                    <button class="open-video"><i class="far fa-circle-play"></i></button>
                </div>
                <p class="textBelowVideo"><?php echo e(__('messages.Crafted with care, every bubble counts. Enjoy the taste of life in every sparkling moment.')); ?></p>
            </div>
            <div class="video-overlay">
                <i class="fas fa-xmark closeVideo"></i>
                <iframe id="video" src="https://www.youtube.com/embed/SxNazVxwXfo?si=GaHsyw9FFKVv7Plf&amp;controls=0"></iframe>
            </div>
            <div class="counter-container container-counts">
                <div class="counter-flex" data-aos="fade-up" data-aos-duration="2000">
                    <div class="counter-item">
                        <h2><span class="count" data-count="200">0</span> +</h2>
                        <p id="Stores Around The World"><?php echo e(__('messages.Stores Around The World')); ?></p>
                    </div>
                    <div class="counter-item">
                        <h2><span class="count" data-count="1000">0</span> +</h2>
                        <p id="Satisfied Customer"><?php echo e(__('messages.Satisfied Customer')); ?></p>
                    </div>
                    <div class="counter-item">
                        <h2><span class="count" data-count="4">0</span> +</h2>
                        <p id="Cooperation With Country"><?php echo e(__('messages.Cooperation With Countries')); ?></p>
                    </div>
                </div>
            </div>
            <button class="preview">
                <i class="fas fa-angle-left"></i>
            </button>
            <button class="next">
                <i class="fas fa-angle-right"></i>
            </button>
        </div>
    </div>
</section>

<section class="pink">
    <div class="container-about">
        <div class="left" data-aos="fade-up" data-aos-duration="2000">
            <div class="overlay"></div>
            <h3 id="enjoy the taste of life"><?php echo e(__('messages.enjoy the taste of life')); ?></h3>
            <div class="flex-image">
                <img src="frontend/img/drinks.png" alt>
            </div>
        </div>
        <div class="right" data-aos="fade-up" data-aos-duration="2000">
            <div class="col">
                <h4 id="about us"><a href="<?php echo e(route('about_us')); ?>" style="color: #000;text-decoration: none"><?php echo e(__('messages.About us')); ?></a></h4>
                <h2 id="Unleash your power, fuel your energy"><?php echo e(__('messages.Energize, Refresh, Recover LifeTaste\'s Perfect Blend!')); ?></h2>
                <p id="Unleash your power, fuel your energy"><?php echo e(__('messages.A range of delicious drinks that not only quench your thirst but also boost your energy, recharge your body and keep you hydrated.')); ?></p>
            </div>
            <div class="col">
                <img src="frontend/img/physician%20icon.png" alt>
            </div>
            <div class="col">
                <a href="<?php echo e(route('productspdf')); ?>" id="learn more"><?php echo e(__('messages.Download Product Catalog')); ?></a>
                <div class="flex-span">
                    <img src="frontend/img/nnutritional%20facts.png" alt>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-select">
        <div class="buttons">
            <button class="category-select" id="sparkling"><?php echo e(__('messages.Sparkling Drink')); ?></button>
            <button class="category-select" id="energy"><?php echo e(__('messages.Energy Drinks')); ?></button>
            <button class="category-select" id="recovery"><?php echo e(__('messages.Recovery Drinks')); ?></button>
        </div>
        <div class="swiper swiperSlide">
            <div class="swiper-wrapper" style="display: none;">
            </div>
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 6" data-swiper-slide-index="0" style="background: linear-gradient(to top, rgb(255, 255, 235), rgb(255, 247, 125), rgb(255, 255, 235)); width: 287.5px;">
                    <div class="slide-card">
                        <img src="<?php echo e(asset($product->image)); ?>" alt="...">
                        <form class="addTocartForm" data-product-id="27">
                            <h3 style="color: #008263;"><?php echo e($product->name); ?></h3>
                            <p style="color: #008263;"><?php echo e(__('messages.Pack of')); ?> <?php echo e($product->quantity); ?></p>
                            <div class="flex-quantity">
                                <div class="quantity" style="color: #008263; border: 1px solid #008263;">
                                    <span class="addQuantity">+</span>
                                    <span class="quantitySelect">1</span>
                                    <span class="decreaseQuantity">-</span>
                                </div>
                                <button type="submit" style="background-color: #008263;">
                                    <?php echo e(__('messages.Add to cart')); ?> / <span class="price"><?php echo e($product->price); ?></span>
                                </button>
                            </div>
                            <?php if(isset($product->id)): ?>
                                <a href="<?php echo e(url('details', $product->id)); ?>" style="color: #008263;"><?php echo e(__('messages.View Details')); ?></a>
                            <?php else: ?>
                                <span style="color: #008263;"><?php echo e(__('messages.Details Not Available')); ?></span>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="swiper-button-next swiper-button-next-slide"></div>
            <div class="swiper-button-prev swiper-button-prev-slide"></div>
        </div>
        <a class="viewAll" href="PK/products.html" id="view all product"><?php echo e(__('messages.View all Product')); ?></a>
    </div>
</section>

<section class="section-3">
    <div class="container-variant">
        <div class="center">
            <div class="left" data-aos="fade-up" data-aos-duration="2000">
                <h4 id="variant"><?php echo e(__('messages.variant')); ?></h4>
                <h2 id="More flavor, more power"><?php echo e(__('messages.MORE FLAVOR, MORE POWER!')); ?></h2>
                <p><?php echo e(__('messages.Explore the vibrant flavors of LifeTaste—each crafted to offer a unique and refreshing experience. From the zesty burst of Blood Orange to the tropical delight of Mango, our drinks are packed with natural goodness and designed to quench your thirst while enhancing your day.')); ?></p>
            </div>
            <img src="frontend/img/variant/Energy%20Drink%20Fruit%20Punch.png" alt="<?php echo e(__('messages.Energy Drink Fruit Punch')); ?>">
            <img src="frontend/img/variant/energy%20drink%20Mango.png" alt="<?php echo e(__('messages.Energy Drink Mango')); ?>">
            <img src="frontend/img/variant/Energy%20drink%20Orange.png" alt="<?php echo e(__('messages.Energy Drink Orange')); ?>">
            <img src="frontend/img/variant/Energy%20drink%20Original.png" alt="<?php echo e(__('messages.Energy Drink Original')); ?>">
            <img src="frontend/img/variant/Energy%20Drink%20Strawberry%20Guava.png" alt="<?php echo e(__('messages.Energy Drink Strawberry Guava')); ?>">
            <img src="frontend/img/variant/Energy%20Drink%20Tropical%20Punch.png" alt="<?php echo e(__('messages.Energy Drink Tropical Punch')); ?>">
            <img src="frontend/img/variant/Pompelmo%20Grapefruit.png" alt="<?php echo e(__('messages.Pompelmo Grapefruit')); ?>">
            <img src="frontend/img/variant/Recovery%20Drink%20Mango.png" alt="<?php echo e(__('messages.Recovery Drink Mango')); ?>">
            <img src="frontend/img/variant/Recovery%20Drink%20Orange%20Citrus.png" alt="<?php echo e(__('messages.Recovery Drink Orange Citrus')); ?>">
            <img src="frontend/img/variant/Recovery%20Drink%20Strawberry.png" alt="<?php echo e(__('messages.Recovery Drink Strawberry')); ?>">
            <img src="frontend/img/variant/Recovery%20Fruit%20Punch.png" alt="<?php echo e(__('messages.Recovery Fruit Punch')); ?>">
            <img src="frontend/img/variant/spakling%20Mango.png" alt="<?php echo e(__('messages.Sparkling Mango')); ?>">
            <img src="frontend/img/variant/Sparkling%20Blood%20Orange.png" alt="<?php echo e(__('messages.Sparkling Blood Orange')); ?>">
            <img src="frontend/img/variant/Sparkling%20Mandarin%20Orange.png" alt="<?php echo e(__('messages.Sparkling Mandarin Orange')); ?>">
            <img src="frontend/img/variant/Sparkling%20Pineapple%20Ginger.png" alt="<?php echo e(__('messages.Sparkling Pineapple Ginger')); ?>">
            <img src="frontend/img/variant/Sparkling%20Pomegranate%20Cherry.png" alt="<?php echo e(__('messages.Sparkling Pomegranate Cherry')); ?>">
            <img src="frontend/img/variant/Sparkling%20Tropical%20Punch.png" alt="<?php echo e(__('messages.Sparkling Tropical Punch')); ?>">
        </div>
        <a href="PK/variant.html" id="more variant"><?php echo e(__('messages.MORE Variant')); ?></a>
    </div>
</section>

<section class="nutrition">
    <div class="container-nutrition container-counts">
        <div class="left" data-aos="fade-up" data-aos-duration="2000">
            <img class="drink-nutrition animate__animated"
                src="frontend/img/flavor/Energy%20drink%20Fruit%20punch.png" alt="<?php echo e(__('messages.Energy drink Fruit punch')); ?>">
        </div>
        <div class="right" data-aos="fade-up" data-aos-duration="2000">
            <h4 id="nutrition"><?php echo e(__('messages.Nutrition')); ?></h4>
            <h2 class="name-drink" id="Citrus blast flavor"><?php echo e(__('messages.Energy drink Fruit punch')); ?></h2>
            <p class="description"><?php echo e(__('messages.Stay sharp and focused with the classic taste of Fruit Punch, an energy drink that combines natural fruit flavors with a potent energy blend. Ideal for maintaining energy and concentration throughout the day.')); ?></p>
            <div class="flex">
                <div class="card">
                    <div class="overlay"></div>
                    <span id="calories" class="nutrient"><?php echo e(__('messages.Calories')); ?></span>
                    <p class="figure"><span class="count calories" data-count="230">0</span> <?php echo e(__('messages.KCAL')); ?></p>
                </div>
                <div class="card">
                    <div class="overlay"></div>
                    <span id="caffeine" class="nutrient"><?php echo e(__('messages.Caffeine')); ?></span>
                    <p class="figure"><span class="count caffeine" data-count="250">0</span> <?php echo e(__('messages.mg')); ?></p>
                </div>
                <div class="card">
                    <div class="overlay"></div>
                    <span id="cabs" class="nutrient"><?php echo e(__('messages.Carbs')); ?></span>
                    <p class="figure"><span class="count cabs" data-count="40">0</span> <?php echo e(__('messages.g')); ?></p>
                </div>
                <div class="card">
                    <div class="overlay"></div>
                    <span id="fats" class="nutrient"><?php echo e(__('messages.Fats')); ?></span>
                    <p class="figure"><span class="count fats" data-count="40">0</span> <?php echo e(__('messages.g')); ?></p>
                </div>
            </div>
            <p class="belowDescription"><?php echo e(__('messages.Fruit Blend: A mix of various fruits, this blend provides essential vitamins and antioxidants, helping to support overall health while delivering a refreshing taste.')); ?></p>
            <a class="see" href="PK/nutrition.html" id="see more nutrition"><?php echo e(__('messages.View all nutrition')); ?></a>
        </div>
        <button class="next-nutrition"><i class="fas fa-angle-right"></i></button>
        <button class="prev-nutrition"><i class="fas fa-angle-left"></i></button>
    </div>
</section>

    <section class="section-4">
    <div class="container-map">
        <h4 id="our client"><?php echo e(__('messages.Our Client')); ?></h4>
        <h2 id="Trust by our clients around the world"><?php echo e(__('messages.Trusted by our clients around the world')); ?></h2>
        <p><?php echo e(__('messages.Experience the excellence that knows no borders. Our commitment to quality, health, and innovation has earned the trust of consumers worldwide. Join the global community that chooses us for reliability, taste, and success.')); ?></p>
        <div style="position: relative; overflow:hidden; width: 100%" class="image">
            <img style="filter: brightness(0) saturate(100%) invert(29%) sepia(75%) saturate(3047%) hue-rotate(320deg) brightness(94%) contrast(93%);" src="frontend/img/map.webp" alt="<?php echo e(__('messages.Map Image')); ?>">
            <img style="position: absolute; top: 50%; left: 50%; z-index: 500; transform: translate(-50%, -50%); filter: brightness(0) saturate(100%) invert(71%) sepia(50%) saturate(5284%) hue-rotate(352deg) brightness(107%) contrast(99%);" src="frontend/img/mappointers.webp" alt="<?php echo e(__('messages.Map Pointers')); ?>">
        </div>
        <a href="PK/clients.html" id="see more"><?php echo e(__('messages.See more')); ?></a>
    </div>
</section>

<!-- <section class="product-section">
    <div class="container-card">
        <h4 id="product"><?php echo e(__('messages.Product')); ?></h4>
        <h2 id="Which flavor do you like?"><?php echo e(__('messages.Which flavor do you like?')); ?></h2>
        <p><?php echo e(__('messages.Discover the burst of flavors that fuel your day. LifeTaste offers a refreshing choice for every palate.')); ?></p>
        <div class="cards">
            <div class="card sparkling">
                <div class="overlay"></div>
                <div class="title">
                    <span><?php echo e(__('messages.Sparkling Blood Orange')); ?></span>
                </div>
                <div class="content">
                    <div class="buttons">
                        <button id="can" data-price="4.15" class="btn active"><?php echo e(__('messages.Pack of 12')); ?></button>
                    </div>
                    <div class="box">
                        <h3 class="price">$ 4.15</h3>
                        <p><?php echo e(__('messages.Sample description for Sparkling Blood Orange flavor.')); ?></p>
                    </div>
                </div>
                <div class="image">
                    <img src="frontend/img/sparkling-nobg.png" alt="<?php echo e(__('messages.Sparkling Blood Orange Image')); ?>">
                    <form class="addTocartForm formCart" id="1">
                        <h3><?php echo e(__('messages.Pack of 12')); ?></h3>
                        <div class="flex-quantity">
                            <div class="quantity sparkling">
                                <span style="cursor: pointer;" class="addQuantity add">+</span>
                                <span class="quantitySelect select">1</span>
                                <span style="cursor: pointer;" class="decreaseQuantity remove">-</span>
                            </div>
                            <button class="sparkling" type="submit"><?php echo e(__('messages.Add to cart')); ?> / <span class="price">4.49</span></button>
                        </div>
                        <a href="<?php echo e(route('detail')); ?>"><?php echo e(__('messages.View Details')); ?></a>
                    </form>
                </div>
            </div>
            <div class="card recovery">
                <div class="overlay"></div>
                <div class="title">
                    <span><?php echo e(__('messages.Recovery Fruit Punch')); ?></span>
                </div>
                <div class="content">
                    <div class="buttons">
                        <button id="can 1" data-price="3" class="btn active"><?php echo e(__('messages.Pack of 12')); ?></button>
                    </div>
                    <div class="box">
                        <h3 class="price">$ 3</h3>
                        <p><?php echo e(__('messages.Sample description for Recovery Fruit Punch flavor.')); ?></p>
                    </div>
                </div>
                <div class="image">
                    <img src="frontend/img/recovery-nbg.png" alt="<?php echo e(__('messages.Recovery Fruit Punch Image')); ?>">
                    <form class="addTocartForm formCart" id="2">
                        <h3><?php echo e(__('messages.Pack of 12')); ?></h3>
                        <div class="flex-quantity">
                            <div class="quantity recovery">
                                <span style="cursor: pointer;" class="addQuantity add">+</span>
                                <span class="quantitySelect select">1</span>
                                <span style="cursor: pointer;" class="decreaseQuantity remove">-</span>
                            </div>
                            <button class="recovery" type="submit"><?php echo e(__('messages.Add to cart')); ?> / <span class="price">4.49</span></button>
                        </div>
                        <a href="<?php echo e(route('detail')); ?>"><?php echo e(__('messages.View Details')); ?></a>
                    </form>
                </div>
            </div>
            <section>
                <div class="container-testimonials">
                    <div class="left" data-aos="fade-up" data-aos-duration="2000">
                        <h4 id="Testimonial"><?php echo e(__('messages.Testimonial')); ?></h4>
                        <h2 id="What our client said"><?php echo e(__('messages.What customers have to say!')); ?></h2>
                        <p><?php echo e(__('messages.LifeTaste consumers are raving about the vibrant flavors and the refreshing boost our beverages bring to their day. From enhanced energy to satisfying hydration, our drinks are making a difference in their daily routines. Join the growing community that’s loving the taste of life!')); ?></p>
                        <a class="addTestimonial" href="/login"><?php echo e(__('messages.Add Testimonial')); ?></a>
                        <a class="addTestimonial" href="PK/testimonials.html"><?php echo e(__('messages.All Testimonials')); ?></a>
                    </div>
                    <div class="right" data-aos="fade-up" data-aos-duration="2000">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <span class="profile-info"><strong><?php echo e(__('messages.Sparkling Blood Orange')); ?></strong></span>
                                        <i class="fas fa-quote-right"></i>
                                        <p><?php echo e(__('messages.As a fitness trainer, staying hydrated and energized is key. LifeTaste Sparkling Blood Orange gives me that perfect blend of refreshment and zest to keep me going strong!')); ?></p>
                                        <span class="profile-info"><span>John,</span><strong><?php echo e(__('messages.Fitness Trainer')); ?></strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section> -->

<section class="section-4">
        <div class="container-map">
            <h4 id="our client">Our Client</h4>
            <h2 id="Trust by our clients around the world">Trust by our
                clients around the world</h2>
            <p>Experience the excellence that knows no borders. Our
                commitment to quality, health and innovation has earned
                the trust of consumers worldwide. Join the global
                community that chooses us for reliability, taste and
                success.</p>
            <div style="position: relative; overflow:hidden; width: 100%" class="image">
                <img style="filter: brightness(0) saturate(100%) invert(29%) sepia(75%) saturate(3047%) hue-rotate(320deg) brightness(94%) contrast(93%);" src="frontend/img/map.webp" alt>
                <img style="position: absolute; top: 50%; left: 50%; z-index: 500; transform: translate(-50%, -50%); filter: brightness(0) saturate(100%) invert(71%) sepia(50%) saturate(5284%) hue-rotate(352deg) brightness(107%) contrast(99%);" src="frontend/img/mappointers.webp" alt="">
            </div>
            <a href="PK/clients.html" id="see more">see more</a>
        </div>
    </section>
    <section>
        <div class="container-card">
            <h4 id="product">Product</h4>
            <h2 id="Which flavor do you like?">Which flavor do you
                like?</h2>
            <p>Discover the burst of flavors that fuel your day.
                LifeTaste offers a refreshing choice for every palate
            </p>
            <div class="cards">
                <div class="card sparkling">
                    <div class="overlay"></div>
                    <div class="title">
                        <span>Sparkling Blood Orange</span>
                    </div>
                    <div class="content">
                        <div class="buttons">
                            <button id="can" data-price="4.15" class="btn active">Pack of 12</button>
                            
                        </div>
                        <div class="box">
                            <h3 class="price">$ 4.15</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Ut elit tellus, luctus
                                nec ullamcorper mattis, pulvinar dapibus
                                leo.</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="frontend/img/sparkling-nobg.png" alt="...">
                        <form class="addTocartForm formCart" id="1">
                            <h3>pack of 12</h3>
                            <div class="flex-quantity">
                                <div class="quantity sparkling">
                                    <span style="cursor: pointer;" class="addQuantity add">+</span>
                                    <span class="quantitySelect select">1</span>
                                    <span style="cursor: pointer;" class="decreaseQuantity remove">-</span>
                                </div>
                                <button class="sparkling" type="submit">Add to cart / <span
                                        class="price">4.49</span>
                                </button>
                            </div>
                            <a href="<?php echo e(route('detail')); ?>">View
                                Details</a>
                        </form>
                    </div>
                </div>
                <div class="card recovery">
                    <div class="overlay"></div>
                    <div class="title">
                        <span>Recovery Fruit Punch</span>
                    </div>
                    <div class="content">
                        <div class="buttons">
                            <button id="can 1" data-price="3" class="btn active">Pack of 12</button>
                            
                        </div>
                        <div class="box">
                            <h3 class="price">$ 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Ut elit tellus, luctus
                                nec ullamcorper mattis, pulvinar dapibus
                                leo.</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="frontend/img/recovery-nbg.png" alt="...">
                        <form class="addTocartForm formCart" id="2">
                            <h3>pack of 12</h3>
                            <div class="flex-quantity">
                                <div class="quantity recovery">
                                    <span style="cursor: pointer;" class="addQuantity add">+</span>
                                    <span class="quantitySelect select">1</span>
                                    <span style="cursor: pointer;" class="decreaseQuantity remove">-</span>
                                </div>
                                <button class="recovery" type="submit">Add to cart / <span
                                        class="price">4.49</span>
                                </button>
                            </div>
                            <a href="<?php echo e(route('detail')); ?>">View
                                Details</a>
                        </form>
                    </div>
                </div>
                <div class="card energy">
                    <div class="overlay"></div>
                    <div class="title">
                        <span>Energy Drink Strawberry Guava</span>
                    </div>
                    <div class="content">
                        <div class="buttons">
                            <button id="can 2" data-price="12" class="btn active">Pack of 12</button>
                            
                        </div>
                        <div class="box">
                            <h3 class="price">12</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Ut elit tellus, luctus
                                nec ullamcorper mattis, pulvinar dapibus
                                leo.</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?php echo e(asset('frontend/img/energy.png')); ?>" alt="...">
                        <form class="addTocartForm formCart" id="3">
                            <h3>pack of 12</h3>
                            <div class="flex-quantity">
                                <div class="quantity energy">
                                    <span style="cursor: pointer;" class="addQuantity add">+</span>
                                    <span class="quantitySelect select">1</span>
                                    <span style="cursor: pointer;" class="decreaseQuantity remove">-</span>
                                </div>
                                <button class="energy" type="submit">Add
                                    to cart / <span class="price">4.49</span>
                                </button>
                            </div>
                            <a href="<?php echo e(route('detail')); ?>">View
                                Details</a>
                        </form>
                    </div>
                </div>
            </div>
            <a class="more-product" href="PK/products.html" id="more product">view all product</a>
        </div>
    </section>
    <section style="font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">
        <div class="container-testimonials">
            <div class="left" data-aos="fade-up" data-aos-duration="2000">
                <h4 id="Testimonial">Testimonial</h4>
                <h2 id="What our client said">What customers have to
                    say!</h2>
                <p>LifeTaste consumers are raving about the vibrant
                    flavors and the refreshing boost our beverages bring
                    to their day. From enhanced energy to satisfying
                    hydration, our drinks are making a difference in
                    their daily routines. Join the growing community
                    that’s loving the taste of life!</p>
                <a class="addTestimonial" href="/login">Add
                    Testimonial</a>
                <a class="addTestimonial" href="PK/testimonials.html">All Testimonials</a>
            </div>
            <div class="right" data-aos="fade-up" data-aos-duration="2000">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div style="padding-top: 65px;" class="card">
                                <span style="margin-bottom: 20px; color: " class="profile-info">
                                    <strong>Sparkling Blood Orange</strong>
                                </span>
                                <i class="fas fa-quote-right"></i>
                                <!-- <img src="assets/frontend/img/user.jpg" alt> -->
                                <p>As a fitness trainer, staying hydrated and energized is key. LifeTaste Sparkling Blood Orange gives me that perfect blend of refreshment and zest to keep me going strong!</p>
                                     <hr style="width: 40%; margin-top: 25px; margin: 15px 0px; height: 3px; background: #ff9933; border-radius: 5px; outline: none; border: none;" />
                                <span style="d" class="profile-info">
                                    <span style=" color: green; font-size: 22px; font-style: italic; font-family: fangsong; font-weight: bold;" >John,</span>
                                    <strong style="color: green">Fitness Trainer</strong>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div style="padding-top: 65px;"  class="card">
                                                                  <span style="margin-bottom: 20px;" class="profile-info">
                                    <strong>Sparkling Mandarin Orange</strong>
                                </span>
                                <i class="fas fa-quote-right"></i>
                                <!-- <img src="frontend/img/user.jpg" alt> -->
                                <p>As a teacher, I need something light and refreshing between classes. LifeTaste Sparkling Mandarin Orange is my go-to for a crisp, citrusy pick-me-up!</p>
                                     <hr style="width: 40%; margin-top: 25px; margin: 15px 0px; height: 3px; background: #ff9933; border-radius: 5px; outline: none; border: none;" />
                                <span class="profile-info">
                                    <span style=" color: green; font-size: 22px; font-style: italic; font-family: fangsong; font-weight: bold;" >Emily, </span>
                                    <strong style="color: green">Teacher</strong>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div style="padding-top: 65px;"  class="card">
                                                                <span style="margin-bottom: 20px; " class="profile-info">
                                    <strong>Sparkling Mango</strong>
                                </span>
                                <i aria-hidden="true" class="icon icon-quote2"></i>
                                <!-- <img src="frontend/img/user.jpg" alt> -->
                                <p>Nothing beats the tropical flavor of LifeTaste Sparkling Mango after a long day in the kitchen. It’s the perfect blend of sweetness and fizz!</p>
                                    <hr style="width: 40%; margin-top: 25px; margin: 15px 0px; height: 3px; background: #ff9933; border-radius: 5px; outline: none; border: none;" />
                                <span class="profile-info">
                                    <span style=" color: green; font-size: 22px; font-style: italic; font-family: fangsong; font-weight: bold;" >Carlos, </span>
                                    <strong style="color: green">Chef</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="discount-section">
        <div class="discount-container">
            <div class="left" data-aos="fade-up" data-aos-duration="2000">
                <div class="col">
                    <div class="image">
                        <img src="frontend/img/energy-nobg.png" alt="...">
                    </div>
                    <div class="content">
                        <h3>Green Apple Rush</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Ut elit tellus, luctus
                            nec.</p>
                    </div>
                </div>
                <div class="col">
                    <img src="frontend/img/drinks.png" alt="...">
                </div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-duration="2000">
                <h4 id="discount">Discount</h4>
                <h2 id="Get 10% Off This Month">Get 10% Off This
                    Month</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Phasellus laoreet facilisis lectus, a rutrum
                    lectus lacinia vitae. In auctor aliquam aliquam.
                </p>
                <a href="PK/products.html" id="go shop 3">Go Shop</a>
            </div>
        </div>
    </section>
    <section  style="font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">
        <div class="container-blog">
            <div class="left" data-aos="fade-up" data-aos-duration="2000">
                <div class="card">
                    <div class="image">
                        <span id="news">news</span>
                        <a href="#"><img
                                src="frontend/img/orange-background-from-slice-of-an-orange-fruit-texture-e1647681977993.png"
                                alt="..."></a>
                    </div>
                    <h3 id="Positive Consumer Feedback Drives…">Positive
                        Consumer Feedback Drives…</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In non risus hendrerit dui
                        congue auctor. Duis dictum molestie sapien
                        vitae…</p>
                    <a class="card-bt" href="#" id="read more">read
                        more</a>
                </div>
                <div class="card">
                    <div class="image">
                        <span id="news 1">news</span>
                        <a href="#"><img
                                src="frontend/img/orange-background-from-slice-of-an-orange-fruit-texture-e1647681977993.png"
                                alt="..."></a>
                    </div>
                    <h3 id="Energy Drink Industry Thrives…">Energy Drink
                        Industry Thrives…</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In non risus hendrerit dui
                        congue auctor. Duis dictum molestie sapien
                        vitae…</p>
                    <a class="card-bt" href="#" id="read more 1">read
                        more</a>
                </div>
                <div class="card">
                    <div class="image">
                        <span id="news 2">news</span>
                        <a href="#"><img
                                src="frontend/img/orange-background-from-slice-of-an-orange-fruit-texture-e1647681977993.png"
                                alt="..."></a>
                    </div>
                    <h3 id="Revamped Energy Drink Formulas…">Revamped
                        Energy Drink Formulas…</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In non risus hendrerit dui
                        congue auctor. Duis dictum molestie sapien
                        vitae…</p>
                    <a class="card-bt" href="#" id="read more 2">read
                        more</a>
                </div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-duration="2000">
                <h4>Blog</h4>
                <h2 id="Our Latest news">Our Latest news</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Phasellus laoreet facilisis lectus, a rutrum
                    lectus lacinia vitae. In auctor aliquam aliquam.
                    Phasellus vel dolor fermentum, placerat dui et,
                    lacinia nibh. Praesent eu dictum tortor. Sed est
                    turpis, pretium et libero aliquam, consectetur
                    laoreet orci. </p>
                <a href="PK/blog.html" id="more blog">More Blog</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container-faq">
            <div class="left">
                <h4>FAQ</h4>
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
                <p>Welcome to our FAQ page! Here are answers to some
                    common questions about our refreshing LifeTaste
                    bever-
                    age. If you have a question that's not covered here,
                    feel
                    free to reach out to our customer support.</p>
            </div>
            <div class="right">
                <div>
                    <button type="button" class="collapsible">What are
                        the main ingredients in your soft
                        drinks?</button>
                    <div class="content">
                        <p>Our soft drinks contain a blend of caffeine,
                            taurine, B-group vitamins, sugars, and
                            alpine water. Check the label of each
                            product for specific ingredient
                            information.</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="collapsible">Is your
                        soft drink safe for children?</button>
                    <div class="content">
                        <p>We recommend our products for individuals
                            over the age of 18 due to the caffeine
                            content. Children, pregnant or nursing
                            women, and individuals sensitive to caffeine
                            should consult a healthcare professional
                            before consuming.</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="collapsible">How much
                        caffeine is in one can?</button>
                    <div class="content">
                        <p>A standard 8.4 fl oz (250 ml) can of our soft
                            drink contains 80 mg of caffeine, which is
                            roughly equivalent to a cup of coffee.</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="collapsible">Are your
                        drinks suitable for vegetarians or
                        vegans?</button>
                    <div class="content">
                        <p>Yes, all our soft drinks are suitable for
                            both vegetarians and vegans as they do not
                            contain any animal-derived ingredients.</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="collapsible">What is
                        taurine, and why is it in your drink?</button>
                    <div class="content">
                        <p>Taurine is an amino acid that occurs
                            naturally in the body and in various foods.
                            It’s included in our drinks to support
                            alertness and reduce fatigue.</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="collapsible">Can I
                        recycle your cans?</button>
                    <div class="content">
                        <p>Yes, our cans are made from 100% recyclable
                            aluminum. We encourage you to recycle them
                            to help protect the environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="container-contact">
            <h2 id="Get In Touch With Us">Get In Touch With Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus laoreet facilisis lectus, a rutrum lectus
                lacinia vitae. In auctor aliquam aliquam. Phasellus vel
                dolor fermentum, placerat dui et, lacinia nibh. Praesent
                eu dictum tortor. Sed est turpis, pretium et libero
                aliquam, consectetur laoreet orci. </p>
            <div class="flex">
                <div class="left">
                    <h4>Contact us</h4>
                    <img src="frontend/img/drinks.png" alt="...">
                </div>
                <div class="right">
                    <h3 id="Leave a Message">Leave a Message.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus laoreet facilisis
                        lectus, a rutrum lectus lacinia vitae. In auctor
                        aliquam aliquam. </p>
                    <form action="#">
                        <div class="input-name">
                            <input name="name" type="text" placeholder="Name" required>
                            <input name="last-name" type="text" placeholder="Last Name" required>
                        </div>
                        <input name="email" type="email" placeholder="Email" required>
                        <textarea name="message" placeholder="Message" cols="30" rows="6" aria-invalid="false"></textarea>
                        <button type="submit" id="send message">Send
                            Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section-footer">
        <div class="container-news">
            <h3 id="subscribe  for our monthly Newsletter">subscribe for
                our monthly Newsletter</h3>
            <form action="#">
                <input type="email" placeholder="email" required>
                <button type="submit" id="send">send</button>
            </form>
        </div>
    </section>
    <button class="openChat"><i class="fas fa-comment"></i></button>
    <div class="container-chatbot">
        <div class="chat">
            <div class="header-chat">
                <p>LifeTaste ChatBot</p>
                <button class="closeChat"><i class="fas fa-xmark"></i></button>
            </div>
            <div class="content-chat">
                <div class="left-chat">
                    <div class="chat-block">
                        Hello! I’m your LifeTaste Agent How can I assist
                        you today?
                        <div class="time oneTime">10:20</div>
                    </div>
                </div>
            </div>
            <div class="send">
                <form class="chat-form">
                    <input class="messageChat" type="text" placeholder="send message" name="message-chat">
                    <button type="submit" class="sendMessage"><i class="far fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div> -->

    <section>
    <div class="container-contact">
        <h2 id="Get In Touch With Us"><?php echo e(__('messages.Get In Touch With Us')); ?></h2>
        <p><?php echo e(__('messages.Contact us description text')); ?></p>
        <div class="flex">
            <div class="left">
                <h4><?php echo e(__('messages.Contact us')); ?></h4>
                <img src="frontend/img/drinks.png" alt="<?php echo e(__('messages.Contact Us Image')); ?>">
            </div>
            <div class="right">
                <h3 id="Leave a Message"><?php echo e(__('messages.Leave a Message')); ?></h3>
                <p><?php echo e(__('messages.Leave a message description text')); ?></p>
                <form action="#">
                    <div class="input-name">
                        <input name="name" type="text" placeholder="<?php echo e(__('messages.Name')); ?>" required>
                        <input name="last-name" type="text" placeholder="<?php echo e(__('messages.Last Name')); ?>" required>
                    </div>
                    <input name="email" type="email" placeholder="<?php echo e(__('messages.Email')); ?>" required>
                    <textarea name="message" placeholder="<?php echo e(__('messages.Message')); ?>" cols="30" rows="6" aria-invalid="false"></textarea>
                    <button type="submit" id="send message"><?php echo e(__('messages.Send Message')); ?></button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section-footer">
    <div class="container-news">
        <h3 id="subscribe for our monthly Newsletter"><?php echo e(__('messages.Subscribe for our monthly Newsletter')); ?></h3>
        <form action="#">
            <input type="email" placeholder="<?php echo e(__('messages.email')); ?>" required>
            <button type="submit" id="send"><?php echo e(__('messages.Send')); ?></button>
        </form>
    </div>
</section>

<button class="openChat"><i class="fas fa-comment"></i></button>
<div class="container-chatbot">
    <div class="chat">
        <div class="header-chat">
            <p><?php echo e(__('messages.LifeTaste ChatBot')); ?></p>
            <button class="closeChat"><i class="fas fa-xmark"></i></button>
        </div>
        <div class="content-chat">
            <div class="left-chat">
                <div class="chat-block">
                    <?php echo e(__('messages.Chatbot greeting message')); ?>

                    <div class="time oneTime">10:20</div>
                </div>
            </div>
        </div>
        <div class="send">
            <form class="chat-form">
                <input class="messageChat" type="text" placeholder="<?php echo e(__('messages.send message')); ?>" name="message-chat">
                <button type="submit" class="sendMessage"><i class="far fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</div>

</main>

<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0 0 0 / 75%);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fff;
        padding: 30px;
        width: 400px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    .modal-content h2 {
        margin-top: 0;
    }

    .modal-content input {
        width: 80%;
        padding: 10px;
        margin: 15px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .modal-content button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .modal-content button:hover {
        background-color: #0056b3;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        cursor: pointer;
    }
    .elementor-element.elementor-element-44b0ae8{
        padding: 13px 0px !important;
        text-align: center;
        
    }
</style>

<!-- Modal Structure -->
<!-- <div id="newsletterModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="<?php echo e(asset('assets/logo.png')); ?>" alt="" style="width: 80%;margin-bottom: 16px;">
        <h2 style="color: #000;font-size: 25px;">Subscribe to Our Newsletter</h2>
        <p style="color: #000">Stay updated with our latest news and offers.</p>
        <form id="newsletterForm" style="    margin-top: -18px;">
            <input type="email" id="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</div> -->
<script>
    // Get modal elements
    const modal = document.getElementById("newsletterModal");
    const closeModalBtn = document.querySelector(".close");

    // Automatically show the modal when the page loads
    window.addEventListener("load", () => {
        modal.style.display = "flex";
    });

    // Close the modal when clicking the close button
    closeModalBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Close the modal when clicking outside of the modal content
    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
</script>

<?php echo $__env->make('layouts.componets.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\laragon\www\latestjumancode\Drink-Life-Taste\resources\views/welcome.blade.php ENDPATH**/ ?>