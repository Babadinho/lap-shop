<template>
  <span>
    {{ laptop.model }} {{ laptop.price }}
  </span>
</template>
  
  
<script setup>
defineProps({
  laptop: Object,
})
</script>