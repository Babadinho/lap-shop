<template>
  <form @submit.prevent="create">
    <div class="grid md:grid-cols-6 gap-4">
      <div class="col-span-6 md:col-span-3">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Brand</label>
        <input v-model="form.brand" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.brand" class="input-error text-red-500">
          {{ form.errors.brand }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Model</label>
        <input v-model="form.model" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.model" class="input-error text-red-500">
          {{ form.errors.model }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Processor</label>
        <input v-model="form.processor" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.processor" class="input-error text-red-500">
          {{ form.errors.processor }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Ram</label>
        <input v-model="form.ram" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.ram" class="input-error text-red-500">
          {{ form.errors.ram }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Storage</label>
        <input v-model="form.storage" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.storage" class="input-error text-red-500">
          {{ form.errors.storage }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Graphics Card</label>
        <input v-model="form.graphics_card" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.graphics_card" class="input-error text-red-500">
          {{ form.errors.graphics_card }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Condition</label>
        <input v-model="form.condition" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.condition" class="input-error text-red-500">
          {{ form.errors.condition }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-4">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Features</label>
        <input v-model="form.features" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.features" class="input-error text-red-500">
          {{ form.errors.features }}
        </div>
      </div>

      
      <div class="col-span-6 md:col-span-2">
        <label class="block mb-1 text-gray-500 dark:text-gray-300 font-medium">Price</label>
        <input v-model.number="form.price" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" />
        <div v-if="form.errors.price" class="input-error text-red-500">
          {{ form.errors.price }}
        </div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="bg-gray-800 hover:bg-gray-900 text-white px-4 py-2 font-medium">Submit Listing</button>
      </div>
    </div>
  </form>
</template>

<script setup>
// import { reactive } from 'vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  brand: null,
  model: null,
  processor: null,
  ram: null,
  storage: null,
  graphics_card: null,
  condition: null,
  features: null,
  price: null,
})

// eslint-disable-next-line no-undef
const create = () => form.post(route('laptop.store'))


// const form = reactive({
//   brand: null,
//   model: null,
//   processor: null,
//   ram: null,
//   storage: null,
//   graphics_card: null,
//   condition: null,
//   features: null,
//   price: null,
// })

// const create = () => router.post('/laptop', form)
</script>


<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>