webpackJsonp([19],{

/***/ 115:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {

__webpack_require__(41);

var button = 'top-menu__menu-button';
var activeButton = 'top-menu__menu-button_active';
var menu = 'top-menu__menu';

var menuActive = false;

$(document).ready(function () {
    $('.' + button).click(function () {
        menuActive = !menuActive;
        $('.' + menu).slideToggle();
        $('.' + button).toggleClass(activeButton);
    });
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)))

/***/ }),

/***/ 41:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

},[115]);