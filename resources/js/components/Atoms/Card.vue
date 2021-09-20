<template>
    <div class="flex flex-col justify-between bg-white shadow-lg rounded overflow-hidden">
        <header class="w-full py-3 px-4 text-white font-bold bg-indigo-600"><slot name="header" /></header>

        <div class="py-3 px-4 pr-10"><slot /></div>

        <footer v-if="!!$slots?.footer?.()" class="w-full py-3 px-4 bg-gray-100 border-t border-gray-300 border-opacity-70"><slot name="footer" /></footer>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>