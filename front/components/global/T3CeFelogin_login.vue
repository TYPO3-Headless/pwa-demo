<template>
    <div>
        <h1>
            {{ message.header }}
        </h1>
        <p>
            {{ message.message }}
        </p>
        <form @submit.prevent="onSubmit" v-if="loginType === 'login'">
            <div v-for="(element, key) in formElements" :key="key" class="mb-2">
                <template v-if="element.type === 'submit'">
                    <button type="submit" class="bg-orange-500 text-white font-bold py-2 px-4">
                        Login
                    </button>
                </template>
                <input v-else :type="element.type" :name="element.name" :placeholder="element.placeholder"
                    :value="element.value"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 py-2 px-4 text-gray-700">
            </div>
        </form>
        <div v-else>
            <button @click="handleLogoutAction" class="bg-orange-500 text-white font-bold py-2 px-4">logout</button>
        </div>
    </div>
</template>

<script lang="ts" setup>
import type { T3CeFeLoginProps, T3CeFeloginResponse } from './T3CeFelogin_login.types'
const props = defineProps<T3CeFeLoginProps>()
// use $fetch of nuxt-typo3 library
// thanks to this, you have access to TYPO3 API Client
// so, you don't have to worry about base url, credentials settings, etc
const { initialData, $fetch, getInitialData } = useT3Api()
// get all form elements
const formElements = computed(() => props.data?.form?.elements)
// use form messages as a reactive value
const message = ref(props.data.message)
const __RequestToken = ref(formElements.value.find((field) => field.name === '__RequestToken')?.value || '')
const loginType = computed(() => formElements.value.find((field) => field.name === 'logintype')?.value || 'login')



async function onSubmit(event: Event) {
    const form = event.target as HTMLFormElement;
    // preapre form fields values as a URLSearchParams
    // URLSearchParams is required format for application/x-www-form-urlencoded
    const formData = new URLSearchParams({
        ...Object.fromEntries(new FormData(form)),
        ...{
            // pass token manually, because it can be refreshed by FeLogin response
            '__RequestToken': __RequestToken.value,
            // additional field for headless.elementBodyResponse
            // thanks to this we receive response of the FeLogin form only
            // we have to pass uid of Content Element
            'responseElementId': String(props.uid)
        }
    })


    // perform login action
    // use form.action url and prepared data
    await handleLoginAction(props.data.form.action, formData)
}

async function handleLoginAction(action: string, formData: URLSearchParams) {
    try {
        const r = await $fetch<T3CeFeloginResponse>(action, {
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'POST',
            body: formData

        })
        if (r.content.data.status !== 'success') {
            message.value = r.content.data.message
            // update request token
            __RequestToken.value = r.content.data.form.elements.find((element) => element.name === '__RequestToken')?.value || ''
            throw new Error('There is something wrong...')
        }

        if (r.content.data.redirectUrl) {
            await refreshInitialData()
            navigateTo(r.content.data.redirectUrl)
        }


    } catch (error) {
        console.log(error)
    }
}

async function handleLogoutAction() {
    try {
        const r = await $fetch<T3CeFeloginResponse>(props.data.form.action, {
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'POST',
            body: new URLSearchParams({
                logintype: 'logout'
            })
        })
        await refreshInitialData()
        await navigateTo('/')
    } catch (error) {
        console.log(error)
    }
}

async function refreshInitialData() {
    initialData.value = await getInitialData()
}


</script>
