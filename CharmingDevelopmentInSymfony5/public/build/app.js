"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_3__);


/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)


// start the Stimulus application
//import './bootstrap';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.


/**
 * Simple (ugly) code to handle the comment vote up/down
 */
var $container = jquery__WEBPACK_IMPORTED_MODULE_3___default()('.vote-arrows');
$container.find('a').on('click', function (e) {
  e.preventDefault();
  var $link = jquery__WEBPACK_IMPORTED_MODULE_3___default()(e.currentTarget);
  jquery__WEBPACK_IMPORTED_MODULE_3___default().ajax({
    url: '/comments/10/vote/' + $link.data('direction'),
    method: 'POST'
  }).then(function (data) {
    $container.find('.vote-total').text(data.votes);
  });
});

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_jquery_dist_jquery_js-node_modules_bootstrap_dist_css_bootstrap_css-node-3f315c"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDMEI7O0FBRTFCO0FBQ0E7O0FBRUE7QUFDdUI7O0FBRXZCO0FBQ0E7QUFDQTtBQUNBLElBQUlDLFVBQVUsR0FBR0QsNkNBQUMsQ0FBQyxjQUFjLENBQUM7QUFDbENDLFVBQVUsQ0FBQ0MsSUFBSSxDQUFDLEdBQUcsQ0FBQyxDQUFDQyxFQUFFLENBQUMsT0FBTyxFQUFFLFVBQVNDLENBQUMsRUFBRTtFQUN6Q0EsQ0FBQyxDQUFDQyxjQUFjLENBQUMsQ0FBQztFQUNsQixJQUFJQyxLQUFLLEdBQUdOLDZDQUFDLENBQUNJLENBQUMsQ0FBQ0csYUFBYSxDQUFDO0VBRTlCUCxrREFBTSxDQUFDO0lBQ0hTLEdBQUcsRUFBRSxvQkFBb0IsR0FBR0gsS0FBSyxDQUFDSSxJQUFJLENBQUMsV0FBVyxDQUFDO0lBQ25EQyxNQUFNLEVBQUU7RUFDWixDQUFDLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLFVBQVNGLElBQUksRUFBRTtJQUNuQlQsVUFBVSxDQUFDQyxJQUFJLENBQUMsYUFBYSxDQUFDLENBQUNXLElBQUksQ0FBQ0gsSUFBSSxDQUFDSSxLQUFLLENBQUM7RUFDbkQsQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDOzs7Ozs7Ozs7OztBQzlCRiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzPzNmYmEiXSwic291cmNlc0NvbnRlbnQiOlsiLypcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcbiAqXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxuICovXG5cbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcbmltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XG5cbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxuLy9pbXBvcnQgJy4vYm9vdHN0cmFwJztcblxuLy8gTmVlZCBqUXVlcnk/IEluc3RhbGwgaXQgd2l0aCBcInlhcm4gYWRkIGpxdWVyeVwiLCB0aGVuIHVuY29tbWVudCB0byBpbXBvcnQgaXQuXG5pbXBvcnQgJCBmcm9tICdqcXVlcnknO1xuXG4vKipcbiAqIFNpbXBsZSAodWdseSkgY29kZSB0byBoYW5kbGUgdGhlIGNvbW1lbnQgdm90ZSB1cC9kb3duXG4gKi9cbnZhciAkY29udGFpbmVyID0gJCgnLnZvdGUtYXJyb3dzJyk7XG4kY29udGFpbmVyLmZpbmQoJ2EnKS5vbignY2xpY2snLCBmdW5jdGlvbihlKSB7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgIHZhciAkbGluayA9ICQoZS5jdXJyZW50VGFyZ2V0KTtcblxuICAgICQuYWpheCh7XG4gICAgICAgIHVybDogJy9jb21tZW50cy8xMC92b3RlLycgKyAkbGluay5kYXRhKCdkaXJlY3Rpb24nKSxcbiAgICAgICAgbWV0aG9kOiAnUE9TVCdcbiAgICB9KS50aGVuKGZ1bmN0aW9uKGRhdGEpIHtcbiAgICAgICAgJGNvbnRhaW5lci5maW5kKCcudm90ZS10b3RhbCcpLnRleHQoZGF0YS52b3Rlcyk7XG4gICAgfSk7XG59KTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsiJCIsIiRjb250YWluZXIiLCJmaW5kIiwib24iLCJlIiwicHJldmVudERlZmF1bHQiLCIkbGluayIsImN1cnJlbnRUYXJnZXQiLCJhamF4IiwidXJsIiwiZGF0YSIsIm1ldGhvZCIsInRoZW4iLCJ0ZXh0Iiwidm90ZXMiXSwic291cmNlUm9vdCI6IiJ9