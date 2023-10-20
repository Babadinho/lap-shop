<template>
  <form @submit.prevent="edit">
    <div class="grid md:grid-cols-6 gap-4">
      <div class="col-span-6 md:col-span-3">
        <label class="label">Brand</label>
        <input v-model="form.brand" type="text" class="input" />
        <div v-if="form.errors.brand" class="input-error text-red-500">
          {{ form.errors.brand }}
        </div>
      </div>
    
      <div class="col-span-6 md:col-span-3">
        <label class="label">Model</label>
        <input v-model="form.model" type="text" class="input" />
        <div v-if="form.errors.model" class="input-error text-red-500">
          {{ form.errors.model }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <label class="label">Processor</label>
        <input v-model="form.processor" type="text" class="input" />
        <div v-if="form.errors.processor" class="input-error text-red-500">
          {{ form.errors.processor }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <label class="label">Ram</label>
        <input v-model="form.ram" type="text" class="input" />
        <div v-if="form.errors.ram" class="input-error text-red-500">
          {{ form.errors.ram }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="label">Storage</label>
        <input v-model="form.storage" type="text" class="input" />
        <div v-if="form.errors.storage" class="input-error text-red-500">
          {{ form.errors.storage }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="label">Graphics Card</label>
        <input v-model="form.graphics_card" type="text" class="input" />
        <div v-if="form.errors.graphics_card" class="input-error text-red-500">
          {{ form.errors.graphics_card }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="label">Condition</label>
        <input v-model="form.condition" type="text" class="input" />
        <div v-if="form.errors.condition" class="input-error text-red-500">
          {{ form.errors.condition }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-4">
        <label class="label">Features</label>
        <input v-model="form.features" type="text" class="input" />
        <div v-if="form.errors.features" class="input-error text-red-500">
          {{ form.errors.features }}
        </div>
      </div>

      
      <div class="col-span-6 md:col-span-2">
        <label class="label">Price</label>
        <input v-model.number="form.price" type="text" class="input" />
        <div v-if="form.errors.price" class="input-error text-red-500">
          {{ form.errors.price }}
        </div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="button-dark">Edit Listing</button>
      </div>
    </div>
  </form>
</template>
  
<script setup>
// import { reactive } from 'vue'
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
  laptop: Object,
})
  
const form = useForm({
  brand: props.laptop.brand,
  model: props.laptop.brand,
  processor: props.laptop.processor,
  ram: props.laptop.ram,
  storage: props.laptop.storage,
  graphics_card: props.laptop.graphics_card,
  condition: props.laptop.condition,
  features: props.laptop.features,
  price: props.laptop.price,
})
  
// const edit = () => form.put(`/laptop/${props.laptop.id}`)
// eslint-disable-next-line no-undef
const edit = () => form.put(route('laptop.update', {laptop: props.laptop.id}))

  
  
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