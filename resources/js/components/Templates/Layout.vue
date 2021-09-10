<template>
    <aside class="text-white"><sidebar/></aside>

    <header class="h-full px-24 py-3 bg-white border-b border-gray-300"><header-toolbar/></header>

    <main class="bg-gray-200 p-12 h-full overflow-auto"><slot/></main>
</template>

<script>
import Sidebar from '../Organisms/Sidebar.vue'
import HeaderToolbar from '../Organisms/HeaderToolbar.vue'

export default {
  components: { Sidebar, HeaderToolbar },

}
</script>

<style>
#app {
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: 280px 1fr;
    grid-template-rows: 4rem 1fr;
}

aside {
    grid-row: 1 / -1;
    grid-column: 1 / 2;
    background: #1E293B;
}

header {
    grid-row: 1 / 2;
    grid-column: 2 / 3;
}

main {
    grid-row: 2 / 3;
    grid-column: 2 / 3;
}
</style>