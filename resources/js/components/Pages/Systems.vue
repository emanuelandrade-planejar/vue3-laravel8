<template>
    <Alert type="warning" title="Título do alerta" description="Mensagem de exemplo do alerta" />

    <Segment class="mt-10">
        <template #title>Título</template>
        <section class="grid grid-cols-4 gap-4">
            <Card 
                v-for="system in $globalData.systems" 
                :key="system.name" 
                class="cursor-pointer"
                @click="() => selectSystem(system.name)" 
            >
                <template #header>
                    <div class="grid grid-cols-8 items-center">
                       <span class="col-span-7">{{ system.name }}</span>

                        <div class="col-span-1 ml-1">
                            <BadgeCheckIcon
                                class="w-7"
                                :class="[
                                    selectedSystem === system.name ? 'opacity-1' : 'opacity-0'
                                ]"
                            />
                        </div>
                    </div>
                </template>
                
                <span>
                    {{ system.description }}
                </span>
            </Card>
        </section>
    </Segment>

    <Toastr 
        v-if="systemIsSelected" 
        type="success" 
        title="Concluído" 
        description="Sistema selecionado com sucesso" 
        @click="systemIsSelected = false" 
    />
</template>

<script>
import { ref } from '@vue/reactivity';
import { BadgeCheckIcon } from "@heroicons/vue/outline"

import Card from '../Atoms/Card.vue';
import Alert from '../Atoms/Alert.vue';
import Segment from '../Atoms/Segment.vue';
import Toastr from '../Atoms/Toastr/Toastr.vue';

export default {
    components: { Card, Segment, Toastr, Alert, BadgeCheckIcon },
    setup() {
        const selectedSystem = ref('')
        const systemIsSelected = ref(false)

        function selectSystem(systemName) {
            selectedSystem.value = systemName

            systemIsSelected.value = true

            setTimeout(() => {
                systemIsSelected.value = false
            }, 2000)
        }

        return { selectSystem, selectedSystem, systemIsSelected }
    }
};
</script>