<template>
    <div class="my-4">
        <label :for="id" class="block text-gray-700 font-bold">{{ label }}</label>

        <input
            v-model="proxyValue"
            :id="id" 
            :name="name" 
            :type="type" 
            class="rounded shadow border border-gray-400 h-8 focus:border-indigo-600" 
        >
    </div>
</template>

<script>
import { useInputModel } from "../../../useInputModel"

export default {
    props: {
        id: String,
        name: String,
        label: String,
        type: {
            type: String,
            default: "text"
        },
        modelValue: String
    },
    emits: ['update:modelValue'],
    setup(props) {
        const proxyValue = useInputModel(props)

        return {
            proxyValue
        }
    }
}
</script>

<style>

</style>