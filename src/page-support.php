<?php
include 'module/header.php';
?>

<section class="create">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <hr class="create__line">
                <h1 class="create__title create-promo__title">Мы не просто выпускаем проект в свободное плавание, а
                    поддерживаем на каждом этапе пути.</h1>
                <button class="create__btn create-support__btn btn">Заказать сайт</button>
            </div>
        </div>
    </div>
    <img class="create__des-circle" src="../assets/img/des-ellipse.svg" alt="Круг">
</section>
<section class="support">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                <p class="support__text vertical-header">Мы делаем</p>
                <p class="support__subtitle">Типы работ</p>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-12">
                <ul class="support__main-list">
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Мониторинг</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Тестирование</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Администирование</a>
                    </li>
                    <li class="main-list__item">
                        <a class="main-list__link" href="#">Интеграция сервисов</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                <div class="support__block">
                    <p class="support__desc">
                        Мониторим работоспособность сайта и сервера 24/7, используя автоматизированную систему контроля
                        работы сайта
                        и SMS-уведомления.
                    </p>
                    <button class="support__button btn">Заказать поддержку</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="support-stages">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-2 col-md-12 col-sm-12">
                <p class="support-stages__subtitle">Этапы работы</p>
            </div>
            <div class="col-12 col-xl-5 col-lg-6 col-md-12 col-sm-12">
                <div class="support-stages__one-wrap block-limiter">
                    <span class="support-stages__number-one nums">01</span>
                    <h3 class="support-stages__title">Подготовительный этап</h3>
                    <p class="support-stages__desc">
                        Проводим первичный аудит, определяем пул работ, подбираем тариф.
                    </p>
                </div>
                <div class="support-stages__three-wrap block-limiter">
                    <span class="support-stages__number-three nums">03</span>
                    <h3 class="support-stages__title">Отчетность</h3>
                    <p class="support-stages__desc">
                        По итогу каждого месяца отправляем отчет о проделанной работе.
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-5 col-lg-6 col-md-12 col-sm-12">
                <div class="support-stages__two-wrap block-limiter">
                    <span class="support-stages__number-two nums">02</span>
                    <h3 class="support-stages__title">Начало работы</h3>
                    <p class="support-stages__desc">
                        Ежемесячно бронируем команду на количество часов по выбранному тарифу. В случае критической
                        ситуации мы автоматически получаем уведомление, оповещаем вас и приступаем к работам.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <p class="support-stages__text vertical-header">
        Этапы работы
    </p>
</section>
<style>
    .discuss {
        background: transparent;
    }

    .footer {
        background: #22272C;
    }
</style>
<?php
include 'discuss-section.php';

include 'module/footer.php';
?>
