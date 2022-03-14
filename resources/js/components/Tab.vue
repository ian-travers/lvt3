<template>
    <slot v-if="selectedTabState.selectedTabKey == tabKey"></slot>
</template>

<script>
import {inject} from "vue";

export default {
    props: {
        title: {},
        tabKey: {},
        active: {
            type: Boolean,
            default: false
        }
    },

    setup(props) {
        const selectedTabState = inject("selectedTabState");

        return {...props, selectedTabState};
    },
};
</script>
