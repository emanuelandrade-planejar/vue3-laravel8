<template>
    <section class="flex flex-row items-center justify-between px-4 py-3">
        <div>
            <span class="text-gray-600">Mostrando 70-80 de 150</span>
        </div>

        <div class="flex flex-row items-center justify-between">
            <button class="px-1 py-2 rounded hover:bg-gray-300"><ChevronLeftIcon class="w-4 h-4 text-gray-800" /></button>
            

            <nav>
                <ul class="flex flex-row items-center justify-between gap-1 mx-1">
                    <template v-for="page in data.totalPages" :key="page">
                        <li  v-if="page <= 2" >
                            <button                                
                                class="px-2 py-1 rounded"
                                :class="[
                                    page === data.currentPage ? 'text-white bg-indigo-700 hover:bg-indigo-800' : 'text-gray-800 hover:bg-gray-300'
                                ]"
                            >
                                {{ page }}
                            </button>
                        </li>
                    </template>
                    
                    <li>
                        <span class="px-2 py-1">...</span>
                    </li>


                    <template v-for="page in data.totalPages" :key="page">
                        <li v-if="(page >= data.currentPage - 1 && page > 2) && (page <= data.currentPage + 1 && page < data.totalPages - 1)" >
                            <button
                                class="px-2 py-1 rounded"
                                :class="[
                                    page === data.currentPage ? 'text-white bg-indigo-700 hover:bg-indigo-800' : 'text-gray-800 hover:bg-gray-300'
                                ]"
                            >
                                {{ page }}
                            </button>
                        </li>
                    </template>

                    <li>
                        <span class="px-2 py-1">...</span>
                    </li>

                    <template v-for="page in data.totalPages" :key="page">  
                        <li v-if="page >= data.totalPages - 1" >                      
                            <button 
                                class="px-2 py-1 rounded" 
                                :class="[
                                    page === data.currentPage ? 'text-white bg-indigo-700 hover:bg-indigo-800' : 'text-gray-800 hover:bg-gray-300'
                                ]"
                            >
                                {{ page }}
                            </button>
                        </li>
                    </template>
                </ul>
            </nav>

            <button class="px-1 py-2 rounded hover:bg-gray-300"><ChevronRightIcon class="w-4 h-4 text-gray-800" /></button>
        </div>
    </section>
</template>

<script>
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/outline'

export default {
    components: { ChevronLeftIcon, ChevronRightIcon },
    setup() {
        const data = {
            currentPage: 6,
            totalPages: 10,
        }

        return { data }
    }
}
</script>

<style>

</style>