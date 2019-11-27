(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./resources/assets/scripts/utilities/cookie-message.js":
/*!**************************************************************!*\
  !*** ./resources/assets/scripts/utilities/cookie-message.js ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return showCookieMessage; });
console.log(32223);
function showCookieMessage() {
  var cookieAccept = localStorage.getItem("cookie_accept");

  if (!cookieAccept) {
    $(".cookie-popup").removeClass("d-none");
    $(".cookie-popup__accept, .cookie-popup__close").on("click", function () {
      $(".cookie-popup").hide();
      localStorage.setItem("cookie_accept", true);
    });
  }
}
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ })

}]);