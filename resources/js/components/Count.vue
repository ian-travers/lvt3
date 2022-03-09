<template>
    <span v-text="count"></span>
</template>

<script>
import InView from 'in-viewport'

export default {
    props: ['to', 'velocity'],

    data() {
        return {
            count: 0,
            interval: null,
        }
    },

    computed: {
        increment() {
            return Math.ceil(this.to / this.velocity)
        }
    },

    mounted() {
        InView(this.$el, () => {
            this.interval = setInterval(this.tick, this.velocity)
        })
    },

    methods: {
        tick() {
            if (this.count + this.increment >= this.to) {
                this.count = this.to

                return clearInterval(this.interval)
            }

            this.count += this.increment
        }
    }
}
</script>
