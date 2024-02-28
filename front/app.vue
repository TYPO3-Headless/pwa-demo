<template>
    <VitePwaManifest />
    <NuxtLayout>
      <template v-if="initialData.user"> user logged state: {{ initialData.user }}</template>
      <NuxtPage />
    </NuxtLayout>
  </template>
  <script setup lang="ts">
  const { initialData } = useT3Api()
  </script>
