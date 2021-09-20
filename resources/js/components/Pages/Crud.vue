<template>
    <Alert type="success" title="Título do aviso de sucesso" description="Mensagem de exemplo do aviso de sucesso" />

    <Segment class="mt-10">
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

        <Table 
            title="Usuários"
            :hasActionColumn="true"
            :data="$pageProps.tableData" 
            :columns="$pageProps.tableColumns" 
            @row:edit="(event) => showMessage(event, 'edit')" 
            @row:delete="(event) => showMessage(event, 'delete')" 
        />
    </Segment>

    <Toastr 
        v-for="(message, index) in toastMessages"
        :key="message.description"
        :order="index"
        :type="message.type" 
        :title="message.title" 
        :description="message.description" 
        :style="[`top: calc(90px * ${index})`]"
        @click="() => removeToastMessage(message)" 
    />
    <Modal v-model="modalForm" title="Adicionar novo Item">
        <form class="w-56">
            <InputText type="text" name="item-1" id="item-1" label="Item 1" />
            <InputText type="text" name="item-2" id="item-2" label="Item 2" />
            <InputText type="text" name="item-3" id="item-3" label="Item 3" />
        </form>

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
</template>

<script>
import { ref } from '@vue/reactivity';

import { useToastMessages } from "../../hooks/useToastMessages"

import Card from '../Atoms/Card.vue';
import List from '../Atoms/List.vue';
import Tabs from '../Atoms/Tabs.vue';
import Table from '../Atoms/Table.vue';
import Alert from '../Atoms/Alert.vue';
import Modal from '../Atoms/Modal.vue';
import Button from '../Atoms/Button.vue';
import Segment from '../Atoms/Segment.vue';
import Select from '../Atoms/form/Select.vue';
import Toastr from '../Atoms/Toastr/Toastr.vue';
import Checkbox from '../Atoms/form/Checkbox.vue';
import InputText from '../Atoms/form/InputText.vue';
import InputRadio from '../Atoms/form/InputRadio.vue';

export default {
    components: { Table, List, Card, Segment, Button, Select, InputText, InputRadio, Checkbox, Modal, Toastr, Tabs, Alert },
    setup() {
        const toastForm = ref(false)
        const modalForm = ref(false)

        const [toastMessages, addNewToastMessage, removeToastMessage] = useToastMessages()

        function showMessage(event, type) {
            if(type === 'edit')
                addNewToastMessage({ type: 'success', title: 'Item alterado', description: 'Um item da Tabela foi alterado com sucesso' })
            else if(type === 'delete')
                addNewToastMessage({ type: 'error', title: 'Permissão rejeitada', description: 'Você deve ter permissão para executar essa ação' })
        }

        return { toastForm, modalForm, toastMessages, addNewToastMessage, removeToastMessage, showMessage }
    }
};
</script>