<template>
    <div class="my-4">
        <label :for="id" class="block text-gray-700 font-bold">{{ label }}</label>

        <select :id="id" :name="name" class="rounded shadow border border-gray-400 h-8 py-0 focus:border-indigo-600">
            <option v-for="option in options" :key="option.value" :value="option.value">{{ option.label }}</option>
        </select>
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