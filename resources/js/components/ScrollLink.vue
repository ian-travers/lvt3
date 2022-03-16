<template>
    <a
        :href="href"
        @click.prevent="scroll"
    >
        <slot></slot>
    </a>
</template>

<script setup>
const props = defineProps(['href'])

function scroll() {
    document.querySelector(props.href).scrollIntoView({ behavior: "smooth" })
}
</script>
