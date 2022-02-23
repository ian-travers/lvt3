<template>
    <p class="text-2xl">{{ title }}</p>
    <ul>
        <li v-for="skill in allSkills">{{ skill }}</li>
    </ul>
</template>

<script setup>
import {onMounted, ref} from 'vue'
    const props = defineProps(['title'])
    const allSkills = ref([])

    onMounted(() => {
        console.log('Here is m')
        axios
            .get('/skills')
            .then(response => allSkills.value = response.data)
    })
</script>

