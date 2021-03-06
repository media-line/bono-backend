webpackJsonp([22],{

/***/ 120:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {

__webpack_require__(42);

var _slickCarousel = __webpack_require__(9);

var _slickCarousel2 = _interopRequireDefault(_slickCarousel);

__webpack_require__(8);

var _header = __webpack_require__(0);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var $slider = '.slider';
var $slide = '.slider__slide';
var $dots = '.slider__dots';
var $dot = '.slider__dot';
var dotActive = 'slider__dot_active';

var resizeTimer = void 0;

function setSlide(active) {
    $($slider).slick('slickGoTo', active);
}

function setActiveDot(active) {
    $($dot).removeClass(dotActive);

    $($dots).each(function () {
        $(this).find($dot).eq(active).addClass(dotActive);
    });
}

$(document).ready(function () {
    $($slider).slick({
        arrows: false,
        fade: true,
        slidesToShow: 1
    });

    $($slider).slick('reinit');

    $($dot).click(function () {
        setSlide($(this).index());
        setActiveDot($(this).index());
    });

    $($slider).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        setActiveDot(nextSlide);
    });
});

$(window).on('load', function () {
    _header.promiseHeaderHeight.then(function (result) {
        $($slide).height($(window).outerHeight() - result);
        $($dots).height($(window).outerHeight() - result);
        $($slider).slick('reinit');
    });

    $(window).resize(function (e) {
        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function () {
            _header.promiseHeaderHeightResize.then(function (result) {
                $($slide).height($(window).outerHeight() - result);
                $($dots).height($(window).outerHeight() - result);
                $($slider).slick('reinit');
            });
        }, 250);
    });
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)))

/***/ }),

/***/ 42:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

},[120]);