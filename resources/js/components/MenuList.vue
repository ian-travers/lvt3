<template>
    <ul class="">
        <li v-for="item in items">
            <slot :item="item"></slot>
        </li>
    </ul>
</template>

<script>
export default {
    props: ['items']
}
</script>
