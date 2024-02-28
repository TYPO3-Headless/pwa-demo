<template>
    <div>
        <div class="columns-2">
            <T3Renderer
                v-if="content?.colPos0"
                :content="content.colPos0"
            />
            <T3Renderer
                v-if="content?.colPos1"
                :content="content.colPos1"
            />
        </div>
        <div>
            <T3Renderer
                v-if="content?.colPos2"
                :content="content.colPos2"
            />
        </div>
    </div>
</template>

<script setup lang="ts">
import type { T3BackendLayout } from '@t3headless/nuxt-typo3'
defineProps<T3BackendLayout>()
</script>
