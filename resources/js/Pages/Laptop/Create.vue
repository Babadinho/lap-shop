<template>
  <form @submit.prevent="create">
    <div class="grid md:grid-cols-6 gap-4">
      <div class="col-span-6 md:col-span-3">
        <label class="label">Brand</label>
        <input v-model="form.brand" type="text" class="input" />
        <div v-if="form.errors.brand" class="input-error">
          {{ form.errors.brand }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <label class="label">Model</label>
        <input v-model="form.model" type="text" class="input" />
        <div v-if="form.errors.model" class="input-error">
          {{ form.errors.model }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <label class="label">Processor</label>
        <input v-model="form.processor" type="text" class="input" />
        <div v-if="form.errors.processor" class="input-error">
          {{ form.errors.processor }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-3">
        <label class="label">Ram</label>
        <input v-model="form.ram" type="text" class="input" />
        <div v-if="form.errors.ram" class="input-error">
          {{ form.errors.ram }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="label">Storage</label>
        <input v-model="form.storage" type="text" class="input" />
        <div v-if="form.errors.storage" class="input-error">
          {{ form.errors.storage }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="label">Graphics Card</label>
        <input v-model="form.graphics_card" type="text" class="input" />
        <div v-if="form.errors.graphics_card" class="input-error">
          {{ form.errors.graphics_card }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-2">
        <label class="label">Condition</label>
        <input v-model="form.condition" type="text" class="input" />
        <div v-if="form.errors.condition" class="input-error">
          {{ form.errors.condition }}
        </div>
      </div>

      <div class="col-span-6 md:col-span-4">
        <label class="label">Features</label>
        <input v-model="form.features" type="text" class="input" />
        <div v-if="form.errors.features" class="input-error">
          {{ form.errors.features }}
        </div>
      </div>

      
      <div class="col-span-6 md:col-span-2">
        <label class="label">Price</label>
        <input v-model.number="form.price" type="text" class="input" />
        <div v-if="form.errors.price" class="input-error">
          {{ form.errors.price }}
        </div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="button-dark">Submit Listing</button>
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