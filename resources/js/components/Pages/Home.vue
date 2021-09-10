<template>
    <layout>
        <segment>
            <template #title>Título</template>
            <section class="grid grid-cols-4 gap-4">
                <card>
                    <template #header>Título</template>
                    
                    Conteúdo
                </card>
                <card>
                    <template #header>Título</template>
                    
                    Conteúdo
                </card>
                <card>
                    <template #header>Título</template>
                    
                    Conteúdo
                </card>
                <card>
                    <template #header>Título</template>
                    
                    Conteúdo
                </card>
            </section>
        </segment>

        <segment class="mt-20">
            <template #title>Tabela</template>
            <template #toolbar>
                <div class="flex flex-row items-center justify-between">
                    <div class="mr-4">
                        <select class="rounded shadow border border-gray-400 h-8 py-0 focus:border-indigo-600">
                            <option value="hoje">Hoje</option>
                            <option value="1-mes">Último Mês</option>
                            <option value="12-meses">Últimos 12 meses</option>
                            <option value="completo">Período Completo</option>
                        </select>                
                    </div>
                    
                    <button class="rounded h-8 px-4 bg-indigo-700 text-white transition-colors ease-in-out duration-150 hover:bg-indigo-800">                        
                        <span class="">Adicionar Item</span>
                    </button>
                </div>
            </template>

            <section class="bg-white border border-gray-300 shadow-lg rounded overflow-hidden">
                <header class="py-3 px-4">
                    <h3 class="font-bold text-lg text-indigo-900">Usuários</h3>
                </header>
               <table class="w-full">
                   <thead class="bg-gray-100 text-gray-600 border-b border-t border-gray-300">
                       <tr>
                           <th class="text-left px-4 py-2">Cabeçalho 1</th>
                           <th class="text-left px-4 py-2">Cabeçalho 2</th>
                           <th class="text-left px-4 py-2">Cabeçalho 3</th>
                           <th class="text-left px-4 py-2">Ações</th>
                       </tr>
                   </thead>

                   <tbody>
                       <tr class="border-b border-t border-gray-300">
                           <td class="px-4 py-2 text-gray-700">Corpo 1</td>
                           <td class="px-4 py-2 text-gray-700">Corpo 2</td>
                           <td class="px-4 py-2 text-gray-700">Corpo 3</td>
                           <td class="px-4 py-2 text-gray-700">
                               <div class="flex flex-row items-center gap-2">
                                    <div class="flex items-center justify-center cursor-pointer rounded transition-colors duration-150 ease-in-out w-7 h-7 hover:bg-gray-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </div>
                                    <div class="flex items-center justify-center cursor-pointer rounded transition-colors duration-150 ease-in-out w-7 h-7 hover:bg-gray-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </div>
                               </div>
                           </td>
                       </tr>
                       
                       <tr class="border-b border-t border-gray-300">
                            <td class="px-4 py-2 text-gray-700">Corpo 1</td>
                            <td class="px-4 py-2 text-gray-700">Corpo 2</td>
                            <td class="px-4 py-2 text-gray-700">Corpo 3</td>
                            <td class="px-4 py-2 text-gray-700">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="flex items-center justify-center cursor-pointer rounded transition-colors duration-150 ease-in-out w-7 h-7 hover:bg-gray-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </div>
                                    <div class="flex items-center justify-center cursor-pointer rounded transition-colors duration-150 ease-in-out w-7 h-7 hover:bg-gray-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </div>
                                </div>
                            </td>
                       </tr>

                       <tr class="border-b border-t border-gray-300">
                            <td class="px-4 py-2 text-gray-700">Corpo 1</td>
                            <td class="px-4 py-2 text-gray-700">Corpo 2</td>
                            <td class="px-4 py-2 text-gray-700">Corpo 3</td>
                            <td class="px-4 py-2 text-gray-700">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="flex items-center justify-center cursor-pointer rounded transition-colors duration-150 ease-in-out w-7 h-7 hover:bg-gray-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </div>
                                    <div class="flex items-center justify-center cursor-pointer rounded transition-colors duration-150 ease-in-out w-7 h-7 hover:bg-gray-200">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </div>
                                </div>
                            </td>
                       </tr>
                   </tbody>
               </table>

            </section>
        </segment>

        <segment class="mt-20">
            <template #title>Formulário</template>

            <section class="bg-white border border-gray-300 shadow-lg rounded overflow-hidden">               
                <form class="px-4 py-2">
                    <div class="my-4">
                        <label for="name" class="block text-gray-700 font-bold">Nome</label>
                        <input type="text" name="name" id="name" class="rounded shadow border border-gray-400 h-8 focus:border-indigo-600">
                    </div>

                    <div class="my-4">
                        <label for="idade" class="block text-gray-700 font-bold">Idade</label>
                        <select name="idade" id="idade" class="rounded shadow border border-gray-400 h-8 py-0 focus:border-indigo-600">
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                        </select>
                    </div>
                    
                    <div class="my-4">
                        <label class="block text-gray-700 font-bold">Tema</label>

                        <div class="flex items-center justify-start my-2">
                            <input type="radio" name="tema" id="tema-escuro">
                            <label for="tema-escuro" class="ml-2 text-gray-700">Tema Escuro</label>
                        </div>

                        <div class="flex items-center justify-start my-2">
                            <input type="radio" name="tema" id="tema-claro">
                            <label for="tema-claro" class="ml-2 text-gray-700">Tema Claro</label>
                        </div>

                        <div class="flex items-center justify-start my-2">
                            <input type="radio" name="tema" id="sistema">
                            <label for="sistema" class="ml-2 text-gray-700">Seguir sistema</label>
                        </div>
                    </div>
                    
                    <div class="my-4">
                        <div class="flex items-center justify-start my-2">
                            <input type="checkbox" name="aceite-termos-condicoes" id="aceite-termos-condicoes">
                            <label for="aceite-termos-condicoes" class="ml-2 text-gray-700">Li e aceito os Termos e Condições</label>
                        </div>

                        <div class="flex items-center justify-start my-2">
                            <input type="checkbox" name="aceite-privacidade" id="aceite-privacidade">
                            <label for="aceite-privacidade" class="ml-2 text-gray-700">Li e aceito a Política de Privacidade</label>                        </div>
                    </div>
                </form>
            </section>
        </segment>
    </layout>
</template>

<script>
import Card from '../Atoms/Card.vue';
import List from '../Atoms/List.vue';
import Segment from '../Atoms/Segment.vue';
import Layout from '../Templates/Layout.vue';

export default {
  components: { List, Layout, Card, Segment },
};
</script>