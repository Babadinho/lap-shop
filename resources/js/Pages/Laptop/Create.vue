<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label>Brand</label>
        <input v-model="form.brand" type="text" />
        <div v-if="form.errors.brand">
          {{ form.errors.brand }}
        </div>
      </div>
  
      <div>
        <label>Model</label>
        <input v-model="form.model" type="text" />
        <div v-if="form.errors.model">
          {{ form.errors.model }}
        </div>
      </div>
  
      <div>
        <label>Processor</label>
        <input v-model="form.processor" type="text" />
        <div v-if="form.errors.processor">
          {{ form.errors.processor }}
        </div>
      </div>
  
      <div>
        <label>Ram</label>
        <input v-model="form.ram" type="text" />
        <div v-if="form.errors.ram">
          {{ form.errors.ram }}
        </div>
      </div>
  
      <div>
        <label>Storage</label>
        <input v-model="form.storage" type="text" />
        <div v-if="form.errors.storage">
          {{ form.errors.storage }}
        </div>
      </div>
  
      <div>
        <label>Graphics Card</label>
        <input v-model="form.graphics_card" type="text" />
        <div v-if="form.errors.graphics_card">
          {{ form.errors.graphics_card }}
        </div>
      </div>
  
      <div>
        <label>Condition</label>
        <input v-model="form.condition" type="text" />
        <div v-if="form.errors.condition">
          {{ form.errors.condition }}
        </div>
      </div>
  
      <div>
        <label>Features</label>
        <input v-model="form.features" type="text" />
        <div v-if="form.errors.features">
          {{ form.errors.features }}
        </div>
      </div>

      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
        <div v-if="form.errors.price">
          {{ form.errors.price }}
        </div>
      </div>
  
      <div>
        <button type="submit">Create</button>
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