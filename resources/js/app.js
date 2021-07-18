
require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import Home from './components/frontend/Home.vue'
import Products from './components/frontend/Products.vue'
import About from './components/frontend/About.vue'
import Support from './components/frontend/Support.vue'

const app = new Vue({
    el: '#app',
    components: { Home, Products, About, Support }
});
