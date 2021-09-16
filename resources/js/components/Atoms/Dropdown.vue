<template>
    <div class="relative z-50">
        <div @click="isOpen = !isOpen" class="cursor-pointer">
            <slot name="anchor" />
        </div>

        <div v-if="isOpen" class="absolute right-0 -mr-2 mt-1 min-w-72 bg-white border border-gray-200 px-4 py-2 rounded shadow-lg">
            <strong class="block text-gray-800 border-b border-gray-300 mb-3">{{ title }}</strong>

            <slot name="content" />
        </div>
    </div>

</template>

<script>
import { ref } from '@vue/reactivity'
export default {
    props: {
        title: String
    },
    setup() {
        const isOpen = ref(false)

        return { isOpen }
    }
}
</script>

<style>

</style>