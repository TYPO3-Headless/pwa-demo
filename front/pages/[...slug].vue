<template>
    <NuxtLayout :name="frontendLayout ||  'default'">
        <T3BackendLayout
            v-if="pageData?.content"
            :name="backendLayout"
            :content="pageData.content" />
    </NuxtLayout>
</template>

<script setup lang="ts">
import defu from 'defu'

const { pageData, backendLayout, frontendLayout } = await useT3Page()
const { headData } = useT3Meta()
definePageMeta({
    layout: false
})
const meta = {
    meta: [
        pageData.value?.meta.author ? {
            id: 'author',
            name: 'autor',
            content: pageData.value?.meta.author
        } : {}
    ]
}

useHead(defu(meta, headData.value))
</script>
