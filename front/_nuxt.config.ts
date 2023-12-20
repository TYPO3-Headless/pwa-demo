// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    '@t3headless/nuxt-typo3'
  ],
  extends: '@t3headless/nuxt-typo3-ui',
  typo3: {
    api: {
      baseUrl: 'https://api.pwa-demo.ddev.site'
    }
  },
  vite: {
    server: {
      hmr: {
        protocol: 'wss',
        path: 'hmr/'
      }
    }
  }
})
