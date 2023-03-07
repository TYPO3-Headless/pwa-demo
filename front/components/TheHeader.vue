<template>
  <header class="container mx-auto my-3">
    <nav v-if="initial?.navigation?.length && initial.navigation[0].children">
      <ul class="flex justify-center">
        <li v-for="{link, title} in initial.navigation[0].children" :key="link" class="mx-1">
        <T3NavLink :to="link">
          {{ title }}
        </T3NavLink>
        </li>
      </ul>
    </nav>
  </header>
</template>
<script>
import { mapState } from 'vuex'
export default {
  computed: {
    ...mapState({
      initial: ({typo3}) => typo3.initial
    })
  }
}
</script>
