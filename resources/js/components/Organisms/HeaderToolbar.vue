<template>
    <section class="h-full flex flex-row items-center justify-between">
        <div>

        </div>
        
        <div class="w-2/5">
            <InputText class="w-full">
                <template #icon>
                    <SearchIcon />
                </template>
            </InputText>
        </div>

        <div class="min-w-28">
            <nav class="w-full flex flex-row items-center justify-around">
                <Dropdown title="Notificações">
                    <template #anchor>
                        <div class="relative w-9 h-9 flex flex-row items-center justify-start rounded py-2 px-2 hover:bg-gray-300">
                            <BellIcon class="w-6 h-6" />
                            <span class="bg-red-500 w-3 h-3 mt-0.5 mr-0.5 flex items-center justify-center rounded-full absolute top-0 right-0 text-xs text-white"></span>
                        </div>
                    </template>

                    <template #content>
                        <ul>
                            <li class="mb-2">
                                <strong class="block leading-tight text-indigo-900">Nova mensagem</strong>
                                <span class="block leading-tight">Uma nova mensagem chegou!</span>
                            </li>
                            <li>
                                <strong class="block leading-tight text-indigo-900">Nova mensagem</strong>
                                <span class="block leading-tight">Uma nova mensagem chegou!</span>
                            </li>
                        </ul>
                    </template>
                </Dropdown>
            </nav>
        </div>
    </section>
</template>

<script>
import { BellIcon, SearchIcon } from "@heroicons/vue/outline";

import Dropdown from "../Atoms/Dropdown.vue";
import InputText from '../Atoms/form/InputText.vue';

export default {
    components: { BellIcon, Dropdown, InputText, SearchIcon },
}
</script>

<style>

</style>