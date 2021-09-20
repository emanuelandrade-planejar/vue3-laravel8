<template>
    <Alert type="info" title="Título do aviso" description="Mensagem de exemplo do aviso" />

    <Segment class="mt-10">
        <template #title>Páginas</template>
        <section class="grid grid-cols-4 gap-4">
            <Card>
                <template #header>Abas</template>
                
                <span>Página com um exemplo de uso das Abas</span>

                <template #footer>
                    <Button class="w-32" as="a" href="/abas">Ver Página</Button>
                </template>
            </Card>
            <Card>
                <template #header>C.R.U.D.</template>
                
                <span>Página com um exemplo de C.R.U.D.</span>

                <template #footer>
                    <Button class="w-32" as="a" href="/crud">Ver Página</Button>
                </template>
            </Card>
            <Card>
                <template #header>Criar Conta</template>
                
                <span>Página com um exemplo de formulário para criação de conta</span>

                <template #footer>
                    <Button class="w-32" as="a" href="/criar-conta">Ver Página</Button>
                </template>
            </Card>
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