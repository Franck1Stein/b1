

require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter)
import Vuex from 'vuex';
Vue.use(Vuex)
import storeData from './store/index';

  const store = new Vuex.Store(
      storeData
  )
// vue router
import {routes} from './routes';


   Vue.component('AdminHome', require('./components/admin/AdminHome.vue').default);
   Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);


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
