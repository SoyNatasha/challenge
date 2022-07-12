/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

import buscadorIndex from './components/ExampleComponent.vue';
import resultadosIndex from './components/Resultados.vue';

const routes = [
    { path: '/', name:'home', component: buscadorIndex },
    { path: '/resultados', name:'resultados', component: resultadosIndex }
  ]

  const router = new VueRouter({
    mode: 'history',
    routes: routes
  })


const app = new Vue({
    el: '#app',
    router
});


