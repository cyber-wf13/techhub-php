<x-layout>
    <div class="search">
        <form action="#" class="form">
            <h4 class="form__title">Поиск запчастей</h4>

            <label class="select-label" for="brands-select">
                <select class="select" name="brands-select" id="brands-select">
                    <option class="select__item" selected disabled>Марка</option>
                    <option class="select__item" value="BMW">BMW</option>
                    <option class="select__item" value="Porshe">Porshe</option>
                    <option class="select__item" value="Mersedes">Mersedes</option>
                </select>
            </label>

            <label class="select-label" for="model-select">
                <select class="select" name="model-select" id="model-select" disabled>
                    <option class="select__item" selected disabled>Модель</option>
                    <option class="select__item" value="BMW">BMW</option>
                    <option class="select__item" value="Porshe">Porshe</option>
                    <option class="select__item" value="Mersedes">Mersedes</option>
                </select>
            </label>

            <label class="select-label" for="spares-select">
                <select class="select" name="spares-select" id="spares-select">
                    <option class="select__item" selected disabled>Запчасти</option>
                    <option class="select__item" value="BMW">BMW</option>
                    <option class="select__item" value="Porshe">Porshe</option>
                    <option class="select__item" value="Mersedes">Mersedes</option>
                </select>
            </label>

            <label class="select-label" for="oem-select">
                <select class="select" name="oem-select" id="oem-select">
                    <option class="select__item" selected disabled>ОЕМ</option>
                    <option class="select__item" value="BMW">BMW</option>
                    <option class="select__item" value="Porshe">Porshe</option>
                    <option class="select__item" value="Mersedes">Mersedes</option>
                </select>
            </label>

            <label class="select-label" for="vendor-code-select">
                <select class="select" name="vendor-code-select" id="vendor-code-select">
                    <option class="select__item" selected disabled>Артикул</option>
                    <option class="select__item" value="BMW">BMW</option>
                    <option class="select__item" value="Porshe">Porshe</option>
                    <option class="select__item" value="Mersedes">Mersedes</option>
                </select>
            </label>

            <input class="form__submit" type="submit" value="Искать">
        </form>
    </div>

    <section class="brands">
        <div class="container">
            <h2 class="title">Марки</h2>
            <p class="brands__text">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                Вдали
                от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль
                журчит
                по
                всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные
                члены
                предложения залетают прямо в рот.</p>

            <div class="swiper brands-slider">
                <div class="swiper-wrapper">
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-1.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-2.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-3.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-4.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-5.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-6.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-6.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-5.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-4.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-3.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-2.png);"></div>
                    </div>
                    <div class="brands-slider__item swiper-slide">
                        <div class="brands-slider__item-inner" style="background-image: url(img/brand-1.png);"></div>
                    </div>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </section>

    <section class="product">
        <div class="container">
            <h2 class="title">новые поступления</h2>
            <div class="product-slider swiper">
                <div class="swiper-wrapper">
                    <div class="product-slider__item swiper-slide">
                        <div class="card card-product">
                            <img class="card__img card-product__img" src="img/product-1.png" alt="">
                            <p class="card__descr card-product__descr">Ручка наружная 00093654 Ford Explorer v 2010 - 2019</p>
                            <div class="card__price"><span class="card__price-count">100</span> UAH
                                <span class="card__price-count--color">/ 3$</span>
                            </div>
                            <a class="card-product__card-btn" href="pages/page-product.html">Подробнее</a>
                        </div>
                    </div>

                    <div class="product-slider__item swiper-slide">
                        <div class="card card-product">
                            <img class="card__img card-product__img" src="img/product-2.png" alt="">
                            <p class="card__descr card-product__descr">Блок упраления ДВС 00089225 Infiniti FX I 2002 - 2008</p>
                            <div class="card__price"><span class="card__price-count">10 000</span> UAH
                                <span class="card__price-count--color">/ 350$</span>
                            </div>
                            <a class="card-product__card-btn" href="pages/page-product.html">Подробнее</a>
                        </div>
                    </div>

                    <div class="product-slider__item swiper-slide">
                        <div class="card card-product">
                            <img class="card__img card-product__img" src="img/product-3.png" alt="">
                            <p class="card__descr card-product__descr">Двигатель 00058557 Honda Pilot II 2008 - 2015</p>
                            <div class="card__price"><span class="card__price-count">1000</span> UAH
                                <span class="card__price-count--color">/ 35$</span>
                            </div>
                            <a class="card-product__card-btn" href="pages/page-product.html">Подробнее</a>
                        </div>
                    </div>
                    <div class="product-slider__item swiper-slide">
                        <div class="card card-product">
                            <img class="card__img card-product__img" src="img/product-1.png" alt="">
                            <p class="card__descr card-product__descr">Ручка наружная 00093654 Ford Explorer v 2010 - 2019</p>
                            <div class="card__price"><span class="card__price-count">580</span> UAH
                                <span class="card__price-count--color">/ 36$</span>
                            </div>
                            <a class="card-product__card-btn" href="pages/page-product.html">Подробнее</a>
                        </div>
                    </div>
                    <div class="product-slider__item swiper-slide">
                        <div class="card card-product">
                            <img class="card__img card-product__img card-product__img" src="img/product-2.png" alt="">
                            <p class="card__descr card-product__descr">Ручка наружная 00093654 Ford Explorer v 2010 - 2019</p>
                            <div class="card__price"><span class="card__price-count">100</span> UAH
                                <span class="card__price-count--color">/ 3$</span>
                            </div>
                            <a class="card-product__card-btn" href="pages/page-product.html">Подробнее</a>
                        </div>
                    </div>

                    <div class="product-slider__item swiper-slide">
                        <div class="card card-product">
                            <img class="card__img card-product__img card-product__img" src="img/product-3.png" alt="">
                            <p class="card__descr card-product__descr">Ручка наружная 00093654 Ford Explorer v 2010 - 2019</p>
                            <div class="card__price"><span class="card__price-count">100</span> UAH
                                <span class="card__price-count--color">/ 3$</span>
                            </div>
                            <a class="card-product__card-btn" href="pages/page-product.html">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>


    <section class="blog">
        <h2 class="title">Блог</h2>
        <div class="blog-slider swiper">
            <div class="swiper-wrapper">
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-card">
                        <h4 class="blog-slider__title blog-card__title">Как слить бензин из бензобака авто</h4>
                        <p class="blog-slider__text blog-card__text">Многие автолюбители помнят ситуацию, когда после сурового
                            мороза
                            зимой колеса на машине не двигались. Такие вещи не всегда замечали. Водитель мог</p>
                        <a href="pages/page-blog-single.html" class="link">Читать полностью</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-card">
                        <h4 class="blog-slider__title blog-card__title">Плохо греет печка в авто - причины</h4>
                        <p class="blog-slider__text blog-card__text">Все причины, по которым не греет печка в машине, делятся на
                            две
                            группы: сбои в работе системы отопления, и неполадки охлаждающей системы.</p>
                        <a href="pages/page-blog-single.html" class="link">Читать полностью</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-card">
                        <h4 class="blog-slider__title blog-card__title">Утепляем аккумулятор автомобиля к зиме</h4>
                        <p class="blog-slider__text blog-card__text">Холод способствует ускоренной разрядке аккумулятора в машине.
                            Поэтому зимой по утрам можно увидеть, как люди безуспешно пытаются завести авто, всю ночь</p>
                        <a href="pages/page-blog-single.html" class="link">Читать полностью</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-card">
                        <h4 class="blog-slider__title blog-card__title">Как слить бензин из бензобака авто</h4>
                        <p class="blog-slider__text blog-card__text">Многие автолюбители помнят ситуацию, когда после сурового
                            мороза
                            зимой колеса на машине не двигались. Такие вещи не всегда замечали. Водитель мог</p>
                        <a href="pages/page-blog-single.html" class="link">Читать полностью</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-card">
                        <h4 class="blog-slider__title blog-card__title">Как слить бензин из бензобака авто</h4>
                        <p class="blog-slider__text blog-card__text">Многие автолюбители помнят ситуацию, когда после сурового
                            мороза
                            зимой колеса на машине не двигались. Такие вещи не всегда замечали. Водитель мог</p>
                        <a href="pages/page-blog-single.html" class="link">Читать полностью</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-card">
                        <h4 class="blog-slider__title blog-card__title">Как слить бензин из бензобака авто</h4>
                        <p class="blog-slider__text blog-card__text">Многие автолюбители помнят ситуацию, когда после сурового
                            мороза
                            зимой колеса на машине не двигались. Такие вещи не всегда замечали. Водитель мог</p>
                        <a href="pages/page-blog-single.html" class="link">Читать полностью</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="delivery">
        <div class="container">
            <h2 class="title">Доставка и гарантия</h2>
            <div class="delivery__text">
                <p class="delivery__text-inner">
                    Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они
                    в
                    буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и
                    обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены
                    предложения
                    залетают прямо в рот.
                </p>
                <a href="#" class="link">Читать полностью</a>
            </div>
            <div class="delivery__info">
                <div class="delivery__card">
                    <div class="delivery__card-icon">
                        <img src="img/card-icon-1.svg" alt="">
                    </div>
                    <div class="delivery__card-text">
                        <h4 class="delivery__card-title">Доставка по Украине</h4>
                        <span class="delivery__card-subtitle">Вторая строка</span>
                    </div>
                </div>
                <div class="delivery__card">
                    <div class="delivery__card-icon">
                        <img src="img/card-icon-2.svg" alt="">
                    </div>
                    <div class="delivery__card-text">
                        <h4 class="delivery__card-title">Гарантия возврата</h4>
                        <span class="delivery__card-subtitle">Вторая строка</span>
                    </div>
                </div>
                <div class="delivery__card">
                    <div class="delivery__card-icon">
                        <img src="img/card-icon-3.svg" alt="">
                    </div>
                    <div class="delivery__card-text">
                        <h4 class="delivery__card-title">Подбор запчастей</h4>
                        <span class="delivery__card-subtitle">Вторая строка</span>
                    </div>
                </div>
                <div class="delivery__card">
                    <div class="delivery__card-icon">
                        <img src="img/card-icon-4.svg" alt="">
                    </div>
                    <div class="delivery__card-text">
                        <h4 class="delivery__card-title">Подарки клиентам</h4>
                        <span class="delivery__card-subtitle">Вторая строка</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
