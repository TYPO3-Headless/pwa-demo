// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    '@t3headless/nuxt-typo3'
  ],
  extends: '@t3headless/nuxt-typo3-ui',
  typo3: {
    i18n: {
      default: 'en',
      locales: ['en', 'pl', 'de']
    },
    api: {
      baseUrl: 'https://pwa-demo.ddev.site/headless'
    }
  },
  // this part is needed only for ddev development mode
  // you don't need this if you work on localhost
  vite: {
    server: {
      hmr: {
        protocol: 'wss',
        path: 'hmr/'
      }
    }
  }
})
