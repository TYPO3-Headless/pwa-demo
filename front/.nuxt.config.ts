// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    '@t3headless/nuxt-typo3'
  ],
  typo3: {
    api: {
      baseUrl: process.env.API_BASE || 'https://api.t3pwa.com'
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
