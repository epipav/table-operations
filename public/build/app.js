(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js");
/* harmony import */ var vue_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue-router */ "./node_modules/vue-router/dist/vue-router.esm.js");
/* harmony import */ var bootstrap_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! bootstrap-vue */ "./node_modules/bootstrap-vue/esm/index.js");
/* harmony import */ var bootstrap_dist_css_bootstrap_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! bootstrap/dist/css/bootstrap.css */ "./node_modules/bootstrap/dist/css/bootstrap.css");
/* harmony import */ var bootstrap_dist_css_bootstrap_css__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(bootstrap_dist_css_bootstrap_css__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var bootstrap_vue_dist_bootstrap_vue_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! bootstrap-vue/dist/bootstrap-vue.css */ "./node_modules/bootstrap-vue/dist/bootstrap-vue.css");
/* harmony import */ var bootstrap_vue_dist_bootstrap_vue_css__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(bootstrap_vue_dist_bootstrap_vue_css__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _components_App__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/App */ "./assets/js/components/App.vue");
/* harmony import */ var _components_Login__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./components/Login */ "./assets/js/components/Login.vue");
/* harmony import */ var _components_Table__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./components/Table */ "./assets/js/components/Table.vue");



vue__WEBPACK_IMPORTED_MODULE_0__["default"].use(vue_router__WEBPACK_IMPORTED_MODULE_1__["default"]);
vue__WEBPACK_IMPORTED_MODULE_0__["default"].use(bootstrap_vue__WEBPACK_IMPORTED_MODULE_2__["BootstrapVue"]);
vue__WEBPACK_IMPORTED_MODULE_0__["default"].use(bootstrap_vue__WEBPACK_IMPORTED_MODULE_2__["IconsPlugin"]);





var router = new vue_router__WEBPACK_IMPORTED_MODULE_1__["default"]({
  mode: 'history',
  routes: [{
    path: '/table',
    name: 'table',
    component: _components_Table__WEBPACK_IMPORTED_MODULE_7__["default"]
  }, {
    path: '/login',
    name: 'login',
    component: _components_Login__WEBPACK_IMPORTED_MODULE_6__["default"]
  }]
});
var app = new vue__WEBPACK_IMPORTED_MODULE_0__["default"]({
  el: '#app',
  render: function render(h) {
    return h(_components_App__WEBPACK_IMPORTED_MODULE_5__["default"]);
  },
  router: router
});

/***/ }),

/***/ "./assets/js/components/App.vue":
/*!**************************************!*\
  !*** ./assets/js/components/App.vue ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _App_vue_vue_type_template_id_0dd47e10___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./App.vue?vue&type=template&id=0dd47e10& */ "./assets/js/components/App.vue?vue&type=template&id=0dd47e10&");
/* harmony import */ var _App_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./App.vue?vue&type=script&lang=js& */ "./assets/js/components/App.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _App_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _App_vue_vue_type_template_id_0dd47e10___WEBPACK_IMPORTED_MODULE_0__["render"],
  _App_vue_vue_type_template_id_0dd47e10___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "assets/js/components/App.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./assets/js/components/App.vue?vue&type=script&lang=js&":
/*!***************************************************************!*\
  !*** ./assets/js/components/App.vue?vue&type=script&lang=js& ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_App_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--0-0!../../../node_modules/vue-loader/lib??vue-loader-options!./App.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/components/App.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_0_0_node_modules_vue_loader_lib_index_js_vue_loader_options_App_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./assets/js/components/App.vue?vue&type=template&id=0dd47e10&":
/*!*********************************************************************!*\
  !*** ./assets/js/components/App.vue?vue&type=template&id=0dd47e10& ***!
  \*********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_App_vue_vue_type_template_id_0dd47e10___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./App.vue?vue&type=template&id=0dd47e10& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/components/App.vue?vue&type=template&id=0dd47e10&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_App_vue_vue_type_template_id_0dd47e10___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_App_vue_vue_type_template_id_0dd47e10___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./assets/js/components/Login.vue":
/*!****************************************!*\
  !*** ./assets/js/components/Login.vue ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Login_vue_vue_type_template_id_69c1f598___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Login.vue?vue&type=template&id=69c1f598& */ "./assets/js/components/Login.vue?vue&type=template&id=69c1f598&");
/* harmony import */ var _login_js_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../login.js?vue&type=script&lang=js& */ "./assets/js/login.js?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _login_js_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Login_vue_vue_type_template_id_69c1f598___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Login_vue_vue_type_template_id_69c1f598___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "assets/js/components/Login.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./assets/js/components/Login.vue?vue&type=template&id=69c1f598&":
/*!***********************************************************************!*\
  !*** ./assets/js/components/Login.vue?vue&type=template&id=69c1f598& ***!
  \***********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Login_vue_vue_type_template_id_69c1f598___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Login.vue?vue&type=template&id=69c1f598& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/components/Login.vue?vue&type=template&id=69c1f598&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Login_vue_vue_type_template_id_69c1f598___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Login_vue_vue_type_template_id_69c1f598___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./assets/js/components/Table.vue":
/*!****************************************!*\
  !*** ./assets/js/components/Table.vue ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Table_vue_vue_type_template_id_59b5877d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Table.vue?vue&type=template&id=59b5877d& */ "./assets/js/components/Table.vue?vue&type=template&id=59b5877d&");
