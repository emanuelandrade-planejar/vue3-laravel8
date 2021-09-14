<template>  
    <div class="my-4">
        <div class="flex items-center justify-start my-2">
            <input type="checkbox" :name="name" :id="id">
            <label :for="id" class="ml-2 text-gray-700">{{ label }}</label>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        id: String,
        name: String,
        label: String
    }
}
</script>

<style>

</style>