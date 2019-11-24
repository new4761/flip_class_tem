
// const changeLoaderOptions = loaders => {
//   if (loaders) {
//     for (const loader of loaders) {
//       if (loader.loader === 'sass-loader') {
//         Object.assign(loader.options, {
//           includePaths: ['./assets']
//         })
//       }
//     }
//   }
//}
export default {
  mode: 'universal',
  /*
  ** Headers of the page
  */
  head: {
    title: process.env.npm_package_name || '',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: process.env.npm_package_description || '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },
  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },
  /*
  ** Global CSS
  */
  css: [
  ],
  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    '~/plugins/vuetify',
  ],
  /*
  ** Nuxt.js dev-modules
  */
  buildModules: [

  ],
  /*
  ** Nuxt.js modules
  */
  modules: [

    // Doc: https://bootstrap-vue.js.org
    'nuxt-material-design-icons',
    '@nuxtjs/axios',
    'bootstrap-vue/nuxt',
    '@nuxtjs/font-awesome',
  ],css: [
    '~/assets/css/main.css',

    '~/node_modules/bootstrap-vue/dist/bootstrap-vue.css',
    /* Import Simple Line Icons Set */
    '~/node_modules/simple-line-icons/css/simple-line-icons.css',

    /* Import Core SCSS */
    { src: '~/assets/scss/style.scss', lang: 'scss' },

  ],
  styleResources: {
    scss: './assets/scss/style.scss',
  },

  /*
  
  ** Build configuration
  */
 build: {
  rules: [
    {
      test: /\.s(c|a)ss$/,
      use: [
        'vue-style-loader',
        'css-loader',
        {
          loader: 'sass-loader',
          // Requires sass-loader@^7.0.0
          options: {
            implementation: require('sass'),
            fiber: require('fibers'),
            indentedSyntax: true // optional
          },
          // Requires sass-loader@^8.0.0
          options: {
            implementation: require('sass'),
            sassOptions: {
              fiber: require('fibers'),
              indentedSyntax: true // optional
            },
          },
        },
      ],
    },
  ],
  /*
  ** You can extend webpack config here
  */

},

}
