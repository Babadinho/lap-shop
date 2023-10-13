<template>
  <span>
    {{ laptop.model }} 
  </span>
</template>
  
  
<script setup>
defineProps({
  laptop: Object,
})
</script>