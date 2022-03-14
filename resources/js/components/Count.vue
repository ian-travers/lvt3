<template>
    <span v-text="count" ref="num"></span>
</template>

<script>
import InView from 'in-viewport'
import {computed, onMounted, ref} from "vue";

export default {
    props: ['to', 'velocity'],

    setup(props) {
        const num = ref(null)
        const count = ref(0)
        const interval = ref(0)

        const increment = computed(() => Math.ceil(props.to / props.velocity))

        function tick() {
            if (count.value + increment.value >= props.to) {
                count.value = props.to

                return clearInterval(interval.value)
            }

            count.value += increment.value
        }

        onMounted(() => {
            InView(num.value, () => {
                interval.value = setInterval(tick, props.velocity)
            })
        })

        return {num, count, interval, increment, tick}
    },
}
</script>
