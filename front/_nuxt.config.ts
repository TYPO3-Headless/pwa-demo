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
  vite: {
    // Vite settings for development mode on DDEV
    server: {
      allowedHosts: ['app_upstream', 'pwa-demo.ddev.site'],
    }
  },
})
