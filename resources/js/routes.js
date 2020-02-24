
// Category //
import AdminHome from './components/admin/AdminHome.vue'
import CategoryList from './components/admin/category/List.vue'
import AddCategory from './components/admin/category/New.vue'
import EditCategory from './components/admin/category/Edit.vue'

// Post //
import PostList from './components/admin/post/List.vue'
import AddPost from './components/admin/post/New.vue'
import EditPost from './components/admin/post/Edit.vue'

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
  },
  {
    path: '/edit-category/:categoryid',
    name: 'EditCategory',
    component: EditCategory
  },

  // Post //
  {
    path: '/post-list',
    name: 'PostList',
    component: PostList
  },
  {
    path: '/add-post',
    name: 'AddPost',
    component: AddPost
  },
  {
    path: '/edit-post/:postid',
    name: 'EditPost',
    component: EditPost
  }

];
