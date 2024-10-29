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
        <a href="{{url('/')}}"><img src="frontend/img/logo.png" alt></a>
        <nav>
            <ul class="menu">
                <i class="closeNav fas fa-xmark"></i>
                <li><a id="our products" href="{{url('/')}}">{{ __('messages.Home') }}</a></li>
                <li class="products">
                    <a id="our products" href="#">{{ __('messages.Products') }} <i
                            class="fas fa-angle-down"></i></a>
                    <div class="products-content">
                        <ul>
                            <li><a id="product" href="{{route('single_product')}}">
                            {{ __('messages.All Products') }} 
                                </a></li>
                            <li><a id="events"
                                    href="{{route('variant')}}">{{ __('messages.Variants') }}</a></li>
                            <li><a id="about LifeTaste"
                                    href="{{route('nutrition')}}">{{ __('messages.Nutrition') }}</a></li>
                        </ul>
                    </div>
                </li>

                <li><a id="Ambassadors"
                        href="{{route('testimonial')}}">{{ __('messages.Testimonials') }}</a></li>
                <li><a id="LifeTaste Fitness" href="{{route('our_client')}}">{{ __('messages.The Green Team') }}</a></li>
                <li><a id="events" href="{{route('event')}}">{{ __('messages.Events') }}</a></li>
                <li><a id="Ambassadors"
                        href="{{route('ambassadors')}}">{{ __('messages.Ambassadors') }}</a></li>
                <li><a id="LifeTaste Fitness"
                        href="{{route('fitness')}}">{{ __('messages.Fitness') }}</a></li>
                <li><a href="{{route('blog-single')}}">{{ __('messages.Blog') }}</a></li>
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const languageButton = document.querySelector('.languagebtn');
                const languageMenu = document.getElementById('language');

                // Toggle language menu visibility
                languageButton.addEventListener('click', function() {
                    languageMenu.style.display = languageMenu.style.display === 'none' ? 'block' : 'none';
                });

                // Change language and submit form
                languageMenu.addEventListener('click', function(event) {
                    const selectedLang = event.target.getAttribute('data-lang');
                    if (selectedLang) {
                        // Create a form and submit it
                        const form = document.createElement('form');
                        form.action = "{{ route('set.language') }}"; // Update with your route
                        form.method = 'POST';
                        form.style.display = 'none';

                        const csrfInput = document.createElement('input');
                        csrfInput.type = 'hidden';
                        csrfInput.name = '_token';
                        csrfInput.value = '{{ csrf_token() }}'; // Add CSRF token

                        const langInput = document.createElement('input');
                        langInput.type = 'hidden';
                        langInput.name = 'language';
                        langInput.value = selectedLang;

                        form.appendChild(csrfInput);
                        form.appendChild(langInput);
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });
        </script>
            <a id="Register / Login" class="login xk7-btn" href="#">
                {{ __('messages.Register / Login') }}
            </a>
        <style>
            .xk7-btn {
                /* padding: 10px 20px;
                        font-size: 16px; */
                cursor: pointer;
            }

            .p9m-modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.4);
            }

            .r3f-content {
                background-color: #fefefe;
                margin: 15% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                max-width: 500px;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .j2l-close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
            }

            .j2l-close:hover,
            .j2l-close:focus {
                color: #000;
                text-decoration: none;
            }

            .h6n-tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
                display: flex;
            }

            .m4s-tablink {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
                flex: 1;
            }

            .m4s-tablink:hover {
                background-color: #ddd;
            }

            .m4s-tablink.b9c-active {
                background-color: #ccc;
            }

            .w5y-tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }

            .f1d-group {
                margin-bottom: 15px;
            }

            .f1d-group label {
                display: block;
                margin-bottom: 5px;
            }

            .f1d-group input {
                width: 100%;
                padding: 8px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .t8g-buttons {
                display: flex;
                justify-content: space-between;
                margin-top: 15px;
            }

            .u2z-btn {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .u2z-btn:hover {
                background-color: #45a049;
            }

            .u2z-btn.v7k-outline {
                background-color: white;
                color: #4CAF50;
                border: 1px solid #4CAF50;
            }

            .u2z-btn.v7k-outline:hover {
                background-color: #4CAF50;
                color: white;
            }
        </style>
        <div id="loginModal" class="p9m-modal">
            <div class="r3f-content">
                <span class="j2l-close">&times;</span>

                <div class="h6n-tab">
                    <button class="m4s-tablink b9c-active" onclick="openTab(event, 'Login')">{{ __('messages.Login') }}
                    </button>
                    <button class="m4s-tablink" onclick="openTab(event, 'Agent')">{{ __('messages.Agent') }}</button>
                    <button class="m4s-tablink" onclick="openTab(event, 'Distributor')">{{ __('messages.Distributor') }}</button>
                </div>

                <div id="Login" class="w5y-tabcontent" style="display:block;">
                    <form method="POST" action="{{ route('login') }}">
                        <div class="f1d-group">
                            <label for="email">{{ __('messages.Email Address') }}</label>
                            <input id="email" type="email" name="email" required autocomplete="email" autofocus>
                        </div>
                        <div class="f1d-group">
                            <label for="password">{{ __('messages.Password') }}</label>
                            <input id="password" type="password" name="password" required autocomplete="current-password">
                        </div>
                        <div class="t8g-buttons">
                            <button type="submit" class="u2z-btn">{{ __('messages.Login') }}</button>
                        </div>
                    </form>
                </div>

                <div id="Agent" class="w5y-tabcontent">
                    <form method="POST" action="{{ route('agent.login') }}">
                        <div class="f1d-group">
                            <label for="agent-email">Email Address</label>
                            <input id="agent-email" type="email" name="email" required autocomplete="email" autofocus>
                        </div>
                        <div class="f1d-group">
                            <label for="agent-password">Password</label>
                            <input id="agent-password" type="password" name="password" required autocomplete="current-password">
                        </div>
                        <div class="t8g-buttons">
                            <button type="submit" class="u2z-btn">Login</button>
                        </div>
                    </form>
                </div>

                <div id="Distributor" class="w5y-tabcontent">
                    <form method="POST" action="{{ route('dispatcher.login') }}">
                        <div class="f1d-group">
                            <label for="distributor-email">Email Address</label>
                            <input id="distributor-email" type="email" name="email" required autocomplete="email" autofocus>
                        </div>
                        <div class="f1d-group">
                            <label for="distributor-password">Password</label>
                            <input id="distributor-password" type="password" name="password" required autocomplete="current-password">
                        </div>
                        <div class="t8g-buttons">
                            <button type="submit" class="u2z-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            const modal = document.getElementById("loginModal");
            const openModalBtn = document.querySelector(".xk7-btn");
            const closeBtn = document.querySelector(".j2l-close");
            const tabs = document.querySelectorAll(".m4s-tablink");
            const contents = document.querySelectorAll(".w5y-tabcontent");

            openModalBtn.onclick = function() {
                modal.style.display = "block";
            }

            closeBtn.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            function openTab(evt, tabName) {
                contents.forEach(content => content.style.display = "none");
                tabs.forEach(tab => tab.classList.remove("b9c-active"));
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.classList.add("b9c-active");
            }

            // Initialize
            tabs[0].click();
        </script>
    </header>