<template>
    <section>
        <div class="flex flex-row items-center justify-between px-4 pb-4 mt-2 mb-6 border-b border-gray-400">
            <h4><slot name="title"/></h4>

            <div>
                <slot name="toolbar"/>
            </div>
        </div>

        <slot/>
    </section>
</template>

<script>
export default {

}
</script>

<style>

</style>