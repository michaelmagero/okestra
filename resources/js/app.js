
require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import Home from './components/frontend/Home.vue'
import Product from './components/frontend/Product.vue'
import About from './components/frontend/About.vue'
import Cars from './components/frontend/Cars.vue'
import Viewcar from './components/frontend/Viewcar.vue'

const app = new Vue({
    el: '#app',
    components: { Home, Product, About, Viewcar, Cars }
});
