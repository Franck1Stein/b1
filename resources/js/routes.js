
import AdminHome from './components/admin/AdminHome.vue'
import CategoryList from './components/admin/category/List.vue'
import AddCategory from './components/admin/category/New.vue'

export let routes = [
  {
    path: '/home',
    name: 'AdminHome',
    component: AdminHome
  },
  {
    path: '/category-list',
    name: 'CategoryList',
    component: CategoryList
  },
  {
    path: '/add-category',
    name: 'AddCategory',
    component: AddCategory
  }

];
