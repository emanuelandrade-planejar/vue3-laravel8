<template>
    <Layout>
        <component :is="$currentPage" />
    </Layout>
</template>

<script>
import { defineAsyncComponent } from '@vue/runtime-core';

import Layout from './components/Templates/Layout.vue';

const currentPageComponent = window.__currentPage ?? 'Home';

export default {
    components: { 
        Layout,
        [currentPageComponent]: defineAsyncComponent(() => import(`./components/Pages/${currentPageComponent}.vue`))
    },
}
</script>

<style>

</style>