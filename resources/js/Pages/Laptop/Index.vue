<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <LaptopCard v-for="laptop in laptops" :key="laptop.id">
      <div>
        <Link :href="route('laptop.show', laptop.id)"> <LaptopData :laptop="laptop" /></Link>
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

defineProps({
  laptops: Array,
})
</script>