/* =================
 * Author        : BionThemes
 * Author URL    : http://bionthemes.net
 * Template Name : BICARA - Car Shop HTML5 Template
 * Template Demo : http://bionthemes.net/BICARA
 * File          : BICARA JS file
 * Version       : 1.0
 */

$(function () {
    'use strict';
    //Slider
    var $owl = $('.owl');
    $owl.each(function () {
        var $carousel1 = $(this);
        $carousel1.owlCarousel({
            items: $carousel1.attr('data-items'),
            itemsDesktop: [1199, $carousel1.attr('data-itemsDesktop')],
            itemsDesktopSmall: [979, $carousel1.attr('data-itemsDesktopSmall')],
            itemsTablet: [797, $carousel1.attr('data-itemsTablet')],
            itemsMobile: [479, $carousel1.attr('data-itemsMobile')],
            navigation: JSON.parse($carousel1.attr('data-buttons')),
            pagination: JSON.parse($carousel1.attr('data-pag')),
            slideSpeed: 1000,
            paginationSpeed: 1000,
            navigationText: false
        });
    });
    $(window).load(function () {
        $('.preloader p').fadeOut();
        $('.preloader').delay(500).fadeOut('slow');
        $('body').delay(600).css({
            'overflow': 'visible'
        });
    });
    //Image zoom
    $('.image-zoom').magnificPopup({
        delegate: 'div a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    //Counterup
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
    //Menu
    $('.navbar-toggle').on('click', function () {
        height_w();
    });

    function height_w() {
        $('.navbar-nav').css('max-height', $(window).height() - 165);
    }

    window.onresize = function () {
        height_w();
    }
    //Slider
    $(".slider-range").slider({
        range: true,
        min: 5000,
        max: 200000,
        step: 1000,
        values: [60000, 130000],
        slide: function (event, ui) {
            $(".slider_amount").val("$" + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - $" + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }
    });
    $(".slider_amount").val("$" + $(".slider-range").slider("values", 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - $" + $(".slider-range").slider("values", 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

    //Search
    $('.select-wrapper li').on('click', function () {
        $(this).parents('.select-wrapper').find('button').text($(this).text());
    });
    //Layout setting preview
    var $html = '<div id="setting"><i class="fa fa-cogs setting-btn"></i><div class="p-lg-15"><h5>Display Mode</h5><ul class="model-display"><li class="mode-option wide" data-mode="wide">Wide</li><li class="mode-option boxed" data-mode="boxed">Boxed</li></ul><h5>Background</h5><ul class="model-display fd"><li class="bg-option s-color-1" data-cl="bg-1"></li><li class="bg-option s-color-2"  data-cl="bg-2"></li><li class="bg-option s-color-3" data-cl="bg-3"></li></ul></div></div>';
    $('body').append($html);
    $('.setting-btn').on('click', function () {
        var $obj = $(this);
        if (!$obj.hasClass('active')) {
            $obj.parent('#setting').css('right', '-7px');
            $obj.addClass('active');
        } else {
            $obj.parent('#setting').css('right', '-220px');
            $obj.removeClass('active');
        }
    });
    $('#setting .light-version').on('click', function () {
        raclass('.c-option', '.light-version');
        $('#vers').attr('href', 'css/light-version.css');
    });
    $('#setting .dark-version').on('click', function () {
        raclass('.c-option', '.dark-version');
        $('#vers').attr('href', 'css/dark-version.css');
    });
    $('#setting .wide').on('click', function () {
        if (!$(this).hasClass('active')) {
            $('#boxed').remove();
            raclass('.boxed', '.wide');
        }
    });
    $('#setting .boxed').on('click', function () {
        if (!$(this).hasClass('active')) {
            $('#boxed').remove();
            $('head').append('<link id="boxed" rel="stylesheet" type="text/css" href="css/boxed.css" media="screen">');
            raclass('.wide', '.boxed');
        }
    });

    function raclass(item, e) {
        $(item).removeClass('active');
        $(e).addClass('active');
    }

    $('.bg-option').on('click', function () {
        $('body').attr('class', $(this).attr('data-cl'));
    });
    if ($('#vers').attr('href').indexOf('light') > 0) {
        $('#setting').find('.light-version').addClass('active');
    } else {
        $('#setting').find('.dark-version').addClass('active');
    }
    if ($('link#boxed').attr('href') && $('link#boxed').attr('href').indexOf('boxed') > 0) {
        $('#setting').find('.boxed').addClass('active');
    } else {
        $('#setting').find('.wide').addClass('active');
    }
});