<template>
    <NuxtLayout :name="frontendLayout ||  'default'">
        <T3BackendLayout
            v-if="pageData?.content"
            :name="backendLayout"
            :content="pageData.content" />
    </NuxtLayout>
</template>

<script setup lang="ts">
const { pageData, backendLayout, frontendLayout } = await useT3Page()
definePageMeta({
    layout: false
})
</script>
