<template>
    <section 
        class="bg-white border border-gray-300 rounded overflow-hidden"
        :class="{
            'shadow-lg': !!floating
        }"
    >
        <header class="py-3 px-4">
            <h3 class="font-bold text-lg text-indigo-900">{{ title }}</h3>
        </header>
        <table class="w-full">
            <thead class="bg-gray-100 text-gray-600 border-b border-t border-gray-300">
                <tr>
                    <th v-for="column in columns" :key="column.key" class="text-left px-4 py-2">{{ column.label }}</th>
                    <th v-if="!!hasActionColumn" class="text-center px-4 py-2">Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="(row, order) in data" :key="row" class="border-b border-t border-gray-300">
                    <template v-for="column in columns" :key="column.key">
                        <td v-if="!!row?.[column?.key]" class="px-4 py-2 text-gray-700">{{ row?.[column?.key] }}</td>               
                    </template>
                    <td v-if="!!hasActionColumn" class="px-4 py-2 text-gray-700 text-right">
                        <div class="flex flex-row items-center justify-center gap-2">
                                <div @click="() => onRowEdit(row, order)" class="flex items-center justify-center cursor-pointer rounded transition-colors duration-150 ease-in-out w-7 h-7 hover:bg-gray-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </div>
                                <div @click="() => onRowDelete(row, order)" class="flex items-center justify-center cursor-pointer rounded transition-colors duration-150 ease-in-out w-7 h-7 hover:bg-gray-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <footer>
            <Pagination />
        </footer>
    </section>
</template>

<script>
import Pagination from './Pagination.vue'

export default {
    components: { Pagination },
    props: {
        data: Array,
        title: String,
        columns: Array,
        floating: Boolean,
        hasActionColumn: Boolean
    },
    emits: ['row:edit', 'row:delete'],
    setup(_, { emit }) {
        function onRowEdit(rowData, order) {
            emit("row:edit", { data: rowData, rowOrder: order })
        }

        function onRowDelete(rowData, order) {
            emit("row:delete", { data: rowData, rowOrder: order })
        }

        return { onRowEdit, onRowDelete }
    }
}
</script>

<style>

</style>