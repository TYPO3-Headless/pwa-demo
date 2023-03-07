<script>
import T3CeTextpic from '~typo3/components/T3CeTextpic'
export default {
  extends: T3CeTextpic,
  props: {
    index: {
      type: Number,
      required: true
    }
  },
  head () {
      return this.index === 0
        ? {
            link: [
              {
                rel: 'preload',
                as: 'image',
                href: this.gallery?.rows?.['1']?.columns?.['1']?.publicUrl
              }
            ]
          }
        : {}
    },

}
</script>
