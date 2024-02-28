<template>
    <header class="container mx-auto my-3">
        <nav v-if="initialData?.customMenu?.length && initialData.customMenu[0].children">
            <ul class="flex justify-center">
                <li
                    v-for="{ link, title } in initialData.customMenu[0].children"
                    :key="link"
                    class="mx-1"
                >
                    <T3Link :link="link">
                        {{ title }}
                    </T3Link>
                </li>
            </ul>
        </nav>
    </header>
    <Languages/>
</template>

<script setup lang="ts">
const { initialData } = useT3Api()
</script>
