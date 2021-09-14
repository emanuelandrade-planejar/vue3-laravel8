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
                    
                    <Button @click="modalForm = true">
                        Adicionar Item
                    </Button>
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
                    <InputText type="text" name="name" id="name" label="Nome" />

                    <Select 
                        id="idade" 
                        name="idade" 
                        label="Idade" 
                        :options="[
                            { value: 20, label: '20' },
                            { value: 21, label: '21' },
                            { value: 22, label: '22' },
                            { value: 23, label: '23' },
                            { value: 24, label: '24' },
                            { value: 25, label: '25' }
                        ]" 
                    />

                    <InputRadio 
                        name="tema" 
                        label="Tema" 
                        id="tema-escuro" 
                        :options="[
                            { id: 'tema-claro', label: 'Tema Claro' },  
                            { id: 'tema-escuro', label: 'Tema Escuro' },
                            { id: 'tema-sistema', label: 'Seguir sistema' },
                        ]"
                    />
                    
                    <Checkbox id="aceite-termos-condicoes" name="aceite-termos-condicoes" label="Li e aceito os Termos e Condições" />
                    
                    <Checkbox id="aceite-privacidade" name="aceite-privacidade" label="Li e aceito a Política de Privacidade" />
                </form>
            </section>
        </segment>

        <Toastr v-if="toastInfo" @click="toastInfo = false" type="info" title="Você sabia?" description="Aqui está uma coisa que você pode gostar!" />
        
        <Toastr v-if="toastForm" @click="toastForm = false" type="success" title="Concluído" description="Item foi criado com sucesso" />

        <Modal v-model="modalForm" title="Adicionar novo Item">
            <InputText type="text" name="item-1" id="item-1" label="Item 1" />            
            <InputText type="text" name="item-2" id="item-2" label="Item 2" />            
            <InputText type="text" name="item-3" id="item-3" label="Item 3" />            

            <template #footer>
                <Button
                    @click="() => {
                        toastForm = true;
                        modalForm = false;
                    }"
                >
                  Salvar
                </Button>
            </template>
        </Modal>
    </layout>
</template>

<script>
import { ref } from '@vue/reactivity';

import Card from '../Atoms/Card.vue';
import List from '../Atoms/List.vue';
import Modal from '../Atoms/Modal.vue';
import Button from '../Atoms/Button.vue';
import Segment from '../Atoms/Segment.vue';
import Layout from '../Templates/Layout.vue';
import Select from '../Atoms/form/Select.vue';
import Toastr from '../Atoms/Toastr/Toastr.vue';
import Checkbox from '../Atoms/form/Checkbox.vue';
import InputText from '../Atoms/form/InputText.vue';
import InputRadio from '../Atoms/form/InputRadio.vue';

export default {
    components: { List, Layout, Card, Segment, Button, Select, InputText, InputRadio, Checkbox, Modal, Toastr },
    setup() {
        const toastInfo = ref(true)
        const toastForm = ref(false)
        const modalForm = ref(false)

        return { toastInfo, toastForm, modalForm }
    }
};
</script>