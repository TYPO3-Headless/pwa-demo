<template>
  <div>
    <p>Overrided page component</p>
    <t3-dynamic
      :data="t3page.content"
      :type="t3page.appearance.backendLayout"
      layout
    />
    <PageInformation/>
  </div>
</template>
<script>
import defu from 'defu'
import pageDefault from '~typo3/pages/_.vue'
export default {
  extends: pageDefault,
  head () {
    const t3Seo = this.getMeta()
    const author = this.t3page?.meta?.author
    const meta = {
      meta: [
          // hid is used as unique identifier. Do not use `vmid` for it as it will not work
          {
            hid: 'author',
            name: 'autor',
            content: author
          }
        ]
    }

    return defu(meta, t3Seo)
  }
}
</script>
