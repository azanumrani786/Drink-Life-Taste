@include('layouts.componets.header')
<link rel="stylesheet" href="frontend/css/nav.css" />
<link rel="stylesheet" href="frontend/css/footer.css" />
<link rel="stylesheet" href="frontend/css/chat.css" />
<meta name="csrf-token" content="phEh3jq9Lrtz0OchsKkE4mHr08ebTmyDvftIULyQ" />

<link rel="stylesheet" href="unpkg.com/xzoom%401.0.15/dist/xzoom.css" />
<link rel="stylesheet" href="cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.css" />
<link rel="stylesheet" href="frontend/css/product.css" />
<link href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<link rel="stylesheet" href="unpkg.com/aos%403.0.0-beta.6/dist/aos.css" />
<link rel="stylesheet" href="cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.css" />
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" />
<script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "bebaNeue", sans-serif !important;
        font-weight: 400 !important;
    }
</style>
<main>
    <div class="overlay-tab">
        <div class="modal">
            <div class="overlay-tab-header">
                <h5>Add Comment</h5>
                <i class="close-modal fas fa-xmark"></i>
            </div>
            <form action="#">
                <label for="name">Name:</label>
                <input id="name" type="text" name="name" placeholder="Enter your name" required />
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" placeholder="Enter your email" required />
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="6"
                    placeholder="Enter Your comment. Comment length between 20 - 50  characters" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <section>
        <form action="#">
            <div class="container-product">
                <div class="left">
                    <div class="title">
                        <h1>LifeTaste Tropical Punch</h1>
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
                            <a href="#">1 Question, 137 Answers</a> or
                            <a href="#">Write A Review</a>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="image thumb active">
                            <img src="wbC6PfZvFO.html" alt="" />
                        </div>

                        <div class="image product-img">
                            <img src="wbC6PfZvFO.png" class="xzoom" id="xzoom-default"
                                xoriginal="./public/img/product.webp" />
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="price-title">
                        <h3>₨ 3,332.64</h3>
                        <hr />
                    </div>

                    <div class="ship-delivery">
                        <h5 id="delivery options">DELIVERY OPTIONS</h5>
                        <div class="flex-delivery">
                            <div class="left">
                                <div class="custom-checkboxTwo">
                                    <input name="shipping" value="shipping" type="checkbox" id="checkbox1"
                                        class="single-checkboxs" checked />
                                    <label id="Ship to Me" for="checkbox1" class="button change-delivery"><i
                                            class="fas fa-truck"></i> Ship to Me
                                        <i class="check-change far fa-circle-check"></i></label>
                                </div>
                                <div class="content">
                                    <p id="in Stock">in Stock</p>
                                </div>
                                <div class="shipping">
                                    <a id="free shipping" href="#" role="link"><span><span class="bold">Free
                                                Shipping</span> on orders
                                            $35+ </span><svg xmlns:xlink="http://www.w3.org/1999/xlink"
                                            focusable="false" height="14px" version="1.1" viewBox="0 0 14 14"
                                            width="14px" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                                <g transform="translate(-55.000000, -423.000000)">
                                                    <g transform="translate(56.000000, 424.000000)">
                                                        <circle cx="6.2" cy="6.2" r="6.2" stroke="#333">
                                                        </circle>
                                                        <text fill="#333" font-family="CorisandeBold"
                                                            font-size="12" font-weight="bold">
                                                            <tspan x="4.75" y="10.5">i</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="right">
                                <div class="custom-checkboxTwo">
                                    <input name="in-store" value="in-store" type="checkbox" id="checkbox2"
                                        class="single-checkboxs" />
                                    <label id="Pick Up In-Store" for="checkbox2" class="button change-delivery"><i
                                            class="fas fa-shop"></i> Pick Up In-Store
                                        <i class="check-change far fa-circle"></i></label>
                                </div>
                                <div class="content">
                                    <p id="Please select store to see availability">
                                        Please select store to see availability
                                    </p>
                                    <a id="Select Store" href="#">Select Store</a>
                                </div>
                                <div class="shipping">
                                    <a id="Free Contactless" href="#" role="link"><span><span>Free
                                                Contactless</span>
                                            <span class="bold">Curbside Pickup</span> </span><svg
                                            xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false"
                                            height="14px" version="1.1" viewBox="0 0 14 14" width="14px"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                                <g transform="translate(-55.000000, -423.000000)">
                                                    <g transform="translate(56.000000, 424.000000)">
                                                        <circle cx="6.2" cy="6.2" r="6.2" stroke="#333">
                                                        </circle>
                                                        <text fill="#333" font-family="CorisandeBold"
                                                            font-size="12" font-weight="bold">
                                                            <tspan x="4.75" y="10.5">i</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <a class="add-to-cart" href="login.html">Add to cart <i class="fas fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="section-2">
        <div class="container-ingedients">
            <div class="left">
                <img src="wbC6PfZvFO.png" alt="..." />
            </div>
            <div class="right">
                <h2 id="Ingredients">Ingredients</h2>
                <div class="flex-col">
                    <button id="Caffeine" type="button" class="collapsible">
                        Caffeine <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <button id="Taurine" type="button" class="collapsible">
                        Taurine <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <button id="B-group vitamins" type="button" class="collapsible">
                        B-group vitamins <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <button id="Sugars" type="button" class="collapsible">
                        Sugars <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <button id="Water" type="button" class="collapsible">
                        Water <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <a href="variant.html" id="more ingredients">More Variants</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <section>
            <div class="container-select">
                <div class="buttons">
                    <button class="category-select" id="sparkling">Sparkling
                        Drink</button>
                    <button class="category-select" id="energy">Energy
                        Drinks</button>
                    <button class="category-select" id="recovery">Recovery
                        Drinks</button>
                </div>
                <div class="swiper swiperSlide swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-b7f7d59af8ccc817" aria-live="polite">

                        <div class="swiper-slide swiper-slide-active"
                            style="background: linear-gradient(to top, rgb(255, 255, 235), rgb(255, 247, 125), rgb(255, 255, 235)); width: 287.5px;"
                            role="group" aria-label="1 / 6" data-swiper-slide-index="0">
                            <div class="slide-card">
                                <img src="frontend/img/energy/two.png" alt="...">
                                <form class="addTocartForm" data-product-id="27">
                                    <h3 style="color: #008263;">Energy Mango</h3>

                                    <p style="color: #008263;">Pack of 12</p>
                                    <div class="flex-quantity">
                                        <div class="quantity" style="color: #008263; border: 1px solid #008263;">
                                            <span class="addQuantity">+</span>
                                            <span class="quantitySelect">1</span>
                                            <span class="decreaseQuantity">-</span>
                                        </div>
                                        <button type="submit" style="background-color: #008263;">Add to cart / <span
                                                class="price">4.99</span> </button>
                                    </div>
                                    <a href="/us/product/detail/27" style="color: #008263;">View Details</a>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next"
                            style="background: linear-gradient(to top, rgb(222, 255, 206), rgb(171, 255, 127), rgb(222, 255, 206)); width: 287.5px;"
                            role="group" aria-label="2 / 6" data-swiper-slide-index="1">
                            <div class="slide-card">
                                <img src="frontend/img/energy/one.png" alt="...">
                                <form class="addTocartForm" data-product-id="28">
                                    <h3 style="color: #FA5903;">Energy Topical Punch</h3>

                                    <p style="color: #FA5903;">Pack of 12</p>
                                    <div class="flex-quantity">
                                        <div class="quantity" style="color: #FA5903; border: 1px solid #FA5903;">
                                            <span class="addQuantity">+</span>
                                            <span class="quantitySelect">1</span>
                                            <span class="decreaseQuantity">-</span>
                                        </div>
                                        <button type="submit" style="background-color: #FA5903;">Add to cart / <span
                                                class="price">4.49</span> </button>
                                    </div>
                                    <a href="/us/product/detail/28" style="color: #FA5903;">View Details</a>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background: linear-gradient(to top, rgb(255, 235, 206), rgb(255, 199, 126), rgb(255, 235, 206)); width: 287.5px;"
                            role="group" aria-label="3 / 6" data-swiper-slide-index="2">
                            <div class="slide-card">
                                <img src="frontend/img/energy/three.png" alt="...">
                                <form class="addTocartForm" data-product-id="29">
                                    <h3 style="color: #008263;">Energy Orange</h3>

                                    <p style="color: #008263;">Pack of 12</p>
                                    <div class="flex-quantity">
                                        <div class="quantity" style="color: #008263; border: 1px solid #008263;">
                                            <span class="addQuantity">+</span>
                                            <span class="quantitySelect">1</span>
                                            <span class="decreaseQuantity">-</span>
                                        </div>
                                        <button type="submit" style="background-color: #008263;">Add to cart / <span
                                                class="price">4.99</span> </button>
                                    </div>
                                    <a href="/us/product/detail/29" style="color: #008263;">View Details</a>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background: linear-gradient(to top, rgb(255, 228, 228), rgb(255, 128, 130), rgb(255, 228, 228)); width: 287.5px;"
                            role="group" aria-label="4 / 6" data-swiper-slide-index="3">
                            <div class="slide-card">
                                <img src="frontend/img/energy/four.png" alt="...">
                                <form class="addTocartForm" data-product-id="30">
                                    <h3 style="color: #FA5903;">Energy Original</h3>

                                    <p style="color: #FA5903;">Pack of 12</p>
                                    <div class="flex-quantity">
                                        <div class="quantity" style="color: #FA5903; border: 1px solid #FA5903;">
                                            <span class="addQuantity">+</span>
                                            <span class="quantitySelect">1</span>
                                            <span class="decreaseQuantity">-</span>
                                        </div>
                                        <button type="submit" style="background-color: #FA5903;">Add to cart / <span
                                                class="price">4.49</span> </button>
                                    </div>
                                    <a href="/us/product/detail/30" style="color: #FA5903;">View Details</a>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background: linear-gradient(to top, rgb(255, 255, 235), rgb(255, 247, 125), rgb(255, 255, 235)); width: 287.5px;"
                            role="group" aria-label="5 / 6" data-swiper-slide-index="4">
                            <div class="slide-card">
                                <img src="frontend/img/energy/five.png" alt="...">
                                <form class="addTocartForm" data-product-id="31">
                                    <h3 style="color: #008263;">Energy Fruit Punch</h3>

                                    <p style="color: #008263;">Pack of 12</p>
                                    <div class="flex-quantity">
                                        <div class="quantity" style="color: #008263; border: 1px solid #008263;">
                                            <span class="addQuantity">+</span>
                                            <span class="quantitySelect">1</span>
                                            <span class="decreaseQuantity">-</span>
                                        </div>
                                        <button type="submit" style="background-color: #008263;">Add to cart / <span
                                                class="price">4.99</span> </button>
                                    </div>
                                    <a href="/us/product/detail/31" style="color: #008263;">View Details</a>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background: linear-gradient(to top, rgb(222, 255, 206), rgb(171, 255, 127), rgb(222, 255, 206)); width: 287.5px;"
                            role="group" aria-label="6 / 6" data-swiper-slide-index="5">
                            <div class="slide-card">
                                <img src="frontend/img/energy/six.png" alt="...">
                                <form class="addTocartForm" data-product-id="32">
                                    <h3 style="color: #FA5903;">Energy Strawberry Guava</h3>

                                    <p style="color: #FA5903;">Pack of 12</p>
                                    <div class="flex-quantity">
                                        <div class="quantity" style="color: #FA5903; border: 1px solid #FA5903;">
                                            <span class="addQuantity">+</span>
                                            <span class="quantitySelect">1</span>
                                            <span class="decreaseQuantity">-</span>
                                        </div>
                                        <button type="submit" style="background-color: #FA5903;">Add to cart / <span
                                                class="price">4.49</span> </button>
                                    </div>
                                    <a href="/us/product/detail/32" style="color: #FA5903;">View Details</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"
                            tabindex="0" role="button" aria-label="Go to slide 4"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 6"></span></div>
                    <div class="swiper-button-next swiper-button-next-slide" tabindex="0" role="button"
                        aria-label="Next slide" aria-controls="swiper-wrapper-b7f7d59af8ccc817"></div>
                    <div class="swiper-button-prev swiper-button-prev-slide" tabindex="0" role="button"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-b7f7d59af8ccc817"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <a class="viewAll" href="PK/products.html" id="view all product">View all Product</a>
            </div>
        </section>
    </section>
    <section>
        <div class="container-tab">
            <div class="tab">
                <button id="overview" class="tablinks active" onclick="openTab(event, 'Overview')">
                    Overview
                </button>
                <button id="comments" class="tablinks" onclick="openTab(event, 'Comments')">
                    Comments
                </button>
            </div>
            <div id="Overview" class="tabcontent" style="display: block">
                <div class="flex-overview">
                    <div class="left">
                        <h3>Description</h3>
                        <hr />
                        <p>
                            Indulge in the vibrant and invigorating taste of LifeTaste
                            Sparkling Blood Orange. This exquisite beverage combines the
                            rich, citrusy flavor of ripe blood oranges with the
                            effervescent sparkle of pure water. Perfect for a midday
                            pick-me-up or a refreshing treat anytime, LifeTaste Sparkling
                            Blood Orange offers a burst of natural flavor without any
                            added sugars or artificial flavors. Enjoy the crisp, clean
                            taste that will leave your palate tingling and your thirst
                            quenched.
                        </p>
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
                        <button class="openModal">
                            Add new <i class="far fa-comment-dots"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section></section>
    <section class="section-footer">
        <div class="container-news">
            <h3 id="subscribe  for our monthly Newsletter">
                subscribe for our monthly Newsletter
            </h3>
            <form action="#">
                <input type="email" placeholder="email" required />
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
                    <input class="messageChat" type="text" placeholder="send message" name="message-chat" />
                    <button type="submit" class="sendMessage">
                        <i class="far fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="unpkg.com/xzoom%401.0.15/dist/xzoom.min.js"></script>
<script src="cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.js"></script>
<script src="frontend/js/product.js"></script>
<script>
    $(document).ready(function() {
        $(".xzoom").xzoom({
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

<script src="frontend/js/nav.js"></script>
<script src="frontend/js/chat.js"></script>
@include('layouts.componets.footer')
