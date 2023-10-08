<template>
  <div>
    <LaptopData :laptop="laptop" />
  </div>
</template>


<script setup>
import LaptopData from '@/Components/LaptopData.vue'
defineProps({
  laptop: Object,
})
</script>