export default ({ $typo3 }) => {
  $typo3.api.$http.interceptors.request.use((req) => {
    // eslint-disable-next-line no-console
    console.log(
      `context: ${process.server ? 'server' : 'client'}, path: ${req.url}`
    )
    return req
  })
}
