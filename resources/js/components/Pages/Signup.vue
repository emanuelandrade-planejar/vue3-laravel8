<template>
    <Alert type="error" title="Título do aviso de erro" description="Mensagem de exemplo do aviso de erro" />

    <Segment class="mt-10">
        <template #title>Crie uma conta</template>

        <section class="bg-white border border-gray-300 shadow-lg rounded overflow-hidden">               
            <form class="px-4 py-2 w-96" @submit.prevent="">
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

                <hr>

                <Button class="mt-4" type="submit">Criar Conta</Button>
            </form>
        </section>
    </Segment>
</template>

<script>
import { ref } from '@vue/reactivity';

import Card from '../Atoms/Card.vue';
import Alert from '../Atoms/Alert.vue';
import Button from '../Atoms/Button.vue';
import Segment from '../Atoms/Segment.vue';
import Select from '../Atoms/form/Select.vue';
import Checkbox from '../Atoms/form/Checkbox.vue';
import InputText from '../Atoms/form/InputText.vue';
import InputRadio from '../Atoms/form/InputRadio.vue';

export default {
    components: { Card, Segment, Button, Select, InputText, InputRadio, Checkbox, Alert },
    setup() {
        const toastInfo = ref(true)
        const toastForm = ref(false)
        const modalForm = ref(false)

        return { toastInfo, toastForm, modalForm }
    }
};
</script>