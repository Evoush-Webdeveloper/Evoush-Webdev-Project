
require('./bootstrap');

import Vue from 'vue'
import VueAxios from 'vue-axios'
import axios from 'axios'
import VueSweetAlert2 from 'vue-sweetalert2'
import 'bootstrap/dist/css/bootstrap.css'
import 'jquery/dist/jquery.min'
import 'popper.js/dist/popper.min'
import 'bootstrap/dist/js/bootstrap.min'

// Webpage Module
import Home from './pages/home/index'
import Users from './dashboard/users/index'

Vue.config.productionTip = false
Vue.use(VueAxios, axios)
Vue.use(VueSweetAlert2)

new Vue({
	el:'#home',
	components: {Home},
	render: h => h (Home)
})


// Dashboard module & components
new Vue({
	el: '#users',
	components: {Users},
	render: h => h(Users)
})


const app = new Vue({
    el: '#app',
});
