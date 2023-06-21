export default {
  components: true,
  /*
   ** Headers of the page
   */
  head: {
    title: process.env.npm_package_name || '',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      {
        hid: 'description',
        name: 'description',
        content: process.env.npm_package_description || ''
      }
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }]
  },
  /*
   ** Customize the progress-bar color
   */
  loading: { color: '#ff8700' },
  /*
   ** Global CSS
   */
  css: [],
  /*
   ** Plugins to load before mounting the App
   */
  plugins: ['~/plugins/interceptor'],
  /*
   ** Nuxt.js dev-modules
   */
  buildModules: [
    // Doc: https://github.com/nuxt-community/eslint-module
    '@nuxtjs/eslint-module',
    // Doc: https://github.com/macopedia/nuxt-typo3-theme
    'nuxt-typo3-tailwind',
    // Doc: https://github.com/TYPO3-Initiatives/nuxt-typo3
    'nuxt-typo3'
  ],
  /*
   ** Nuxt.js modules
   */
  modules: ['@nuxtjs/pwa'],
  /*
   ** TYPO3 module configuration
   ** https://github.com/TYPO3-Initiatives/nuxt-typo3
   */
  typo3: {
    baseURL: process.env.NUXT_HOST,
    forms: true,
    api: {
      baseURL: 'https://pwa-demo.ddev.site/api'
    },
    i18n: {
      locales: ['en', 'pl', 'de'],
      locale: 'en',
      fallbackLocale: 'en'
    }
  },
  typo3tailwind: {
    layouts: false
  },
  /*
   ** Build configuration
   */
  build: {
    /*
     ** You can extend webpack config here
     */
    extend(config, ctx) {}
  }
}
