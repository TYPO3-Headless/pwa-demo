<template>
  <section class="text-gray-600 body-font" v-if="isHeroLayout">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <T3CeHeader v-bind="$props" class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"/>
        <T3HtmlParser :content="bodytext" class="mb-8 leading-relaxed"/>

        <div class="flex justify-center">
          <button v-if="subheader" class="inline-flex text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-orange-500 rounded text-lg">{{ subheader }}</button>
          <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6" v-if="assets?.[0]?.publicUrl">
        <img class="object-cover object-center rounded" alt="hero" :src="assets[0].publicUrl">
      </div>
    </div>
  </section>
  <section v-else>
   <div> another UI</div>
 </section>
</template>
<script>
import baseCe from '~typo3/mixins/component/baseCe'
export default {
  mixins: [baseCe],
  props: {
    appearance: {
     type: Object,
     default: () => ({})
    },
    bodytext: {
      type: String,
      default: ''
    },
    assets: {
      type: Array,
      default: () => []
    }
  },
  computed: {
    isHeroLayout () {
      return this.appearance.layout === 'hero'
    }
  }
}
</script>
