<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WithWithout - Frontend</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- <div class="dev-grid">
            <div class="inner">
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
                <div class="column"></div>
            </div>
        </div> -->

        <div class="container nav">
            <svg class="nav__logo" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61 70"><g clip-path="url(#a)"><path d="M18.029 6.22C22.552.726 28.145-.728 34.996.295c3.586.539 7.306 1.48 9.955 3.985 2.462 2.315 3.64 5.68 5.406 8.561 2.141 3.554 5.219 6.516 7.119 10.204 5.914 11.47 2.435 29.4-4.255 39.739-1.365 2.127-3.024 4.173-5.192 5.465-4.71 2.8-10.624 1.588-16.004.538-5.914-1.13-11.935-2.019-17.957-2.369-4.817-.269-8.885-1.373-11.427-6.004C.527 56.592.313 52.015.634 47.654 1.678 33.196 8.314 19.6 16.798 7.808c.401-.539.803-1.077 1.231-1.589Z" fill="#ECD400"/><path d="M48.912 44.53c.937-.188 1.713-.51 2.302-1.453-.322-.054-.59-.162-.857-.162-.562.027-1.124.162-1.686.162-.214 0-.481-.188-.588-.35-.08-.135-.054-.43.053-.565.348-.431.75-.781 1.097-1.185.107-.135.241-.35.214-.485-.053-.134-.294-.269-.455-.296-.24-.027-.508.054-.749.108-1.017.161-2.034.35-3.05.511-.242.027-.482-.053-.295-.377.214-.403.428-.834.696-1.211.588-.835.963-1.75 1.204-2.72a.484.484 0 0 0-.107-.376c-.08-.054-.268-.054-.375-.027-.24.108-.455.296-.696.43-.428.297-.802.755-1.525.54.107-.27.187-.512.268-.782.187-.457.481-.915.562-1.4.133-.807.267-1.319-.482-1.75-.589.566-.937 1.427-1.9 1.723 0-.188-.027-.323.026-.403.348-.808.75-1.589 1.044-2.424.107-.323.134-.861-.053-1.103-.295-.377-.696 0-.99.215a.708.708 0 0 1-.161.135l-.75.377c.375-1.508 1.098-2.72 1.125-4.227-1.017.377-1.285 1.427-2.034 2.1-.027-.189-.054-.323-.027-.431.053-.78.134-1.589.16-2.37 0-.269-.133-.538-.24-.942-.428.512-.723.862-1.124 1.32v-.404c.053-.512.134-1.023.134-1.535 0-.134-.108-.35-.215-.377-.08-.027-.294.08-.374.189-.348.43-.589.457-.937.027-.482-.593-.883-1.266-1.418-1.804-.402-.404-.428-.781-.321-1.293.24-1.238.428-2.476.615-3.715.107-.673.134-1.373.268-2.073.267-1.48.428-2.935.16-4.415-.16-.835-.936-1.32-1.659-1.05-.321.134-.642.35-.91.592a5.248 5.248 0 0 0-.776 1.077c-.615 1.265-1.204 2.558-1.793 3.85-.268.592-.455 1.238-.723 2.019-.294-.35-.535-.565-.615-.808-.321-.888-.67-1.777-.856-2.692-.348-1.696-.59-3.42-.857-5.142-.107-.808-.08-1.616-.24-2.396-.108-.539-.349-1.077-.643-1.562-.294-.458-.963-.485-1.311-.054-.214.27-.455.566-.562.862-.295 1.05-.59 2.1-.723 3.177-.348 2.342-.294 4.684.107 7.027.214 1.265.428 2.53 1.097 3.634.08.135.107.323.188.485-.536.134-1.017.215-1.472.377-.883.296-1.766.565-2.596.969-.696.35-1.258.888-1.9 1.32-1.097.753-1.847 1.776-2.168 3.042-.428 1.803-.669 3.661-1.07 5.465-.16.646-.429 1.346-.83 1.884-.535.727-1.258 1.32-1.82 2.02-.99 1.238-2.167 2.288-3.425 3.23-.776.566-1.338 1.32-1.954 2.02-1.017 1.184-1.66 2.45-1.391 4.092.24 1.562.856 2.827 2.381 3.446.482.189 1.017.243 1.526.27a8.173 8.173 0 0 0 1.82-.135s2.167-.189 6.45-1.992c.936-.297 1.9-.566 2.836-.862.937-.296 1.82-.7 2.81-.862.696-.107.91-.107.856.727-.08 1.104-.187 2.235-.187 3.339 0 1.588.107 3.177.187 4.765.027.646.188 1.266.268 1.912.16.942.321 1.884.455 2.854.053.377.24.834.107 1.157 0 0 19.375 5.627 24.273-14.107-1.124-.404-2.328-.458-3.399-1.131ZM25.87 39.55c-.348 1.104-.856 2.208-1.66 3.07-.775.807-1.792 1.372-2.916 1.48-.214.027-.402-.188-.402-.404 0-.242.188-.377.402-.404 2.06-.161 3.238-2.18 3.8-3.93.16-.512.937-.324.776.188Zm3.024-7.27c-.83.647-1.74.862-2.65 1.132-1.23.323-2.488.565-3.72.834-.534.108-.963-.27-.99-.97-.026-.672.081-1.345.135-1.991.053-.943.214-1.858.642-2.693.696-1.319 1.74-2.234 3.8-2.342.455.108 1.365.27 2.194.592.723.27 1.285.808 1.419 1.643.027.08.08.161.134.242.615 1.13.053 2.746-.964 3.554Z" fill="#202E55"/><path d="M25.469 29.427c-.723 0-1.338.592-1.338 1.346 0 .215.053.43.134.592v.054c0 .216.187.404.401.404a.413.413 0 0 0 .401-.404v-.161c0-.054.027-.108.027-.135 0-.027.027-.054.027-.054l.027-.054.026-.027h.054c.053 0 .107-.026.16-.026h.375l.08.026h.027l.027.027.027-.053c0 .026.027.053.027.053 0 .027.026.054.026.081v.269c0 .216.188.404.402.404a.413.413 0 0 0 .401-.404c0-.107 0-.215-.027-.323.027-.08.027-.188.027-.296.027-.727-.562-1.32-1.311-1.32Z" fill="#202E55"/></g><defs><clipPath id="a"><path fill="#fff" transform="translate(.5)" d="M0 0h60v70H0z"/></clipPath></defs></svg>
            <ul class="nav__menu">
                <li class="nav__menu-item"><a href="#">Våra kläder</a></li>
                <li class="nav__menu-item"><a href="#">Outlet</a></li>
                <li class="nav__menu-item"><a href="#">Butiker</a></li>
                <li class="nav__menu-item"><a href="#">Kundservice</a></li>
                <li class="nav__menu-item"><a href="#">Om oss</a></li>
            </ul>
            <a class="btn nav__button" href="#">Get in touch</a>
        </div>

        <div class="hero">
            <div class="hero__inner container">
                <div class="hero__content">
                    <h1 class="hero__title">Så kliv in i Donkeys magiska värld – där barn alltid är barn.</h1>
                    <p class="hero__text">Donkey har kläder till barn, från nyfödd och baby, till barn i förskole- och skolåldern. Barnkläder och bebiskläder som underlättar vardagen och som fungerar lika bra för fartfyllda utomhusaktiviteter som till fest.</p>
                    <a class="btn hero__cta" href="#">Våra kläder</a>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="article my-24">
                <div class="article__content">
                    <p class="article__category">Höstkläder</p>
                    <h2 class="article__title">Härliga höstnyheter</h2>
                    <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at sem arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <a href="#" class="btn article__cta">Shoppa nu</a>
                </div>
                <div class="article__image-col">
                    <img class="article__image" src="child1.jpg">
                </div>
            </div>

            <div class="article article--flipped my-24">
                <div class="article__image-col">
                    <img class="article__image" src="child2.jpg">
                </div>
                <div class="article__content">
                    <p class="article__category">Höstkläder</p>
                    <h2 class="article__title">Härliga höstnyheter</h2>
                    <p class="article__text">Med 100 % hållbarhetsmärkt bomull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen.</p>
                    <a href="#" class="btn article__cta">Läs mer</a>
                </div>
            </div>

            <div class="form my-24">
                <p class="form__category">Ställ en fråga</p>
                <h3 class="form__title">Har du något du funderar över?</h3>
                <p class="form__description">Med 100 % hållbarhetsmärkt bomull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen.</p>

                <form method="post">
                    <div class="form__input-group">
                        <label class="form__label">Namn</label>
                        <input class="form__text-input" type="text" placeholder="Skriv ditt namn">
                    </div>

                    <div class="form__input-group">
                        <label class="form__label">Email</label>
                        <input class="form__text-input" type="text" placeholder="Fyll i din mailadress">
                    </div>

                    <div class="form__input-group">
                        <p class="form__label">Välj underkategori</p>
                        <div class="form__options-group">
                            <label class="form__radio">
                                <input type="radio" name="category" value="a" checked>
                                <span class="form__radio-inner">Kategori 1</span>
                            </label>
                            <label class="form__radio">
                                <input type="radio" name="category" value="b">
                                <span class="form__radio-inner">Kategori 2</span>
                            </label>
                            <label class="form__radio">
                                <input type="radio" name="category" value="c">
                                <span class="form__radio-inner">Kategori 3</span>
                            </label>
                            <label class="form__radio">
                                <input type="radio" name="category" value="d">
                                <span class="form__radio-inner">Kategori 4</span>
                            </label>
                        </div>
                    </div>

                    <div class="form__actions">
                        <button class="btn btn--transparent">Rensa alternativ</button>
                        <button class="btn">Skicka</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="poster">
            <div class="poster__overlay">
                <div class="poster__content">
                    <h2 class="poster__title">Förändringen börjar nu!</h2>
                    <p class="poster__text">Vi kommer alltid att utgå ifrån barnens bästa och vår hållbarhetsvision är att göra barnklädesmarknaden mer hållbar – för jorden går i arv, och det ska våra kläder också göra.</p>
                    <a href="#" class="btn btn--white poster__cta">Vårt hållbarhetslöfte</a>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="footer__content">
                    <div class="footer__brand">
                        <svg class="footer__logo" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 190 220"><g clip-path="url(#b)"><path d="M55.508 19.546C69.83 2.285 87.542-2.284 109.237.931c11.356 1.692 23.136 4.654 31.526 12.523 7.796 7.277 11.525 17.854 17.118 26.907 6.78 11.17 16.526 20.477 22.543 32.07 18.729 36.046 7.712 92.4-13.475 124.892-4.322 6.685-9.576 13.115-16.441 17.177-14.915 8.8-33.644 4.992-50.678 1.692-18.728-3.554-37.796-6.346-56.864-7.446-15.254-.846-28.136-4.315-36.186-18.869-6.695-12.016-7.373-26.4-6.356-40.108 3.305-45.438 24.322-88.17 51.186-125.23 1.271-1.693 2.543-3.385 3.898-4.993Z" fill="#202E55"/><path d="M153.305 139.954c2.966-.593 5.424-1.608 7.288-4.569-1.017-.17-1.864-.508-2.712-.508-1.779.084-3.559.508-5.339.508-.678 0-1.525-.593-1.864-1.1-.254-.424-.17-1.354.169-1.777 1.102-1.354 2.373-2.454 3.475-3.723.339-.424.763-1.1.678-1.524-.17-.423-.932-.846-1.441-.93-.762-.085-1.61.169-2.373.338-3.22.508-6.44 1.1-9.661 1.608-.762.085-1.525-.169-.932-1.185.678-1.269 1.356-2.623 2.204-3.807 1.864-2.624 3.05-5.5 3.813-8.547.085-.338-.085-.93-.339-1.184-.254-.169-.847-.169-1.186-.085-.763.339-1.441.931-2.204 1.354-1.356.931-2.542 2.369-4.83 1.692a27.86 27.86 0 0 0 .847-2.454c.593-1.438 1.526-2.876 1.78-4.399.424-2.539.847-4.147-1.526-5.501-1.864 1.777-2.966 4.485-6.016 5.416 0-.592-.085-1.016.084-1.269 1.102-2.539 2.373-4.993 3.305-7.616.339-1.015.424-2.707-.169-3.469-.932-1.185-2.204 0-3.136.677-.169.17-.339.338-.508.423l-2.373 1.185c1.186-4.739 3.475-8.546 3.559-13.285-3.22 1.185-4.068 4.485-6.44 6.6-.085-.592-.17-1.015-.085-1.354.169-2.454.424-4.992.508-7.446 0-.846-.423-1.692-.762-2.962a217.217 217.217 0 0 1-3.56 4.147v-1.27c.17-1.607.424-3.215.424-4.823 0-.423-.339-1.1-.678-1.184-.254-.085-.932.254-1.186.592-1.102 1.354-1.865 1.439-2.967.085-1.525-1.862-2.796-3.977-4.491-5.67-1.271-1.269-1.356-2.453-1.017-4.061.763-3.892 1.356-7.785 1.949-11.677.339-2.115.424-4.315.848-6.515.847-4.654 1.356-9.224.508-13.877-.508-2.623-2.966-4.147-5.254-3.3-1.017.423-2.034 1.1-2.882 1.861-.932 1.016-1.779 2.116-2.457 3.385-1.949 3.977-3.814 8.038-5.678 12.1-.847 1.861-1.44 3.892-2.288 6.346-.932-1.1-1.695-1.777-1.95-2.539-1.016-2.792-2.118-5.584-2.711-8.461-1.102-5.33-1.865-10.746-2.712-16.162-.34-2.538-.254-5.076-.763-7.53-.339-1.693-1.102-3.385-2.034-4.908-.932-1.439-3.05-1.523-4.152-.17-.678.847-1.44 1.778-1.78 2.708-.932 3.3-1.864 6.6-2.288 9.985-1.102 7.362-.932 14.723.339 22.085.678 3.977 1.356 7.953 3.475 11.423.254.423.339 1.015.593 1.523-1.695.423-3.22.677-4.661 1.184-2.797.931-5.593 1.777-8.22 3.047-2.204 1.1-3.984 2.792-6.018 4.146-3.474 2.369-5.847 5.584-6.864 9.561-1.356 5.67-2.119 11.508-3.39 17.177-.508 2.031-1.356 4.231-2.627 5.923-1.695 2.285-3.983 4.146-5.763 6.346-3.135 3.893-6.864 7.193-10.847 10.154-2.458 1.777-4.237 4.146-6.187 6.346-3.22 3.723-5.254 7.7-4.406 12.862.762 4.908 2.712 8.885 7.542 10.831 1.526.592 3.22.761 4.83.846 1.95.084 3.899-.085 5.763-.423 0 0 6.865-.592 20.424-6.262 2.966-.93 6.017-1.777 8.983-2.707 2.966-.931 5.763-2.2 8.898-2.708 2.204-.339 2.882-.339 2.712 2.284-.254 3.47-.593 7.024-.593 10.493 0 4.992.339 9.984.593 14.977.085 2.03.593 3.977.848 6.007.508 2.962 1.017 5.923 1.44 8.97.17 1.184.763 2.623.34 3.638 0 0 61.355 17.685 76.864-44.338-3.56-1.27-7.373-1.439-10.763-3.554ZM80.339 124.3c-1.102 3.469-2.712 6.938-5.254 9.646-2.458 2.539-5.678 4.315-9.238 4.654-.678.085-1.27-.592-1.27-1.269 0-.762.592-1.185 1.27-1.27 6.526-.507 10.255-6.853 12.034-12.353.509-1.608 2.966-1.016 2.458.592Zm9.576-22.846c-2.627 2.031-5.508 2.707-8.39 3.554-3.898 1.015-7.881 1.777-11.78 2.623-1.694.338-3.05-.846-3.135-3.046-.085-2.116.254-4.231.424-6.262.17-2.961.678-5.838 2.034-8.461 2.203-4.147 5.508-7.024 12.034-7.362 1.44.338 4.322.846 6.949 1.862 2.288.846 4.068 2.538 4.491 5.161.085.254.255.508.424.762 1.95 3.553.17 8.63-3.05 11.169Z" fill="#fff"/><path d="M79.068 92.485c-2.288 0-4.237 1.861-4.237 4.23 0 .677.17 1.354.423 1.862v.17c0 .676.593 1.268 1.271 1.268.678 0 1.272-.592 1.272-1.269v-.507c0-.17.084-.339.084-.424 0-.084.085-.169.085-.169l.085-.17.085-.084h.17c.169 0 .338-.084.508-.084H80l.254.084h.085l.085.085.084-.17c0 .085.085.17.085.17 0 .084.085.17.085.254v.846c0 .677.593 1.27 1.271 1.27.678 0 1.271-.593 1.271-1.27 0-.338 0-.677-.084-1.016.084-.253.084-.592.084-.93.085-2.285-1.78-4.146-4.152-4.146Z" fill="#fff"/></g><defs><clipPath id="b"><path fill="#fff" d="M0 0h190v220H0z"/></clipPath></defs></svg>
                        <div class="footer__brand-text">
                            <div class="footer__title">Donkey Clothing</div>
                            <p class="footer__text">Donkey har kläder till barn, från nyfödd och baby, till barn i förskole- och skolåldern. Barnkläder och bebiskläder som underlättar vardagen och som fungerar lika bra för fartfyllda utomhusaktiviteter som till fest. Med 100 % hållbarhetsmärkt bomull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen. Helt enkelt kläder som låter barn vara barn.</p>
                        </div>
                    </div>
                    <div class="footer__contact">
                        <p class="footer__contact-address">
                            Donkey Clothing <br>
                            194 61 Stockholm <br>
                            Sweden
                        </p>

                        <a href="tel:+46000000000" class="footer__contact-phone">
                            +46 0 000 000 00
                        </a>

                        <a href="mailto:nfo@donkey.com" class="footer__contact-email">
                            info@donkey.com
                        </p>
                    </div>
                </div>
                <ul class="footer__links">
                    <li class="footer__link"><a href="#">Om Donkey</a></li>
                    <li class="footer__link"><a href="#">Hitta våra butiker</a></li>
                    <li class="footer__link"><a href="#">Jobba hos oss</a></li>
                    <li class="footer__link"><a href="#">Press</a></li>
                    <li class="footer__link"><a href="#">Privacy Policy</a></li>
                    <li class="footer__link"><a href="#">Cookie Policy</a></li>
                </ul>
            </div>
        </div>

        <script type="module" crossorigin src="http://localhost:3000/@vite/client"></script>
        <script type="module" crossorigin src="http://localhost:3000/resources/js/app.js"></script>
    </body>
</html>
