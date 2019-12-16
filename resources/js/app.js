import 'es6-promise/auto'
import './bootstrap';
import Vue from 'vue';
import VueAuth from '@websanova/vue-auth';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import auth from './auth'
import router from './routes';

window.Vue = Vue;

Vue.router = router;
Vue.use(VueRouter);

Vue.use(VueAxios, axios);
axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api`;
Vue.use(VueAuth, auth);

const app = new Vue({
    el: '#app',
    router
});
