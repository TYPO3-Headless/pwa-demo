import { defineConfig } from 'cypress';

export default defineConfig({
  e2e: {
    baseUrl: 'https://testify.team'
  },
  viewportWidth: 1200,
  retries: {
      runMode: 3
  }  
});
