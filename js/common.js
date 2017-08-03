var forro = angular.module('forro', []);
forro.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{%');
    $interpolateProvider.endSymbol('%}');
});
forro.controller('ForroSystemsController', function ($scope) {
    $scope.content = content;

    $(document).ready(function () {
        var navigation = $('.navigation'),
            navigation_top = $('.navigation').offset().top,
            navigation_height = $('.navigation').height(),
            body = $('body');
        $(window).scroll(function () {
            if (body.scrollTop() > navigation_top) {
                navigation.addClass('navigation_fixed block_shadow');
            } else {
                navigation.removeClass('navigation_fixed block_shadow');
            }
        }).scroll();
        $('.navigation-menu__link').click(function (e) {
            e.preventDefault();
            var top = $('a[name="' + $(this).attr('href').substring(1) + '"]').offset().top - navigation_height;
            $('body').animate({scrollTop: top}, 500);
        });
        var main_slider = $('.main-slider__slider').slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 7000,
            dots: true,
            speed: 1000
        });
        var main_slider_caption = $('.main-slider__caption').html($scope.content.main_slider[0].caption);
        var main_slider_description = $('.main-slider__description').html($scope.content.main_slider[0].description);
        var main_slider_price = $('.main-slider__price').html($scope.content.main_slider[0].price);
        main_slider.on('beforeChange', function () {
            main_slider_caption.stop(true, true).fadeOut(500);
            main_slider_description.stop(true, true).fadeOut(500);
            main_slider_price.stop(true, true).fadeOut(500);
        });
        main_slider.on('afterChange', function () {
            var slide_index = parseInt(main_slider.slick('slickCurrentSlide'));
            main_slider_caption
                .html($scope.content.main_slider[slide_index].caption)
                .stop(true, true)
                .fadeIn(250);
            main_slider_description
                .html($scope.content.main_slider[slide_index].description)
                .stop(true, true)
                .fadeIn(250);
            main_slider_price
                .html($scope.content.main_slider[slide_index].price)
                .stop(true, true)
                .fadeIn(250);
        });
        $('.catalog__tab a').click(function (e) {
            e.preventDefault();
            $('.catalog__tab.catalog__tab_active').removeClass('catalog__tab_active');
            $(this).parent().addClass('catalog__tab_active');
            $('.catalog__tab-body').stop(true, true).hide();
            $('.catalog__tab-body[data-tab-body="' + $(this).parent().attr('data-tab') + '"]').stop(true, true).show();
        }).first().click();
        $('.usage__slider').slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 10000,
            dots: true,
            speed: 1000
        });
        $('.stock__timer').flipCountDown({
            beforeDateTime: $scope.content.stock.date,
            size: 'lg'
        });
        $('.suppliers__slider').slick({
            centerMode: true,
            slidesToShow: 5,
            variableWidth: true
        });
        $('.stages__icon').hover(
            function() {
                $(this).parent().find('.stages__description').stop(true, true).fadeIn(250);
            },
            function() {
                $(this).parent().find('.stages__description').stop(true, true).fadeOut(250);
            }
        );
        $('.feedback__slider').slick({
            centerMode: true,
            centerPadding: 0,
            slidesToShow: 3
        });
        ymaps.ready(function () {
            var map = new ymaps.Map('map', {
                center: [56.0963,40.3478],
                controls: ['fullscreenControl', 'zoomControl'],
                zoom: 17
            });
            map.geoObjects.add(new ymaps.Placemark(
                [56.0963,40.3478],
                {balloonContent: $scope.content.map.text, iconCaption: $('#map').attr('data-icon-text')},
                {preset: 'islands#blueDotIconWithCaption', iconColor: '#580d00'}
            ));
        });

        var modal_background = $('.modal__background');

        function showModal(target) {
            $('html, body').css({'overflow-y': 'hidden'});
            modal_background.stop(true, true).fadeIn(250);
            target.stop(true, true).fadeIn(500);
        }

        function closeModal(target) {
            target.stop(true, true).fadeOut(250);
            modal_background.stop(true, true).fadeOut(500);
            $('html, body').css({'overflow-y': 'auto'});
        }

        $('.modal-form').click(function (e) {
            e.stopPropagation();
        });
        $('.modal__background').click(function (e) {
            e.stopPropagation();
            closeModal($('.modal-form:visible'));
        });
        $('.modal-form__close').click(function (e) {
            e.preventDefault();
            closeModal($(this).parent());
        });
        $('.order').click(function (e) {
            e.preventDefault();
            showModal($('.modal-order'));
        });
        $('#form-order').submit(function (e) {
            e.preventDefault();
            var $this = $(this);
            var submit = $this.find('button[type="submit"]');
            submit.prop('disabled', true);
            $.ajax({
                cache: false,
                data: $this.serialize(),
                dataType: 'json',
                error: function () {
                    closeModal($this.parent());
                    alert('Извините, не удается отправить заявку. Пожалуйста, повторите попытку позже.');
                    submit.prop('disabled', false);
                },
                method: 'POST',
                success: function (data) {
                    closeModal($this.parent());
                    if (data.success === true) {
                        alert('Спасибо! Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.');
                    } else {
                        alert('Извините, не удается отправить заявку. Пожалуйста, повторите попытку позже.');
                    }

                    submit.prop('disabled', false);
                }
            });

            return false;
        });
        $('.feedback__details').click(function (e) {
            e.preventDefault();
            var modal = $('.modal-feedback');
            modal.find('.feedback__full').remove();
            $(this).parents('.feedback__slide').first().find('.feedback__full').clone().appendTo(modal).css({display: 'block'});
            showModal(modal);
        });
        var convectors_slider = null;
        $('.catalog__convectors-button').click(function (e) {
            e.preventDefault();
            var modal = $($(this).attr('data-modal'));
            showModal(modal);

            if (!convectors_slider) {
                convectors_slider = $('.modal-convectors__slider').slick({
                    autoplay: false,
                    fade: true,
                    speed: 1000
                });
                var convectors_caption = modal.find('.modal-convectors__caption').html($scope.content.catalog.slider.convectors[0].caption);
                var convectors_description = modal.find('.modal-convectors__description').html($scope.content.catalog.slider.convectors[0].description);
                convectors_slider.on('beforeChange', function () {
                    convectors_caption.stop(true, true).fadeOut(250);
                    convectors_description.stop(true, true).fadeOut(250);
                });
                convectors_slider.on('afterChange', function () {
                    var slide_index = parseInt(convectors_slider.slick('slickCurrentSlide'));
                    convectors_caption
                        .html($scope.content.catalog.slider.convectors[slide_index].caption)
                        .stop(true, true)
                        .show();
                    convectors_description
                        .html($scope.content.catalog.slider.convectors[slide_index].description)
                        .stop(true, true)
                        .show();
                });
            }
        });
        var radiators_slider = null;
        $('.catalog__radiators-button').click(function (e) {
            e.preventDefault();
            var modal = $($(this).attr('data-modal'));
            showModal(modal);

            if (!radiators_slider) {
                radiators_slider = $('.modal-radiators__slider').slick({
                    autoplay: false,
                    fade: true,
                    speed: 1000
                });
                var radiators_caption = modal.find('.modal-radiators__caption').html($scope.content.catalog.slider.radiators[0].caption);
                var radiators__description = modal.find('.modal-radiators__description').html($scope.content.catalog.slider.radiators[0].description);
                radiators_slider.on('beforeChange', function () {
                    radiators_caption.stop(true, true).fadeOut(250);
                    radiators__description.stop(true, true).fadeOut(250);
                });
                radiators_slider.on('afterChange', function () {
                    var slide_index = parseInt(radiators_slider.slick('slickCurrentSlide'));
                    radiators_caption
                        .html($scope.content.catalog.slider.radiators[slide_index].caption)
                        .stop(true, true)
                        .show();
                    radiators__description
                        .html($scope.content.catalog.slider.radiators[slide_index].description)
                        .stop(true, true)
                        .show();
                });
            }
        });
    });
});
