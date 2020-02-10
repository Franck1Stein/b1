
require('./bootstrap');
window.Vue = require('vue');

  // vue router
  import VueRouter from 'vue-router';
  Vue.use(VueRouter)

  // Support vuex
  import Vuex from 'vuex';
  Vue.use(Vuex)

  import storeData from "./store/index";

  const store = new Vuex.Store(
      storeData
  )
  // support moment.js
  import {filter} from './filter';

  // vue router
  import {routes} from './routes';


   Vue.component('AdminHome', require('./components/admin/AdminHome.vue').default);
   Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);

  // v-form
  import { Form, HasError, AlertError, AlertErrors, AlertSuccess } from 'vform';
   Vue.component(HasError.name, HasError)
   Vue.component(AlertError.name, AlertError)
   Vue.component(AlertErrors.name, AlertErrors)
   Vue.component(AlertSuccess.name, AlertSuccess)
   window.Form = Form;

   // Sweet Alert 2
  import swal from 'sweetalert2';
   window.swal = swal;

    const toast = swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    toast.fire({
      icon: 'success',
      title: 'Added successfully'
    });
    window.toast = toast

  const router = new VueRouter({
    routes, // short for `routes: routes`
    mode: 'hash'
  });

  const app = new Vue({
      el: '#app',
      router,
      store
  });
