<?php
define('FORRO_SYSTEMS', true);
include_once 'config.php';
include_once 'core.php';
?><!DOCTYPE html>
<html lang="ru" ng-app="forro" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <title><?php echo $content['title']; ?></title>
        <meta name="description" content="<?php echo $content['description']; ?>"/>
        <meta name="keywords" content="<?php echo $content['keywords']; ?>"/>
        <meta name="robots" content="index, follow"/>
        <meta name="copyright" content="Constantine Seleznyoff <const.seoff@gmail.com>"/>
        <meta property="og:title" content="<?php echo $content['og_title']; ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']; ?>"/>
        <meta property="og:image" content="<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $content['og_image']; ?>"/>
        <meta property="og:description" content="<?php echo $content['description']; ?>"/>
        <meta property="og:locale" content="ru_RU"/>
        <link rel="shortcut icon" href="/favicon.ico"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext"/>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/css/common.css"/>
        <link rel="stylesheet" href="/css/slick.css"/>
        <link rel="stylesheet" href="/css/flipcountdown.css"/>
    </head>
    <body>
        <div class="page" ng-controller="ForroSystemsController" ng-cloak>
            <header class="header">
                <div class="wrapper">
                    <div class="header__logo"></div>
                    <h1 class="header__caption">{% content.header.caption %}</h1>
                    <div class="header__phone">
                        <a href="tel:{% content.header.phone_number_link %}" class="header__phone-number">{% content.header.phone_number %}</a>
                        <br/>
                        <a href="#" class="header__order order">заказать обратный звонок</a>
                    </div>
                </div>
            </header>
            <nav class="navigation">
                <div class="wrapper">
                    <ul class="navigation-menu">
                        <li class="navigation-menu__item">
                            <a href="#main-slider" class="navigation-menu__link">Обзор</a>
                        </li>
                        <li class="navigation-menu__item">
                            <a href="#usage" class="navigation-menu__link">Использование</a>
                        </li>
                        <li class="navigation-menu__item">
                            <a href="#calc" class="navigation-menu__link">Расчет мощности</a>
                        </li>
                        <li class="navigation-menu__item">
                            <a href="#stock" class="navigation-menu__link">Акции</a>
                        </li>
                        <li class="navigation-menu__item">
                            <a href="#feedback" class="navigation-menu__link">Отзывы</a>
                        </li>
                        <li class="navigation-menu__item">
                            <a href="#about" class="navigation-menu__link">О нас</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <a name="main-slider"></a>
            <div class="main-slider">
                <div class="main-slider__slider">
                    <div class="main-slider__slide" ng-repeat="slide in content.main_slider" ng-style="slide.style"></div>
                </div>
                <div class="main-slider__foreground">
                    <div class="wrapper">
                        <h2 class="main-slider__caption"></h2>
                        <p class="main-slider__description"></p>
                        <p class="main-slider__price"></p>
                    </div>
                    <a href="#" class="main-slider__button order">Узнать подробности</a>
                </div>
            </div>
            <div class="catalog block">
                <ul class="catalog__tabs">
                    <li class="catalog__tab" data-tab="convectors">
                        <a href="#">Конвекторы</a>
                    </li>
                    <li class="catalog__tab" data-tab="radiators">
                        <a href="#">Радиаторы</a>
                    </li>
                </ul>
                <div class="catalog__tab-body" data-tab-body="convectors">
                    <div class="wrapper">
                        Здесь тоже будет описание и галерея
                        <p class="catalog__gallery">
                            <a href="#" class="button catalog__convectors-button" data-modal=".modal-convectors">Посмотреть галерею</a>
                        </p>
                    </div>
                </div>
                <div class="catalog__tab-body" data-tab-body="radiators">
                    <div class="wrapper">
                        <p class="catalog__product" ng-repeat="product in content.catalog.radiators">
                            <span class="catalog__product-caption">&bull; {% product.caption %}</span>
                            {% product.text %}
                        </p>
                        <p class="catalog__gallery">
                            <a href="#" class="button catalog__radiators-button" data-modal=".modal-radiators">Посмотреть галерею</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="work block">
                <div class="wrapper">
                    <iframe src="<?php echo $content['work']['video']; ?>" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <a name="usage"></a>
            <div class="usage block">
                <div class="wrapper">
                    <h2>{% content.usage.caption %}</h2>
                    <p class="usage__text">{% content.usage.text %}</p>
                    <div class="usage__slider">
                        <div class="usage__slide" ng-repeat="slide in content.usage.slider" ng-style="slide.style">
                            <div class="usage__description">
                                <h3 class="usage__caption">{% slide.caption %}</h3>
                                <p class="usage__slide-text">{% slide.text %}</p>
                                <a href="#" class="button order">Подобрать конвектор</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a name="calc"></a>
            <div class="calc block">
                <div class="wrapper">
                    <h2>{% content.calc.caption %}</h2>
                    <div class="row">
                        <div class="col-xs-6">
                            <img src="/images/calc-image.jpg" class="calc__image" alt="Расчет мощности"/>
                        </div>
                        <div class="col-xs-6">
                            <p ng-repeat="text in content.calc.text">{% text %}</p>
                            <a href="#" class="button order">Заказать расчет</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mistakes block">
                <div class="wrapper">
                    <h2>{% content.mistakes.caption %}</h2>
                    <div class="row mistakes__mistake" ng-repeat="mistake in content.mistakes.questions">
                        <div class="col-xs-4 mistakes__question">{% mistake.question %}</div>
                        <div class="col-xs-8 mistakes__answer">{% mistake.answer %}</div>
                    </div>
                </div>
            </div>
            <div class="stages block">
                <div class="wrapper">
                    <h2>{% content.stages.caption %}</h2>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-2 stages__stage" ng-repeat="stage in content.stages.stages">
                            <div class="stages__icon" ng-style="stage.style"></div>
                            <div class="stages__description">{% stage.description %}</div>
                        </div>
                    </div>
                    <p>
                        <a href="#" class="button order">Хочу конвектор!</a>
                        &nbsp;
                        <a href="#" class="button order">Хочу радиатор!</a>
                    </p>
                </div>
            </div>
            <a name="suppliers"></a>
            <div class="suppliers block block_white block_shadow">
                <div class="wrapper">
                    <h2>{% content.suppliers.caption %}</h2>
                    <div class="suppliers__slider slider_arrows">
                        <img class="suppliers__slide" ng-src="{% image %}" ng-repeat="image in content.suppliers.slider" alt="Поставщики"/>
                    </div>
                </div>
            </div>
            <a name="stock"></a>
            <div class="stock block">
                <div class="wrapper">
                    <h2>{% content.stock.caption %}</h2>
                    <p>До конца акции осталось:</p>
                    <div class="stock__timer"></div>
                    <p>
                        <a href="#" class="button order">Заказать</a>
                    </p>
                </div>
            </div>
            <a name="feedback"></a>
            <div class="feedback block block_white block_shadow">
                <div class="wrapper">
                    <h2>{% content.feedback.caption %}</h2>
                    <div class="feedback__slider slider_arrows">
                        <div class="feedback__slide" ng-repeat="slide in content.feedback.slider">
                            <div class="feedback__photo" ng-style="slide.photo_style"></div>
                            <p class="feedback__short">
                                {% slide.text_short %}<br/>
                                <a href="#" class="feedback__details">Подробнее</a>
                            </p>
                            <div class="feedback__full">
                                <p ng-repeat="text in slide.text_full">{% text %}</p>
                                <span class="feedback__name">{% slide.name %}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a name="about"></a>
            <div class="about block">
                <div class="wrapper">
                    <h2>{% content.about.caption %}</h2>
                    <p ng-repeat="text in content.about.text">{% text %}</p>
                    <p class="about__center">
                        <a href="#" class="button order">Заказ онлайн</a>
                    </p>
                </div>
            </div>
            <div id="map" class="map" data-icon-text="{% content.map.icon_text %}"></div>
            <footer class="footer">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-xs-4 footer_left">
                            <h3 class="footer__caption">Наш адрес</h3>
                            {% content.footer.address %}<br/>
                            &copy; {% content.footer.years %} Forro Systems
                        </div>
                        <div class="col-xs-4 footer_center">
                            <h3 class="footer__caption">Наши телефоны</h3>
                            <a href="tel:{% phone.number_link %}" ng-repeat="phone in content.footer.phones" class="footer__phone">{% phone.number %}</a>
                        </div>
                        <div class="col-xs-4 footer_right">
                            <h3 class="footer__caption">Мы в соцсетях</h3>
                            <a href="{% network.link %}" class="footer__network" ng-class="network.class" ng-repeat="network in content.footer.networks"></a>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="modal__background"></div>
            <div class="modal-form block_shadow modal-order">
                <a href="#" class="modal-form__close">&times;</a>
                <h3 class="modal-form__caption">Оформление заявки</h3>
                <form id="form-order" method="POST">
                    <div class="form-group">
                        <label for="order-name">Ваше имя</label>
                        <input type="text" id="order-name" name="name" required="required" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="order-phone">Номер телефона</label>
                        <input type="text" id="order-phone" name="phone" required="required" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="order-email">Адрекс электронной почты</label>
                        <input type="text" id="order-email" name="email" required="required" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="order-comment">Комментарий к заявке</label>
                        <textarea id="order-comment" name="comment" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LcQLh0UAAAAANpSrMbrL9aGPft16WfQ7b0kioaI"></div>
                    </div>
                    <br/>
                    <button type="submit" class="button">Отправить</button>
                </form>
            </div>
            <div class="modal-form block_shadow modal-feedback">
                <a href="#" class="modal-form__close">&times;</a>
                <h3 class="modal-form__caption">Отзыв</h3>
            </div>
            <div class="modal-form block-shadow modal-convectors">
                <a href="#" class="modal-form__close">&times;</a>
                <h3 class="modal-form__caption">Галерея конвекторов</h3>
                <div class="row">
                    <div class="col-xs-3">
                        <h4 class="modal-convectors__caption"></h4>
                        <div class="modal-convectors__description"></div>
                    </div>
                    <div class="col-xs-9">
                        <div class="modal-convectors__slider slider_arrows">
                            <img ng-src="{% convector.image %}" class="modal-convectors__image" ng-repeat="convector in content.catalog.slider.convectors"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-form block-shadow modal-radiators">
                <a href="#" class="modal-form__close">&times;</a>
                <h3 class="modal-form__caption">Галерея радиаторов</h3>
                <div class="row">
                    <div class="col-xs-3">
                        <h4 class="modal-radiators__caption"></h4>
                        <div class="modal-radiators__description"></div>
                    </div>
                    <div class="col-xs-9">
                        <div class="modal-radiators__slider slider_arrows">
                            <img ng-src="{% radiator.image %}" class="modal-radiators__image" ng-repeat="radiator in content.catalog.slider.radiators"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/flipcountdown.js"></script>
        <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
        <script src="//www.google.com/recaptcha/api.js"></script>
        <script src="/js/common.js"></script>
        <script>
            var content = <?php echo prepareContent($content); ?>;
        </script>
    </body>
</html>