import type { T3Menu } from "@t3headless/nuxt-typo3"

declare module '@t3headless/nuxt-typo3' {
  interface T3Page {
      customField: string
  }

  interface T3InitialData {
    customMenu: T3Menu[]
  }
}

export {}
