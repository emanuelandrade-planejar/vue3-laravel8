<template>
  <section>
        <header class="bg-indigo-600">
            <ul class="flex py-2 px-4">
                <li 
                    class="text-white py-1 px-2 cursor-pointer" 
                    :class="{
                        'bg-white text-gray-800 rounded shadow': currentOpenTab.id === tab.id
                    }"
                    v-for="tab in tabsList" 
                    :key="tab.id" 
                    @click="currentOpenTab = tab"
                >
                    {{ tab.title }}
                </li>
            </ul>
        </header>

        <div class="min-h-56 py-2 px-4">
            <component v-if="currentOpenTab?.component" :is="currentOpenTab?.component" />
        </div>
  </section>
</template>

<script>
import { v4 as uuid } from 'uuid'
import { onMounted, ref } from '@vue/runtime-core';

export default {
    setup(_, {slots}) {
        const tabsList = ref([])
        
        const currentOpenTab = ref({})

        onMounted(() => {
            const childrens = slots?.default?.()

            if(!childrens) return

            for (const child of childrens) {
                const id = uuid()
                
                tabsList.value.push({
                    id,
                    childRef: child,
                    title: child?.props?.title,
                    component: child?.children?.default,
                })
            }

            currentOpenTab.value = tabsList.value[0]
        })

        return { tabsList, currentOpenTab }
    }
}
</script>

<style>

</style>