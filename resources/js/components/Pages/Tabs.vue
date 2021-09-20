<template>
    <Alert type="warning" title="Título do alerta" description="Mensagem de exemplo do alerta" />

    <Segment class="mt-10">
        <template #title>Abas</template>

        <section class="bg-white border border-gray-300 shadow-lg rounded overflow-hidden">               
            <Tabs>
                <Tab title="Listar">                                        
                    <Table 
                        title="Usuários"
                        :floating="false"
                        :data="$pageProps.tableData" 
                        :columns="$pageProps.tableColumns" 
                        :hasActionColumn="true" 
                        @row:edit="(event) => showMessage(event, 'edit')" 
                        @row:delete="(event) => showMessage(event, 'delete')" 
                    />
                </Tab>

                <Tab title="Criar">
                    <form class="px-4 py-2 mb-2 w-80">
                        <InputText type="text" name="item-1" id="item-1" label="Item 1" />

                        <InputText type="text" name="item-2" id="item-2" label="Item 2" />

                        <InputText type="text" name="item-3" id="item-3" label="Item 3" />

                        <Button 
                            @click.prevent="() => addNewToastMessage({ type: 'success', title: 'Novo item adicionado', description: 'Um novo item foi adicionado com sucesso na Tabela' })"
                        >
                            Salvar
                        </Button>
                    </form>
                </Tab>
                
                <Tab title="Editar">
                    <form class="px-4 py-2 mb-2 w-80">
                        <InputText type="text" name="item-1" id="item-1" label="Item 1" modelValue="Corpo 1" />

                        <InputText type="text" name="item-2" id="item-2" label="Item 2" modelValue="Corpo 2" />

                        <InputText type="text" name="item-3" id="item-3" label="Item 3" modelValue="Corpo 3" />

                        <Button
                            @click.prevent="() => addNewToastMessage({ type: 'success', title: 'Item alterado', description: 'Um item da Tabela foi alterado com sucesso' })"
                        >
                            Salvar
                        </Button>
                    </form>
                </Tab>
            </Tabs>
        </section>
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
</template>

<script>
import { useToastMessages } from "../../hooks/useToastMessages"

import Tab from '../Atoms/Tab.vue';
import Tabs from '../Atoms/Tabs.vue';
import Table from '../Atoms/Table.vue';
import Alert from '../Atoms/Alert.vue';
import Button from '../Atoms/Button.vue';
import Segment from '../Atoms/Segment.vue';
import Toastr from '../Atoms/Toastr/Toastr.vue';
import InputText from '../Atoms/form/InputText.vue';

export default {
    components: { Tab, Segment, Button, InputText, Toastr, Tabs, Alert, Table },
    setup() {
        const [toastMessages, addNewToastMessage, removeToastMessage] = useToastMessages()

        function showMessage(event, type) {
            if(type === 'edit')
                addNewToastMessage({ type: 'success', title: 'Item alterado', description: 'Um item da Tabela foi alterado com sucesso' })
            else if(type === 'delete')
                addNewToastMessage({ type: 'error', title: 'Permissão rejeitada', description: 'Você deve ter permissão para executar essa ação' })
        }

        return { showMessage, toastMessages, addNewToastMessage, removeToastMessage }
    }
};
</script>