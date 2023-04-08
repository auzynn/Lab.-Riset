import Vue from 'vue'
import axios from 'axios'
import App from './App.vue'
import router from './router'

axios.defaults.withCredentials = true
axios.defaults.baseURL = 'http://localhost:8000/'
// Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
