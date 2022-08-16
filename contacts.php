<?php include ('header.php')?>

    <section class="contacts">
        <div class="container">
            <h1 class="contacts-header">Расскажите мне о вашей идее</h1>
            <div class="contacts-wrapper">
                <div class="contacts-wrapper-text">
                <div class="contacts-text contacts-text-email">
                    <span class="contacts-text__header">E-mail</span>
                    <span class="contacts-text__discription">ameee.am@gmail.com</span>
                </div>
                <div class="contacts-text contacts-text-behance">
                    <span class="contacts-text__header">Behance</span>
                    <span class="contacts-text__discription">behance.net/annayavkina</span>
                </div>
                <div class="contacts-text contacts-text-telegram">
                    <span class="contacts-text__header">Telegram</span>
                    <span class="contacts-text__discription">@amushkaya</span>
                </div>
                <div class="contacts-text contacts-text-instagram">
                    <span class="contacts-text__header">Instagram</span>
                    <span class="contacts-text__discription">amushkaa</span>
                </div>
            </div>
            <!-- /.contacts-wrapper-text -->
            <div class="form-wrapper">
                <form action="#" id="form" class="form">
                    <input id="formName" type="text" class="form__input _req" placeholder="Ваше имя" name="name">
                    <input id="formEmail" type="email" class="form__input _req _email" placeholder="Email" name="email">
                    <label class="form__header">Любые детали</label>
                    <textarea id="formMessage" class= "form__message" placeholder="" name="message"></textarea>
                    <div class="form-wrapper-button">
                    <span class="form__agreement">Нажимая "отправить" вы соглашаетесь с обработкой персональных данных</span>
                    <button class="form__button" type="submit">отправить</button></div>
                </form>
            </div>
            <div class="contacts-wrapper__back">D</div>
            </div>
            <!-- /.contacts-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.contacts -->
    <footer class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <a class="footer__link-special" href="mailto:ameee.am@gmail.com">ameee.am@gmail.com</a>
                <span class="footer__text">© Anna Kargina, 2022</span>
            </div>
        </div>
    </footer>
    <div class="modal">
        <div class="modal__overlay"></div>
        <!-- /.modal__overlay -->
        <div class="modal__dialog">
            <a href="" class="modal__close">
                <img src="img/icon-close.svg" alt="icon: close">
            </a>
            <h2 class="modal__header">Спасибо за ваше сообщение!</h2>
            <p class="modal__text">Я свяжусь с вами по указанному почтовому адресу</p>
        </div>
        <!-- /.modal__dialog -->
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    </body>
    </html>