<template>
    <h1>Menu</h1>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/page">Another Page</Link>
    <slot>Default</slot>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'
</script>