<template>
    <section class="flex flex-row items-center justify-between px-4 py-3">
        <div>
            <span class="text-gray-600">Mostrando 70-80 de 150</span>
        </div>

        <div class="flex flex-row items-center justify-between">
            <button class="px-1 py-2 rounded hover:bg-gray-300" @click="data.currentPage = 1"><ChevronDoubleLeftIcon class="w-4 h-4 text-gray-800" /></button>

            <button 
                class="px-1 py-2 rounded hover:bg-gray-300"
                @click="data.currentPage = data.currentPage - 1 < 1 ? 1 : data.currentPage - 1"
            >
                <ChevronLeftIcon class="w-4 h-4 text-gray-800" />
            </button>
            

            <nav>
                <ul class="flex flex-row items-center justify-between gap-1 mx-1">
                    <template v-for="page in preparePageIndication(data)" :key="page">
                        <li>
                            <button
                                class="w-8 py-1 rounded"
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

            <button 
                class="px-1 py-2 rounded hover:bg-gray-300" 
                @click="data.currentPage = data.currentPage + 1 > data.totalPages ? data.totalPages : data.currentPage + 1"
            >
                <ChevronRightIcon class="w-4 h-4 text-gray-800" />
            </button>

            <button class="px-1 py-2 rounded hover:bg-gray-300" @click="data.currentPage = data.totalPages"><ChevronDoubleRightIcon class="w-4 h-4 text-gray-800" /></button>
        </div>
    </section>
</template>

<script>
import { reactive } from '@vue/reactivity'
import { ChevronLeftIcon, ChevronRightIcon, ChevronDoubleLeftIcon, ChevronDoubleRightIcon } from '@heroicons/vue/outline'

export default {
    components: { ChevronLeftIcon, ChevronRightIcon, ChevronDoubleLeftIcon, ChevronDoubleRightIcon },
    setup() {
        const data = reactive({
            currentPage: 6,
            totalPages: 10,
        })

        function preparePageIndication(data) {
            const totalPages = data.totalPages
            const currentPage = data.currentPage

            let pages = Array(3)

            for (let page = 1; page <= totalPages; page++) {
                const isCurrentePage = page === currentPage

                const isLeftOfCurrentePage = (page === currentPage - 1)
                const isRightOfCurrentePage = (page === currentPage + 1)

                if(isLeftOfCurrentePage) {
                    pages[0] = page
                }

                if(isCurrentePage) {
                    pages[1] = page
                }

                if(isRightOfCurrentePage) {
                    pages[2] = page
                }
            }
            
            for (let page = 1; page <= totalPages; page++) {
                if(!pages[0] || !pages[2]) {
                    if(page === pages[2] + 1)
                        pages = [...pages, page]                        
                    
                    if(page === pages[0] - 1)
                        pages = [page, ...pages]                        
                }
            }

            return pages.filter(page => !!page)
        }

        return { data, preparePageIndication }
    }
}
</script>

<style>

</style>