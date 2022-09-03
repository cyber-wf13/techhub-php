<x-layout>
    <x-breadcrumbs />

    <div class="container">

        <div class="popup popup-review" id="popup-review">
            <div class="popup__wrapper">
                <button class="popup__close-btn" data-close></button>
                <h2 class="popup__title">Спасибо</h2>
                <div class="popup__content">
                    <p class="popup__text">Ваше сообщение отправлено</p>
                    <button class="popup__btn popup-review__btn" data-close>Закрыть</button>
                </div>
            </div>
            </form>
        </div>

        <div class="contacts-block">


            <form action="#" class="form-contact">
                <h2 class="form-contact__title">Связаться с нами</h2>
                <p class="form-contact__text">Если у вас есть вопросы другого характера, пожалуйста, заполните следующую
                    форму,
                    чтобы связаться с нами. <br> Спасибо.</p>
                <div class="form-contact__items">
                    <input type="text" name="contact-name" class="form-contact__input-item" placeholder="Имя">
                    <input type="tel" name="contact-number" class="form-contact__input-item" placeholder="Телефон">
                    <input type="text" name="contact-theme" class="form-contact__input-item" placeholder="Тема">
                    <input type="email" name="contact-email" class="form-contact__input-item" placeholder="E-mail">
                    <input type="text" name="contact-message" class="form-contact__input-item form-contact__input-message" placeholder="Сообщение">
                    <div class="form-contact__wrapper">
                        <input type="submit" value="Отправить сообщение" class="form-contact__input-submit">
                    </div>
                </div>
            </form>

            <div class="contacts">
                <div class="contacts__item contacts__item-address">
                    <h4 class="contacts__title">Адрес</h4>
                    <span class="contacts__text">г. Киев</span>
                    <span class="contacts__text">ул. Улица, 45</span>
                </div>
                <div class="contacts__item contacts__item-phone">
                    <h4 class="contacts__title">Телефоны</h4>
                    <span class="contacts__text"><a href="tel:+38 097 516 50 50" class="contacts__link">+ 38 097 516 50
                            50</a></span>
                    <div class="contacts__social-items">
                        <div class="contacts__social-item contacts__telegram" style="background-image: url('../img/telegram.svg');"></div>
                        <div class="contacts__social-item contacts__whatsapp" style="background-image: url('../img/whatsapp.svg');"></div>
                        <div class="contacts__social-item contacts__viber" style="background-image: url('../img/viber.svg');">
                        </div>
                    </div>
                    <span class="contacts__text"><a href="tel:+38 097 678 27 52" class="contacts__link">+ 38 097 678 27
                            52</a></span>
                    <div class="contacts__social-items">
                        <div class="contacts__social-item contacts__telegram" style="background-image: url('../img/telegram.svg');"></div>
                        <div class="contacts__social-item contacts__whatsapp" style="background-image: url('../img/whatsapp.svg');"></div>
                    </div>
                </div>
                <div class="contacts__item contacts__item-email">
                    <h4 class="contacts__title">Электронная почта</h4>
                    <span class="contacts__text"><a href="mailto:info@autohub.com">info@autohub.com</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="location">
        <iframe class="location__map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d153522.16248505912!2d30.54082437847906!3d50.43322085544466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1622795266668!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</x-layout>