/* harmony import */ var _table_js_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../table.js?vue&type=script&lang=js& */ "./assets/js/table.js?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _table_js_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Table_vue_vue_type_template_id_59b5877d___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Table_vue_vue_type_template_id_59b5877d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "assets/js/components/Table.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./assets/js/components/Table.vue?vue&type=template&id=59b5877d&":
/*!***********************************************************************!*\
  !*** ./assets/js/components/Table.vue?vue&type=template&id=59b5877d& ***!
  \***********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Table_vue_vue_type_template_id_59b5877d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Table.vue?vue&type=template&id=59b5877d& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/components/Table.vue?vue&type=template&id=59b5877d&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Table_vue_vue_type_template_id_59b5877d___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Table_vue_vue_type_template_id_59b5877d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./assets/js/login.js?vue&type=script&lang=js&":
/*!*****************************************************!*\
  !*** ./assets/js/login.js?vue&type=script&lang=js& ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_0_0_login_js_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--0-0!./login.js?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./assets/js/login.js?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_0_0_login_js_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./assets/js/table.js?vue&type=script&lang=js&":
/*!*****************************************************!*\
  !*** ./assets/js/table.js?vue&type=script&lang=js& ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_0_0_table_js_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--0-0!./table.js?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./assets/js/table.js?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_0_0_table_js_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./assets/js/login.js?vue&type=script&lang=js&":
/*!***********************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--0-0!./assets/js/login.js?vue&type=script&lang=js& ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      passphrase: ''
    };
  },
  methods: {
    login: function login() {
      if (this.passphrase === "mypass") {
        this.$emit("authenticated", true);
        this.$router.replace({
          name: "table"
        });
      } else {
        console.log("passphrase wrong!");
      }
    }
  },
  watch: {
    passphrase: function passphrase(newValue) {
      this.passphrase = newValue;
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./assets/js/table.js?vue&type=script&lang=js&":
/*!***********************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--0-0!./assets/js/table.js?vue&type=script&lang=js& ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_0__);

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      perPage: 10,
      currentPage: 1,
      items: [],
      search: '',
      table: []
    };
  },
  mounted: function mounted() {
    var _this = this;

    console.log("is auth?");
    axios__WEBPACK_IMPORTED_MODULE_0___default.a.get('/api/tables').then(function (response) {
      /*
      if (response.data["success"]) {
        this.result_matrix = this.generateString(response.data["result_stringified"]);
      }
      else {
        this.backend_error = response.data["error"];
      }
      */
      _this.items = response.data["data"];
      /*let tableElement = document.querySelector("div[data-table]");
      let table = JSON.parse(tableElement.dataset.table);*/

      _this.table = response.data["data"];
    });
  },
  computed: {
    rows: function rows() {
      return this.items.length;
    }
  },
  watch: {
    perPage: function perPage(newValue) {
      if (newValue < 1) {
        this.perPage = 1;
      } else {
        this.perPage = newValue;
      }
    },
    search: function search(newValue) {
      var _this2 = this;

      if (newValue === '') {
        this.items = this.table;
      } else {
        var payload = {
          q: newValue
        };
        axios__WEBPACK_IMPORTED_MODULE_0___default.a.post('/api/search', payload).then(function (response) {
          /*
          if (response.data["success"]) {
            this.result_matrix = this.generateString(response.data["result_stringified"]);
          }
          else {
            this.backend_error = response.data["error"];
          }
          */
          _this2.items = response.data["data"];
        });
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/components/App.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--0-0!./node_modules/vue-loader/lib??vue-loader-options!./assets/js/components/App.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      authenticated: false
    };
  },
  mounted: function mounted() {
    if (!this.authenticated) {
      this.$router.replace({
        name: "login"
      });
    }
  },
  methods: {
    setAuthenticated: function setAuthenticated(status) {
      this.authenticated = status;
    },
    logout: function logout() {
      this.authenticated = false;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/components/App.vue?vue&type=template&id=0dd47e10&":
/*!***************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./assets/js/components/App.vue?vue&type=template&id=0dd47e10& ***!
  \***************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c(
      "nav",
      { staticClass: "navbar navbar-expand-md navbar-light navbar-laravel" },
      [
        _c(
          "div",
          { staticClass: "ml-0 container" },
          [
            _c(
              "router-link",
              { staticClass: "avbar-brand", attrs: { to: { name: "table" } } },
              [_vm._v("Table Operations")]
            ),
            _vm._v(" "),
            _vm._m(0),
            _vm._v(" "),
            _vm._m(1)
          ],
          1
        )
      ]
    ),
    _vm._v(" "),
    _c(
      "main",
      { staticClass: "py-4" },
      [_c("router-view", { on: { authenticated: _vm.setAuthenticated } })],
      1
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "navbar-toggler",
        attrs: {
          type: "button",
          "data-toggle": "collapse",
          "data-target": "#navbarSupportedContent",
          "aria-controls": "navbarSupportedContent",
          "aria-expanded": "false",
          "aria-label": "Toggle navigation"
        }
      },
      [_c("span", { staticClass: "navbar-toggler-icon" })]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "collapse navbar-collapse",
        attrs: { id: "navbarSupportedContent" }
      },
      [
        _c("ul", { staticClass: "navbar-nav mr-auto" }),
        _vm._v(" "),
        _c("ul", { staticClass: "navbar-nav ml-auto" }, [
          _c("li", { staticClass: "nav-link" })
        ])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/components/Login.vue?vue&type=template&id=69c1f598&":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./assets/js/components/Login.vue?vue&type=template&id=69c1f598& ***!
  \*****************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "b-container",
        { staticClass: "mb-4 float-left" },
        [
          _c(
            "b-row",
            { staticClass: "no-gutters", attrs: { "align-v": "center" } },
            [
              _c("b-col", { staticClass: "text-left col-1 col-md-3" }, [
                _vm._v("Please enter passphrase:")
              ]),
              _vm._v(" "),
              _c(
                "b-col",
                { staticClass: "col-2 col-md-2" },
                [
                  _c("b-form-input", {
                    attrs: {
                      id: "passphrase",
                      type: "text",
                      placeholder: "Passphrase"
                    },
                    model: {
                      value: _vm.passphrase,
                      callback: function($$v) {
                        _vm.passphrase = $$v
                      },
                      expression: "passphrase"
                    }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "b-col",
                { staticClass: "ml-3 col-2 col-md-2" },
                [
                  _c(
                    "b-button",
                    { attrs: { size: "sm" }, on: { click: _vm.login } },
                    [_vm._v("Login")]
                  )
                ],
                1
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./assets/js/components/Table.vue?vue&type=template&id=59b5877d&":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./assets/js/components/Table.vue?vue&type=template&id=59b5877d& ***!
  \*****************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "b-container",
        { staticClass: "mb-4 float-left" },
        [
          _c(
            "b-row",
            { staticClass: "no-gutters", attrs: { "align-v": "center" } },
            [
              _c(
                "b-col",
                {
                  staticClass: "col-2 col-md-4",
                  attrs: { "align-v": "center" }
                },
                [
                  _c("b-pagination", {
                    staticClass: "text-center",
                    attrs: {
                      "total-rows": _vm.rows,
                      "per-page": _vm.perPage,
                      "aria-controls": "my-table"
                    },
                    model: {
                      value: _vm.currentPage,
                      callback: function($$v) {
                        _vm.currentPage = $$v
                      },
                      expression: "currentPage"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "b-row",
            { staticClass: "no-gutters", attrs: { "align-v": "center" } },
            [
              _c("b-col", { staticClass: "text-left col-1 col-md-1" }, [
                _vm._v("Items per page:")
              ]),
              _vm._v(" "),
              _c(
                "b-col",
                { staticClass: "col-2 col-md-1" },
                [
                  _c("b-form-input", {
                    attrs: {
                      id: "per-page",
                      maxlength: "3",
                      type: "number",
                      placeholder: "Enter your name"
                    },
                    model: {
                      value: _vm.perPage,
                      callback: function($$v) {
                        _vm.perPage = $$v
                      },
                      expression: "perPage"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "b-row",
            { staticClass: "no-gutters", attrs: { "align-v": "center" } },
            [
              _c("b-col", { staticClass: "text-left col-1 col-md-1" }, [
                _vm._v("Search:")
              ]),
              _vm._v(" "),
              _c(
                "b-col",
                { staticClass: "col-2 col-md-2" },
                [
                  _c("b-form-input", {
                    attrs: {
                      id: "search",
                      type: "text",
                      placeholder: "Search"
                    },
                    model: {
                      value: _vm.search,
                      callback: function($$v) {
                        _vm.search = $$v
                      },
                      expression: "search"
                    }
                  })
                ],
                1
              )
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c("b-table", {
        attrs: {
          id: "my-table",
          striped: "",
          hover: "",
          items: _vm.items,
          "per-page": _vm.perPage,
          "current-page": _vm.currentPage
        }
      })
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

},[["./assets/js/app.js","runtime","vendors~app~bootstrap","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb21wb25lbnRzL0FwcC52dWUiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbXBvbmVudHMvQXBwLnZ1ZT9iZWRhIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb21wb25lbnRzL0FwcC52dWU/MDk2OCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvY29tcG9uZW50cy9Mb2dpbi52dWUiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbXBvbmVudHMvTG9naW4udnVlP2NiYmIiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbXBvbmVudHMvVGFibGUudnVlIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb21wb25lbnRzL1RhYmxlLnZ1ZT82ZWVjIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9sb2dpbi5qcz85NmUwIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy90YWJsZS5qcz84Y2JjIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9sb2dpbi5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvdGFibGUuanMiLCJ3ZWJwYWNrOi8vL2Fzc2V0cy9qcy9jb21wb25lbnRzL0FwcC52dWUiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbXBvbmVudHMvQXBwLnZ1ZT9hN2JlIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb21wb25lbnRzL0xvZ2luLnZ1ZT9hODgzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb21wb25lbnRzL1RhYmxlLnZ1ZT9kZGVkIl0sIm5hbWVzIjpbIlZ1ZSIsInVzZSIsIlZ1ZVJvdXRlciIsIkJvb3RzdHJhcFZ1ZSIsIkljb25zUGx1Z2luIiwicm91dGVyIiwibW9kZSIsInJvdXRlcyIsInBhdGgiLCJuYW1lIiwiY29tcG9uZW50IiwiVGFibGUiLCJMb2dpbiIsImFwcCIsImVsIiwicmVuZGVyIiwiaCIsIkFwcCIsImRhdGEiLCJwYXNzcGhyYXNlIiwibWV0aG9kcyIsImxvZ2luIiwiJGVtaXQiLCIkcm91dGVyIiwicmVwbGFjZSIsImNvbnNvbGUiLCJsb2ciLCJ3YXRjaCIsIm5ld1ZhbHVlIiwicGVyUGFnZSIsImN1cnJlbnRQYWdlIiwiaXRlbXMiLCJzZWFyY2giLCJ0YWJsZSIsIm1vdW50ZWQiLCJBeGlvcyIsImdldCIsInRoZW4iLCJyZXNwb25zZSIsImNvbXB1dGVkIiwicm93cyIsImxlbmd0aCIsInBheWxvYWQiLCJxIiwicG9zdCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFFQUEsMkNBQUcsQ0FBQ0MsR0FBSixDQUFRQyxrREFBUjtBQUVBRiwyQ0FBRyxDQUFDQyxHQUFKLENBQVFFLDBEQUFSO0FBQ0FILDJDQUFHLENBQUNDLEdBQUosQ0FBUUcseURBQVI7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBRUEsSUFBTUMsTUFBTSxHQUFHLElBQUlILGtEQUFKLENBQWM7QUFDekJJLE1BQUksRUFBRSxTQURtQjtBQUV6QkMsUUFBTSxFQUFFLENBQ0o7QUFDSUMsUUFBSSxFQUFFLFFBRFY7QUFFSUMsUUFBSSxFQUFFLE9BRlY7QUFHSUMsYUFBUyxFQUFFQyx5REFBS0E7QUFIcEIsR0FESSxFQU1KO0FBQ0lILFFBQUksRUFBRSxRQURWO0FBRUlDLFFBQUksRUFBRSxPQUZWO0FBR0lDLGFBQVMsRUFBRUUseURBQUtBO0FBSHBCLEdBTkk7QUFGaUIsQ0FBZCxDQUFmO0FBZ0JBLElBQU1DLEdBQUcsR0FBRyxJQUFJYiwyQ0FBSixDQUFRO0FBQ2hCYyxJQUFFLEVBQUUsTUFEWTtBQUVoQkMsUUFBTSxFQUFFLGdCQUFBQyxDQUFDO0FBQUEsV0FBSUEsQ0FBQyxDQUFDQyx1REFBRCxDQUFMO0FBQUEsR0FGTztBQUdoQlosUUFBTSxFQUFOQTtBQUhnQixDQUFSLENBQVosQzs7Ozs7Ozs7Ozs7O0FDL0JBO0FB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QTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgVnVlIGZyb20gJ3Z1ZSdcbmltcG9ydCBWdWVSb3V0ZXIgZnJvbSAndnVlLXJvdXRlcidcbmltcG9ydCB7IEJvb3RzdHJhcFZ1ZSwgSWNvbnNQbHVnaW4gfSBmcm9tICdib290c3RyYXAtdnVlJ1xuXG5WdWUudXNlKFZ1ZVJvdXRlcilcblxuVnVlLnVzZShCb290c3RyYXBWdWUpXG5WdWUudXNlKEljb25zUGx1Z2luKVxuaW1wb3J0ICdib290c3RyYXAvZGlzdC9jc3MvYm9vdHN0cmFwLmNzcydcbmltcG9ydCAnYm9vdHN0cmFwLXZ1ZS9kaXN0L2Jvb3RzdHJhcC12dWUuY3NzJ1xuXG5pbXBvcnQgQXBwIGZyb20gJy4vY29tcG9uZW50cy9BcHAnXG5pbXBvcnQgTG9naW4gZnJvbSAnLi9jb21wb25lbnRzL0xvZ2luJ1xuaW1wb3J0IFRhYmxlIGZyb20gJy4vY29tcG9uZW50cy9UYWJsZSdcblxuY29uc3Qgcm91dGVyID0gbmV3IFZ1ZVJvdXRlcih7XG4gICAgbW9kZTogJ2hpc3RvcnknLFxuICAgIHJvdXRlczogW1xuICAgICAgICB7XG4gICAgICAgICAgICBwYXRoOiAnL3RhYmxlJyxcbiAgICAgICAgICAgIG5hbWU6ICd0YWJsZScsXG4gICAgICAgICAgICBjb21wb25lbnQ6IFRhYmxlXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIHBhdGg6ICcvbG9naW4nLFxuICAgICAgICAgICAgbmFtZTogJ2xvZ2luJyxcbiAgICAgICAgICAgIGNvbXBvbmVudDogTG9naW5cbiAgICAgICAgfVxuICAgIF0sXG59KTtcblxuY29uc3QgYXBwID0gbmV3IFZ1ZSh7XG4gICAgZWw6ICcjYXBwJyxcbiAgICByZW5kZXI6IGggPT4gaChBcHApLFxuICAgIHJvdXRlclxufSk7IiwiaW1wb3J0IHsgcmVuZGVyLCBzdGF0aWNSZW5kZXJGbnMgfSBmcm9tIFwiLi9BcHAudnVlP3Z1ZSZ0eXBlPXRlbXBsYXRlJmlkPTBkZDQ3ZTEwJlwiXG5pbXBvcnQgc2NyaXB0IGZyb20gXCIuL0FwcC52dWU/dnVlJnR5cGU9c2NyaXB0Jmxhbmc9anMmXCJcbmV4cG9ydCAqIGZyb20gXCIuL0FwcC52dWU/dnVlJnR5cGU9c2NyaXB0Jmxhbmc9anMmXCJcblxuXG4vKiBub3JtYWxpemUgY29tcG9uZW50ICovXG5pbXBvcnQgbm9ybWFsaXplciBmcm9tIFwiIS4uLy4uLy4uL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9ydW50aW1lL2NvbXBvbmVudE5vcm1hbGl6ZXIuanNcIlxudmFyIGNvbXBvbmVudCA9IG5vcm1hbGl6ZXIoXG4gIHNjcmlwdCxcbiAgcmVuZGVyLFxuICBzdGF0aWNSZW5kZXJGbnMsXG4gIGZhbHNlLFxuICBudWxsLFxuICBudWxsLFxuICBudWxsXG4gIFxuKVxuXG4vKiBob3QgcmVsb2FkICovXG5pZiAobW9kdWxlLmhvdCkge1xuICB2YXIgYXBpID0gcmVxdWlyZShcIi9ob21lL2FuaWx5L3RhYmxlLW9wZXJhdGlvbnMvbm9kZV9tb2R1bGVzL3Z1ZS1ob3QtcmVsb2FkLWFwaS9kaXN0L2luZGV4LmpzXCIpXG4gIGFwaS5pbnN0YWxsKHJlcXVpcmUoJ3Z1ZScpKVxuICBpZiAoYXBpLmNvbXBhdGlibGUpIHtcbiAgICBtb2R1bGUuaG90LmFjY2VwdCgpXG4gICAgaWYgKCFhcGkuaXNSZWNvcmRlZCgnMGRkNDdlMTAnKSkge1xuICAgICAgYXBpLmNyZWF0ZVJlY29yZCgnMGRkNDdlMTAnLCBjb21wb25lbnQub3B0aW9ucylcbiAgICB9IGVsc2Uge1xuICAgICAgYXBpLnJlbG9hZCgnMGRkNDdlMTAnLCBjb21wb25lbnQub3B0aW9ucylcbiAgICB9XG4gICAgbW9kdWxlLmhvdC5hY2NlcHQoXCIuL0FwcC52dWU/dnVlJnR5cGU9dGVtcGxhdGUmaWQ9MGRkNDdlMTAmXCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgIGFwaS5yZXJlbmRlcignMGRkNDdlMTAnLCB7XG4gICAgICAgIHJlbmRlcjogcmVuZGVyLFxuICAgICAgICBzdGF0aWNSZW5kZXJGbnM6IHN0YXRpY1JlbmRlckZuc1xuICAgICAgfSlcbiAgICB9KVxuICB9XG59XG5jb21wb25lbnQub3B0aW9ucy5fX2ZpbGUgPSBcImFzc2V0cy9qcy9jb21wb25lbnRzL0FwcC52dWVcIlxuZXhwb3J0IGRlZmF1bHQgY29tcG9uZW50LmV4cG9ydHMiLCJpbXBvcnQgbW9kIGZyb20gXCItIS4uLy4uLy4uL25vZGVfbW9kdWxlcy9iYWJlbC1sb2FkZXIvbGliL2luZGV4LmpzPz9yZWYtLTAtMCEuLi8uLi8uLi9ub2RlX21vZHVsZXMvdnVlLWxvYWRlci9saWIvaW5kZXguanM/P3Z1ZS1sb2FkZXItb3B0aW9ucyEuL0FwcC52dWU/dnVlJnR5cGU9c2NyaXB0Jmxhbmc9anMmXCI7IGV4cG9ydCBkZWZhdWx0IG1vZDsgZXhwb3J0ICogZnJvbSBcIi0hLi4vLi4vLi4vbm9kZV9tb2R1bGVzL2JhYmVsLWxvYWRlci9saWIvaW5kZXguanM/P3JlZi0tMC0wIS4uLy4uLy4uL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9pbmRleC5qcz8/dnVlLWxvYWRlci1vcHRpb25zIS4vQXBwLnZ1ZT92dWUmdHlwZT1zY3JpcHQmbGFuZz1qcyZcIiIsImV4cG9ydCAqIGZyb20gXCItIS4uLy4uLy4uL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9sb2FkZXJzL3RlbXBsYXRlTG9hZGVyLmpzPz92dWUtbG9hZGVyLW9wdGlvbnMhLi4vLi4vLi4vbm9kZV9tb2R1bGVzL3Z1ZS1sb2FkZXIvbGliL2luZGV4LmpzPz92dWUtbG9hZGVyLW9wdGlvbnMhLi9BcHAudnVlP3Z1ZSZ0eXBlPXRlbXBsYXRlJmlkPTBkZDQ3ZTEwJlwiIiwiaW1wb3J0IHsgcmVuZGVyLCBzdGF0aWNSZW5kZXJGbnMgfSBmcm9tIFwiLi9Mb2dpbi52dWU/dnVlJnR5cGU9dGVtcGxhdGUmaWQ9NjljMWY1OTgmXCJcbmltcG9ydCBzY3JpcHQgZnJvbSBcIi4uL2xvZ2luLmpzP3Z1ZSZ0eXBlPXNjcmlwdCZsYW5nPWpzJlwiXG5leHBvcnQgKiBmcm9tIFwiLi4vbG9naW4uanM/dnVlJnR5cGU9c2NyaXB0Jmxhbmc9anMmXCJcblxuXG4vKiBub3JtYWxpemUgY29tcG9uZW50ICovXG5pbXBvcnQgbm9ybWFsaXplciBmcm9tIFwiIS4uLy4uLy4uL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9ydW50aW1lL2NvbXBvbmVudE5vcm1hbGl6ZXIuanNcIlxudmFyIGNvbXBvbmVudCA9IG5vcm1hbGl6ZXIoXG4gIHNjcmlwdCxcbiAgcmVuZGVyLFxuICBzdGF0aWNSZW5kZXJGbnMsXG4gIGZhbHNlLFxuICBudWxsLFxuICBudWxsLFxuICBudWxsXG4gIFxuKVxuXG4vKiBob3QgcmVsb2FkICovXG5pZiAobW9kdWxlLmhvdCkge1xuICB2YXIgYXBpID0gcmVxdWlyZShcIi9ob21lL2FuaWx5L3RhYmxlLW9wZXJhdGlvbnMvbm9kZV9tb2R1bGVzL3Z1ZS1ob3QtcmVsb2FkLWFwaS9kaXN0L2luZGV4LmpzXCIpXG4gIGFwaS5pbnN0YWxsKHJlcXVpcmUoJ3Z1ZScpKVxuICBpZiAoYXBpLmNvbXBhdGlibGUpIHtcbiAgICBtb2R1bGUuaG90LmFjY2VwdCgpXG4gICAgaWYgKCFhcGkuaXNSZWNvcmRlZCgnNjljMWY1OTgnKSkge1xuICAgICAgYXBpLmNyZWF0ZVJlY29yZCgnNjljMWY1OTgnLCBjb21wb25lbnQub3B0aW9ucylcbiAgICB9IGVsc2Uge1xuICAgICAgYXBpLnJlbG9hZCgnNjljMWY1OTgnLCBjb21wb25lbnQub3B0aW9ucylcbiAgICB9XG4gICAgbW9kdWxlLmhvdC5hY2NlcHQoXCIuL0xvZ2luLnZ1ZT92dWUmdHlwZT10ZW1wbGF0ZSZpZD02OWMxZjU5OCZcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgYXBpLnJlcmVuZGVyKCc2OWMxZjU5OCcsIHtcbiAgICAgICAgcmVuZGVyOiByZW5kZXIsXG4gICAgICAgIHN0YXRpY1JlbmRlckZuczogc3RhdGljUmVuZGVyRm5zXG4gICAgICB9KVxuICAgIH0pXG4gIH1cbn1cbmNvbXBvbmVudC5vcHRpb25zLl9fZmlsZSA9IFwiYXNzZXRzL2pzL2NvbXBvbmVudHMvTG9naW4udnVlXCJcbmV4cG9ydCBkZWZhdWx0IGNvbXBvbmVudC5leHBvcnRzIiwiZXhwb3J0ICogZnJvbSBcIi0hLi4vLi4vLi4vbm9kZV9tb2R1bGVzL3Z1ZS1sb2FkZXIvbGliL2xvYWRlcnMvdGVtcGxhdGVMb2FkZXIuanM/P3Z1ZS1sb2FkZXItb3B0aW9ucyEuLi8uLi8uLi9ub2RlX21vZHVsZXMvdnVlLWxvYWRlci9saWIvaW5kZXguanM/P3Z1ZS1sb2FkZXItb3B0aW9ucyEuL0xvZ2luLnZ1ZT92dWUmdHlwZT10ZW1wbGF0ZSZpZD02OWMxZjU5OCZcIiIsImltcG9ydCB7IHJlbmRlciwgc3RhdGljUmVuZGVyRm5zIH0gZnJvbSBcIi4vVGFibGUudnVlP3Z1ZSZ0eXBlPXRlbXBsYXRlJmlkPTU5YjU4NzdkJlwiXG5pbXBvcnQgc2NyaXB0IGZyb20gXCIuLi90YWJsZS5qcz92dWUmdHlwZT1zY3JpcHQmbGFuZz1qcyZcIlxuZXhwb3J0ICogZnJvbSBcIi4uL3RhYmxlLmpzP3Z1ZSZ0eXBlPXNjcmlwdCZsYW5nPWpzJlwiXG5cblxuLyogbm9ybWFsaXplIGNvbXBvbmVudCAqL1xuaW1wb3J0IG5vcm1hbGl6ZXIgZnJvbSBcIiEuLi8uLi8uLi9ub2RlX21vZHVsZXMvdnVlLWxvYWRlci9saWIvcnVudGltZS9jb21wb25lbnROb3JtYWxpemVyLmpzXCJcbnZhciBjb21wb25lbnQgPSBub3JtYWxpemVyKFxuICBzY3JpcHQsXG4gIHJlbmRlcixcbiAgc3RhdGljUmVuZGVyRm5zLFxuICBmYWxzZSxcbiAgbnVsbCxcbiAgbnVsbCxcbiAgbnVsbFxuICBcbilcblxuLyogaG90IHJlbG9hZCAqL1xuaWYgKG1vZHVsZS5ob3QpIHtcbiAgdmFyIGFwaSA9IHJlcXVpcmUoXCIvaG9tZS9hbmlseS90YWJsZS1vcGVyYXRpb25zL25vZGVfbW9kdWxlcy92dWUtaG90LXJlbG9hZC1hcGkvZGlzdC9pbmRleC5qc1wiKVxuICBhcGkuaW5zdGFsbChyZXF1aXJlKCd2dWUnKSlcbiAgaWYgKGFwaS5jb21wYXRpYmxlKSB7XG4gICAgbW9kdWxlLmhvdC5hY2NlcHQoKVxuICAgIGlmICghYXBpLmlzUmVjb3JkZWQoJzU5YjU4NzdkJykpIHtcbiAgICAgIGFwaS5jcmVhdGVSZWNvcmQoJzU5YjU4NzdkJywgY29tcG9uZW50Lm9wdGlvbnMpXG4gICAgfSBlbHNlIHtcbiAgICAgIGFwaS5yZWxvYWQoJzU5YjU4NzdkJywgY29tcG9uZW50Lm9wdGlvbnMpXG4gICAgfVxuICAgIG1vZHVsZS5ob3QuYWNjZXB0KFwiLi9UYWJsZS52dWU/dnVlJnR5cGU9dGVtcGxhdGUmaWQ9NTliNTg3N2QmXCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgIGFwaS5yZXJlbmRlcignNTliNTg3N2QnLCB7XG4gICAgICAgIHJlbmRlcjogcmVuZGVyLFxuICAgICAgICBzdGF0aWNSZW5kZXJGbnM6IHN0YXRpY1JlbmRlckZuc1xuICAgICAgfSlcbiAgICB9KVxuICB9XG59XG5jb21wb25lbnQub3B0aW9ucy5fX2ZpbGUgPSBcImFzc2V0cy9qcy9jb21wb25lbnRzL1RhYmxlLnZ1ZVwiXG5leHBvcnQgZGVmYXVsdCBjb21wb25lbnQuZXhwb3J0cyIsImV4cG9ydCAqIGZyb20gXCItIS4uLy4uLy4uL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9sb2FkZXJzL3RlbXBsYXRlTG9hZGVyLmpzPz92dWUtbG9hZGVyLW9wdGlvbnMhLi4vLi4vLi4vbm9kZV9tb2R1bGVzL3Z1ZS1sb2FkZXIvbGliL2luZGV4LmpzPz92dWUtbG9hZGVyLW9wdGlvbnMhLi9UYWJsZS52dWU/dnVlJnR5cGU9dGVtcGxhdGUmaWQ9NTliNTg3N2QmXCIiLCJpbXBvcnQgbW9kIGZyb20gXCItIS4uLy4uL25vZGVfbW9kdWxlcy9iYWJlbC1sb2FkZXIvbGliL2luZGV4LmpzPz9yZWYtLTAtMCEuL2xvZ2luLmpzP3Z1ZSZ0eXBlPXNjcmlwdCZsYW5nPWpzJlwiOyBleHBvcnQgZGVmYXVsdCBtb2Q7IGV4cG9ydCAqIGZyb20gXCItIS4uLy4uL25vZGVfbW9kdWxlcy9iYWJlbC1sb2FkZXIvbGliL2luZGV4LmpzPz9yZWYtLTAtMCEuL2xvZ2luLmpzP3Z1ZSZ0eXBlPXNjcmlwdCZsYW5nPWpzJlwiIiwiaW1wb3J0IG1vZCBmcm9tIFwiLSEuLi8uLi9ub2RlX21vZHVsZXMvYmFiZWwtbG9hZGVyL2xpYi9pbmRleC5qcz8/cmVmLS0wLTAhLi90YWJsZS5qcz92dWUmdHlwZT1zY3JpcHQmbGFuZz1qcyZcIjsgZXhwb3J0IGRlZmF1bHQgbW9kOyBleHBvcnQgKiBmcm9tIFwiLSEuLi8uLi9ub2RlX21vZHVsZXMvYmFiZWwtbG9hZGVyL2xpYi9pbmRleC5qcz8/cmVmLS0wLTAhLi90YWJsZS5qcz92dWUmdHlwZT1zY3JpcHQmbGFuZz1qcyZcIiIsImV4cG9ydCBkZWZhdWx0IHtcbiAgICBkYXRhKCkge1xuICAgICAgICByZXR1cm4ge1xuICAgICAgICAgICAgcGFzc3BocmFzZTonJ1xuICAgICAgICB9XG4gICAgICB9LFxuICAgICAgbWV0aG9kczoge1xuICAgICAgICAgIGxvZ2luKCl7XG4gICAgICAgICAgICAgICAgaWYodGhpcy5wYXNzcGhyYXNlID09PSBcIm15cGFzc1wiKXtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy4kZW1pdChcImF1dGhlbnRpY2F0ZWRcIiwgdHJ1ZSk7XG4gICAgICAgICAgICAgICAgICAgIHRoaXMuJHJvdXRlci5yZXBsYWNlKHsgbmFtZTogXCJ0YWJsZVwiIH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBlbHNle1xuICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcInBhc3NwaHJhc2Ugd3JvbmchXCIpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICB9XG4gICAgICB9LFxuICAgICAgd2F0Y2g6IHtcbiAgICAgICAgICBwYXNzcGhyYXNlKG5ld1ZhbHVlKXtcbiAgICAgICAgICAgICAgdGhpcy5wYXNzcGhyYXNlID0gbmV3VmFsdWU7XG5cbiAgICAgICAgICB9XG4gICAgICB9XG5cbn0iLCJpbXBvcnQgQXhpb3MgZnJvbSBcImF4aW9zXCI7XG5leHBvcnQgZGVmYXVsdCB7XG4gIGRhdGEoKSB7XG4gICAgcmV0dXJuIHtcbiAgICAgIHBlclBhZ2U6IDEwLFxuICAgICAgY3VycmVudFBhZ2U6IDEsXG4gICAgICBpdGVtczogW10sXG4gICAgICBzZWFyY2g6ICcnLFxuICAgICAgdGFibGU6IFtdXG4gICAgfVxuICB9LFxuICBtb3VudGVkKCkge1xuICAgIGNvbnNvbGUubG9nKFwiaXMgYXV0aD9cIilcblxuICAgIFxuICAgIEF4aW9zLmdldCgnL2FwaS90YWJsZXMnKVxuICAgICAgLnRoZW4ocmVzcG9uc2UgPT4ge1xuICAgICAgICAvKlxuICAgICAgICBpZiAocmVzcG9uc2UuZGF0YVtcInN1Y2Nlc3NcIl0pIHtcbiAgICAgICAgICB0aGlzLnJlc3VsdF9tYXRyaXggPSB0aGlzLmdlbmVyYXRlU3RyaW5nKHJlc3BvbnNlLmRhdGFbXCJyZXN1bHRfc3RyaW5naWZpZWRcIl0pO1xuICAgICAgICB9XG4gICAgICAgIGVsc2Uge1xuICAgICAgICAgIHRoaXMuYmFja2VuZF9lcnJvciA9IHJlc3BvbnNlLmRhdGFbXCJlcnJvclwiXTtcbiAgICAgICAgfVxuICAgICAgICAqL1xuICAgICAgICB0aGlzLml0ZW1zID0gcmVzcG9uc2UuZGF0YVtcImRhdGFcIl07XG4gICAgICAgIC8qbGV0IHRhYmxlRWxlbWVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCJkaXZbZGF0YS10YWJsZV1cIik7XG4gICAgICAgIGxldCB0YWJsZSA9IEpTT04ucGFyc2UodGFibGVFbGVtZW50LmRhdGFzZXQudGFibGUpOyovXG4gICAgICAgIHRoaXMudGFibGUgPSByZXNwb25zZS5kYXRhW1wiZGF0YVwiXTtcbiAgICAgIH0pO1xuXG5cbiAgfSxcbiAgY29tcHV0ZWQ6IHtcbiAgICByb3dzKCkge1xuICAgICAgcmV0dXJuIHRoaXMuaXRlbXMubGVuZ3RoO1xuICAgIH1cbiAgfSxcbiAgd2F0Y2g6IHtcbiAgICBwZXJQYWdlKG5ld1ZhbHVlKSB7XG4gICAgICBpZiAobmV3VmFsdWUgPCAxKSB7XG4gICAgICAgIHRoaXMucGVyUGFnZSA9IDFcbiAgICAgIH1cbiAgICAgIGVsc2Uge1xuICAgICAgICB0aGlzLnBlclBhZ2UgPSBuZXdWYWx1ZTtcbiAgICAgIH1cbiAgICB9LFxuICAgIHNlYXJjaChuZXdWYWx1ZSkge1xuICAgICAgaWYgKG5ld1ZhbHVlID09PSAnJykge1xuICAgICAgICB0aGlzLml0ZW1zID0gdGhpcy50YWJsZTtcbiAgICAgIH1cbiAgICAgIGVsc2Uge1xuICAgICAgICBjb25zdCBwYXlsb2FkID0geyBxOiBuZXdWYWx1ZSB9O1xuICAgICAgICBBeGlvcy5wb3N0KCcvYXBpL3NlYXJjaCcsIHBheWxvYWQpXG4gICAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4ge1xuICAgICAgICAgICAgLypcbiAgICAgICAgICAgIGlmIChyZXNwb25zZS5kYXRhW1wic3VjY2Vzc1wiXSkge1xuICAgICAgICAgICAgICB0aGlzLnJlc3VsdF9tYXRyaXggPSB0aGlzLmdlbmVyYXRlU3RyaW5nKHJlc3BvbnNlLmRhdGFbXCJyZXN1bHRfc3RyaW5naWZpZWRcIl0pO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgZWxzZSB7XG4gICAgICAgICAgICAgIHRoaXMuYmFja2VuZF9lcnJvciA9IHJlc3BvbnNlLmRhdGFbXCJlcnJvclwiXTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgICovXG4gICAgICAgICAgICB0aGlzLml0ZW1zID0gcmVzcG9uc2UuZGF0YVtcImRhdGFcIl07XG4gICAgICAgICAgfSk7XG5cbiAgICAgIH1cbiAgICB9XG4gIH1cbn0iLCI8dGVtcGxhdGU+XG4gIDxkaXY+XG4gICAgPG5hdiBjbGFzcz1cIm5hdmJhciBuYXZiYXItZXhwYW5kLW1kIG5hdmJhci1saWdodCBuYXZiYXItbGFyYXZlbFwiPlxuICAgICAgPGRpdiBjbGFzcz1cIm1sLTAgY29udGFpbmVyXCI+XG4gICAgICAgIDxyb3V0ZXItbGluayA6dG89XCJ7bmFtZTogJ3RhYmxlJ31cIiBjbGFzcz1cImF2YmFyLWJyYW5kXCI+VGFibGUgT3BlcmF0aW9uczwvcm91dGVyLWxpbms+XG4gICAgICAgIDxidXR0b25cbiAgICAgICAgICBjbGFzcz1cIm5hdmJhci10b2dnbGVyXCJcbiAgICAgICAgICB0eXBlPVwiYnV0dG9uXCJcbiAgICAgICAgICBkYXRhLXRvZ2dsZT1cImNvbGxhcHNlXCJcbiAgICAgICAgICBkYXRhLXRhcmdldD1cIiNuYXZiYXJTdXBwb3J0ZWRDb250ZW50XCJcbiAgICAgICAgICBhcmlhLWNvbnRyb2xzPVwibmF2YmFyU3VwcG9ydGVkQ29udGVudFwiXG4gICAgICAgICAgYXJpYS1leHBhbmRlZD1cImZhbHNlXCJcbiAgICAgICAgICBhcmlhLWxhYmVsPVwiVG9nZ2xlIG5hdmlnYXRpb25cIlxuICAgICAgICA+XG4gICAgICAgICAgPHNwYW4gY2xhc3M9XCJuYXZiYXItdG9nZ2xlci1pY29uXCI+PC9zcGFuPlxuICAgICAgICA8L2J1dHRvbj5cblxuICAgICAgICA8ZGl2IGNsYXNzPVwiY29sbGFwc2UgbmF2YmFyLWNvbGxhcHNlXCIgaWQ9XCJuYXZiYXJTdXBwb3J0ZWRDb250ZW50XCI+XG4gICAgICAgICAgPCEtLSBMZWZ0IFNpZGUgT2YgTmF2YmFyIC0tPlxuICAgICAgICAgIDx1bCBjbGFzcz1cIm5hdmJhci1uYXYgbXItYXV0b1wiPjwvdWw+XG4gICAgICAgICAgPCEtLSBSaWdodCBTaWRlIE9mIE5hdmJhciAtLT5cbiAgICAgICAgICA8dWwgY2xhc3M9XCJuYXZiYXItbmF2IG1sLWF1dG9cIj5cbiAgICAgICAgICAgIDxsaSBjbGFzcz1cIm5hdi1saW5rXCI+PC9saT5cbiAgICAgICAgICA8L3VsPlxuICAgICAgICA8L2Rpdj5cbiAgICAgIDwvZGl2PlxuICAgIDwvbmF2PlxuICAgIDxtYWluIGNsYXNzPVwicHktNFwiPlxuICAgICAgPHJvdXRlci12aWV3IEBhdXRoZW50aWNhdGVkPVwic2V0QXV0aGVudGljYXRlZFwiPjwvcm91dGVyLXZpZXc+XG4gICAgPC9tYWluPlxuICA8L2Rpdj5cbjwvdGVtcGxhdGU+XG48c2NyaXB0PlxuZXhwb3J0IGRlZmF1bHQge1xuICBkYXRhKCkge1xuICAgIHJldHVybiB7XG4gICAgICBhdXRoZW50aWNhdGVkOiBmYWxzZVxuICAgIH07XG4gIH0sXG4gIG1vdW50ZWQoKSB7XG4gICAgaWYgKCF0aGlzLmF1dGhlbnRpY2F0ZWQpIHtcbiAgICAgIHRoaXMuJHJvdXRlci5yZXBsYWNlKHsgbmFtZTogXCJsb2dpblwiIH0pO1xuICAgIH1cbiAgfSxcbiAgbWV0aG9kczoge1xuICAgIHNldEF1dGhlbnRpY2F0ZWQoc3RhdHVzKSB7XG4gICAgICB0aGlzLmF1dGhlbnRpY2F0ZWQgPSBzdGF0dXM7XG4gICAgfSxcbiAgICBsb2dvdXQoKSB7XG4gICAgICB0aGlzLmF1dGhlbnRpY2F0ZWQgPSBmYWxzZTtcbiAgICB9XG4gIH1cbn07XG48L3NjcmlwdD4iLCJ2YXIgcmVuZGVyID0gZnVuY3Rpb24oKSB7XG4gIHZhciBfdm0gPSB0aGlzXG4gIHZhciBfaCA9IF92bS4kY3JlYXRlRWxlbWVudFxuICB2YXIgX2MgPSBfdm0uX3NlbGYuX2MgfHwgX2hcbiAgcmV0dXJuIF9jKFwiZGl2XCIsIFtcbiAgICBfYyhcbiAgICAgIFwibmF2XCIsXG4gICAgICB7IHN0YXRpY0NsYXNzOiBcIm5hdmJhciBuYXZiYXItZXhwYW5kLW1kIG5hdmJhci1saWdodCBuYXZiYXItbGFyYXZlbFwiIH0sXG4gICAgICBbXG4gICAgICAgIF9jKFxuICAgICAgICAgIFwiZGl2XCIsXG4gICAgICAgICAgeyBzdGF0aWNDbGFzczogXCJtbC0wIGNvbnRhaW5lclwiIH0sXG4gICAgICAgICAgW1xuICAgICAgICAgICAgX2MoXG4gICAgICAgICAgICAgIFwicm91dGVyLWxpbmtcIixcbiAgICAgICAgICAgICAgeyBzdGF0aWNDbGFzczogXCJhdmJhci1icmFuZFwiLCBhdHRyczogeyB0bzogeyBuYW1lOiBcInRhYmxlXCIgfSB9IH0sXG4gICAgICAgICAgICAgIFtfdm0uX3YoXCJUYWJsZSBPcGVyYXRpb25zXCIpXVxuICAgICAgICAgICAgKSxcbiAgICAgICAgICAgIF92bS5fdihcIiBcIiksXG4gICAgICAgICAgICBfdm0uX20oMCksXG4gICAgICAgICAgICBfdm0uX3YoXCIgXCIpLFxuICAgICAgICAgICAgX3ZtLl9tKDEpXG4gICAgICAgICAgXSxcbiAgICAgICAgICAxXG4gICAgICAgIClcbiAgICAgIF1cbiAgICApLFxuICAgIF92bS5fdihcIiBcIiksXG4gICAgX2MoXG4gICAgICBcIm1haW5cIixcbiAgICAgIHsgc3RhdGljQ2xhc3M6IFwicHktNFwiIH0sXG4gICAgICBbX2MoXCJyb3V0ZXItdmlld1wiLCB7IG9uOiB7IGF1dGhlbnRpY2F0ZWQ6IF92bS5zZXRBdXRoZW50aWNhdGVkIH0gfSldLFxuICAgICAgMVxuICAgIClcbiAgXSlcbn1cbnZhciBzdGF0aWNSZW5kZXJGbnMgPSBbXG4gIGZ1bmN0aW9uKCkge1xuICAgIHZhciBfdm0gPSB0aGlzXG4gICAgdmFyIF9oID0gX3ZtLiRjcmVhdGVFbGVtZW50XG4gICAgdmFyIF9jID0gX3ZtLl9zZWxmLl9jIHx8IF9oXG4gICAgcmV0dXJuIF9jKFxuICAgICAgXCJidXR0b25cIixcbiAgICAgIHtcbiAgICAgICAgc3RhdGljQ2xhc3M6IFwibmF2YmFyLXRvZ2dsZXJcIixcbiAgICAgICAgYXR0cnM6IHtcbiAgICAgICAgICB0eXBlOiBcImJ1dHRvblwiLFxuICAgICAgICAgIFwiZGF0YS10b2dnbGVcIjogXCJjb2xsYXBzZVwiLFxuICAgICAgICAgIFwiZGF0YS10YXJnZXRcIjogXCIjbmF2YmFyU3VwcG9ydGVkQ29udGVudFwiLFxuICAgICAgICAgIFwiYXJpYS1jb250cm9sc1wiOiBcIm5hdmJhclN1cHBvcnRlZENvbnRlbnRcIixcbiAgICAgICAgICBcImFyaWEtZXhwYW5kZWRcIjogXCJmYWxzZVwiLFxuICAgICAgICAgIFwiYXJpYS1sYWJlbFwiOiBcIlRvZ2dsZSBuYXZpZ2F0aW9uXCJcbiAgICAgICAgfVxuICAgICAgfSxcbiAgICAgIFtfYyhcInNwYW5cIiwgeyBzdGF0aWNDbGFzczogXCJuYXZiYXItdG9nZ2xlci1pY29uXCIgfSldXG4gICAgKVxuICB9LFxuICBmdW5jdGlvbigpIHtcbiAgICB2YXIgX3ZtID0gdGhpc1xuICAgIHZhciBfaCA9IF92bS4kY3JlYXRlRWxlbWVudFxuICAgIHZhciBfYyA9IF92bS5fc2VsZi5fYyB8fCBfaFxuICAgIHJldHVybiBfYyhcbiAgICAgIFwiZGl2XCIsXG4gICAgICB7XG4gICAgICAgIHN0YXRpY0NsYXNzOiBcImNvbGxhcHNlIG5hdmJhci1jb2xsYXBzZVwiLFxuICAgICAgICBhdHRyczogeyBpZDogXCJuYXZiYXJTdXBwb3J0ZWRDb250ZW50XCIgfVxuICAgICAgfSxcbiAgICAgIFtcbiAgICAgICAgX2MoXCJ1bFwiLCB7IHN0YXRpY0NsYXNzOiBcIm5hdmJhci1uYXYgbXItYXV0b1wiIH0pLFxuICAgICAgICBfdm0uX3YoXCIgXCIpLFxuICAgICAgICBfYyhcInVsXCIsIHsgc3RhdGljQ2xhc3M6IFwibmF2YmFyLW5hdiBtbC1hdXRvXCIgfSwgW1xuICAgICAgICAgIF9jKFwibGlcIiwgeyBzdGF0aWNDbGFzczogXCJuYXYtbGlua1wiIH0pXG4gICAgICAgIF0pXG4gICAgICBdXG4gICAgKVxuICB9XG5dXG5yZW5kZXIuX3dpdGhTdHJpcHBlZCA9IHRydWVcblxuZXhwb3J0IHsgcmVuZGVyLCBzdGF0aWNSZW5kZXJGbnMgfSIsInZhciByZW5kZXIgPSBmdW5jdGlvbigpIHtcbiAgdmFyIF92bSA9IHRoaXNcbiAgdmFyIF9oID0gX3ZtLiRjcmVhdGVFbGVtZW50XG4gIHZhciBfYyA9IF92bS5fc2VsZi5fYyB8fCBfaFxuICByZXR1cm4gX2MoXG4gICAgXCJkaXZcIixcbiAgICBbXG4gICAgICBfYyhcbiAgICAgICAgXCJiLWNvbnRhaW5lclwiLFxuICAgICAgICB7IHN0YXRpY0NsYXNzOiBcIm1iLTQgZmxvYXQtbGVmdFwiIH0sXG4gICAgICAgIFtcbiAgICAgICAgICBfYyhcbiAgICAgICAgICAgIFwiYi1yb3dcIixcbiAgICAgICAgICAgIHsgc3RhdGljQ2xhc3M6IFwibm8tZ3V0dGVyc1wiLCBhdHRyczogeyBcImFsaWduLXZcIjogXCJjZW50ZXJcIiB9IH0sXG4gICAgICAgICAgICBbXG4gICAgICAgICAgICAgIF9jKFwiYi1jb2xcIiwgeyBzdGF0aWNDbGFzczogXCJ0ZXh0LWxlZnQgY29sLTEgY29sLW1kLTNcIiB9LCBbXG4gICAgICAgICAgICAgICAgX3ZtLl92KFwiUGxlYXNlIGVudGVyIHBhc3NwaHJhc2U6XCIpXG4gICAgICAgICAgICAgIF0pLFxuICAgICAgICAgICAgICBfdm0uX3YoXCIgXCIpLFxuICAgICAgICAgICAgICBfYyhcbiAgICAgICAgICAgICAgICBcImItY29sXCIsXG4gICAgICAgICAgICAgICAgeyBzdGF0aWNDbGFzczogXCJjb2wtMiBjb2wtbWQtMlwiIH0sXG4gICAgICAgICAgICAgICAgW1xuICAgICAgICAgICAgICAgICAgX2MoXCJiLWZvcm0taW5wdXRcIiwge1xuICAgICAgICAgICAgICAgICAgICBhdHRyczoge1xuICAgICAgICAgICAgICAgICAgICAgIGlkOiBcInBhc3NwaHJhc2VcIixcbiAgICAgICAgICAgICAgICAgICAgICB0eXBlOiBcInRleHRcIixcbiAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcjogXCJQYXNzcGhyYXNlXCJcbiAgICAgICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICAgICAgbW9kZWw6IHtcbiAgICAgICAgICAgICAgICAgICAgICB2YWx1ZTogX3ZtLnBhc3NwaHJhc2UsXG4gICAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2s6IGZ1bmN0aW9uKCQkdikge1xuICAgICAgICAgICAgICAgICAgICAgICAgX3ZtLnBhc3NwaHJhc2UgPSAkJHZcbiAgICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICAgIGV4cHJlc3Npb246IFwicGFzc3BocmFzZVwiXG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAxXG4gICAgICAgICAgICAgICksXG4gICAgICAgICAgICAgIF92bS5fdihcIiBcIiksXG4gICAgICAgICAgICAgIF9jKFxuICAgICAgICAgICAgICAgIFwiYi1jb2xcIixcbiAgICAgICAgICAgICAgICB7IHN0YXRpY0NsYXNzOiBcIm1sLTMgY29sLTIgY29sLW1kLTJcIiB9LFxuICAgICAgICAgICAgICAgIFtcbiAgICAgICAgICAgICAgICAgIF9jKFxuICAgICAgICAgICAgICAgICAgICBcImItYnV0dG9uXCIsXG4gICAgICAgICAgICAgICAgICAgIHsgYXR0cnM6IHsgc2l6ZTogXCJzbVwiIH0sIG9uOiB7IGNsaWNrOiBfdm0ubG9naW4gfSB9LFxuICAgICAgICAgICAgICAgICAgICBbX3ZtLl92KFwiTG9naW5cIildXG4gICAgICAgICAgICAgICAgICApXG4gICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAxXG4gICAgICAgICAgICAgIClcbiAgICAgICAgICAgIF0sXG4gICAgICAgICAgICAxXG4gICAgICAgICAgKVxuICAgICAgICBdLFxuICAgICAgICAxXG4gICAgICApXG4gICAgXSxcbiAgICAxXG4gIClcbn1cbnZhciBzdGF0aWNSZW5kZXJGbnMgPSBbXVxucmVuZGVyLl93aXRoU3RyaXBwZWQgPSB0cnVlXG5cbmV4cG9ydCB7IHJlbmRlciwgc3RhdGljUmVuZGVyRm5zIH0iLCJ2YXIgcmVuZGVyID0gZnVuY3Rpb24oKSB7XG4gIHZhciBfdm0gPSB0aGlzXG4gIHZhciBfaCA9IF92bS4kY3JlYXRlRWxlbWVudFxuICB2YXIgX2MgPSBfdm0uX3NlbGYuX2MgfHwgX2hcbiAgcmV0dXJuIF9jKFxuICAgIFwiZGl2XCIsXG4gICAgW1xuICAgICAgX2MoXG4gICAgICAgIFwiYi1jb250YWluZXJcIixcbiAgICAgICAgeyBzdGF0aWNDbGFzczogXCJtYi00IGZsb2F0LWxlZnRcIiB9LFxuICAgICAgICBbXG4gICAgICAgICAgX2MoXG4gICAgICAgICAgICBcImItcm93XCIsXG4gICAgICAgICAgICB7IHN0YXRpY0NsYXNzOiBcIm5vLWd1dHRlcnNcIiwgYXR0cnM6IHsgXCJhbGlnbi12XCI6IFwiY2VudGVyXCIgfSB9LFxuICAgICAgICAgICAgW1xuICAgICAgICAgICAgICBfYyhcbiAgICAgICAgICAgICAgICBcImItY29sXCIsXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgc3RhdGljQ2xhc3M6IFwiY29sLTIgY29sLW1kLTRcIixcbiAgICAgICAgICAgICAgICAgIGF0dHJzOiB7IFwiYWxpZ24tdlwiOiBcImNlbnRlclwiIH1cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIFtcbiAgICAgICAgICAgICAgICAgIF9jKFwiYi1wYWdpbmF0aW9uXCIsIHtcbiAgICAgICAgICAgICAgICAgICAgc3RhdGljQ2xhc3M6IFwidGV4dC1jZW50ZXJcIixcbiAgICAgICAgICAgICAgICAgICAgYXR0cnM6IHtcbiAgICAgICAgICAgICAgICAgICAgICBcInRvdGFsLXJvd3NcIjogX3ZtLnJvd3MsXG4gICAgICAgICAgICAgICAgICAgICAgXCJwZXItcGFnZVwiOiBfdm0ucGVyUGFnZSxcbiAgICAgICAgICAgICAgICAgICAgICBcImFyaWEtY29udHJvbHNcIjogXCJteS10YWJsZVwiXG4gICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgICAgIG1vZGVsOiB7XG4gICAgICAgICAgICAgICAgICAgICAgdmFsdWU6IF92bS5jdXJyZW50UGFnZSxcbiAgICAgICAgICAgICAgICAgICAgICBjYWxsYmFjazogZnVuY3Rpb24oJCR2KSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBfdm0uY3VycmVudFBhZ2UgPSAkJHZcbiAgICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICAgIGV4cHJlc3Npb246IFwiY3VycmVudFBhZ2VcIlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgIF0sXG4gICAgICAgICAgICAgICAgMVxuICAgICAgICAgICAgICApXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgMVxuICAgICAgICAgICksXG4gICAgICAgICAgX3ZtLl92KFwiIFwiKSxcbiAgICAgICAgICBfYyhcbiAgICAgICAgICAgIFwiYi1yb3dcIixcbiAgICAgICAgICAgIHsgc3RhdGljQ2xhc3M6IFwibm8tZ3V0dGVyc1wiLCBhdHRyczogeyBcImFsaWduLXZcIjogXCJjZW50ZXJcIiB9IH0sXG4gICAgICAgICAgICBbXG4gICAgICAgICAgICAgIF9jKFwiYi1jb2xcIiwgeyBzdGF0aWNDbGFzczogXCJ0ZXh0LWxlZnQgY29sLTEgY29sLW1kLTFcIiB9LCBbXG4gICAgICAgICAgICAgICAgX3ZtLl92KFwiSXRlbXMgcGVyIHBhZ2U6XCIpXG4gICAgICAgICAgICAgIF0pLFxuICAgICAgICAgICAgICBfdm0uX3YoXCIgXCIpLFxuICAgICAgICAgICAgICBfYyhcbiAgICAgICAgICAgICAgICBcImItY29sXCIsXG4gICAgICAgICAgICAgICAgeyBzdGF0aWNDbGFzczogXCJjb2wtMiBjb2wtbWQtMVwiIH0sXG4gICAgICAgICAgICAgICAgW1xuICAgICAgICAgICAgICAgICAgX2MoXCJiLWZvcm0taW5wdXRcIiwge1xuICAgICAgICAgICAgICAgICAgICBhdHRyczoge1xuICAgICAgICAgICAgICAgICAgICAgIGlkOiBcInBlci1wYWdlXCIsXG4gICAgICAgICAgICAgICAgICAgICAgbWF4bGVuZ3RoOiBcIjNcIixcbiAgICAgICAgICAgICAgICAgICAgICB0eXBlOiBcIm51bWJlclwiLFxuICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyOiBcIkVudGVyIHlvdXIgbmFtZVwiXG4gICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgICAgIG1vZGVsOiB7XG4gICAgICAgICAgICAgICAgICAgICAgdmFsdWU6IF92bS5wZXJQYWdlLFxuICAgICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBmdW5jdGlvbigkJHYpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIF92bS5wZXJQYWdlID0gJCR2XG4gICAgICAgICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICAgICAgICBleHByZXNzaW9uOiBcInBlclBhZ2VcIlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgIF0sXG4gICAgICAgICAgICAgICAgMVxuICAgICAgICAgICAgICApXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgMVxuICAgICAgICAgICksXG4gICAgICAgICAgX3ZtLl92KFwiIFwiKSxcbiAgICAgICAgICBfYyhcbiAgICAgICAgICAgIFwiYi1yb3dcIixcbiAgICAgICAgICAgIHsgc3RhdGljQ2xhc3M6IFwibm8tZ3V0dGVyc1wiLCBhdHRyczogeyBcImFsaWduLXZcIjogXCJjZW50ZXJcIiB9IH0sXG4gICAgICAgICAgICBbXG4gICAgICAgICAgICAgIF9jKFwiYi1jb2xcIiwgeyBzdGF0aWNDbGFzczogXCJ0ZXh0LWxlZnQgY29sLTEgY29sLW1kLTFcIiB9LCBbXG4gICAgICAgICAgICAgICAgX3ZtLl92KFwiU2VhcmNoOlwiKVxuICAgICAgICAgICAgICBdKSxcbiAgICAgICAgICAgICAgX3ZtLl92KFwiIFwiKSxcbiAgICAgICAgICAgICAgX2MoXG4gICAgICAgICAgICAgICAgXCJiLWNvbFwiLFxuICAgICAgICAgICAgICAgIHsgc3RhdGljQ2xhc3M6IFwiY29sLTIgY29sLW1kLTJcIiB9LFxuICAgICAgICAgICAgICAgIFtcbiAgICAgICAgICAgICAgICAgIF9jKFwiYi1mb3JtLWlucHV0XCIsIHtcbiAgICAgICAgICAgICAgICAgICAgYXR0cnM6IHtcbiAgICAgICAgICAgICAgICAgICAgICBpZDogXCJzZWFyY2hcIixcbiAgICAgICAgICAgICAgICAgICAgICB0eXBlOiBcInRleHRcIixcbiAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcjogXCJTZWFyY2hcIlxuICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICBtb2RlbDoge1xuICAgICAgICAgICAgICAgICAgICAgIHZhbHVlOiBfdm0uc2VhcmNoLFxuICAgICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBmdW5jdGlvbigkJHYpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIF92bS5zZWFyY2ggPSAkJHZcbiAgICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICAgIGV4cHJlc3Npb246IFwic2VhcmNoXCJcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICBdLFxuICAgICAgICAgICAgICAgIDFcbiAgICAgICAgICAgICAgKVxuICAgICAgICAgICAgXSxcbiAgICAgICAgICAgIDFcbiAgICAgICAgICApXG4gICAgICAgIF0sXG4gICAgICAgIDFcbiAgICAgICksXG4gICAgICBfdm0uX3YoXCIgXCIpLFxuICAgICAgX2MoXCJiLXRhYmxlXCIsIHtcbiAgICAgICAgYXR0cnM6IHtcbiAgICAgICAgICBpZDogXCJteS10YWJsZVwiLFxuICAgICAgICAgIHN0cmlwZWQ6IFwiXCIsXG4gICAgICAgICAgaG92ZXI6IFwiXCIsXG4gICAgICAgICAgaXRlbXM6IF92bS5pdGVtcyxcbiAgICAgICAgICBcInBlci1wYWdlXCI6IF92bS5wZXJQYWdlLFxuICAgICAgICAgIFwiY3VycmVudC1wYWdlXCI6IF92bS5jdXJyZW50UGFnZVxuICAgICAgICB9XG4gICAgICB9KVxuICAgIF0sXG4gICAgMVxuICApXG59XG52YXIgc3RhdGljUmVuZGVyRm5zID0gW11cbnJlbmRlci5fd2l0aFN0cmlwcGVkID0gdHJ1ZVxuXG5leHBvcnQgeyByZW5kZXIsIHN0YXRpY1JlbmRlckZucyB9Il0sInNvdXJjZVJvb3QiOiIifQ==