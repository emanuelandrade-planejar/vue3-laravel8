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