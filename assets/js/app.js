import Vue from 'vue'
import VueRouter from 'vue-router'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(VueRouter)

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import App from './components/App'
import Login from './components/Login'
import Table from './components/Table'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/table',
            name: 'table',
            component: Table
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        }
    ],
});

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});