<template>
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('laptop.index')">Listings</Link>
        </div>
        <div class="text-xl text-gray-900 dark:text-gray-200 font-bold text-center">
          <Link :href="route('laptop.index')">LapShop</Link>
        </div>
        <div>
          <Link :href="route('laptop.create')" class="btn-primary">+ New Listing</Link>
        </div>
      </nav>
    </div>
  </header>

  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>

  <main class="container mx-auto p-4 w-full">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      {{ flashSuccess }}
    </div>
    <slot>Default</slot>
  </main>
</template>

<script setup>
import { computed } from 'vue'
import {Link, usePage} from '@inertiajs/vue3'

const page = usePage()
const flashSuccess = computed( () => page.props.flash.success)
</script>