// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    '@t3headless/nuxt-typo3',
    '@vite-pwa/nuxt'
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
  pwa: {
    devOptions: {
      enabled: true
    },
    registerType: 'autoUpdate',
    strategies: 'injectManifest',
    manifest: {
      name: 'WebCamp Venlo',
      short_name: 'WebCamp Venlo',
      description: 'My TYPO3 Headless Service',
      theme_color: '#1C5188',
      icons: [
        {
          src: 'pwa-512x512.png',
          sizes: '192x192',
          type: 'image/png',
        },
        {
          src: 'pwa-512x512.png',
          sizes: '512x512',
          type: 'image/png',
        },
        {
          src: 'pwa-512x512.png',
          sizes: '512x512',
          type: 'image/png',
          purpose: 'any maskable',
        },
      ],
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
