<?php
include 'module/header.php';
?>
<section class="create create-des">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <hr class="create__line">
                <h1 class="create__title create-dev__title">Привлекаем новых клиентов с помощью современного и стильного
                    дизайна.</h1>
                <button class="create__btn create-dev__btn btn">Заказать сайт</button>
            </div>
        </div>
    </div>
    <img class="create__des-circle" src="../assets/img/des-ellipse.svg" alt="Круг">
</section>
<section class="designs">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                <p class="designs__text vertical-header">Мы делаем</p>
                <p class="designs__subtitle">Типы работ</p>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-12">
                <ul class="designs__main-list">
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Логотип</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Дизайн-макет</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Иллюстрации</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Создание презентаций</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                <div class="designs__block">
                    <p class="designs__desc">
                        Логотип — один из самых продающих инструментов маркетинга в руках любого бизнеса, который
                        позволяет эффективно продавать ваш бренд.
                    </p>
                    <p class="designs__desc">
                        Мы создалим для вас логотип, который выделит вас среди сотни конкурентов.</p>
                    <button class="designs__button btn">Заказать логотип</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="designs-stages">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-2 col-xl-2 col-md-12 col-sm-12">
                <p class="designs-stages__subtitle">Этапы работы</p>
            </div>
            <div class="col-12 col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="designs-stages__one-wrap">
                    <span class="designs-stages__number nums">01</span>
                    <h3 class="designs-stages__title">Исследование</h3>
                    <p class="designs-stages__desc">На начальном этапе работы мы проводим бриффинг, опредляем стилистику и референсы.
                    </p>
                </div>
                <div class="designs-stages__three-wrap">
                    <span class="designs-stages__number-three nums">03</span>
                    <h3 class="designs-stages__title">Дизайн</h3>
                    <p class="designs-stages__desc">Основываясь на полученной концепции, создаем все остальные элементы дизайн-системы. (внутренние страницы, мобильную версию).
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="designs-stages__two-wrap">
                    <span class="designs-stages__number-two nums">02</span>
                    <h3 class="designs-stages__title">Концепция дизайна</h3>
                    <p class="designs-stages__desc">На основе проведенного исследования подготавливаем несколько вариантов решения для вашего проекта, презентуем вам и утверждаем.
                    </p>
                </div>
                <div class="designs-stages__four-wrap">
                    <span class="designs-stages__number-four nums">04</span>
                    <h3 class="designs-stages__title">Передача заказчику</h3>
                    <p class="designs-stages__desc">После согласование и внесения всех правок, передаем вам все матеалы в удобном для вас виде
                    </p>
                </div>
                <p class="designs-stages__text vertical-header">
                    Этапы работы
                </p>
            </div>
        </div>
    </div>
</section>
<style>
    .projects__title {
        transform: rotate(-90deg) translate(0, -1000%);
    }
    .projects__text {
        right: 1000px;
        white-space: nowrap;
        bottom: 50px;
        transform: rotate(270deg);
    }

</style>
<?php
include 'projects-slider-section.php';
include 'discuss-section.php';
include 'module/footer.php';
?>
