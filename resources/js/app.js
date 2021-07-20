
require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './components/frontend/Home.vue'
import Products from './components/frontend/Products.vue'
import About from './components/frontend/About.vue'
import Support from './components/frontend/Support.vue'

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home-component',
            component: Home
        },
        {
            path: '/products',
            name: 'product-component',
            component: Products
        },
        {
            path: '/support',
            name: 'support-component',
            component: Support
        },
        {
            path: '/about',
            name: 'about-component',
            component: About
        },

    ]
})

const app = new Vue({
    el: '#app',
    router,
});
