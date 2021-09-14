<template>
    <div class="my-4">
        <label class="block text-gray-700 font-bold">{{ label }}</label>

        <div v-for="option in options" :key="option.id" class="flex items-center justify-start my-2">
            <input type="radio" :name="name" :id="option.id">
            <label :for="option.id" class="ml-2 text-gray-700">{{ option.label }}</label>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        id: String,
        name: String,
        label: String,
        options: Array
    }
}
</script>

<style>

</style>