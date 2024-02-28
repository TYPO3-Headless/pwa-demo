<template>
    <ul>
        <li v-for="(item, key) in initialData.i18n" :key="key">
            {{ item.title}}
        </li>
    </ul>
</template>

<script setup lang="ts">
const { initialData } = await useT3Api()
</script>
