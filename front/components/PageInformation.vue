<template>
  <div>
    <p>I have all information about the page</p>
    <pre>{{ page }}</pre>
    <p>I have all information from initial data</p>
    <pre> {{ initial }} </pre>
  </div>
</template>
<script>
import { mapState } from 'vuex'
export default {
  computed: {
    ...mapState({
      page: ({typo3}) => typo3.page,
      initial: ({typo3}) => typo3.initial
    })
  }
}
</script>
