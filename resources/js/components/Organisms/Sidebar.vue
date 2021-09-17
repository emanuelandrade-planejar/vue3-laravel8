<template>
    <div class="mx-auto w-4/5 mt-8 mb-4">
        <h3 class="font-bold text-2xl">Siplan Cloud</h3>
  
        <div class="mx-auto w-full mb-8 mt-1.5 flex flex-row items-center">
            <div class="mr-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <strong>José Silva</strong>
        </div>
    </div>

    <hr class="w-10/12 mx-auto border-gray-100 border-opacity-40 mt-3 mb-5">

    <nav>
        <ul>
            <li class="text-lg mx-auto w-full px-5">
                <div>
                    <span
                        class="flex flex-row items-center justify-between h-full w-full px-2 py-1 rounded cursor-pointer hover:bg-gray-400" :class="{
                            'bg-blue-500 hover:bg-blue-600': systemListIsOpen
                        }"
                        @click="systemListIsOpen = !systemListIsOpen"
                    >
                        <span>Sistemas</span>
                        <span class="transition-transform ease-in-out" :class="{
                            'transform-gpu rotate-180': systemListIsOpen
                        }"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                    </span>

                    <ul class="ml-2 transform translate-y-0 transition-all ease-in-out" :class="{
                        'opacity-0 h-0 -translate-y-2': !systemListIsOpen
                    }">
                        <li v-for="system in $globalData.systems" :key="system.name" class="rounded px-2 py-1 hover:bg-gray-400">{{ system.name }}</li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</template>

<script>
import { ref } from '@vue/reactivity'

export default {
    setup() {
        const systemListIsOpen = ref(false)

        return { systemListIsOpen }
    }
}
</script>

<style>

</style>