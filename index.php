<?php
define('FORRO_SYSTEMS', true);
include_once 'config.php';
include_once 'core.php';
?><!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <title><?php echo $config['title']; ?></title>
        <meta name="description" content="<?php echo $config['description']; ?>"/>
        <meta name="keywords" content="<?php echo $config['keywords']; ?>"/>
        <meta name="robots" content="index, follow"/>
        <meta name="copyright" content="Constantine Seleznyoff <const.seoff@gmail.com>"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext"/>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/css/common.css"/>
        <link rel="stylesheet" href="/css/slick.css"/>
        <link rel="stylesheet" href="/css/flipcountdown.css"/>
    </head>
    <body>
        <div class="wrapper">
            <div class="block block-shadow block-first">
                <header>
                    <div class="logo"></div>
                    <h1><?php echo $config['h1']; ?></h1>
                    <div class="phone">
                        <a href="tel:<?php echo getUrlPhone($config['phone']); ?>" class="number"><?php echo $config['phone']; ?></a><br/>
                        <a href="#" class="order">заказать обратный звонок</a>
                    </div>
                </header>
                <div id="slider-main" class="slider">
                    <?php foreach ($config['slider_main'] as $slide): ?>
                        <div class="slide" style="background-image:url('/images/slider-main/<?php echo $slide['image']; ?>');">
                            <div class="content">
                                <h2><?php echo $slide['h2']; ?></h2>
                                <p><?php echo $slide['content']; ?></p>
                                <span>от <?php echo $slide['sum']; ?> рублей</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="stock">
                    <h2>
                        Купите любой внутрипольный конвектор<br/>
                        до <?php echo getStockDate(); ?>
                        и получите <?php echo $config['stock_sum']; ?> рублей в подарок!
                    </h2>
                    <p>До конца акции осталось:</p>
                    <div id="stock-timer"></div>
                    <p>
                        <a href="#" class="button">Заказать</a>
                    </p>
                </div>
            </div>
            <div class="block block-common block-work">
                <h2><?php echo $config['work_h2']; ?></h2>
                <div class="row">
                    <div class="col-xs-6">
                        <?php foreach ($config['work_text'] as $text): ?>
                            <p><?php echo $text; ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-xs-6">
                        <iframe src="<?php echo $config['work_video']; ?>" width="100%" height="300" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="block block-common block-usage">
                <h2><?php echo $config['usage_h2']; ?></h2>
                <p><?php echo $config['usage_text']; ?></p>
                <div id="slider-usage" class="slider">
                    <?php foreach ($config['slider_usage'] as $slide): ?>
                        <div class="slide" style="background-image:url('/images/slider-usage/<?php echo $slide['image']; ?>');">
                            <div class="content">
                                <h3><?php echo $slide['h3']; ?></h3>
                                <p><?php echo $slide['text']; ?></p>
                                <a href="#" class="button">Подобрать конвектор</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="block block-common block-comparison">
                <h2><?php echo $config['comparison_h2']; ?></h2>
                <div class="row">
                    <div class="col-xs-6">
                        <h3><?php echo $config['comparison_h3_negative']; ?></h3>
                        <ul class="negative">
                            <?php foreach ($config['comparison_negative'] as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <h3><?php echo $config['comparison_h3_positive']; ?></h3>
                        <ul class="positive">
                            <?php foreach ($config['comparison_positive'] as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-common block-white block-shadow block-costing">
            <div class="wrapper">
                <h2><?php echo $config['costing_h2']; ?></h2>
                <div class="row">
                    <div class="col-xs-6">
                        <img src="/images/costing.jpg" alt="Расчет стоимости"/>
                    </div>
                    <div class="col-xs-6">
                        <?php foreach ($config['costing_text'] as $text): ?>
                            <p><?php echo $text; ?></p>
                        <?php endforeach; ?>
                        <a href="#" class="button">Заказать расчет</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="block block-common block-mistakes">
                <h2><?php echo $config['mistakes_h2']; ?></h2>
                <?php foreach ($config['mistakes'] as $mistake): ?>
                    <div class="row">
                        <div class="col-xs-4 mistake"><?php echo $mistake['mistake']; ?></div>
                        <div class="col-xs-8 answer"><?php echo $mistake['answer']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="block block-common block-white block-shadow block-suppliers">
            <div class="wrapper">
                <h2><?php echo $config['suppliers_h2']; ?></h2>
                <div id="slider-suppliers" class="slider">
                    <?php foreach ($config['slider_suppliers'] as $image): ?>
                        <div class="slide">
                            <img src="/images/slider-suppliers/<?php echo $image; ?>" alt="Поставщики"/>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="block block-common block-stages">
                <h2><?php echo $config['stages_h2']; ?></h2>
                <div class="row">
                    <div class="col-xs-1"></div>
                    <?php foreach ($config['stages'] as $stage): ?>
                        <div class="col-xs-2">
                            <div class="stage" style="background-image:url('/images/stages/<?php echo $stage['image']; ?>');"></div>
                            <div class="description"><?php echo $stage['description']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p>
                    <a href="#" class="button">Хочу конвектор!</a>
                </p>
            </div>
        </div>
        <div class="block block-common block-white block-shadow block-feedback">
            <div class="wrapper">
                <h2><?php echo $config['feedback_h2']; ?></h2>
                <div id="slider-feedback" class="slider">
                    <?php foreach ($config['slider_feedback'] as $feedback): ?>
                        <div class="slide">
                            <img src="/images/feedback/<?php echo $feedback['image']; ?>" alt="Отзыв"/>
                            <p class="short">
                                <?php echo $feedback['text_short']; ?>
                                <a href="#">Подробнее</a>
                            </p>
                            <div class="full">
                                <?php foreach ($feedback['text_full'] as $text): ?>
                                    <p><?php echo $text; ?></p>
                                <?php endforeach; ?>
                                <span><?php echo $feedback['name']; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="map" class="map"></div>
        </div>
        <div class="wrapper">
            <div class="block block-common block-about">
                <h2><?php echo $config['about_h2']; ?></h2>
                <?php foreach ($config['about_text'] as $text): ?>
                    <p><?php echo $text; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="block block-shadow">
                <footer></footer>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/flipcountdown.js"></script>
        <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
        <script>
            $(document).ready(function() {
                $('#slider-main').slick({
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    dots: true,
                    speed: 1000
                });
                $('#stock-timer').flipCountDown({
                    beforeDateTime: '<?php echo getStockTimerDate(); ?>',
                    size: 'lg'
                });
                $('#slider-usage').slick({
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    dots: true,
                    speed: 1000
                });
                $('#slider-suppliers').slick({
                    centerMode: true,
                    infinite: true,
                    slidesToShow: 5,
                    variableWidth: true
                });
                $('.block-stages .stage').hover(
                    function() {
                        $(this).parent().find('.description').stop(true, true).fadeIn(250);
                    },
                    function() {
                        $(this).parent().find('.description').stop(true, true).fadeOut(250);
                    }
                );
                $('#slider-feedback').slick({
                    centerMode: true,
                    infinite: true,
                    slidesToShow: 3
                });
                ymaps.ready(function() {
                    var forro_map = new ymaps.Map('map', {
                        center: [56.0963,40.3478],
                        controls: ['fullscreenControl', 'zoomControl'],
                        zoom: 17
                    });
                    forro_map.geoObjects.add(new ymaps.Placemark([56.0963,40.3478], {}, {iconColor: '#580d00'}));
                });
            });
        </script>
    </body>
</html>
