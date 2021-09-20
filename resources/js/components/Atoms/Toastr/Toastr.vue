<template>
    <section 
        class="absolute top-0 right-0 z-40 mr-5 mt-18 bg-white shadow-lg rounded px-4 py-3 flex flex-row items-center justify-between"
    >
        <InfoSign v-if="type === 'info'" />
        <AlertSign v-if="type === 'alert'" />
        <ErrorSign v-if="type === 'error'" />
        <SuccessSign v-if="type === 'success'" />

        <div class="px-3"></div>

        <header class="flex flex-col items-start justify-between w-64">
            <strong class="leading-tight text-gray-800">{{ title }}</strong>
            <span class="leading-tight text-gray-600">{{ description }}</span>
        </header>
    </section>
</template>

<script>
import InfoSign from './commons/InfoSign.vue'
import AlertSign from './commons/AlertSign.vue'
import ErrorSign from './commons/ErrorSign.vue'
import SuccessSign from './commons/SuccessSign.vue'

export default {
    props: {
        title: String,
        description: String,
        type: String /** info | alert | error | success */
    },
    components: { InfoSign, ErrorSign, SuccessSign, AlertSign }
}
</script>

<style>

</style>