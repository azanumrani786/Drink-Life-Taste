<?php echo $__env->make('layouts.componets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="frontend/css/nav.css" />
<link rel="stylesheet" href="frontend/css/footer.css" />
<link rel="stylesheet" href="frontend/css/chat.css" />
<meta
  name="csrf-token"
  content="phEh3jq9Lrtz0OchsKkE4mHr08ebTmyDvftIULyQ"
/>
<link rel="stylesheet" href="frontend/css/ambassadors.css" />
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
            <div class="hero-container">
                <h1>Ambassadors</h1>
            </div>
        </div>
    </section>
    <section class="section-4">
        <div class="container">
            <div class="left">
                <div class="image"></div>
            </div>
            <div class="right">
                <div class="section-title">
                    <h4>What We Offer</h4>
                    <h2>
                        Discover effortless
                        <strong>Business and Marketing in one</strong>
                    </h2>
                    <p>
                        Grursus mal suada faci lisis Lorem ipsum dolarorit ametion
                        consectetur elit. The Vesti at bulum nec odio aea the dumm
                        ipsumm ipsum dolocons is suada a and fadolorit to the
                        consectetur elit. Grursus mal suada faci lisis Lorem dolarorit
                        the ametion consectetur elit.
                    </p>
                </div>
                <div class="flex">
                    <div class="left">
                        <div class="skill">
                            <p id="text10">Project delivered on time</p>
                            <div class="container-skills">
                                <div class="skills" style="width: 90%">
                                    <span class="valueSkill" data-value="90">0%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <p id="text10">Availability</p>
                            <div class="container-skills">
                                <div class="skills" style="width: 70%">
                                    <span class="valueSkill" data-value="70">0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <ul>
                            <li><i class="fas fa-check"></i> Intregrations</li>
                            <li><i class="fas fa-check"></i> Business Strategy</li>
                            <li><i class="fas fa-check"></i> Business Setup</li>
                            <li><i class="fas fa-check"></i> Easy Documentation</li>
                        </ul>
                    </div>
                </div>
                <p class="mt-4">
                    Let’s Come Up With a
                    <strong>Start Free Trial 30-Day Money Back Guarantee</strong> For
                    New Purchases​.
                </p>
                <a href="contact.html" class="btn btn-default"><span class="outer-wrap"><span data-text="Read more">Read
                            more</span></span></a>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <h2>Our Brand Ambassador</h2>
            <div class="grid">
                <div class="col">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
                <div class="col">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
                <div class="col">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <h3 id="text6">
                ARE YOU READY? APPLY FOR THE LifeTaste AMBASSADOR PROGRAM TODAY.
            </h3>
            <p id="text7">
                As a LifeTaste Brand Ambassador, you will represent not just a
                beverage brand, but a philosophy of holistic well-being.
            </p>
            <form action="#">
                <div class="input">
                    <input type="text" placeholder="First Name" />
                    <input type="text" placeholder="Last Name" />
                </div>
                <input type="text" placeholder="Insatagram Profile Link" />
                <input type="text" placeholder="What is your age?" />
                <select name="gender">
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
                <select name="social">
                    <option value="">Describe your Social Pages</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Athlete">Athlete</option>
                    <option value="Health &amp; Wellness">
                        Health &amp; Wellness
                    </option>
                    <option value="Fitness">Fitness</option>
                </select>
                <select name="college">
                    <option value="">Are you in college?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <button id="text8" type="submit">Submit Form</button>
            </form>
        </div>
    </section>
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
                <h3>LifeTaste ChatBot</h3>
                <button class="closeChat"><i class="fas fa-xmark"></i></button>
            </div>
            <div class="content-chat">
                <div class="left-chat">
                    <div class="chat-block">
                        Hello! I’m the Life Taste chatbot. How can I assist you today?
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
<script src="frontend/js/ambassadors.js"></script>

<script src="frontend/js/nav.js"></script>
<script src="frontend/js/chat.js"></script>
<?php echo $__env->make('layouts.componets.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Softwe\laragon\www\energy\resources\views/ambassadors.blade.php ENDPATH**/ ?>