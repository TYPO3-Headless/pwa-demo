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
import pageDefault from "~typo3/pages/_.vue";
export default {
  extends: pageDefault,
};
</script>
