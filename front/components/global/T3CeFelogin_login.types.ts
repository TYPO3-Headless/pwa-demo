import type { T3CeBaseProps } from '@t3headless/nuxt-typo3';
interface T3CeFeloginData {
  form: {
    action: string
    elements: {
        label: string
        name: string
        placeholder: string
        type: string
        value: string
    }[]
    method: 'POST' | 'GET'
  }
  recovery: string
  status: string
  message: Record<string, string>
  redirectUrl?: string,
  statusCode?: number
}

export interface T3CeFeLoginProps extends T3CeBaseProps {
  data: T3CeFeloginData
}

export interface T3CeFeloginResponse extends T3CeBaseProps {
  content: {
    data: T3CeFeloginData
  }
}
