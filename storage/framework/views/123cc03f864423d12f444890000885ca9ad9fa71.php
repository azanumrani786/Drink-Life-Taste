<?php echo $__env->make('layouts.componets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="frontend/css/nav.css" />
<link rel="stylesheet" href="frontend/css/footer.css" />
<link rel="stylesheet" href="frontend/css/chat.css" />
<meta
  name="csrf-token"
  content="phEh3jq9Lrtz0OchsKkE4mHr08ebTmyDvftIULyQ"
/>
<link rel="stylesheet" href="frontend/css/nutrition.css" />
<link
  href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  rel="stylesheet"
  href="unpkg.com/aos%403.0.0-beta.6/dist/aos.css"
/>
<link
  rel="stylesheet"
  href="cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.css"
/>
<link
  rel="stylesheet"
  href="cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link
  rel="stylesheet"
  href="cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"
/>
<script
  type="text/javascript"
  src="ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
></script>
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
    <section>
        <div class="hero">
            <div class="container-hero">
                <h2 id="events">Nutrition</h2>
                <p><span id="Home">Home</span><span><i
                            class="fas fa-angle-right"></i></span><span
                        id="events">Nutrition</span></p>
            </div>
        </div>
    </section>
    <section class="nutrition-section">

    </section>
    <section class="section-3">
        <div class="container-variant">
            <div class="center">
                <div class="left" data-aos="fade-up"
                    data-aos-duration="2000">
                    <h4 id="variant">variant</h4>
                    <h2 id="More flavor, more power">More flavor, more
                        power</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus laoreet facilisis
                        lectus, a rutrum lectus lacinia vitae. In auctor
                        aliquam aliquam. Phasellus vel dolor fermentum,
                        placerat dui et, lacinia nibh. Praesent eu
                        dictum tortor. </p>
                </div>
                <img
                    src="frontend/img/variant/Energy%20Drink%20Fruit%20Punch.png"
                    alt="...">
                <img
                    src="frontend/img/variant/energy%20drink%20Mango.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Energy%20drink%20Orange.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Energy%20drink%20Original.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Energy%20Drink%20Strawberry%20Guava.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Energy%20Drink%20Tropical%20Punch.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Pompelmo%20Grapefruit.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Recovery%20Drink%20Mango.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Recovery%20Drink%20Orange%20Citrus.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Recovery%20Drink%20Strawberry.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Recovery%20Fruit%20Punch.png"
                    alt="...">
                <img src="frontend/img/variant/spakling%20Mango.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Sparkling%20Blood%20Orange.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Sparkling%20Mandarin%20Orange.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Sparkling%20Pineapple%20Ginger.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Sparkling%20Pomegranate%20Cherry.png"
                    alt="...">
                <img
                    src="frontend/img/variant/Sparkling%20Tropical%20Punch.png"
                    alt="...">

            </div>
            <a href="variant.html" id="more variant">MORE Variant</a>
        </div>
    </section>

    <section>
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
                            <input name="name" type="text"
                                placeholder="Name" required>
                            <input name="last-name" type="text"
                                placeholder="Last Name" required>
                        </div>
                        <input name="email" type="email"
                            placeholder="Email" required>
                        <textarea name="message" placeholder="Message"
                            cols="30" rows="6"
                            aria-invalid="false"></textarea>
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
                <button class="closeChat"><i
                        class="fas fa-xmark"></i></button>
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
                    <input class="messageChat" type="text"
                        placeholder="send message" name="message-chat">
                    <button type="submit" class="sendMessage"><i
                            class="far fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="frontend/js/nutrition.js"></script>
<script src="unpkg.com/aos%403.0.0-beta.6/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="frontend/js/nav.js"></script>
<script src="frontend/js/chat.js"></script>
<?php echo $__env->make('layouts.componets.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php /**PATH D:\Softwe\laragon\www\energy\resources\views/product/nutrition.blade.php ENDPATH**/ ?>