<template>
    <ul>
        <li v-for="skill in allSkills">{{ skill }}</li>
    </ul>
</template>

<script>
import {onMounted, ref} from 'vue'
export default {
    setup() {
        const allSkills = ref([])

        onMounted(() => {
            console.log('Here is m')
            axios
                .get('/skills')
                .then(response => allSkills.value = response.data)
        })

        return {
            allSkills
        }
    },
}
</script>

