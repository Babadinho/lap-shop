<template>
  <div>
    <span class="font-bold">{{ laptop.ram }}</span> Ram <span class="text-gray-400">| </span>  
    <span class="font-bold">{{ laptop.processor }} </span> Processor <span
      class="text-gray-400"
    >| </span>
    <span class="font-bold">{{ laptop.storage }}</span> HDD
  </div>
</template>
  
<script setup>
defineProps({
  laptop: Object,
})
</script>