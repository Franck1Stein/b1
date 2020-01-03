
import AdminHome from './components/admin/AdminHome.vue'
import Ex from './components/ExampleComponent.vue'


export let routes = [
  {
    path: '/home',
    name: 'AdminHome',
    component: AdminHome
  },
  {
    path: '/post',
    name: 'Ex',
    component: Ex
  }
]
