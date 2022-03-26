import Vue from 'vue'
import App from '@/App'
import router from '@/router'
import store from "@/store/store"

import axios from 'axios'
import VueAxios from 'vue-axios'

import auth from './auth'
import VueAuth from '@websanova/vue-auth'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

// Set Vue router
Vue.router = router

Vue.use(VueAxios, axios)
Vue.use(VueAuth, auth)

Vue.config.productionTip = false

window.bus = new Vue();

new Vue({
  el: '#app',
  router,
  store,
  axios,
  components: { App },
  template: '<App/>'
})
