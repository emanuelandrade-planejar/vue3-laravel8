<template>
    <section 
        class="flex items-center justify-start gap-6 border border-l-8 bg-white px-4 py-5 rounded"
        :class="{
            'border-red-600 text-red-600': type === 'error',
            'border-blue-600 text-blue-600': type === 'info',
            'border-green-600 text-green-600': type === 'success',
            'border-yellow-600 text-yellow-600': type === 'warning',
        }"
    >
        <div class="w-7">
            <BadgeCheckIcon v-if="type === 'success'" />
            <ExclamationIcon v-if="type === 'warning'" />
            <InformationCircleIcon v-if="type === 'info'" />
            <ExclamationCircleIcon v-if="type === 'error'" />
        </div>

        <div class="flex flex-col">
            <strong v-if="title" class="text-lg text-gray-800">{{ title }}</strong>
            <span class="text-gray-700">{{ description }}</span>
        </div>
    </section>
</template>

<script>
import { 
    BadgeCheckIcon,
    ExclamationIcon,
    ExclamationCircleIcon,
    InformationCircleIcon
} from "@heroicons/vue/outline"

export default {
    props: {
        title: String,
        description: String,
        type: {
            type: String,
            default: "info"
        },
    },
    components: {
        BadgeCheckIcon,
        ExclamationIcon,
        ExclamationCircleIcon,
        InformationCircleIcon 
    }
}
</script>

<style>

</style>