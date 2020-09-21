// The Backbone
import Vue from 'vue'
window.Vue = Vue;
import VueRouter from 'vue-router'
import { AlertError, Form, HasError } from 'vform'
window.Form = Form;

// importing UI Components
require('./bootstrap');
require('admin-lte')
require('jquery')
require('@fortawesome/fontawesome-free')


Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//Universal Components
require('./modalForms')
require('./components')
require('./sections')


window.Fire = new Vue()

window.VueProgressBar = require('vue-progressbar')



Vue.use(VueProgressBar, {
    color:'rgb(31, 173, 62)',
    failedColor: 'Black',
    height: '2.5px'
})

Vue.use(VueRouter)

const routes = [
    {
        path: '/admin/dashboard',
        component: require('./pages/Dashboard.vue').default
    },
    {
        path: '/admin/menu',
        component: require('./pages/Menu.vue').default
    },
    {
        path: '/admin/contacts',
        component: require('./pages/Contacts.vue').default
    },
    {
        path: '/admin/bookings',
        component: require('./pages/Bookings.vue').default
    },
    {
        path: '/admin/blog',
        component: require('./pages/Blog.vue').default

    },
    {
        path: '/admin/events',
        component: require('./pages/Events.vue').default
    },
]
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = new VueRouter({
    routes:routes,
    mode: 'history'
})

const app = new Vue({
    el: '#app',
    router
});

const Toast = Swal.mixin({
    toast:true,
    position:'top-right',
    timer:3000,
    timerProgressBar:true,
})

window.Toast = Toast
