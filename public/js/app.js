(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

__webpack_require__(/*! ./menu */ "./resources/js/menu.js");

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

window._ = __webpack_require__(/*! lodash */ "./node_modules/lodash/lodash.js"); // import bootstrap from 'bootstrap'

window.axios = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
window.$ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
window, bootstrap = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/***/ }),

/***/ "./resources/js/menu.js":
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/
/***/ (() => {

/*
 * Copyright (c) 2021. All code files are the property of the Fulliton Creator.
 * No one has the right to modify files without the consent of the creator.
 * The code is completely open and copyable is allowed.
 * GitHub https://github.com/ArtyshkoAndrey/
 */
$(document).ready(function () {
  var lastId,
      topMenu = $(".navbar-default #menu-links #links .col-auto"),
      menuItems = topMenu.find("a"),
      scrollItems = menuItems.map(function () {
    var item = $($(this).attr("href"));

    if (item.length) {
      return item;
    }
  });
  menuItems.click(function (e) {
    var deltaH;

    if (window.innerWidth <= 992) {
      deltaH = 130;
    } else if (window.innerWidth <= 768) {
      deltaH = 90;
    } else {
      deltaH = 180;
    }

    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top - deltaH;
    $('html, body').stop().animate({
      scrollTop: offsetTop
    }, 500);
    e.preventDefault();
  });
  $(window).scroll(function () {
    var deltaH;

    if (window.innerWidth <= 992) {
      deltaH = 130;
    } else if (window.innerWidth <= 768) {
      deltaH = 90;
    } else {
      deltaH = 180;
    }

    var fromTop = $(this).scrollTop();
    var cur = scrollItems.map(function () {
      if ($(this).offset().top - deltaH - 1 <= fromTop) return this;
    });
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
      lastId = id;
      menuItems.removeClass("active");
      menuItems.filter("[href='#" + id + "']").addClass("active");
    }
  });
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["css/app","/js/vendor"], () => (__webpack_exec__("./resources/js/app.js"), __webpack_exec__("./resources/sass/app.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);