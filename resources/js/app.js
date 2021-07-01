
require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import Calculator from './components/CalculatorComponent.vue'
import Cars from './components/frontend/Cars.vue'

const app = new Vue({
    el: '#app',
    components: { Calculator, Cars }
});
