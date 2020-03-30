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
                <p>Ремонт стиральных машин</p>
            </div>
            <div class="option boiler" style="background-image: url(<?php echo URL::site('img/boiler.png')?>)">
                <p>Установка и чистка бойлеров</p>
            </div>
            <div class="option parts" style="background-image: url(<?php echo URL::site('img/parts.png')?>)">
                <p>Продажа запчастей</p>
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
