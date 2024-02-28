<template>
    <NuxtLayout name="default">
      <div class="w-6/12 m-auto">
        <T3CeHeader
          layout="1"
          :header="String(error?.statusCode)"
          class="text-center mx-auto"
          />
        <T3BackendLayout
          v-if="pageDataFallback"
          :name="pageDataFallback.appearance.backendLayout"
          :content="pageDataFallback.content"
          />
      </div>
    </NuxtLayout>
  </template>

  <script setup lang="ts">
  import type { NuxtError } from '#app'
  const props = defineProps<{
    error: NuxtError
  }>()
  const { pageDataFallback } = await useT3Page({
    fetchOnInit: false
  })
  </script>
