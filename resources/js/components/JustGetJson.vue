<template>
    <ul>
        <li v-for="skill in allSkills.skills">{{ skill }}</li>
    </ul>
</template>

<script>
import {onMounted, reactive} from 'vue'
export default {
    setup() {
        const allSkills = reactive({
            skills: [],
        })

        onMounted(() => {
            console.log('Here is m')
            axios
                .get('/skills')
                .then(response => allSkills.skills = response.data)
        })

        return {
            allSkills
        }
    },
}
</script>

