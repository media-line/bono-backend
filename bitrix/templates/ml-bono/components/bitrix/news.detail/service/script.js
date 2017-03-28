webpackJsonp([0],{

/***/ 114:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(39);

__webpack_require__(19);

__webpack_require__(16);

__webpack_require__(5);

__webpack_require__(6);

__webpack_require__(15);

__webpack_require__(25);

__webpack_require__(20);

__webpack_require__(10);

/***/ }),

/***/ 15:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {

__webpack_require__(80);

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

/***/ 16:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(81);

/***/ }),

/***/ 19:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(86);

__webpack_require__(5);

/***/ }),

/***/ 20:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {

__webpack_require__(87);

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

/***/ 25:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(95);

__webpack_require__(69);

/***/ }),

/***/ 39:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 69:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(94);

/***/ }),

/***/ 80:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 81:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 86:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 87:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 94:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 95:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

},[114]);