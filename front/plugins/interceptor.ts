export default defineNuxtPlugin(() => {
  const { setOption } = useT3Api()
  setOption('onRequest', (context) => {
    console.log(
      `context: ${process.server ? 'server' : 'client'}, path: ${JSON.stringify(context)} `
    )
  })
})
