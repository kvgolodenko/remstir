    <main>
        <div class="top-block">
            <div class="fixed-image"></div>
            <div class="logo-image">
                <div class="message">
                    Заказать консультацию
                </div>
            </div>
            <div class="form-layer">
                <form class="sms-form">
                    <div class="close">
                        X
                    </div>
                    <input type="phone" class="telephone" name="phone" placeholder="Введите номер телефона">
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
        <div class="options">
            <div class="option wash">
                <p>Ремонт стиральных машин</p>
            </div>
            <div class="option boiler">
                <p>Установка и чистка бойлеров</p>
            </div>
            <div class="option parts">
                <p>Продажа запчастей</p>
            </div>
        </div>
        <div class="questions">
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
        <div class="contacts">
            <div class="column left">

            </div>
            <div class="column right">
                <div class="contacts-layer">
                    <div class="contacts-text">
                        Контакты
                        <br>
                        050 307 56 31
                        <br>
                        Выезд по г. Сумы и области
                        <br>
                        Белопольский р-н
                        <br>
                        Лебединский р-н
                        <br>
                        Без выходных
                    </div>
                    <div class="social-top">
                        <a href="<?php echo $contact_insta_url;?>" target="_blank">
                            <img src="/img/instg.png" alt="">
                            <p><?php echo (str_replace('https://instagram.com/','',$contact_insta_url))?></p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>



