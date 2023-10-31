<template>
  <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
    <Box class="md:col-span-7 flex items-center">
      <div class="w-full text-center font-medium text-gray-500">No images</div>
    </Box>
    <div class="md:col-span-5 flex flex-col gap-4">
      <Box>
        <template #header>
          Basic info
        </template>
        <LaptopData :laptop="laptop" class="text-lg font-bold" /> <LaptopSpec :laptop="laptop" class="text-gray-500" /> <Price :price="laptop.price" class="text-xl" />
      </Box>

      <Box>
        <template #header>
          Offer
        </template>
        <input v-model.number="offer" class="shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Make an offer" />
        <button type="submit" class="button-dark">Submit</button>
      </Box>
    </div>
  </div>
</template>


<script setup>
import Box from '@/Components/Box.vue'
import LaptopData from '@/Components/LaptopData.vue'
import LaptopSpec from '@/Components/LaptopSpec.vue'
import Price from '@/Components/Price.vue'

import {ref} from 'vue'

const offer = ref()

defineProps({
  laptop: Object,
})
</script>