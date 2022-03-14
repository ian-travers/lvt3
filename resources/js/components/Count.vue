<template>
    <span v-text="counting.count" ref="num"></span>
</template>

<script>
import InView from 'in-viewport'
import {computed, onMounted, reactive, ref} from "vue";

export default {
    props: ['to', 'velocity'],

    setup(props) {
        const num = ref(null)
        const counting = reactive({
            count: 0,
            interval: 0,
        })

        const increment = computed(() => Math.ceil(props.to / props.velocity))

        function tick() {
            if (counting.count + increment.value >= props.to) {
                counting.count = props.to

                return clearInterval(counting.interval)
            }

            counting.count += increment.value
        }

        onMounted(() => {
            InView(num.value, () => {
                counting.interval = setInterval(tick, props.velocity)
            })
        })

        return {num, counting, increment, tick}
    },
}
</script>
