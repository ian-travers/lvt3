<template>
    <slot v-if="selectedTabState.selectedTabKey == tabKey"></slot>
</template>

<script setup>
import {inject} from "vue";

const props = defineProps({
    title: {},
    tabKey: {},
    active: {
        type: Boolean,
        default: false
    }
})

const selectedTabState = inject("selectedTabState")
</script>
