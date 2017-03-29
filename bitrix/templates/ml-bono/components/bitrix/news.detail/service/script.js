webpackJsonp([0],{

/***/ 118:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(40);

__webpack_require__(20);

__webpack_require__(17);

__webpack_require__(5);

__webpack_require__(6);

__webpack_require__(16);

__webpack_require__(26);

__webpack_require__(21);

__webpack_require__(10);

/***/ }),

/***/ 16:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {

__webpack_require__(84);

__webpack_require__(7);

var _slickCarousel = __webpack_require__(9);

var _slickCarousel2 = _interopRequireDefault(_slickCarousel);

__webpack_require__(8);

__webpack_require__(13);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var $slider = '.img-blocks_slider';

$(document).ready(function () {
  $($slider).slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button class="img-blocks__arrows img-blocks__arrows_prev"></button>',
    nextArrow: '<button class="img-blocks__arrows img-blocks__arrows_next"></button>',
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

/***/ 17:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(85);

/***/ }),

/***/ 20:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(90);

__webpack_require__(5);

/***/ }),

/***/ 21:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {

__webpack_require__(91);

var $modalButton = '.modal__app-button';
var $modal = '.modal';
var $closeButton = '.modal__close';
var $layout = '.modal__background';
var bodyModalOpen = 'modal__open';
var modalOpen = 'modal_open';

$(document).ready(function () {
    $($modalButton).click(function (e) {
        e.preventDefault();
        var modalAttr = $(this).attr('data-modal-button');

        openModal(modalAttr);
    });

    $($layout).click(function (e) {
        closeModal();
    });

    $($closeButton).click(function (e) {
        closeModal();
    });

    function closeModal() {
        $($modal).removeClass(modalOpen);
        $('body').removeClass(bodyModalOpen);
    }

    function openModal(attr) {
        $('body').addClass(bodyModalOpen);
        $('.modal[data-modal="' + attr + '"]').addClass(modalOpen);
    }
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)))

/***/ }),

/***/ 26:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(99);

__webpack_require__(73);

/***/ }),

/***/ 40:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 73:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(98);

/***/ }),

/***/ 84:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 85:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 90:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 91:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 98:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 99:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

},[118]);