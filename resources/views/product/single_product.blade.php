<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ideaigniter.com/PK/product/detail/16 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:28:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Product Details - LifeTaste</title>
    <link rel="stylesheet" href="../../../frontend/css/nav.css">
    <link rel="stylesheet" href="../../../frontend/css/footer.css">
    <link rel="stylesheet" href="../../../frontend/css/chat.css">
<meta name="csrf-token" content="DPMV1nZkm6BmVoPZHUNRc9wjV7ga1sqz4HmbyrVY">
    
    <link rel="stylesheet" href="../../../../unpkg.com/xzoom%401.0.15/dist/xzoom.css"/>
    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../../frontend/css/product.css">
    <link
        href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="../../../../unpkg.com/aos%403.0.0-beta.6/dist/aos.css" />
    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.css" />
    <link
        rel="stylesheet"
        href="../../../../cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet"
          href="../../../../cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"
    />
    <script type="text/javascript" src="../../../../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        h1,h2,h3,h4,h5 {
    font-family: "bebaNeue", sans-serif !important;
    font-weight: 400 !important;
}
    </style>
</head>
<body>


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
            <a href="{{url('/')}}"><img src="{{ asset('frontend/img/logo.png' ) }}" alt></a>
            <nav>
                <ul class="menu">
                    <i class="closeNav fas fa-xmark"></i>
                    <li><a id="our products" href="{{url('/')}}">Home</a></li>
                    <li class="products">
                        <a id="our products" href="#">Products <i
                                class="fas fa-angle-down"></i></a>
                        <div class="products-content">
                            <ul>
                                <li><a id="product" href="{{route('single_product')}}">All
                                        Products</a></li>
                                <li><a id="events"
                                        href="{{route('variant')}}">Variants</a></li>
                                <li><a id="about LifeTaste"
                                        href="{{route('nutrition')}}">Nutrition</a></li>
                            </ul>
                        </div>
                    </li>

                    <li><a id="Ambassadors"
                            href="{{route('testimonial')}}">Testimonials</a></li>
                    <li><a id="LifeTaste Fitness" href="{{route('our_client')}}">The Green Team</a></li>
                    <li><a id="events" href="{{route('event')}}">Events</a></li>
                    <li><a id="Ambassadors"
                            href="{{route('ambassadors')}}">Ambassadors</a></li>
                    <li><a id="LifeTaste Fitness"
                            href="{{route('fitness')}}">Fitness</a></li>
                    <li><a href="{{route('blog-single')}}">Blog</a></li>
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
            <a id="Register / Login" class="login" href="/login">Register
                / Login</a>
        </header>
