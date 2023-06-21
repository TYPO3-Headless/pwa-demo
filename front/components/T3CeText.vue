<template>
  <div class="bg-black text-white">
    <T3CeHeader v-bind="$props" class="[&>*]:text-white"/>
    <p>my new textpic element</p>
    I have an access to all props
    <pre>{{ $props }}</pre>
    <p> and access to my new property </p>
    <pre> {{ newField }}</pre>
    <p><strong>Without parsing</strong></p>
    {{ bodytext }}
    <p><strong>with parsing</strong></p>
    <T3HtmlParser :content="bodytext"/>
  </div>
</template>
<script>
import T3CeText from '~typo3/components/T3CeText'
export default {
  extends: T3CeText,
  props: {
    newField: {
      type: String,
      default: 'Default of my new propert'
    }
  },
  mounted () {
    console.log(`alert from textpic ${this.id}`)
  }
}
</script>
