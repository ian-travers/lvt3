<template>
    <ul class="flex border-b mb-4">
        <li
            class="px-4 py-2"
            :class="{'border border-b-0 rounded-t-lg bg-white -mb-px': tab.key === selectedTabState.selectedTabKey}"
            v-for="tab in tabs"
            :key="tab.key"
            @click="selectedTabState.selectedTabKey = tab.key"
        >
            <button :class="{'font-bold': tab.key === selectedTabState.selectedTabKey}">{{ tab.title }}</button>
        </li>
    </ul>
    <div class="tab-content">
        <slot></slot>
    </div>
</template>

<script>
import {ref, onMounted, provide, reactive} from "vue"

export default {
    setup(props, {slots}) {
        const tabs = ref([])
        const selectedTabState = reactive({selectedTabKey: null})

        provide("selectedTabState", selectedTabState)

        onMounted(function () {
            tabs.value = slots.default().map((i) => {
                if (i.props && i.props["tab-key"]) {
                    return {
                        key: i.props["tab-key"],
                        title: i.props.title,
                        active: i.props.active === ''
                    }
                }
            })

            selectedTabState.selectedTabKey = tabs.value[0] && tabs.value[0].key
        })

        return {tabs, selectedTabState}
    },
};
</script>
