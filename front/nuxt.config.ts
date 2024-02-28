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
      baseUrl: 'https://pwa-demo.ddev.site/headless',
       // pass cookies in the browser requests
       credentials: 'include',
       // proxy `set-cookie` header from TYPO3 API and Node.js to Browser
       proxyHeaders: ['set-cookie'],
       // proxy cookie header from the Browser to Node.js and TYPO3 API
       proxyReqHeaders: ['cookie']

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
