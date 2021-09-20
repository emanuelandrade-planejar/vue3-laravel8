<template>
    <component 
        :is="as" 
        class="flex items-center justify-center h-8 px-4 rounded bg-indigo-700 text-white transition-colors ease-in-out duration-150 hover:bg-indigo-800"
    >
        <span>
            <slot />
        </span>
    </component>
</template>

<script>
export default {
    props: {
        as: {
            type: String,
            default: 'button'
        }
    }
}
</script>

<style>

</style>