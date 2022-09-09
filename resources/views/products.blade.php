<x-layout>

    <x-breadcrumbs />

    <div class="container">

        <div class="content">
            <x-aside />

            <div class="content__card-box">
                <div class="content__review">
                    <h4 class="content__review-title">Просмотр</h4>
                    <button class="content__aside-btn--mobile">Фильтр</button>
                    <div class="content__review-wrapper">
                        <input type="radio" name="review" id="review-list" class="content__review-radio">
                        <label class="content__review-label content__label-list" for="review-list">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.0645 0.967743H1.93548C0.870968 0.967743 0 1.83871 0 2.90323C0 3.96774 0.870968 4.83871 1.93548 4.83871H18.0645C19.129 4.83871 20 3.96774 20 2.90323C20 1.83871 19.129 0.967743 18.0645 0.967743Z" fill="black" />
                                <path d="M18.0645 8.06451H1.93548C0.870968 8.06451 0 8.93548 0 10C0 11.0645 0.870968 11.9355 1.93548 11.9355H18.0645C19.129 11.9355 20 11.0645 20 10C20 8.93548 19.129 8.06451 18.0645 8.06451Z" fill="black" />
                                <path d="M18.0645 15.1613H1.93548C0.870968 15.1613 0 16.0323 0 17.0968C0 18.1613 0.870968 19.0323 1.93548 19.0323H18.0645C19.129 19.0323 20 18.1613 20 17.0968C20 16.0323 19.129 15.1613 18.0645 15.1613Z" fill="black" />
                            </svg>
                        </label>

                        <input type="radio" name="review" id="review-card" class="content__review-radio" checked>
                        <label class="content__review-label content__label-card" for="review-card">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.46726 0.621633C5.46726 0.277663 5.1896 0 4.84563 0H0.659964C0.315993 0 0.0383301 0.277663 0.0383301 0.621633V4.80937C0.0383301 5.15334 0.315993 5.431 0.659964 5.431H4.8477C5.19167 5.431 5.46934 5.15334 5.46934 4.80937V0.621633H5.46726Z" fill="black" />
                                <path d="M12.7134 0.621633C12.7134 0.277663 12.4357 0 12.0917 0H7.90606C7.56209 0 7.28442 0.277663 7.28442 0.621633V4.80937C7.28442 5.15334 7.56209 5.431 7.90606 5.431H12.0917C12.4357 5.431 12.7134 5.15334 12.7134 4.80937V0.621633Z" fill="black" />
                                <path d="M19.9597 0.621633C19.9597 0.277663 19.682 0 19.3381 0H15.1524C14.8084 0 14.5308 0.277663 14.5308 0.621633V4.80937C14.5308 5.15334 14.8084 5.431 15.1524 5.431H19.3401C19.6841 5.431 19.9618 5.15334 19.9618 4.80937V0.621633H19.9597Z" fill="black" />
                                <path d="M5.46726 7.90719C5.46726 7.56322 5.1896 7.28555 4.84563 7.28555H0.659964C0.315993 7.28555 0.0383301 7.56322 0.0383301 7.90719V12.0929C0.0383301 12.4368 0.315993 12.7145 0.659964 12.7145H4.8477C5.19167 12.7145 5.46934 12.4368 5.46934 12.0929V7.90719H5.46726Z" fill="black" />
                                <path d="M12.7134 7.90719C12.7134 7.56322 12.4357 7.28555 12.0917 7.28555H7.90606C7.56209 7.28555 7.28442 7.56322 7.28442 7.90719V12.0929C7.28442 12.4368 7.56209 12.7145 7.90606 12.7145H12.0917C12.4357 12.7145 12.7134 12.4368 12.7134 12.0929V7.90719Z" fill="black" />
                                <path d="M19.9597 7.90719C19.9597 7.56322 19.682 7.28555 19.3381 7.28555H15.1524C14.8084 7.28555 14.5308 7.56322 14.5308 7.90719V12.0929C14.5308 12.4368 14.8084 12.7145 15.1524 12.7145H19.3401C19.6841 12.7145 19.9618 12.4368 19.9618 12.0929V7.90719H19.9597Z" fill="black" />
                                <path d="M4.84563 14.569H0.659964C0.315993 14.569 0.0383301 14.8467 0.0383301 15.1907V19.3784C0.0383301 19.7224 0.315993 20 0.659964 20H4.8477C5.19167 20 5.46934 19.7224 5.46934 19.3784V15.1907C5.46726 14.8488 5.1896 14.569 4.84563 14.569Z" fill="black" />
                                <path d="M12.0917 14.569H7.90606C7.56209 14.569 7.28442 14.8467 7.28442 15.1907V19.3784C7.28442 19.7224 7.56209 20 7.90606 20H12.0917C12.4357 20 12.7134 19.7224 12.7134 19.3784V15.1907C12.7134 14.8488 12.4357 14.569 12.0917 14.569Z" fill="black" />
                                <path d="M19.3381 14.569H15.1524C14.8084 14.569 14.5308 14.8467 14.5308 15.1907V19.3784C14.5308 19.7224 14.8084 20 15.1524 20H19.3401C19.6841 20 19.9618 19.7224 19.9618 19.3784V15.1907C19.9597 14.8488 19.682 14.569 19.3381 14.569Z" fill="black" />
                            </svg>
                        </label>
                    </div>

                    <button class="content__review-btn"></button>
                    <div class="content__review-filter filter">
                        <form action="#" class="filter__form">
                            <ul class="filter__list">
                                <li class="filter__list-item">
                                    <input type="radio " name="filter" id="filter-new" class="content__review-radio">
                                    <label class="filter__label" for="filter-new">Сначала новые</label>
                                </li>
                                <li class="filter__list-item">
                                    <input type="radio " name="filter" id="filter-cheap" class="content__review-radio">
                                    <label class="filter__label" for="filter-cheap">Сначала дешевые</label>
                                </li>
                                <li class="filter__list-item">
                                    <input type="radio " name="filter" id="filter-rich" class="content__review-radio">
                                    <label class="filter__label" for="filter-rich">Сначала дорогие</label>
                                </li>
                            </ul>
                        </form>
                    </div>

                </div>

                <div class="content__card-items">

                    @foreach ($products as $product)
                    <div class="card content__card">
                        <img class="card__img" src="../img/product-1.png" alt="">
                        <p class="card__descr content__card-descr">{{$product->name}}
                        </p>
                        <div class="card__price"><span class="card__price-count">{{$product->price}}</span> UAH
                            <span class="card__price-count--color">/ 3$</span>
                            <a class="card-list__btn" href="/product/{{$product->id}}">Подробнее</a>
                        </div>
                        <a class="content__card-btn" href="/product/{{$product->id}}">Подробнее</a>
                    </div>
                    @endforeach

                    <div class="content__page-number page-number">
                        <div class="page-number__wrapper">
                            <button class="page-number__arrow-prev page-number__arrow-btn"></button>
                            <ul class="page-number__list">
                                <li class="page-number__list-item"><a href="" class="page-number__link">1</a></li>
                                <li class="page-number__list-item"><a href="" class="page-number__link">2</a></li>
                                <li class="page-number__list-item"><a href="" class="page-number__link">3</a></li>
                                <li class="page-number__list-item"><a href="" class="page-number__link">4</a></li>
                                <li class="page-number__list-item"><a href="" class="page-number__link">5</a></li>
                                <li class="page-number__list-item"><a href="" class="page-number__link">6</a></li>
                                <li class="page-number__list-item"><a href="" class="page-number__link">7</a></li>
                            </ul>
                            <button class="page-number__arrow-next page-number__arrow-btn"></button>
                        </div>
                        <span class="page-number__count">1 - 50</span>
                    </div>

                </div>

            </div>
        </div>

        <div class="textbox">
            <h2 class="title textbox__title">Блок для SEO текста</h2>
            <div class="textbox__text">
                <p class="textbox__text-inner">
                    Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они
                    в
                    буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и
                    обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены
                    предложения
                    залетают прямо в рот.
                </p>
                <a href="#" class="link">Читать полностью</a>
            </div>
        </div>
    </div>
</x-layout>
