import { createRouter, createWebHistory } from 'vue-router'
import UserSignin from '../views/UserSignin';
import RootSignin from '../views/RootSignin';
import join from '../views/join';

const routes = [
  {
    path: '/',
    name: 'usersignin',
    component: UserSignin
  },
  {
    path: '/rootsignin',
    name: 'rootsignin',
    component: RootSignin
  },
  {
    path: '/join',
    name: 'join',
    component: join
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
