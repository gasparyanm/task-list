import Vue from 'vue'
import Router from 'vue-router'
import Index from "@/views/profile/Index"
import Login from "@/views/auth/Login"

Vue.use(Router)

export default new Router({
  history: true,
  mode: 'history',
  routes: [
    {
      path: '/tasks',
      name: 'profile.index',
      component: Index,
      meta: {
        auth: true,
        forbiddenRedirect: '/login'
      }
    },
    {
      path: '/login',
      name: 'auth.login',
      component: Login,
      meta: {
        auth: false,
        forbiddenRedirect: '/tasks'
      }
    },
  ]
})
