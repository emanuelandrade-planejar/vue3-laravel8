<template>
   <ul>
        <li class="bg-red-500 text-white text-center my-5 rounded shadow-sm" v-for="item in list" :key="item">{{ item }}</li>
    </ul>
</template>

<script>
export default {
    props: {
        list: Array
    }
}
</script>

<style>

</style>