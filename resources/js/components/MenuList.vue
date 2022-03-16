<template>
    <ul class="">
        <li v-for="item in items">
            <slot :item="item"></slot>
        </li>
    </ul>
</template>

<script setup>
const props = defineProps(['items'])
</script>
