import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'  // Ensure you are using css-loader version "^2.1.1" ,
Vue.use(Vuetify,{iconfont: 'mdi'})

export default ctx => {
  const vuetify = new Vuetify({

  })

  ctx.app.vuetify = vuetify
  ctx.$vuetify = vuetify.framework
}