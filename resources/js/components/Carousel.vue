<template>
    <div ref="carousel">
        <slot></slot>
    </div>
</template>

<script setup>
import Flickity from 'flickity'
import 'flickity/dist/flickity.min.css'
import {ref, onMounted} from "vue";

const carousel = ref(null)

const props = defineProps({
    wraparound: {type: Boolean, default: true},
    autoplay: {type: Boolean, default: false},
})

onMounted(() => {
    new Flickity(carousel.value, {
        wraparound: props.wraparound,
        autoPlay: props.autoplay,
        cellAlign: 'left',
        contain: true
    })
})
</script>