<main>
    <div class="overlay-tab">
        <div class="modal">
            <div class="overlay-tab-header">
                <h5>Add Comment</h5>
                <i class="close-modal fas fa-xmark"></i>
            </div>
            <form action="#">
                <label for="name">Name:</label>
                <input id="name" type="text" name="name" placeholder="Enter your name" required>
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" placeholder="Enter your email" required>
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="6"  placeholder="Enter Your comment. Comment length between 20 - 50  characters" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <section>
        <form action="#">
            <div class="container-product">
                <div class="left">
                    <div class="title">
                        <h1>{{ $product->name }}</h1>
                    </div>
                    <div class="reviews">
                        <div class="col">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="col">
                            <a id="read" href="#">Read 37 Reviews</a>
                        </div>
                        <div class="col" id="1 Question, 137 Answers">
                            <a href="#">1 Question, 137 Answers</a> or <a href="#">Write A Review</a>
                        </div>
                    </div>
                    <div class="flex">
                    <div class="image thumb active">
                        <img src="{{ asset('$product->image') }}" alt="">
                    </div>
                                                    
                        <div class="image product-img" >
                            <img src="{{ asset($product->image) }}" alt="">
                            <!-- <img  src="../../../storage/app/public/products/16/wbC6PfZvFO.png"class="xzoom" id="xzoom-default" xoriginal="./public/img/product.webp" > -->
                        </div>
                                            </div>
                </div>
                <div class="right">
                    <div class="price-title">
                        <h3>₨ {{ $product->price }}</h3>
                        <hr>
                    </div>













                    <div class="ship-delivery">
                        <h5 id="delivery options">DELIVERY OPTIONS</h5>
                        <div class="flex-delivery">
                            <div class="left">
                                <div class="custom-checkboxTwo">
                                    <input name="shipping" value="shipping" type="checkbox" id="checkbox1"  class="single-checkboxs" checked>
                                    <label id="Ship to Me" for="checkbox1" class="button change-delivery"><i class="fas fa-truck"></i> Ship to Me <i class="check-change far fa-circle-check"></i></label>
                                </div>
                                <div class="content">
                                    <p id="in Stock">
                                        in Stock
                                    </p>
                                </div>
                                <div class="shipping">
                                    <a id="free shipping" href="#" role="link"><span><span class="bold">Free Shipping</span> on orders $35+ </span><svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" height="14px" version="1.1" viewBox="0 0 14 14" width="14px" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g transform="translate(-55.000000, -423.000000)"><g transform="translate(56.000000, 424.000000)"><circle cx="6.2" cy="6.2" r="6.2" stroke="#333"></circle><text fill="#333" font-family="CorisandeBold" font-size="12" font-weight="bold"><tspan x="4.75" y="10.5">i</tspan></text></g></g></g></svg></a>
                                </div>
                            </div>
                            <div class="right">
                                <div class="custom-checkboxTwo">
                                    <input name="in-store" value="in-store" type="checkbox" id="checkbox2" class="single-checkboxs">
                                    <label id="Pick Up In-Store" for="checkbox2" class="button change-delivery"><i class="fas fa-shop"></i> Pick Up In-Store <i class="check-change far fa-circle"></i></label>
                                </div>
                                <div class="content">
                                    <p id="Please select store to see availability">
                                        Please select store to see availability
                                    </p>
                                    <a id="Select Store" href="#">Select Store</a>
                                </div>
                                <div class="shipping">
                                    <a id="Free Contactless"  href="#" role="link"><span><span>Free Contactless</span> <span class="bold">Curbside Pickup</span> </span><svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" height="14px" version="1.1" viewBox="0 0 14 14" width="14px" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g transform="translate(-55.000000, -423.000000)"><g transform="translate(56.000000, 424.000000)"><circle cx="6.2" cy="6.2" r="6.2" stroke="#333"></circle><text fill="#333" font-family="CorisandeBold" font-size="12" font-weight="bold"><tspan x="4.75" y="10.5">i</tspan></text></g></g></g></svg></a>
                                </div>
                            </div>
                        </div>
                        <a class="add-to-cart" href="../../../login.html">Add to cart <i class="fas fa-cart-shopping"></i></a>

                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="section-2">
        <div class="container-ingedients">
            <div class="left">
                <img src="{{ asset($product->image) }}" alt="">
            </div>
            <div class="right">
                <h2 id="Ingredients">Ingredients</h2>
                <div class="flex-col">

                    <button id="Caffeine" type="button" class="collapsible">Caffeine <i class="fas fa-angle-down"></i></button>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button id="Taurine" type="button" class="collapsible">Taurine <i class="fas fa-angle-down"></i></button>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button id="B-group vitamins" type="button" class="collapsible">B-group vitamins <i class="fas fa-angle-down"></i></button>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button id="Sugars" type="button" class="collapsible">Sugars <i class="fas fa-angle-down"></i></button>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button id="Water" type="button" class="collapsible">Water <i class="fas fa-angle-down"></i></button>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <a href="../../variant.html" id="more ingredients">More Variants</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-tab">
            <div class="tab">
                <button id="overview" class="tablinks active" onclick="openTab(event, 'Overview')">Overview</button>
                <button id="comments" class="tablinks" onclick="openTab(event, 'Comments')">Comments</button>
            </div>
            <div id="Overview" class="tabcontent" style="display: block;">
                <div class="flex-overview">
                    <div class="left">
                        <h3>Description</h3>
                        <hr>
                        <p>Indulge in the vibrant and invigorating taste of LifeTaste Sparkling Blood Orange. This exquisite beverage combines the rich, citrusy flavor of ripe blood oranges with the effervescent sparkle of pure water. Perfect for a midday pick-me-up or a refreshing treat anytime, LifeTaste Sparkling Blood Orange offers a burst of natural flavor without any added sugars or artificial flavors. Enjoy the crisp, clean taste that will leave your palate tingling and your thirst quenched.</p>
                    </div>
                    <!--<div class="right">-->
                    <!--    <h3 id="detail">Detail</h3>-->
                    <!--    <hr>-->
                    <!--    <div class="col">-->
                    <!--        <p id="condition">Condition</p>-->
                    <!--        <p id="Excellent Condition">Excellent Condition</p>-->
                    <!--    </div>-->
                    <!--    <div class="col">-->
                    <!--        <p>Signature</p>-->
                    <!--        <p>Signature A</p>-->
                    <!--    </div>-->
                    <!--    <div class="col">-->
                    <!--        <p id="Frame Included">Frame Included</p>-->
                    <!--        <p id="yes">Yes</p>-->
                    <!--    </div>-->
                    <!--    <div class="col">-->
                    <!--        <p id="Top Piece Guarantee">Top Piece Guarantee</p>-->
                    <!--        <p id="yes 1">Yes</p>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>

            <div id="Comments" class="tabcontent">
                <div class="flex-overview">
                    <div class="left">
                        <h3>Comments</h3>
                        <div class="col">
                            <span>sdsd dffd ee r ererer ererer edit</span>
                            <span class="author">Posted By: sdsdsd edit</span>
                        </div>
                    </div>
                    <div class="right">
                        <button class="openModal">Add new <i class="far fa-comment-dots"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>


    </section>
    <section class="section-footer">
    <div class="container-news">
        <h3 id="subscribe  for our monthly Newsletter">subscribe  for our monthly Newsletter</h3>
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
                    Hello! I’m your LifeTaste Agent How can I assist you today?
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
</div>
</main>
<footer>
    <div class="container-footer">
        <div class="left">
            <div class="col">
                <a href="../../../index.html"><img src="../../../frontend/img/logo.png" alt="..."></a>
                <p>LifeTaste - a range of delicious
                    drinks that not only quench your
                    thirst but also boost your energy
                    and keep you hydrated.</p>
            </div>
            <div class="col">
                <h4 id="Quick links">Quick links</h4>
                <ul>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a id="Home" href="../../products.html">Products</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a id="About Us" href="../../nutrition.html">Nutrition</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a id="Pages" href="../../variant.html">Variants</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a id="Product" href="../../events.html">Events</a></li>

                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a id="Contact Us" href="../../ambassadors.html">Ambassadors</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a id="Contact Us" href="../../fitness.html">Fitness</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a id="Contact Us" href="../../testimonials.html">Testimonials</a></li>
                </ul>
            </div>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="right">
            <div class="col">
                <h4 id="Our client">Our client</h4>
                <ul>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a href="#">Thames Ditton. United Kingdom	</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a href="#">Antigua Guatemala, Guatemela</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a href="#">Caohe, China</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a href="#">Fortios, Portugal</a></li>
                    <li><span><svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg></span><a href="#">Porto Empedocle, Italy</a></li>
                </ul>
            </div>
            <div class="col">
                <h4 id="Contact">Contact</h4>
                <ul>
                    <li><span><i class="fas fa-square-phone"></i></span><a href="../../about.html">About Us
                        </a></li>
                    <li><span><i class="fas fa-envelope"></i></span><a href="../../content.html">Contact Us</a></li>
                    <li><span><i class="fas fa-envelope"></i></span><a href="../../blog.html">Blog</a></li>
                   <li><span><i class="fas fa-phone"></i></span><a href="#">302.000.0000</a></li>
<li><span><i class="fas fa-envelope"></i></span><a href="#">info@lifetaste.com</a></li>
<li><span><i class="fas fa-location-arrow"></i></span><a href="#">Wilmington, Delaware. USA</a></li>

                </ul>
            </div>
            <div class="footer-buttons">
                <a href="#">
                    <img src="../../../frontend/img/button%20icons.png" alt="...">
                </a>
                <a href="#">
                    <img src="../../../frontend/img/button%20icons1.png" alt="...">
                </a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container-copy">
            <p>All rights Reserved | LifeTaste Beverages LLC, Registered Trademark of all LifeTaste contents and products</p>
            <img src="../../../frontend/img/card%20pay.png" alt="...">
        </div>
    </div>
</footer>
<script src="../../../../code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../../../unpkg.com/xzoom%401.0.15/dist/xzoom.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.js"></script>
    <script src="../../../frontend/js/product.js"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom').xzoom({
                zoomWidth: 400,
                Xoffset: 15,
            });
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 4,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            },
        });
    </script>

<script src="../../../frontend/js/nav.js"></script>
<script src="../../../frontend/js/chat.js"></script>

</body>

<!-- Mirrored from ideaigniter.com/PK/product/detail/16 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:28:25 GMT -->
</html>
