webpackJsonp([25],{

/***/ 115:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {

__webpack_require__(37);

__webpack_require__(11);

var _slickCarousel = __webpack_require__(9);

var _slickCarousel2 = _interopRequireDefault(_slickCarousel);

__webpack_require__(8);

__webpack_require__(13);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var $slider = '.news-slider__slick';

$(document).ready(function () {
  $($slider).slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<button class="news-slider__arrows news-slider__arrows_prev"></button>',
    nextArrow: '<button class="news-slider__arrows news-slider__arrows_next"></button>',
    draggable: false,
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        draggable: true
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }]
  });
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)))

/***/ }),

/***/ 37:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

},[115]);