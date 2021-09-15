<template>
    <div v-if="isActive">
        <slot />
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        isActive: Boolean
    }
}
</script>

<style>

</style>