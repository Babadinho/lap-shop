<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <LaptopCard v-for="laptop in laptops" :key="laptop.id">
      <div>
        <Link :href="route('laptop.show', laptop.id)">
          <LaptopData :laptop="laptop" class="text-lg font-bold" /> <LaptopSpec :laptop="laptop" class="text-gray-500" /> <Price :price="laptop.price" class="text-xl" />
        </Link>
      </div>
      <div>
        <Link :href="route('laptop.edit', {laptop: laptop.id})">Edit</Link>
      </div>
      <div>
        <Link :href="route('laptop.destroy', laptop.id)" method="DELETE">Delete</Link>
      </div>
    </LaptopCard>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import LaptopData from '@/Components/LaptopData.vue'
import LaptopCard from '@/Components/LaptopCard.vue'
import LaptopSpec from '@/Components/LaptopSpec.vue'
import Price from '@/Components/Price.vue'

defineProps({
  laptops: Object,
})
</script>