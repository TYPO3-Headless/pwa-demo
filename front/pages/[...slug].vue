<template>

    custom field value: {{  pageData?.customField }}
    <T3BackendLayout
        v-if="pageData?.content"
        :name="backendLayout"
        :content="pageData.content"
    />
</template>

<script setup lang="ts">
const { pageData, backendLayout } = await useT3Page()
</script>
