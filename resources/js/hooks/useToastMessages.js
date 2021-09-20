import { v4 as uuid } from 'uuid'
import { ref } from "@vue/reactivity"

export const useToastMessages = () => {
    const messages = ref([])

    const addNewMessage = (newMessage) => {
        const id = uuid()

        messages.value = [...messages.value, { id, ...newMessage }]
    }

    const removeMessage = (message) => {
        messages.value = messages.value.filter(currentMessage => currentMessage.id !== message.id)
    }

    return [messages, addNewMessage, removeMessage]
}