<template>
    <div class="bg-primary text-white">
        newField value: {{ newField }}
        <T3HtmlParser v-if="bodytext" :content="bodytext"/>
    </div>
</template>

<script setup lang="ts">
import type { T3CeTextProps } from '@t3headless/nuxt-typo3';

interface MyT3CeTextProps extends T3CeTextProps {
    newField: string
}

defineProps<MyT3CeTextProps>()
</script>
