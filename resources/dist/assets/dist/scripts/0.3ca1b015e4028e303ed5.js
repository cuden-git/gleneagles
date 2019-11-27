(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/assets/scripts/customizer.js":
/*!************************************************!*\
  !*** ./resources/assets/scripts/customizer.js ***!
  \************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

wp.customize('blogname', function (value) {
  value.bind(function (to) {
    return jquery__WEBPACK_IMPORTED_MODULE_0___default()('.brand').text(to);
  });
});

/***/ })

}]);