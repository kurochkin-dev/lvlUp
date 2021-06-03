<?php
include 'module/header.php';
?>
<section class="studio">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="studio__wrap">
                    <h1 class="studio__title">Web-студия полного цикла разработки</h1>
                    <p class="studio__desc">Оказываем качественные услуги по разработке, поддержке и рекламе, каждый
                        член команды является высококлассным специалистом своего дела.</p>
                    <button class="studio__btn btn">Оставить заявку</button>
                </div>
            </div>
            <div class="col-6 d-none d-md-block">
                <img class="studio__img" src="../assets/img/lvlup-studio.svg" alt="Студия">
            </div>
        </div>
    </div>
</section>
<section class="services">
    <h1 class="services__title">Мы делаем</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <p class="services__subtitle">Наши услуги</p>
            </div>
            <div class="col-12 col-lg-3 col-xl-3 col-md-3 col-sm-12">
                <ul class="services__main-list">
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Разработка</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Дизайн</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Продвижение</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Поддержка</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                <div class="services__block">
                    <p class="services__desc">
                        Сайт — это важнейший инструмент Вашего бизнеса, ведь с его помощью происходит взаимодействие с
                        разными каналами рекламы, кроме того, это главный продавец компании в интернете, а также ее
                        лицо.
                    </p>
                    <ul class="services__block-list">
                        <li class="block-list__item"><span class="block-list__marker"></span>landing page;</li>
                        <li class="block-list__item"><span class="block-list__marker"></span>сайт-визитка;</li>
                        <li class="block-list__item"><span class="block-list__marker"></span>многостраничный сайт;</li>
                        <li class="block-list__item"><span class="block-list__marker"></span>сайт-каталог;</li>
                        <li class="block-list__item"><span class="block-list__marker"></span>интернет-магазин.</li>
                    </ul>
                    <button class="services__button btn">Подробнее</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advantages">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-2 col-xl-2 col-md-2 col-sm-12">
                <p class="advantages__subtitle">Наши преимущества</p>
            </div>
            <div class="col-12 col-lg-5 col-xl-5 col-md-5 col-sm-12">
                <h3 class="advantages__title">Уровень исполнения</h3>
                <p class="advantages__desc">Оказываем качественные услуги и всегда держим высокий уровень исполнения</p>
            </div>
            <div class="col-12 col-lg-5 col-xl-5 col-md-5 col-sm-12">
                <h3 class="advantages__title">Индивидуальный подход</h3>
                <p class="advantages__desc">К каждому клиенту мы находим особый подход и предлагаем уникальные
                    решения</p>
            </div>
            <div class="col-12">
                <div class="mod-block__wrap">
                    <h3 class="advantages__title mod">Полный цикл разработки</h3>
                    <p class="advantages__desc">Предлагаем полный список услуг по продвижению и дизайну. Занимаемся не
                        только разработкой, но и сопровождением сайта на каждом этапе. </p>
                    <button class="advantages__button btn">Подробнее</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="projects">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <p class="projects__subtitle">Наши проекты</p>
            </div>
<!--            <div class="col-6"></div>-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <button class="projects__button btn">Больше работ</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container projects__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-block">
                            <img class="project-img" src="../assets/img/project11.svg" alt="Morfolab">
                            <p class="project-slide__title">Внутренняя программа для Morfolab </p>
                            <p class="project-slide__desc">Клинико-морфологическая лаборатория «Морфолаб» в
                                Санкт-Петербурге относительно молодая компания, основанная в 2019 году.</p>
                        </div>
                        <div class="swiper-slide slider-block">
                            <img  src="../assets/img/project2.svg" alt="Ecvida" class="project-img">
                        </div>
                        <div class="swiper-slide slider-block">
                            <img  src="../assets/img/project2.svg" alt="Ecvida" class="project-img">
                        </div>
                        <div class="swiper-slide slider-block">
                            <img  src="../assets/img/project2.svg" alt="Ecvida" class="project-img">
                        </div>
                        <div class="swiper-slide slider-block">
                            <img  src="../assets/img/project2.svg" alt="Ecvida" class="project-img">
                        </div>
                        <div class="swiper-slide slider-block">
                            <img  src="../assets/img/project2.svg" alt="Ecvida" class="project-img">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"><img class="projects__button-next" src="../assets/img/arrow-next.svg"
                                                     alt="Вперед"></div>
                <div class="swiper-button-prev"><img class="projects__button-prev" src="../assets/img/arrow-prev.svg"
                                                     alt="Назад"></div>
                <div class="swiper-pagination projects__pagination"></div>
            </div>
        </div>
    </div>
    <h1 class="projects__title">Сделано нами</h1>
</section>
<section class="discuss">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="discuss__wrapper">
                    <h2 class="discuss__title">Готовы обсудить проект?</h2>
                    <p class="discuss__desc">Свяжитесь с нами прямо сейчас, и мы ответим на все ваши вопросы!</p>
                    <button class="discuss__button btn"> Оставить заявку</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'module/footer.php';
?>