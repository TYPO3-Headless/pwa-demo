<template>
  <div>
    <div class="columns-2">
      <T3Renderer :content="content.colPos0"/>
      <T3Renderer :content="content.colPos1"/>
    </div>
    <div>
      <T3Renderer :content="content.colPos2"/>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    content: {
      type: Object,
      required: true
    }
  }
}
</script>
