import { computed } from '@vue/reactivity'

export function useInputModel(props) {
    const proxyValue = computed({
        get: () => props?.modelValue ?? '',
        set: (value) => emit('update:modelValue', value)
    })

    return proxyValue
}