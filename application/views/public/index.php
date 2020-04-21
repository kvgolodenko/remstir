    <main>
        <div class="top-block">
            <div class="fixed-image" style="background-image: url(<?php echo URL::site('img/tools.jpg')?>)"></div>
            <div class="logo-image" style="background-image: url(<?php echo URL::site('img/logo_2.png')?>)">
                <div class="message">
                    Заказать консультацию
                </div>
            </div>
            <div class="form-layer">
                <form class="sms-form">
                    <div class="close">
                        X
                    </div>
                    Оставьте свой номер телефона и мы вам обязательно перезвоним!
                    <input type="phone" class="telephone" name="phone" placeholder="Введите номер телефона">
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
        <div class="options" style="background-image: url(<?php echo URL::site('img/iron_layer.jpg')?>)">
            <div class="option wash" style="background-image: url(<?php echo URL::site('img/wash.png')?>)">
                <span class="additional-text">
                    Быстрый, качественный и недорогой ремонт стиральных машин любых производителей.
                    <br>
                    Ремонтные работы проводятся с выездом мастера по городу Сумы и области.
                    Гарантия на ремонт и запчасти 1 год.
                    Просто позвоните нам или оставьте заявку на сайте и ваша помощница будет работать как новенькая!

                </span>
                <p>Ремонт стиральных машин</p>
            </div>
            <div class="option boiler" style="background-image: url(<?php echo URL::site('img/boiler.png')?>)">
                 <span class="additional-text">
                    Для долгосрочной и качественной работы бойлера, просто необходимо проводить его чистку  не реже одного раза в год.
                    Ведь горячая вода это комфорт, к которому мы все так привыкли.
                    Мы не только установим или почистим ваш бойлер, а и посоветуем как его выбрать!
                    Для заказа услуги чистки бойлера в Сумах и области просто позвоните нам или оставьте заявку на сайте!
                </span>
                <p>Установка и чистка бойлеров</p>
            </div>
            <div class="option parts" style="background-image: url(<?php echo URL::site('img/parts.png')?>)">
                 <span class="additional-text">
                    Только у нас самый широкий выбор оригинальных запчастей к любым стиральных машинам,
                     а так же более бюджетных но не менее качественных аналогов.
                     Доставляем запчасти к стиральным машинам по городу Сумы, а так же области.
                     Возможна отправка по Украине.
                </span>
                <p>Продажа оригинальных запчастей</p>
            </div>
        </div>
        <div class="questions" style="background-image: url(<?php echo URL::site('img/grey_cat.jpg')?>); background-position: center">
            <div class="question-layer">
                <div class="question">
                    <?php include DOCROOT . '/img/question.svg' ?>
                    Плохо отжимает воду, барабан не вращается, белье не отстирывается?
                </div>
                <div class="question">
                    <?php include DOCROOT . '/img/question.svg' ?>
                    Протекает вода, не нагревается, сильно шумит при отжиме?
                </div>
                <div class="question">
                    <?php include DOCROOT . '/img/question.svg' ?>
                    Электронный блок периодически зависает, люк не открывается?
                </div>
            </div>
        </div>
        <div class="contacts" style="background-image: url(<?php echo URL::site('img/contact-image.png')?>)">
            <div class="column left">

            </div>
            <div class="column right">
                <div class="contacts-layer">
                    <div class="contacts-text">
                        Контакты
                        <h2>050 307 56 31</h2>
                        Выезд по г. Сумы и области
                        <br>
                        Белопольский р-н
                        <br>
                        Лебединский р-н
                        <br>
                        Без выходных
                    </div>
                    <br>
                    <div class="social-top">
                        <a href="<?php echo $contact_insta_url;?>" target="_blank">
                            <img src="<?php echo URL::site('/img/instg.png')?>" alt="">
                            <p><?php echo (str_replace('https://instagram.com/','',$contact_insta_url))?></p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>
