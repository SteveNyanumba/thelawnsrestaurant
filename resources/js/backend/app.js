/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
require('admin-lte')
require('jquery')
require('@fortawesome/fontawesome-free')
window.Vue = require('vue');

import { AlertError, Form, HasError } from 'vform'

import VueRouter from 'vue-router'

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)




Vue.use(VueRouter)

const routes = [
    {
        path: '/admin/dashboard',
        component: require('./components/Dashboard.vue').default
    },
    {
        path: '/admin/menu',
        component: require('./components/Menu.vue').default
    },
    {
        path: '/admin/contacts',
        component: require('./components/Contacts.vue').default
    },
    {
        path: '/admin/bookings',
        component: require('./components/Bookings.vue').default
    },
    {
        path: '/admin/blog',
        component: require('./components/Blog.vue').default

    },
    {
        path: '/admin/events',
        component: require('./components/Events.vue').default
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