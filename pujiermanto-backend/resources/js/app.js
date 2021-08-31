/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 import Vue from 'vue'
 import VueAxios from 'vue-axios'
 import axios from 'axios'
 import VueSweetAlert2 from 'vue-sweetalert2'
 import 'bootstrap/dist/css/bootstrap.css'
 import 'jquery/dist/jquery.min'
 import 'popper.js/dist/popper.min'
 import 'bootstrap/dist/js/bootstrap.min'

 // web page module
 import Home from './pages/home/index'
 import Post from './dashboard/post/index'

 Vue.config.productionTip = false
 Vue.use(VueAxios, axios)
 Vue.use(VueSweetAlert2)

new Vue({
	el: '#home',
	components: {Home},
	render: h => h(Home)
})

new Vue({
	el: '#post',
	components: {Post},
	render: h=>h(Post)
})


const app = new Vue({
    el: '#app',
});
