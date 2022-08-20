import { createRouter, createWebHistory } from 'vue-router'
import UserSignin from '../views/UserSignin';
import RootSignin from '../views/RootSignin';

const routes = [
  {
    path: '/',
    name: 'usersignin',
    component: UserSignin
  },
  {
    path: '/rootsignin',
    name: 'rootsignin',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/RootSignin.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
