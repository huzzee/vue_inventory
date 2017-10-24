
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);
import App from './App.vue'
import navBar from './components/headers/navbar.vue';
import Header from './components/headers/header.vue';
import homePage from './components/Pagecontent/home.vue';
import avi from './components/Pagecontent/avi.vue';

Vue.component('my-header',Header);
Vue.component('nav-bar',navBar);




const routes = [
    {
        name: 'homePage',
        path: '/',
        component: homePage
    },
    {
        name: 'avi',
        path: '/avi',
        component: avi
    }
];
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({ mode: 'history',routes: routes});
new Vue(Vue.util.extend({
    router
},App)).$mount('#app');
