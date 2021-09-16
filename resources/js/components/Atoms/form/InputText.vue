<template>
    <div class="my-4">
        <label :for="id" class="block text-gray-700 font-bold">{{ label }}</label>

        <div 
            class="w-full flex items-center justify-between p-1 rounded shadow border border-gray-400 h-8 focus-within:border-indigo-600"
            :class="{
                'flex-row': iconPosition === 'left',
                'flex-row-reverse': iconPosition === 'right'
            }"
            @click="focusOnINput"
        >
            <div v-if="!!$slots?.icon?.()" class="icon h-full flex items-center text-gray-800" @click="focusOnINput">
                <slot name="icon" />
            </div>

            <input
                ref="inputRef"
                v-model="proxyValue"
                :id="id" 
                :name="name"
                :type="type" 
                class="w-full border-none h-full focus:ring-0"            
            >
        </div>
    </div>
</template>

<script>
import { ref } from '@vue/reactivity'

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
        iconPosition: {
            type: String,
            default: "left"
        },
        modelValue: String,
    },
    emits: ['update:modelValue'],
    setup(props) {
        const proxyValue = useInputModel(props)

        const inputRef = ref()

        function focusOnINput() {
            inputRef.value?.focus()
        }

        return { proxyValue, inputRef, focusOnINput }
    }
}
</script>

<style>
.icon svg {
    height: 80%;
}
</style>