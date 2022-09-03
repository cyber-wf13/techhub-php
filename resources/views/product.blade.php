<x-layout>
    <x-breadcrumbs />

    <div class="popup" id="popup-delivery">
        <form class="popup__form" action="#">
            <div class="popup__wrapper">
                <button class="popup__close-btn" data-close></button>
                <h2 class="popup__title">Заказ</h2>
                <div class="popup__content">
                    <p class="popup__text">Оставьте ваше имя и номер телефона
                        и наш менеджер перезвонит вам</p>
                    <span class="popup__product">Амортизатор задний левый Land Rover Range Rover Sport Range Rover
                        Sport (LS)
                        2005
                        -
                        2013</span>
                    <div class="popup__input-items">
                        <input class="popup__input" type="text" placeholder="Ваше имя" id="name" required>
                        <label class="popup__label" for="name">*</label>
                        <input class="popup__input" type="tel" placeholder="Ваш телефон" id="phone" required>
                        <label class="popup__label" for="phone">*</label>
                        <textarea class="popup__input popup__input-message" name="delivery-message" cols="30" rows="10" placeholder="Коментарий"></textarea>
                        <input class="popup__btn" type="submit" value="Отправить">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container">

        <div class="product-content">
            <x-aside />

            <div class="product-content__wrapper">

                <button class="product-content__aside-btn--mobile">Фильтр</button>
                <section class="gallery">
                    <div class="gallery__tags-info">
                        <span class="gallery__tags-item">в наличии</span>
                        <span class="gallery__tags-vendor">Артикул: <strong>1234565</strong></span>
                    </div>

                    <h4 class="gallery__title">Расходомер воздуха 3455653234 Mercedes S-klasse 2010 - 2019</h4>

                    <div class="gallery__content">
                        <div class="gallery__img">
                            <div class="gallery__img-wrapper">
                                <img class="gallery__img-item" src="../img/product-1.png" alt="product">
                                <img class="gallery__img-item" src="../img/product-2.png" alt="product">
                                <img class="gallery__img-item" src="../img/product-3.png" alt="product">
                            </div>
                            <img class="gallery__image" src="../img/product-1.png" alt="product">
                        </div>

                        <div class="gallery__info">
                            <table class="gallery__table">
                                <tbody>
                                    <tr class="gallery__table-row">
                                        <td class="gallery__table-cell gallery__table-title">Марка</td>
                                        <td class="gallery__table-cell gallery__table-content">Mersedes</td>
                                    </tr>

                                    <tr class="gallery__table-row">
                                        <td class="gallery__table-cell gallery__table-title">Модель</td>
                                        <td class="gallery__table-cell gallery__table-content">S-klass</td>
                                    </tr>

                                    <tr class="gallery__table-row">
                                        <td class="gallery__table-cell gallery__table-title">OEM</td>
                                        <td class="gallery__table-cell gallery__table-content">344gf355</td>
                                    </tr>

                                    <tr class="gallery__table-row">
                                        <td class="gallery__table-cell gallery__table-title">Год</td>
                                        <td class="gallery__table-cell gallery__table-content">2011</td>
                                    </tr>

                                    <tr class="gallery__table-row">
                                        <td class="gallery__table-cell gallery__table-title">Тип ДВС</td>
                                        <td class="gallery__table-cell gallery__table-content">бензин</td>
                                    </tr>

                                    <tr class="gallery__table-row">
                                        <td class="gallery__table-cell gallery__table-title">Объем</td>
                                        <td class="gallery__table-cell gallery__table-content">5.5</td>
                                    </tr>

                                    <tr class="gallery__table-row">
                                        <td class="gallery__table-cell gallery__table-title">Коментарий</td>
                                        <td class="gallery__table-cell gallery__table-content">Сайт использует файлы
                                            cookie, чтобы
                                            гарантировать максимальное </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="gallery__price">
                                <span class="gallery__price-count">
                                    <strong>100</strong> UAH <span class="gallery__price-count gallery__price-count--color">/ 3$</span>
                                </span>
                                <button class="gallery__btn">Заказать</>
                            </div>

                        </div>
                    </div>
                </section>

                <div class="other">
                    <div class="other__head">
                        <label class="other__label">
                            <input class="other__radio _visually-hidden" type="radio" name="other-info" checked value="slider">
                            <h5 class="other__title">Похожие запчасти</h5>
                        </label>

                        <label class="other__label">
                            <input class="other__radio _visually-hidden" type="radio" name="other-info" value="info">
                            <h5 class="other__title">Дополнительная информация</h5>
                        </label>
                    </div>

                    <div class="other__content">
                        <div class="other-slider swiper" data-item="slider" data-active>
                            <div class="swiper-wrapper">
                                <div class="other-slider__item swiper-slide">
                                    <div class="card ">
                                        <img class="card__img" src="../img/product-1.png" alt="">
                                        <p class="card__descr">Ручка наружная 00093654 Ford Explorer v 2010 - 2019
                                        </p>
                                        <div class="card__price"><span class="card__price-count">100</span> UAH
                                            <span class="card__price-count--color">/ 3$</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="other-slider__item swiper-slide">
                                    <div class="card ">
                                        <img class="card__img" src="../img/product-2.png" alt="">
                                        <p class="card__descr">Блок упраления ДВС 00089225 Infiniti FX I 2002 - 2008
                                        </p>
                                        <div class="card__price"><span class="card__price-count">10 000</span> UAH
                                            <span class="card__price-count--color">/ 350$</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="other-slider__item swiper-slide">
                                    <div class="card ">
                                        <img class="card__img" src="../img/product-3.png" alt="">
                                        <p class="card__descr">Двигатель 00058557 Honda Pilot II 2008 - 2015</p>
                                        <div class="card__price"><span class="card__price-count">1000</span> UAH
                                            <span class="card__price-count--color">/ 35$</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="other-slider__item swiper-slide">
                                    <div class="card ">
                                        <img class="card__img" src="../img/product-1.png" alt="">
                                        <p class="card__descr">Ручка наружная 00093654 Ford Explorer v 2010 - 2019
                                        </p>
                                        <div class="card__price"><span class="card__price-count">100</span> UAH
                                            <span class="card__price-count--color">/ 3$</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="other-slider__item swiper-slide">
                                    <div class="card ">
                                        <img class="card__img" src="../img/product-2.png" alt="">
                                        <p class="card__descr">Блок упраления ДВС 00089225 Infiniti FX I 2002 - 2008
                                        </p>
                                        <div class="card__price"><span class="card__price-count">10 000</span> UAH
                                            <span class="card__price-count--color">/ 350$</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="other-slider__item swiper-slide">
                                    <div class="card ">
                                        <img class="card__img" src="../img/product-3.png" alt="">
                                        <p class="card__descr">Двигатель 00058557 Honda Pilot II 2008 - 2015</p>
                                        <div class="card__price"><span class="card__price-count">1000</span> UAH
                                            <span class="card__price-count--color">/ 35$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <div class="other-info" data-item="info">
                            <ul class="other-info__list">
                                <li class="other-info__list-item">Ситуации, когда необходимо слить топливо из бака
                                    зачастую
                                    возникают тогда, когда автомобиль был заправлен некачественным бензином. После
                                    того, как водитель
                                    замечает,
                                    что в бак было залито топливо низкого качества, слить такой бензин, наиболее
                                    разумное решение, чтобы
                                    избежать
                                    возможных поломок двигателя. Второй причиной, по которой может понадобиться
                                    слить топливо из бака
                                    может стать
                                    необходимость использования бензина </li>
                                <li class="other-info__list-item">Ситуации, когда необходимо слить топливо из бака
                                    зачастую
                                    возникают тогда, когда автомобиль был заправлен некачественным бензином. </li>
                                <li class="other-info__list-item">Ситуации, когда необходимо слить топливо из бака
                                    зачастую
                                    возникают тогда, когда автомобиль был заправлен некачественным бензином. </li>
                                <li class="other-info__list-item">Ситуации, когда необходимо слить топливо из бака
                                    зачастую
                                    возникают
                                    тогда, когда автомобиль был заправлен некачественным бензином. </li>
                                <li class="other-info__list-item">Ситуации, когда необходимо слить топливо из бака
                                    зачастую
                                    возникают
                                    тогда, когда автомобиль был заправлен некачественным бензином. </li>
                                <li class="other-info__list-item">Ситуации, когда необходимо слить топливо из бака
                                    зачастую
                                    возникают
                                    тогда, когда автомобиль был заправлен некачественным бензином. </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="textbox">
                    <h2 class="title textbox__title">Блок для SEO текста</h2>
                    <div class="textbox__text">
                        <p class="textbox__text-inner">
                            Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                            Вдали от всех живут
                            они в
                            буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль
                            журчит по всей
                            стране
                            и
                            обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой
                            жаренные члены
                            предложения
                            залетают прямо в рот.
                        </p>
                        <a href="#" class="link">Читать полностью</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-layout>
