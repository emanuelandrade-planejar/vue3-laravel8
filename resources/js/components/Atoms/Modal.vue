<template>
  <section v-if="isVisible" class="absolute top-0 right-0 left-0 bottom-0 z-50 bg-gray-900 bg-opacity-30 flex items-center justify-center">
      <div class="bg-white rounded shadow-xl py-4 px-6 min-w-md">
          <header class="border-b border-gray-300 mb-3 pb-2">
              <h3 class="font-bold text-gray-800">{{ title }}</h3>
          </header>

          <div class="my-3">
              <slot />
          </div>

            <footer class="border-t border-gray-300 mt-3 pt-3 pb-3">
                <slot name="footer" />
            </footer>
      </div>
  </section>
</template>

<script>
import { useInputModel } from "../../useInputModel"

export default {
    props: { 
        title: String,
        modelValue: String
    },
    emits: ['update:modelValue'],
    setup(props) {
        const isVisible = useInputModel(props)

        return { isVisible }
    }
}
</script>

<style>
</style>