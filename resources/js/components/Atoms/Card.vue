<template>
    <div class="bg-white shadow-lg rounded overflow-hidden">
        <header class="w-full py-3 px-4 text-white font-bold bg-indigo-600"><slot name="header" /></header>

        <div class="py-3 px-4"><slot /></div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>