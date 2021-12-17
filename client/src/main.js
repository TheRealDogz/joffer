import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

import Home from '@/components/Home.vue'
import Addjob from '@/components/Addjob.vue'

Vue.use(VueRouter)

Vue.config.productionTip = false

const routes = [
  {
    path: '',
    redirect: '/home'
  },
  {
    path: '/home',
    name: 'home',
    component: Home
  },
  {
    path: '/addjob',
    name: 'addjob',
    component: Addjob
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
