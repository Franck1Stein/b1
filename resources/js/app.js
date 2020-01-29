

require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
import {routes} from './routes';
Vue.use(VueRouter);
//Vue.use(Vuex)

   Vue.component('example-component', require('./components/ExampleComponent.vue').default);
   Vue.component('AdminHome', require('./components/admin/AdminHome.vue').default);
   Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);


  const router = new VueRouter({
  routes, // short for `routes: routes`
  mode: 'history'
});

const app = new Vue({
    el: '#app',
    router
});
